<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $table = 'technologies';

    protected $fillable = array(
        'name',
        'category_id'
    );

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
