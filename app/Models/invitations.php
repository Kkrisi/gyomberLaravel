<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invitations extends Model
{
    /** @use HasFactory<\Database\Factories\InvitationsFactory> */
    use HasFactory;

    protected $fillable = [
        'appeared'
    ];
}
