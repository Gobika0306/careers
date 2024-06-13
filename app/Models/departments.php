<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departments extends Model
{
    use HasFactory;
    protected $table='departments';
    protected $fillable = [
        'Departments',
    ];
    public function jobopening()
    {
        return $this->hasMany(jobopening::class);
    }
}
