<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $with = ["publisher"];

    // get the publisher (user)
    public function publisher() {
        return $this->belongsTo(User::class, "user_id");
    }


}
