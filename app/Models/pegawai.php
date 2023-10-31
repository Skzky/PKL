<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = "Pegawais";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','id_jabatan','NIP','Nama_Lengkap','Tempat','Tgl','Alamat','Agama','No_Telp','Jenis_Kelamin','Foto', 'delstatus'];

        public function jabatan()
        {
            return $this->belongsTo(jabatan::class, "id_jabatan");
        }

        public function User()
        {
            return $this->belongsTo(User::class, "id_user");
        }
}
