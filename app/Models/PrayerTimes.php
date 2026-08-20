<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrayerTimes extends Model
{
    /**
     * the table connection
     *
     * @var string
     */
    protected $connection = 'prayer_times';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prayer_times';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'prayer_time_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
}
