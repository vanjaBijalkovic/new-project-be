<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = array(
        'name',
        'skill_id'
    );

    public function skills()
    {
        return $this->belongsTo(Skill::class, 'skill_id', 'id');
    }

}
