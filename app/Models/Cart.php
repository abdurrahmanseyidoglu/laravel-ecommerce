<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $table = 'cart'; //I added this because I created cart table as singular in the database but it should be plural so adding this line fixes this
}
