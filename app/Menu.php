<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $timestamps = false;

    protected $table = 'categories';

    protected $fillable = array('parent_id','name', 'order', 'slug');

    public function parent()
    {
      return $this->belongsTo('App\Menu', 'parent_id');
    }

    public function children()
    {
      return $this->hasMany('App\Menu', 'parent_id');
    }
}
