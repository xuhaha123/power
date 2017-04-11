<?php

namespace App\Http\Controllers\Admin;

use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/admin/index';
    public function showLoginForm()
    {
        return view('admin.login.login');
    }

    public function username()
    {
        return 'name';
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();
        dd(22);

        return redirect('admin.login.login');
    }
    public function forgetpass()
    {
        return view('admin.login.forgetpass');
    }
//    public function dologin(Request $request)
//    {
//        $name= $request->name;
//        $password=$request->password;
//        $res =User::where([['name',$name],['password',$password]]
//        )->get()->toArray();
//        if(!empty($res)){
//            $id=$res[0]['id'];
//            $request->session()->put('admin.name',$name);
//            $request->session()->put('admin.id',$id);
//            return redirect('admin/index');
//        }else{
//            return redirect('admin/login');
//        }
//
//    }

//    public function logout(Request $request)
//    {
//        $request->session()->forget('admin.name');
//        return redirect('admin/login');
//
//    }

    public function index()
    {
        return view('layouts.index');
    }

    //邮箱发送
    public function sendEmail(Request $request)
    {

        $password = str_random(10);

        //根据当前邮箱查询出用户的信息
        $user = \App\User::where('email', $request->input('email'))->first();
//        dd($user);
        $name=$user->name;
        $user->password = Hash::make($password);
        $user->save();
        Mail::send('emails.email', ['name'=>$name, 'password' => $password], function ($m) use ($request) {
            $m->to($request->email)->subject('请验证邮箱');
        });
        return view('admin.login.login');


    }



}
