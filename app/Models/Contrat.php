<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_date',
        'end_date',
        'price',
        'boxe_id',
        'content',
        'monthly_price',
        'locataire_id',
        'templatecontrat_id',
        'user_id'
    ];

    public function templatecontrat(){
        return $this->belongsTo(TemplateContrat::class, 'templatecontrat_id');
    }

    public function boxe(){
        return $this->belongsTo(Boxe::class, 'boxe_id');
    }

    public function locataire(){
        return $this->belongsTo(Locataire::class, 'locataire_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}