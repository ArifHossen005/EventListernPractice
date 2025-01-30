<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



#[ObservedBy([BlogObserver::class])]
class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'slug'
    ];
}
