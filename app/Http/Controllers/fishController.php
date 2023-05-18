<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\addreceipe;
use App\Models\registration;
use App\Models\addabout;
use App\Models\addproducts;
use App\Models\cartadd;
use App\Models\category;
use App\Models\proceed;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class fishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.index');
    }

    public function uservieworders()
    {
        $id = session('sessid');
        $data['uservieworders'] = cartadd::join('addproducts', 'cartadds.productid', '=', 'addproducts.id')
            ->where('cartadds.userid', $id)
            ->where('cartadds.status', 'order')
            ->select(
                'addproducts.productname',
                'addproducts.price',
                'cartadds.id',
                'cartadds.quantity',
                'cartadds.totalamount'
            )
            ->get();
        return view('user.uservieworders', $data);
    }
    public function viewcart()
    {
        $id = session('sessid');
        $data['cart'] = addproducts::join('cartadds', 'cartadds.productid', '=', 'addproducts.id')
            ->where("cartadds.userid", $id)
            ->where("cartadds.status", 'cart')
            ->select(
                'cartadds.totalamount',
                'cartadds.quantity',
                'addproducts.productname',
                'addproducts.productimage',
                'addproducts.price',
                'addproducts.procategory',
                "cartadds.id"
            )
            ->get();
        $data['sum'] = cartadd::select(cartadd::raw("SUM(totalamount) as cartsum"))->where('userid', $id)->where('status', "cart")->get();

        // print_r($grandtotal);
        return view('user.viewcart', $data);
    }
    public function viewreceipies()
    {
        $data['receipe'] = addreceipe::get();
        //   print_r($data);
        //   exit();
        return view('user.userviewreceipies', $data);
    }
    public function myprofile()
    {
        $id = session('sessid');
        $data['myprofile'] = registration::where('id', $id)->get();
        return view('user.myprofile', $data);
    }
    public function myprofileaction(Request $req)
    {
        $id = session('sessid');
        $name = $req->input('rname');
        $email = $req->input('remail');
        $phone = $req->input('rphone');
        $user = $req->input('runame');
        $pass = $req->input('rpassword');

        $data = [
            'regname' => $name,
            'regemail' => $email,
            'regphone' => $phone,
            'reguname' => $user,
            'regpassword' => $pass
        ];
        registration::where('id', $id)->update($data);
        return redirect('/myprofile');
    }
    public function userabout()
    {
        $data['userabout'] = addabout::get();
        return view('user.userabout', $data);
    }
    public function userlogout(Request $req)
    {
        $req->session()->forget('sessid');
        return redirect('/');
    }
    public function userviewproducts()
    {
        //$id=session('sessid');
        $data['product']= addproducts::get();
        $data['category'] = category::get();
        return view('user.userviewproducts', $data);
    }
    public function addtocart($id)
    {
        $data['addcart'] = addproducts::where('id', $id)->get();
        return view('user.addtocart', $data);
    }
    // public function addtocartaction()
    // {
    //    /// 
    //     return redirect('/addtocart');
    // }
    public function addtocartaction(Request $req, $id)
    {
        $userid = session('sessid');
        $productid = $id;
        $totalamount = $req->input('total');
        $quantity = $req->input('qty');

        $data = [
            'productid' => $productid,
            'userid' => $userid,
            'status' => 'cart',
            'totalamount' => $totalamount,
            'quantity' => $quantity
        ];
        cartadd::insert($data);
        return redirect('/userviewproducts');
    }
    public function cartdelete($id)
    {
        // $v=$id;
        // print_r($v);
        // exit();
        cartadd::where('id', $id)->delete();
        return redirect('/viewcart');
    }
    public function proceed()
    {
        return view('user.proceed');
    }
    public function proceedaction(Request $req)
    {
        $userid = session('sessid');
        $totalamount = $req->input('gtotal');
        $data = ['status' => 'order'];

        cartadd::where('userid', $userid)->update($data);


        $data = [
            'uid' => $userid,
            'totalamt' => $totalamount,
            'status' => "notpaid"
        ];
        proceed::insert($data);
        return redirect('/proceed');
    }
    public function searchcategory()
    {
        $data['search'] = category::get();
        return view('user.userviewproducts', $data);
    }
    public function view($id)
    {
        $data['product']= addproducts:: where('procategory',$id)->get();
        $data['category'] = category::get();
        return view('user.userviewproducts', $data);
    }
}
