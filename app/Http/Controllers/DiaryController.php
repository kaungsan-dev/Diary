<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;

class DiaryController extends Controller
{
    public function diary(){
        $data = Diary::all();
        return view ('diary.diary',['Diary'=>$data]);
    }

     public function create(){
        return view('diary.create');
    }

    public function save(Request $request){
        $date = $request->date;
        $title = $request->title;
        $description = $request->description; 

        $diarys=new Diary;
        $diarys->date = $date;
        $diarys->title = $title;
        $diarys->description = $description;
        $diarys->save();
        return redirect()->route('diary.diary');
    }

    public function delete($id){
        $diarys = Diary::findorFail($id);
        $diarys->delete();
        return redirect()->route('diary.diary');
    }

    public function edit($id){
        $diarys = Diary::findorFail($id);
        return view('diary.edit',['Diary'=>$diarys]);
    }

    public function view($id){
        $diarys = Diary::findorFail($id);
        return view('diary.view',['Diary'=>$diarys]);
    }

    public function update($id, Request $request){
        $date = $request->date;
        $title = $request->title;
        $description = $request->description; 

        $diarys = Diary::findorFail($id);
        $diarys->date = $date;
        $diarys->title = $title;
        $diarys->description = $description;
        $diarys->update();
        return redirect()->route('diary.diary');
    }

}
