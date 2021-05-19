<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookingModel;

class User extends Model
{
    protected $fillable =['cname','cemail','cmob'];
    
    public function booking()
    {
        return $this->hasMany(BookingModel::class,'customer_id');
    }
    
}
