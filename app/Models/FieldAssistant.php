<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldAssistant extends Model
{
    use HasFactory;

    protected $table = 'field_assistant';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'zone_id',
        'house_no',
        'street',
        'state_id',
        'lga_id',
        'reports_to',
        'is_active'
       ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function reports(){
        return $this->belongsTo(User::class, 'reports_to');
    }

    public function zones(){
        return $this->belongsTo(Zones::class, 'zone_id');
    }

    public function states(){
        return $this->belongsTo(States::class, 'state_id');
    }

    public function lgas(){
        return $this->belongsTo(Lgas::class, 'lga_id');
    }
}
