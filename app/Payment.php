<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Payment extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'payment';
    protected $primarykey = 'id';

    use Notifiable;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        '_id', 'payment'
    ];

    public function user() {
        return $this->belongsTo('App\User', 'foreign_key', '_id');
    }
}
