<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhoneBookModel extends Model
{
    public $table = 'phone_book_details';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = false;
}
