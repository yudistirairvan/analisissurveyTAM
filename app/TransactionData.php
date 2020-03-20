<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionData extends Model
{
    protected $table = 'transactiondatas';
    protected $fillable = [
        'id_variabel',
        'id_pertanyaan',
        'jumlah_data',
        'sangat_setuju',
        'setuju',
        'tidak_setuju',
        'sangat_tidak_setuju'];
}
