<?php

namespace App\Models\AmberWebsite;

use Illuminate\Database\Eloquent\Model;

class Fotoblog extends Model
{
	//fillables to be mass assigned from outside the database.
    protected $fillable = ['title', 'description', 'date'];
}
