<?php

namespace App\Traits;

use App\Models\Edition;
use App\Models\EditionRoster;
use App\Models\EditionRosterMember;

trait HasEditions
{
    public function rosters()
    {
        return $this->belongsToMany(EditionRoster::class,
            EditionRosterMember::class,
            'user_id',
            'roster_id'
        )
            ->withPivot('role')
            ->withTimestamps()
            ->as('rosters');
    }

    public function editions()
    {
        return $this->belongsToMany(Edition::class, EditionRosterMember::class)
            ->withPivot('role')
            ->withTimestamps()
            ->as('editions');
    }
}
