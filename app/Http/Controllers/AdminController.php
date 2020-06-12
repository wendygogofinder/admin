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
    public function showone(Request $request,$id){

        $admin=Admin::find($id);
        $name=$request->name;
        return view('back.admin.admin_edit',['admin'=>$admin,'name'=>$name]);
    }
    public function edit(Request $request){
        $orderPaper=($request->orderPaper=="")?"N":"Y";
        if(!empty($request->Newpassword)){
            $Newpassword=hash("sha256",$request->Newpassword);
            $admin=Admin::find($request->id);
                $admin->uname=$request->uname;
                $admin->password=$Newpassword;
                $admin->email=$request->email;
                $admin->sex=$request->sex;
                $admin->orderPaper=$orderPaper;
                $admin->birthday=$request->birthday;
                $admin->phone=$request->phone;
                $admin->Area=$request->Area;
                $admin->cityarea=$request->cityarea;
                $admin->cuszip=$request->cuszip;
                $admin->cusadr=$request->cusadr;
                $admin->save();
                return redirect('admin');
        }else{
            $admin=Admin::find($request->id);
            $admin->uname=$request->uname;
            $admin->email=$request->email;
            $admin->sex=$request->sex;
            $admin->orderPaper=$orderPaper;
            $admin->birthday=$request->birthday;
            $admin->phone=$request->phone;
            $admin->Area=$request->Area;
            $admin->cityarea=$request->cityarea;
            $admin->cuszip=$request->cuszip;
            $admin->cusadr=$request->cusadr;
            
            $admin->save();
            return redirect('admin');
        }
    }
    public function delete($id){

        $admin=Admin::find($id);
        $admin->delete();
        return redirect('admin');
    }
    public function sh($id){
        $sh=Admin::find($id);
        $sh->sh=($sh->sh+1)%2;
        $sh->save();
        return back();
    }
}