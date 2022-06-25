<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Todo extends Model
{
    use SoftDeletes;

    protected $fillable = ['content'];
    protected $guarded = ['id', 'created_at',];
}
