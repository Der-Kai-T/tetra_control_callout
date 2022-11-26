<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TME extends Model
{
    use HasFactory;
    public $guarded = [];

    public function orga_groups(){
        return $this->belongsTo(OrgaGroup::class);
    }
}
