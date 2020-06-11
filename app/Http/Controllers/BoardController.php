<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;

class BoardController extends Controller
{
    public function show(){
       $board=Board::where('board_r_id',0)->orderBy('created_at','desc')->get();
       $board_r=array();
       foreach($board as $show){
           $board_r[$show['id']]=Board::all()->where('board_r_id',$show->id);
       }
        return view('back.board.board',['board'=>$board,'board_r'=>$board_r]);
        
    }
    public function showone($id){
        $board=Board::find($id);
         return view('back.board.board_R',['board'=>$board]);
     }
    public function add(Request $request){
        if(!empty($request->board_r_id)){
            $board_r=Board::insert([
                    'board_title'=>$request->board_title,
                    'board_name'=>'管理員',
                    'board_pic'=>$request->board_pic,
                    'board_email'=>$request->board_email,
                    'board_content'=>$request->board_content,
                    'board_r_id'=>$request->board_r_id,
                    'board_date'=>$request->board_date,
                    'board_ip'=>0

                ]);
                return redirect('board');
       }else{
           $board=Board::insert([
               'board_title'=>$request->board_title,
               'board_name'=>$request->board_name,
               'board_pic'=>$request->board_pic,
               'board_email'=>$request->board_email,
               'board_content'=>$request->board_content,
               'board_date'=>$request->board_date,
               'board_ip'=>$request->board_ip
           ]);
       }
        return redirect('board');
    }
    public function edit(Request $request){
        foreach($request->board_r_id as $k=>$id){
            $board_r=Board::find($id);
            $board_content=$request->board_content;
            $board_r->board_content=$board_content[$k];
            $board_r->save();
        }
        return back();

    }
    public function delete($id,$board){
         if($board=="board"){
            $board=Board::find($id);
            $board->delete();
            $board_R=Board::where('board_r_id',$id);
            $board_R->delete();
            return back();
        }
        $board=Board::find($id);
        $board->delete();
        return back();
    }

}
