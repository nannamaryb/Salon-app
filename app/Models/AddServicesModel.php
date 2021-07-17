<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookingModel;

class AddServicesModel extends Model
{
    protected $fillable =['sname','srate','sdesc','simage','start_date','start_date','start_time','end_time','duration'];

    public function booking()
    {
        return $this->hasMany(BookingModel::class,'service_id');
    }

    
}
