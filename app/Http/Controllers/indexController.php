<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\addabout;
use App\Models\addgallery;
use App\Models\contact;
use App\Models\registration;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    return view('index');
    }
    public function gallery()
    {
        $data['gallery']=addgallery::get();
        return view('gallery',$data);
    }
    public function about()
    {
        $data['about']=addabout::get();
        return view('about',$data);
    }
    public function contact()
    {
        return view('contact');
    }
    public function addcontactaction(Request $req)
    {
        $cname=$req->input('name1') ;
        $cemail=$req->input('email1');
        $cphone=$req->input('contact1');
        $message=$req->input('message1');

        $data=[
            'customername'=>$cname,
            'cemail'=>$cemail,
            'cphone'=>$cphone,
            'message'=>$message
        ];
        contact::insert($data);
        return redirect('/contact');
   }
   public function registration()
   {
     return view('registration');
   }
   public function addregisteraction(Request $req)
    {
        $rname=$req->input('rname');
        $email=$req->input('remail');
        $phone=$req->input('rphone');
        $user=$req->input('runame');
        $pass=$req->input('rpassword');

        $data=[
            'regname'=>$rname,
            'regemail'=>$email,
            'regphone'=>$phone,
            'reguname'=>$user,
            'regpassword'=>$pass
        ];
        registration::insert($data);
        return redirect('/userlogin');
    }
    public function userlogin()
    {
        return view('userlogin');
    }
    public function userloginaction(Request $req)
    {
        $user=$req->input('user1');
        $pass=$req->input('password');

        $content=registration::where('reguname',$user)->where('regpassword',$pass)->first();

        if(isset($content))
        {
            $req->session()->put(array('sessid'=>$content->id));
            return redirect('/userindex');
        }
        else{
            
            return redirect('/userlogin')->with('error','Invalid username  or password');
        }
    }

}
