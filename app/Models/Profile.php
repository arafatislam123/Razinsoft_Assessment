<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'full_name', 'email', 'phone', 'address', 'bio',
        'profile_image', 'hobbies', 'date_of_birth'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}