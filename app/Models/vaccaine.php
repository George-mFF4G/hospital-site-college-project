<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vaccaine extends Model
{
    use HasFactory;
    protected $table='vaccaines';
    protected $fillable=['patient_name','phone','age','description','appoint_date','confirmed'];
}
