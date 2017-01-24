<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CVEntry extends Model
{
    protected $table = "cv";

    //fillables to be mass assigned from outside the database.
    protected $fillable = ['leftSide', 'rightSide'];

    protected $guarded = array('id', 'category_id');


    public function category()
    {
        return $this->belongsTo('App\Models\CVCategory', 'category_id');
    }
}
