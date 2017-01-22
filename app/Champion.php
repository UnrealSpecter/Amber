<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
	//fillables to be mass assigned from outside the database.
    protected $fillable = ['name'];
}
