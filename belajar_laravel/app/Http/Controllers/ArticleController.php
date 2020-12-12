<?php
 
namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
 
class ArticleController extends Controller
{
 

	public function article(){
		return view('article');
	}


	public function arar(){
		$id=1;
		$articles=articles::find('$id');
		return $articles;
	}
	public function show($id){
		return Article::find($id);
	}
	}

 

