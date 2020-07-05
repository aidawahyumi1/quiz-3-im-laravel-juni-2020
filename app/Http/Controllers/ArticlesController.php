<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ArticlesModel;
use Illuminate\Support\Str;

class ArticlesController extends Controller
{
    //
    public function index(){
        $articles = ArticlesModel::get_all();
        // dd($artikel);
        return view('artikel.index', compact('articles'));
    }

    public function create(){
    	return view('artikel.create');
    }

    public function store(Request $request){
    	// dd($request->all());
    	$data = $request->all();
    	$data['slug'] = Str::slug($data["judul"]);
    	unset($data["_token"]);
    	$articles = ArticlesModel::save($data);
    	// dd($articles);
    	if ($articles) {
    		return redirect('/artikel');
    	}
    }

    public function show($id){
        $articles = ArticlesModel::find_by_id($id);
          // dd($articles);
        $newtag=[];
        $tag= $articles[0]->tag;
        $newtags=explode (" ",$tag);
        // dd($newtags);
        return view('artikel.show',compact('articles'),['newtags'=>$newtags]);
    }

    public function edit($id){
        $articles = ArticlesModel::find_by_id($id);
     //   dd($articles);
        return view('artikel.edit',compact('articles'));
    }

    public function update($id, Request $request){
    	$data = $request->all();
    	$data['slug'] = Str::slug($data["judul"]);
        $articles = ArticlesModel::update($id, $data);
        return redirect ('/artikel');
    }

    public function destroy($id){
        $delete = ArticlesModel::destroy($id);
        return redirect('/artikel');
    }
}

