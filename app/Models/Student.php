<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';
    protected $fillable = ['nis', 'name', 'kelas_id', 'birthdate', 'address'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}