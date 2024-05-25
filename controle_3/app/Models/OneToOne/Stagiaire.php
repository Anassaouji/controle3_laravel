<?php

namespace App\Models\OneToOne;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','age','filiere','formateur_id'
    ];

    public function formateur(){
        return $this->belongsTo(Formateur::class);
    }
}
