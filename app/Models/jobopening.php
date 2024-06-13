<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobopening extends Model
{
    use HasFactory;
    protected $table='jobopening';
    protected $fillable = [
        'Title',
        'Description',
        'Vacancy',
        'Location',
        'Type',
        'DepartmentId',
        
    ];
    public function departments()
    {
        return $this->belongsTo(departments::class);
    }
}
