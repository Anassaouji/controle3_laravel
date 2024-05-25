<?php

namespace App\Models\OneToOne;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
    ];

    public function stagiaire(){
        return $this->hasOne(Stagiaire::class);
    }
}
