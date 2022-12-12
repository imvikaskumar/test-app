<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['unique_id', 'book_name', 'book_cover', 'is_available', 'is_disabled'];

    public function scopeActive($query)
    {
        return $query->where('is_disabled', 0);
    }

    public function scopeOfSearchInput($query, $input)
    {
        if (is_null($input)) {
            return $query;
        }
        return $query->where('book_name', 'like', "%$input%");
    }
}