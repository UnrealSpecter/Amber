<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
	//fillables to be mass assigned from outside the database.
    protected $fillable = ['name', 'description', 'video', 'mediaItem', 'performanceDate'];
}
