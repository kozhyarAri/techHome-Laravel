<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{ 										
    protected $fillable = [
        "name", 
        "review", 
        "ram", 
        "cpu", 
        "storage", 
        "main_camera", 
        "selfie_camera", 
        "view_counts", 
        "price", 
        "category_id", 
        "user_id",
        'image'
    ];
    use HasFactory;

    public function getImage(){
        if($this->image){
            return asset('assets/images/device_image/'.$this->image);
        }
        return 'https://www.svgrepo.com/show/295402/user-profile.svg';
    }
    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
