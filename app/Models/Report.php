<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use SoftDeletes;
    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->format('d.m.Y');
    }
    
    // Аксессор для форматированной даты обновления
    public function getFormattedUpdatedAtAttribute()
    {
        return $this->updated_at->format('d.m.Y');
    }


}
