<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTechnology extends Model
{
    protected $table = 'user_technologie';

    protected $fillable = array(
        'user_id',
        'technology_id',
        'skill_level'
    );

    public function technologies()
    {
        return $this->belongsTo(Technology::class, 'technology_id', 'id');
    }
}
