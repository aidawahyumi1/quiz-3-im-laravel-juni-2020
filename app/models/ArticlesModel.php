<?php   

namespace App\models;
use Illuminate\Support\Facades\DB;

class ArticlesModel {
    public static function get_all(){
        $articles = DB::table('artikel')->get();
        return $articles;
    }

    public static function save($data){
        $new_article = DB::table('artikel')->insert($data);
        return $new_article;
    }

    public static function find_by_id($id){
        $articles = DB::table('artikel')->where('id', $id)->get();
        return $articles;
    }

    public static function update($id,$request){
    	$articles= DB::table('artikel')
				    	->where('id',$id)
				    	->update([
				    		'judul'=>$request["judul"],
				    		'isi'=>$request["isi"],
				    		'tag'=>$request["tag"],
				    		'slug'=>$request["slug"]
				    	]);
    	return $articles;
    }

    public static function destroy($id){
    	$delete = DB::table('artikel')
    				->where('id',$id)
    				->delete();
    	return $delete;
    }
}