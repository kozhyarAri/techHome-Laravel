<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'image'
    ];
    use HasFactory;
    public function getImage(){
        if($this->image){
            return asset('assets/images/category_image/'.$this->image);
        }
        return 'https://www.svgrepo.com/show/496036/category.svg';
    }
}
