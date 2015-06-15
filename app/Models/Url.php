<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Url extends Model  
{

	 protected $fillable = ['short_url', 'full_url'];

	public function hits()
    {
        return $this->hasMany('App\Models\Hit');
    }

}