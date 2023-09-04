<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;
    protected $table = 'setting';
    protected $primaryKey = 'id';

    public $incrementing = true;


    protected $fillable = [
        'user_id',
        'key',
        'value',
        'due_date',
        'type',
    ];

}
