<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locataire extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastname',
        'firstname',
        'mail',
        'phone',
        'postal_code',
        'country',
        'numberbank',
        'address',
        'city',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function contrats()
    {
        return $this->hasMany(Contrat::class);
    }
}
