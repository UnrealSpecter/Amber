<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AgendaFragment extends Model
{
	protected $table = "agendafragments";
	//fillables to be mass assigned from outside the database.
    protected $fillable = ['imagepath'];
}
