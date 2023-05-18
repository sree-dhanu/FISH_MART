<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\addabout;
use App\Models\addgallery;
use App\Models\addreceipe;
use App\Models\category;
use App\Models\addproducts;
use App\Models\admin;
use App\Models\contact;
use App\Models\registration;
use App\Models\cartadd;
// use App\Models\cartadd as ModelsCartadd;
use Illuminate\Http\Request;


class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index');
    }
public function addabout()
{
    return view('admin.addabout');
}
public function viewabout()
{
    $data['result']=addabout::get();
    return view('admin.viewabout',$data);
}
public function addgallery()
{
    return view('admin.addgallery');
}   
public function viewgallery()
{
    $gallerydata['galleryresult']=addgallery::get();
    return view('admin.viewgallery',$gallerydata);
} 
public function addproducts()
{
    $data['cat']=category::get();
    return view('admin.addproducts',$data);
    
}
public function viewproducts()
{
    $data['viewproduct']=addproducts::get();
    return view('admin.viewproducts',$data);
}
public function addreceipe()
{
    return view('admin.addreceipe');
}
public function viewreceipe()
{
    $data['receiperesult']=addreceipe::get();
    return view('admin.viewreceipe',$data);
}
public function addcategory()
{
    return view('admin.addcategory');
}
public function viewcategory()
{
    $data['catresult']=category::get();
    return view('admin.viewcategory',$data);
}
public function vieworders()
{
    $data['vieworders']=cartadd::join('addproducts','cartadds.userid','=','addproducts.id')
    ->join('registrations','cartadds.userid','=','registrations.id')
    ->select('addproducts.productname',
    'addproducts.price','cartadds.id',
    'cartadds.status','cartadds.quantity','cartadds.totalamount',
    'registrations.regname','registrations.regemail',
    'registrations.regphone')->get();
    return view('admin.vieworders',$data);
}
public function viewpayments()
{
    return view('admin.viewpayments');
}
public function viewusers()
{
    $data['viewuser']=registration::get();
    return view('admin.viewusers',$data);
}

public function addaboutaction(Request $req)
{
    $title=$req->input('title1');
    $description=$req->input('description1');

    $data=[
        'title'=>$title,
        'description'=>$description
    ];
    addabout::insert($data);
    return redirect('/addabout');
}
public function addgalleryaction(Request $request)
{
    $imagename=$request->input('galleryname');
    $description=$request->input('description2');
    $image=$request->file('imagename');

    $realimage=$image->getClientOriginalName();
    $image->move(public_path().'/galleryimg/',$realimage);

    $data=[
        'imgname'=>$imagename,
        'image'=>$realimage,
        'descr'=>$description
    ];

addgallery::insert($data);
return redirect('/addgallery');
}
public function addreceipeaction(Request $rq)
{
    $receipename=$rq->input('receipename');
    $incrediants=$rq->input('incrediants');
    $method=$rq->input('method');
    $reimage=$rq->file('receipeimg');

    $receipes=$reimage->getClientOriginalName();
    $reimage->move(public_path().'/receipieimage/',$receipes);

    $data=[
        'receipename'=>$receipename,
        'incrediants'=>$incrediants,
        'method'=>$method,
        'receimage'=>$receipes
    ];
 addreceipe::insert($data);
 return redirect('/addreceipe');
}
public function addcategoryaction(Request $req)
{
    $catname=$req->input('catnam');
    $catimg=$req->file('catimag');

    $categoryimage=$catimg->getClientOriginalName();
    $catimg->move(public_path().'/cateimage/',$categoryimage);

    $data=[
        'catname'=>$catname,
        'catimage'=>$categoryimage
    ];

  category::insert($data);
  return redirect('/addcategory');
}
 public function viewaboutedit($id)
 {
//  print_r($id);
//  exit();
  $data['aboutedit']=addabout::where('id',$id)->get();
  return view('admin.viewaboutedit',$data);

 }

 public function abouteditaction(Request $req,$id)
 {
    //$id=session('sessid');

    $title=$req->input('title1');
    $descr=$req->input('description1');


    $data=[
        'title'=>$title,
        'description'=>$descr
    ];
    addabout::where('id',$id)->update($data);
    return redirect('/viewabout');
 }
 public function viewaboutdel($id)
 {
    addabout::where('id',$id)->delete();
    return redirect('/viewabout');
 }
 public function viewgalleryedit($id)
 {
    $data['editgallery']=addgallery::where('id',$id)->get();
    return view('admin.viewgalleryedit',$data);
 }
 public function editgalleryaction(Request $rq,$id)
 {
    $imgname=$rq->input('galleryname');
    $image=$rq->file('images');
    $desc=$rq->input('description2');

    if($image =="")
    {
        $data=[
            'imgname'=>$imgname,
            'descr'=>$desc
        ];
        // addgallery::where('id',$id)->update($data);
        // return redirect('/viewgallery');
    }
    else
    {
    $realimg=$image->getClientOriginalName();
    $image->move(public_path().'/galleryimg/',$realimg);

    $data=[
        'imgname'=> $imgname,
        'image'=>$realimg,
        'descr'=>$desc
    ];
     }
    addgallery::where('id',$id)->update($data);
    return redirect('/viewgallery');
 }
 public function gallerydel($id)
 {
    addgallery::where('id',$id)->delete();
    return redirect('/viewgallery');
 }
 public function receipeedit($id)
 {
    $data['receiperesult']=addreceipe::where('id',$id)->get();
    return view('/admin.receipeedit',$data);
 }
 public function editreceipeaction(Request $req,$id)
 {
    $recename=$req->input('receipename');
    $incrediants=$req->input('incrediants');
    $method=$req->input('method');
    $receimage=$req->file('receipeimg');

   
    if($receimage =="")
    {
        $data=[
            'receipename'=>$recename,
            'incrediants'=>$incrediants,
            'method'=>$method
        ];
          
    }
    else{

        $imagereceipe=$receimage->getClientOriginalName();
        $receimage->move(public_path().'/receipieimage/',$imagereceipe);
    
        $data=[
            'receipename'=>$recename,
            'incrediants'=>$incrediants,
            'method'=>$method,
            'receimage'=>$imagereceipe
        ];
    }
   
    addreceipe::where('id',$id)->update($data);
    return redirect('/viewreceipe');
 }
 public function receipedel($id)
 {
    addreceipe::where('id',$id)->delete();
    return redirect('/viewreceipe');
 }
public function viewcatedit($id)
{
    
    $data['cateedit']=category::where('id',$id)->get();
   return view('/admin.viewcatedit',$data);

}
 public function editcataction(Request $request,$id)
 {

    $cat_name=$request->input('catnam');
    $cat_image=$request->file('catimag');

    if($cat_image =="")
    {
        $data=['catname'=> $cat_name];
    }
    else{
        $categoryimage=$cat_image->getClientOriginalName();
        $cat_image->move(public_path().'/cateimage/',$categoryimage);

        $data=[
            'catname'=>$cat_name,
            'catimage'=>$categoryimage
        ];
        
     }
    category::where('id',$id)->update($data);
    return redirect('/viewcategory');
 }


 public function viewcatdelete($id)
 {
    category::where('id',$id)->delete();
    return redirect('/viewcategory');
 }

 public function viewcontact()
 {
    $data['viewcontact']=contact::get();
    return view('admin.viewcontact',$data);
 }
 public function addproductaction(Request $req)
 {
        $proname=$req->input('productname');
        $procat=$req->input('category');
        $price=$req->input('pricekg');
        $proimg=$req->file('productimage');
        $totstock=$req->input('totalstock');
        $availstock=$req->input('availablestock');

        $productorigin=$proimg->getClientOriginalName();
        $proimg->move(public_path().'/productimage1/',$productorigin);
       


        $data=[
            'productname'=>$proname,
            'procategory'=>$procat,
            'price'=>$price,
            'productimage'=>$productorigin,
            'totstock'=>$totstock,
            'availstock'=>$availstock
        ];
        // print_r($data);
        // exit();
        addproducts::insert($data);
        return redirect('/addproducts');

 }
 public function productedit($id)
 {
    $result['cat']=category::get();
    $data['editproduct']=addproducts::where('id',$id)->get();
    return view('admin.productedit',$data,$result);
 }

 public function editproductaction(Request $req,$id)
 {
    $proname=$req->input('productname');
    $category=$req->input('category');
    $pricekg=$req->input('pricekg');
    $productimage=$req->file('productimage');
    $totalstock=$req->input('totalstock');
    $availablestock=$req->input('availablestock');
    
   
    if($productimage =="")
    {
        $data=[
            'productname'=> $proname,
            'procategory'=>$category,
            'price'=>$pricekg,
            'totstock'=>$totalstock,
            'availstock'=>$availablestock
        ];
          
    }
    else{

        $productreal=$productimage->getClientOriginalName();
        $productimage->move(public_path().'/productimage1/',$productreal);
    
        $data=[
            'productname'=> $proname,
            'procategory'=>$category,
            'price'=>$pricekg,
            'productimage'=>$productreal,
            'totstock'=>$totalstock,
            'availstock'=>$availablestock
        ];
    }
   
    addproducts::where('id',$id)->update($data);
    return redirect('/viewproducts');
 }
 public function productdel($id)
 {
    addproducts::where('id',$id)->delete();
    return redirect('/viewproducts');
 }
 public function adminlogin()
 {
    return view('admin.adminlogin');
 }
 public function adminloginaction(Request $req)
 {
    $user=$req->input('username');
    $pass=$req->input('password');
     
    $row=admin::where('username',$user)->where('password',$pass)->first();

    if(isset($row))
    {
        return redirect('/adminindex'); 
    }
    else{
        return redirect('/adminlogin')->with('error',"Invalid username and password");
    }
 }

}

