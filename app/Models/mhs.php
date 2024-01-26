<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mhs extends Model
{
    use HasFactory;
    protected $table ='mhs';
    protected $primaryKey = 'id';
    protected $fillable = ['nim','nama','kelas','des'];
}
