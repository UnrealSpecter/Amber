<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
	//fillables to be mass assigned from outside the database.
    protected $fillable = ['title', 'dimensions', 'workDate', 'imagepath'];
}
