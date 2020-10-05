<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    use HasFactory;

    public function members()
    {
        return $this->belongsToMany(User::class,
            EditionRosterMember::class,
            'edition_id',
            'user_id')
            ->withPivot('role')
            ->withTimestamps()
            ->as('members');
    }
}
