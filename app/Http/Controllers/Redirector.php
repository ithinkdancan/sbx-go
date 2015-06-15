<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Request;
use App\Models\Url;

class Redirector extends BaseController
{
    
    public function create(Request $request)
    {
    	$vars = $request::only('short_url', 'full_url');
    	$url = Url::where('short_url', '=' ,$request::input('short_url'))->first();
    	if(!$url){
			$url = new Url($request::only('short_url', 'full_url'));
    		$url->save();
    	}

    	header('Location:' . $url->full_url); die();

    }

    public function go($path)
    {
    	
    	$url = Url::where('short_url', '=' ,$path)->first();
    	
    	if($url){
            $url->hits()->create([]);
    		header('Location:' . $url->full_url); die();
    	} else {
    		 return view('create', ['path' => $path]);
    	}

    }
}
