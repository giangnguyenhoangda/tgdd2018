<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function getNews()
    {
        $news= News::all();
    	return view('guest.pages.news',['news'=>$news]);
    }

    public function getListNews()
    {
        $news= News::all();
        return view('employee.pages.new.news',['news'=>$news]);
    }

    public function getEditNew($id)
    {
        $news=News::find($id)->toArray();
        return view('employee.pages.new.new_edit',['news'=>$news]);
    }
    public function getNew($id)
    {
        $news=News::find($id)->toArray();
    	return view('guest.pages.new',['news'=>$news]);
    }

    public function getPostNews()
    {
    	return view('employee.pages.new.post_new');
    }

    public function postPostNews(Request $req)
    {
        $news=new News;
        $news->add($req->title,$req->logo,$req->type,$req->content,date('Y-m-d'),1);
        echo "Thêm Xong";
    }

    public function postEditNews(Request $req)
    {
        $news=new News;
        if($req->hasFile('logo')){
             $news->doUpdate($req->id,$req->title,$req->logo,$req->type,$req->content,date('Y-m-d'),1,true);
        }
        else{
            $news->doUpdate($req->id,$req->title,$req->old_logo,$req->type,$req->content,date('Y-m-d'),1,false);
        }
        echo "Sửa xong";
    }

    public function getDeleteNew($id)
    {
       $news=News::find($id);
       $news->delete();
       echo "Xóa xong";
    }
}
