<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class weather extends Model
{
    use HasFactory;

    const CREATED_AT = 'sensor_creation_date';
    const UPDATED_AT = 'sensor_updated_date';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sensor_id',
        'temperature',
        'humidity',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'weather';


    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'sensor_no';


    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    //public $timestamps = false;



}
