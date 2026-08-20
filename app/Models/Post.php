<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Observers\PostObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;


//#[ObservedBy(PostObserver::class)]

class Post extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'post';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content'
    ];
}
