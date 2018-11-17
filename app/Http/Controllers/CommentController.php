<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Comment_New_Href;

class CommentController extends Controller
{
    public function postAddCommentNew(Request $req)
    {

    	$comment=new Comment;
    	$commentid=$comment->add($req->name,$req->email,$req->phone,$req->content);

    	$t=new Comment_New_Href;
    	$t->add($req->newid,$commentid);
    	return redirect('tin-tuc/'.$req->newid);
    }
}
