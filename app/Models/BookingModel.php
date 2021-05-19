<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AddServicesModel;
use App\Models\User;

class BookingModel extends Model
{
    protected $fillable = ['service_id','customer_id','date','time'];

    public function customer()
    {
            return $this->belongsTo(User::class,'customer_id');
    }

    public function service()
    {
        return $this->belongsTo(AddServicesModel::class,'service_id');
    }

} 

