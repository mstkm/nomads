<?php

namespace App\Models;

use App\Models\TravelPackage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function travel_package()
    {
      return $this->belongsTo(TravelPackage::class);
    }
}
