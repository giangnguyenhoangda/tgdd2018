<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Comment_New_Href;
use App\Comment_Product_Href;
use App\Product;
use App\News;

class CommentController extends Controller
{
    public function postAddCommentNew(Request $req)
    {

    	$comment=new Comment;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time=date('Y-m-d H:i:s',time());
    	$commentid=$comment->add($req->name,$req->email,$req->phone,$req->content,$time);

    	$t=new Comment_New_Href;
    	$t->add($req->newid,$commentid);
    	return redirect('tin-tuc/'.$req->newid);
    }

    public function postAddCommentProduct(Request $req)
    {

    	$comment=new Comment;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time=date('Y-m-d H:i:s',time());
    	$commentid=$comment->add($req->name,$req->email,$req->phone,$req->content,$time);

    	$t=new Comment_Product_Href;
    	$t->add($req->productid,$commentid);
    	return redirect()->back();
    }

    public function getProductComment($id)
    {
        $product=Product::find($id);
        $listComment=$product->getListComment();       
        return view('employee.pages.listComment',['listComment'=>$listComment,'name'=>$product->productName]);
    }

    public function getNewComment($id)
    {
        $news=News::find($id);
        $listComment=$news->getListComment();       
        return view('employee.pages.new.listComment',['listComment'=>$listComment,'name'=>$news->title,'newid'=>$news->id]);
    }

    public function getDeleteNewComment($id)
    {
        $comment=Comment::find($id);
        $comment_new_href=$comment->getComment_Product_Href;
        $comment_new_href->delete();
        $comment->delete();
        return redirect()->back();
    }

    public function getDeleteProductComment($id)
    {
        $comment=Comment::find($id);
        $comment_product_href=$comment->getComment_Product_Href;
        $comment_product_href->delete();
        $comment->delete();
        return redirect()->back();
    }
}
