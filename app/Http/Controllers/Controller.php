<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function flash_data($tipe, $isi){
        session()->flash('pesan_tipe',"$tipe");
        session()->flash('pesan_isi',"$isi");
    }
    public function skala(){
        bcscale(100);
    }
}
