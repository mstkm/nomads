<?php

namespace App\Models;

use App\Models\TransactionDetail;
use App\Models\TravelPackage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function details()
    {
      return $this->hasMany(TransactionDetail::class, 'transaction_id', 'id');
    }

    public function travel_package()
    {
      return $this->belongsTo(TravelPackage::class, 'travel_package_id', 'id');
    }

    public function user()
    {
      return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
