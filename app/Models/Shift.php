<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    // Allow these fields to be mass assigned via create()
    protected $fillable = ['start', 'end', 'employee_id'];
}