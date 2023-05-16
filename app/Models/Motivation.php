<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property string $intitule
 */

class Motivation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'motivations';

	 protected $fillable = [
		'intitule', 
	 ];

}
