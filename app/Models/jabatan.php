<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    protected $table = "jabatans";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'Jabatan',
    
    ];

        public function pegawai()
        {
            return $this->hasMany(pegawai::class);
        }
        
}

