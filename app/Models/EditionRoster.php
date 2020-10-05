<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditionRoster extends Model
{
    use HasFactory;

    public function members()
    {
        return $this->belongsToMany(
            User::class,
            EditionRosterMember::class,
            'roster_id',
            'user_id')
            ->withPivot('role')
            ->withTimestamps()
            ->as('members');
    }

    public function edition()
    {
        return $this->hasOneThrough(
            Edition::class,
            EditionRosterMember::class, 'roster_id', 'edition_id'
        );
    }

}
