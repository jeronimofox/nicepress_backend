<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EditionRosterMember extends Pivot
{
    use hasFactory;

    protected $table = "edition_roster_member";

    protected $fillable = [

    ];
}
