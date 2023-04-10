<?php

namespace App\Models;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function transaction()
    {
      return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }
}
