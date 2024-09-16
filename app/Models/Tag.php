<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function tricks()
    {
        // Return all tricks associated with the tag
        return $this->belongsToMany(Trick::class);
    }

    public function transitions()
    {
        // Return all transitions associated with the tag
        return $this->belongsToMany(Transition::class);
    }
}
