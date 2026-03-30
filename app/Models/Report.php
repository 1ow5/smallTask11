<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
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
