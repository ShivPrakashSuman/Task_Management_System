<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class taskModel extends Model
{

    use SoftDeletes;

    use HasFactory;
    protected $table = 'task_list';


    protected $primaryKey = 'id';

    public $incrementing = true;


    protected $fillable = [
        'user_id',
        'title',
        'description',
        'due_date',
        'status',
    ];
}
