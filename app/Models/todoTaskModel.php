<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todoTaskModel extends Model
{
    use HasFactory;


    protected $table = 'todo_task_list';


    protected $primaryKey = 'id';

    public $incrementing = true;


    protected $fillable = [
        'task_name',
        'comment',
        'date',
        'status',

    ];


       /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];
}
