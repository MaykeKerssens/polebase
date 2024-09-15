<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transition extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_trick_id',
        'end_trick_id',
        'transition_type',
        'description',
        'video_url',
    ];

    public function startTrick()
    {
        // Return the trick that is the start trick for this transition
        return $this->belongsTo(Trick::class, 'start_trick_id');
    }

    public function endTrick()
    {
        // Return the trick that is the end trick for this transition
        return $this->belongsTo(Trick::class, 'end_trick_id');
    }

    public function tags()
    {
        // Return all tags associated with the transition
        return $this->belongsToMany(Tag::class);
    }
}
