<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgaGroup extends Model
{
    use HasFactory;
    public $guarded = [];

    public function tmes(){
        return $this->hasMany(TME::class, 'orga_groups_id');
    }
}
