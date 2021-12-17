<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'department_id',
        'position',
        'description'
    ];

    public function department(){
        return $this->belongsTo(Departments::class, 'department_id');
    }
}
