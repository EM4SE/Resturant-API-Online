<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paytype extends Model
{
    /** @use HasFactory<\Database\Factories\PaytypeFactory> */
    use HasFactory;


      protected $fillable = [
        'PaymentID',
        'Descrip',
        'IsSwipe',
        'Type',
        'Rate',
        'IsRefundable',
        'IsActive',
        'IsBillCopy',
        'PrintDescrip',
        'PreFix',
        'MaxLength',
        'OrderNo',
    ];
}
