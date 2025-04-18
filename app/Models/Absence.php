<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Absence extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'date',
        'matiere',
        'presence',
        'justif',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
