<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusState extends Model
{
    use HasFactory;

    protected $primaryKey = 'bus_state_id';
    protected $fillable = ['name'];

    public function buses()
    {
        return $this->hasMany(Bus::class, 'bus_state_id');
    }
}
