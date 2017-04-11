<?php

namespace App\Http\Controllers\admin;

use App\Models\RTResule;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function useradd()
    {
        return view('admin.user.useradd');
    }
    public function useradddo(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|unique:users|max:10|alpha_num',
            'password'=>'required|alpha_num|between:6,12',
            'phone'=>'required|numeric|',
            'email'=>'required|email'
        ],[
            'required'=>'不能为空',
            'unique'=>'用户名不能重复',
            'alpha_num'=>'使用字母数字组合',
            'confirmed'=>'密码不一致',
            'numeric'=>'使用纯数字',
            'email'=>'使用邮箱格式'

        ]);
        $name=$request->input('name');
        $password= Hash::make($request->password);
        $phone= $request->phone;
        $email= $request->email;
        User::insertGetId([
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            'phone'=>$phone,
        ]);
        $res =new RTResule();
        $res->status =1;
        $res->message ='添加成功';
        return $res->toJson();
        
//        return view('admin.user.useradd');
    }
    public function userdel(Request $request)
    {
        $id=$request->id;
        $res=DB::table('users')->where('id',$id)->delete();
        $res =new RTResule();
        $res->status =1;
        $res->message ='删除成功';
        return $res->toJson();
    }
    public function useredit(Request $request)
    {
        $id=$request->id;
        $res =User::find($id);
        return view('admin.user.useredit')->with('res',$res);
    }
    public function userupdate(Request $request)
    {
//        dd(11);
        $this->validate($request,[
            'name'=>'required|unique:users|max:10|alpha_num',
            'password'=>'required|alpha_num|between:6,12',
            'phone'=>'required|numeric|',
            'email'=>'required|email'
        ],[
            'required'=>'不能为空',
            'unique'=>'用户名不能重复',
            'alpha_num'=>'使用字母数字组合',
            'confirmed'=>'密码不一致',
            'numeric'=>'使用纯数字',
            'email'=>'使用邮箱格式'

        ]);
        $id=$request->id;
        $name=$request->input('name');
        $password= $request->password;
        $phone= $request->phone;
        $email= $request->email;
        $res=DB::table('users')->where('id',$id)->update([
            'name'=>$name,
            'phone'=>$phone,
            'email'=>$email,
        ]);
        $res =new RTResule();
        $res->status =1;
        $res->message ='添加成功';
        return $res->toJson();
    }
    public function userpass(Request $request)
    {
        return view('admin.user.userpass');
    }
    public function userlist(Request $request)
    {
        $search =$request->search;
        $goods = DB::table('users')
            ->where('users.name','like',"%$search%")
            ->orwhere('users.email','like',"%$search%")
            ->get();
        //1、查询数据库总条数
        $count = count($goods);
        $rev = '4';
//3、求总页数
        $sums = ceil($count/$rev);


//        $res=DB::table('users')->select();
        $res =User::all()->toArray();

        return view('admin.user.userlist')->with('res',$res);
    }
}
