<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scenic extends Model {
    protected $table = 'scenic';

    protected $fillable = [
        'user_id',
        'name',
        'image',
        'info',
        'status'
    ];

    public function ticket() {
        return $this->hasOne('App\Models\Ticket');
    }

}
