<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horizontal_table extends Model
{
    use HasFactory;
    protected $table = 'Horizontal_table';
    public $timestamps = false;
    protected $primary_key = 'ID';
}
