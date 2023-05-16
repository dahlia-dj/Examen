<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nom
 * @property string $prenon
 * @property int $age
 * @property int $sexe
 * @property string $profession
 * @property string $rue
 * @property int $code_postal
 * @property string $ville
 * @property string $pays
 * @property string $tel
 * @property string $email  
 * @property int $id_motivation 
 
 */


class Abonne extends Model
{
    use HasFactory;
    protected $table ="abonnes"; 
    public $timestamps = false ; 
    protected $fillable = ['nom',
    'prenom',
    'age',
    'sexe',
    'profession',
    'rue',
    'code_postal',
    'ville',
    'pays',
    'tel',
    'email',
    'id_motivation',
  ];
   
  protected $casts = [
    'id_motivation' => 'int',
  
 ];
 public function motivation()
	 {
	 	return $this->belongsTo(Abonne::class, 'id_motivation');
	 }
 

}
