<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trick extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nickname',
        'description',
        'learned_at',
        'is_mastered',
        'difficulty',
        'energy_cost',
        'image_url',
        'video_url',
    ];

    public function transitions()
    {
        // Return all transitions where the trick is either the start or end trick
        return $this->hasMany(Transition::class, 'start_trick_id', $this->id)->orWhere('end_trick_id', $this->id);
    }

    public function startTransitions()
    {
        // Return all transitions where the trick is the start trick
        return $this->hasMany(Transition::class, 'start_trick_id', $this->id);
    }

    public function endTransitions()
    {
        // Return all transitions where the trick is the end trick
        return $this->hasMany(Transition::class, 'end_trick_id', $this->id);
    }

    public function tags()
    {
        // Return all tags associated with the trick
        return $this->belongsToMany(Tag::class);
    }

    public function variants()
    {
        // Return all variants of the trick
        return $this->belongsToMany(Trick::class, 'trick_variants', 'trick_id', 'variant_trick_id');
    }
}
