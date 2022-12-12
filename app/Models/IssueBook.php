<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueBook extends Model
{
    protected $fillable = ['book_id', 'assigned_user_id', 'assigned_datetime', 'returned_datetime'];
}