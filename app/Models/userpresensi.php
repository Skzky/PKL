<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userpresensi extends Model
{
    protected $table = "userpresensi";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','Masuk','Keluar','Izin','delstatus',];
}
