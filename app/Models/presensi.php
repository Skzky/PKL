<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presensi extends Model
{
    protected $table = "Presensis";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','Id_user', 'Waktu','Keterangan','Lampiran'];

        public function user()
    {
        return $this->belongsTo(User::class, 'Id_user', 'id');
    }
}
