<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrayerTimesDefaultSettings extends Model
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
    protected $table = 'default_setting';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'default_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
}
