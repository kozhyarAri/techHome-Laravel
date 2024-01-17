<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class info extends Model
{ //homeTitle	homeSubTitle	about	facebookLink	intsaLink	xLink	phoneNumber
    protected $fillable = [
        'homeTitle',
        'homeSubTitle',
        'about',
        'facebookLink',
        'intsaLink',
        'xLink',
        'phoneNumber'
    ];
    use HasFactory;
}
