<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    public function show(){
        $admin=Admin::orderBy('date','desc')->get();
        return view('back.admin.admin',['admin'=>$admin]);
    }
    public function add(Request $request){
        if(!empty($_SESSION['check_word']) && (!empty($request->chcekword))){
            if($_SESSION['check_word']!=$request['checkword']){
                return redirect('admin_add');
                exit();
            }
        }
        if($request->password!=$request->repassword){
            return redirect('admin_add');
            exit();
        }

        $checkusername=Admin::where('username',$request->username)->count();
        $checkemail=Admin::where('email',$request->email)->count();
        if($checkusername>0){
            return "username";
            // return redirect('admin_add');
        }else if($checkemail>0){
            return "email";
                // return redirect('admin_add');
        }else{
            $orderPaper=($request->orderPaper!="Y")?"N":"Y";
            $password=hash("sha256",$request->password);
            $admin=Admin::insert([
                'uname'=>$request->uname,
                'username'=>$request->username,
                'password'=>$password,
                'email'=>$request->email,
                'sex'=>$request->sex,
                'orderPaper'=>$orderPaper,
                'birthday'=>$request->year."-".$request->month."-".$request->day,
                'phone'=>$request->phone,
                'Area'=>$request->Area,
                'cityarea'=>$request->cityarea,
                'cuszip'=>$request->cuszip,
                'cusadr'=>$request->cusadr,
                'date'=>$request->date
                ]);
                return redirect('admin');
        }
    }
}