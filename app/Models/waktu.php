<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Controller extends Controller
{
    public function getCurrentTime()
    {
        $currentTime = date('H:i:s'); // Format waktu dalam jam:menit:detik
        return view('clock', ['currentTime' => $currentTime]);
    }
}