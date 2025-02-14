<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'payment_date',
        'paiement_montant',
        'period_number',
        'contrat_id',

    ];

    public function contrat()
    {
        return $this->belongsTo(Contrat::class, 'contrat_id');
    }
}
