<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'toppings' => 'array',
    ];

    protected $appends = [
        'chef',
    ];

    protected $hidden = [
        'user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getChefAttribute()
    {
        return $this->user->name;
    }
}
