<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CVCategory extends Model
{
    protected $table = "cvcategories";

    //fillables to be mass assigned from outside the database.
    protected $fillable = ['categoryName'];

    public function entries(){
        return $this->hasMany('App\Models\CVEntry' , 'category_id');
    }
}
