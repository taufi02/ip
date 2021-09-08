<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\NilaiSemSatu;
use App\Models\NilaiSemDua;
use App\Models\NilaiSemTiga;
use App\Models\NilaiSemEmpat;
use App\Models\NilaiSemLima;
use App\Models\NilaiSemEnam;
use App\Models\Skd;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if(!session('user')){
            return view('guest');
        }
        // Array data yang akan dikirim ke view
        $data = [];

        // --- SEMESTER 1 ---

        // Ambil tabel nilai semester 1, return objek
        $id = session('user')->id;
        $nilai_sem_satu = User::find($id)->nilaiSemSatu()->first();
        $data += compact('nilai_sem_satu');

        // Cek, jika ada nilai semester satu maka hitung rata-rata angkatan dan ranking user
        if(isset($nilai_sem_satu)){
            $nilai_sem_satu = $nilai_sem_satu->ip;
            $rata_sem_satu = NilaiSemSatu::avg('ip');
            $nilai_all_sem_satu = NilaiSemSatu::orderBy('ip', 'desc')->pluck('ip')->toArray();
            $rank_sem_satu = array_search($nilai_sem_satu, $nilai_all_sem_satu) + 1;
            $partisipan_sem_satu = NilaiSemSatu::count();

            // Tambahkan data rata-rata dan ranking
            $data += compact(
                'rata_sem_satu',
                'rank_sem_satu',
                'partisipan_sem_satu'
            );
            // Ubah data objek nilai semester satu menjadi angka
            $data['nilai_sem_satu'] = $nilai_sem_satu;
        }

        // --- SEMESTER 2 ---

        // Ambil tabel nilai semester 2, return objek
        $id = session('user')->id;
        $nilai_sem_dua = User::find($id)->nilaiSemDua()->first();
        $data += compact('nilai_sem_dua');

        // Cek, jika ada nilai semester dua maka hitung rata-rata angkatan dan ranking user
        if(isset($nilai_sem_dua)){
            $nilai_sem_dua = $nilai_sem_dua->ip;
            $rata_sem_dua = NilaiSemDua::avg('ip');
            $nilai_all_sem_dua = NilaiSemDua::orderBy('ip', 'desc')->pluck('ip')->toArray();
            $rank_sem_dua = array_search($nilai_sem_dua, $nilai_all_sem_dua) + 1;
            $partisipan_sem_dua = NilaiSemDua::count();
            // Tambahkan data rata-rata dan ranking
            $data += compact(
                'rata_sem_dua',
                'rank_sem_dua',
                'partisipan_sem_dua'
            );
            // Ubah data objek nilai semester dua menjadi angka
            $data['nilai_sem_dua'] = $nilai_sem_dua;
        }

        // --- SEMESTER 3 ---

        // Ambil tabel nilai semester 3, return objek
        $id = session('user')->id;
        $nilai_sem_tiga = User::find($id)->nilaiSemTiga()->first();
        $data += compact('nilai_sem_tiga');

        // Cek, jika ada nilai semester tiga maka hitung rata-rata angkatan dan ranking user
        if(isset($nilai_sem_tiga)){
            $nilai_sem_tiga = $nilai_sem_tiga->ip;
            $rata_sem_tiga = NilaiSemTiga::avg('ip');
            $nilai_all_sem_tiga = NilaiSemTiga::orderBy('ip', 'desc')->pluck('ip')->toArray();
            $rank_sem_tiga = array_search($nilai_sem_tiga, $nilai_all_sem_tiga) + 1;
            $partisipan_sem_tiga = NilaiSemTiga::count();
            // Tambahkan data rata-rata dan ranking
            $data += compact(
                'rata_sem_tiga',
                'rank_sem_tiga',
                'partisipan_sem_tiga'
            );
            // Ubah data objek nilai semester tiga menjadi angka
            $data['nilai_sem_tiga'] = $nilai_sem_tiga;
        }

        // --- SEMESTER 4 ---

        // Ambil tabel nilai semester 4, return objek
        $id = session('user')->id;
        $nilai_sem_empat = User::find($id)->nilaiSemEmpat()->first();
        $data += compact('nilai_sem_empat');

        // Cek, jika ada nilai semester empat maka hitung rata-rata angkatan dan ranking user
        if(isset($nilai_sem_empat)){
            $nilai_sem_empat = $nilai_sem_empat->ip;
            $rata_sem_empat = NilaiSemEmpat::avg('ip');
            $nilai_all_sem_empat = NilaiSemEmpat::orderBy('ip', 'desc')->pluck('ip')->toArray();
            $rank_sem_empat = array_search($nilai_sem_empat, $nilai_all_sem_empat) + 1;
            $partisipan_sem_empat = NilaiSemEmpat::count();
            // Tambahkan data rata-rata dan ranking
            $data += compact(
                'rata_sem_empat',
                'rank_sem_empat',
                'partisipan_sem_empat'
            );
            // Ubah data objek nilai semester empat menjadi angka
            $data['nilai_sem_empat'] = $nilai_sem_empat;
        }

        // --- SEMESTER 5 ---

        // Ambil tabel nilai semester 5, return objek
        $id = session('user')->id;
        $nilai_sem_lima = User::find($id)->nilaiSemLima()->first();
        $data += compact('nilai_sem_lima');

        // Cek, jika ada nilai semester lima maka hitung rata-rata angkatan dan ranking user
        if(isset($nilai_sem_lima)){
            $nilai_sem_lima = $nilai_sem_lima->ip;
            $rata_sem_lima = NilaiSemLima::avg('ip');
            $nilai_all_sem_lima = NilaiSemLima::orderBy('ip', 'desc')->pluck('ip')->toArray();
            $rank_sem_lima = array_search($nilai_sem_lima, $nilai_all_sem_lima) + 1;
            $partisipan_sem_lima = NilaiSemLima::count();
            // Tambahkan data rata-rata dan ranking
            $data += compact(
                'rata_sem_lima',
                'rank_sem_lima',
                'partisipan_sem_lima'
            );
            // Ubah data objek nilai semester lima menjadi angka
            $data['nilai_sem_lima'] = $nilai_sem_lima;
        }

        // --- SEMESTER 6 ---

        // Ambil tabel nilai semester 6, return objek
        $id = session('user')->id;
        $nilai_sem_enam = User::find($id)->nilaiSemEnam()->first();
        $data += compact('nilai_sem_enam');

        // Cek, jika ada nilai semester enam maka hitung rata-rata angkatan dan ranking user
        if(isset($nilai_sem_enam)){
            $nilai_sem_enam = $nilai_sem_enam->ip;
            $rata_sem_enam = NilaiSemEnam::avg('ip');
            $nilai_all_sem_enam = NilaiSemEnam::orderBy('ip', 'desc')->pluck('ip')->toArray();
            $rank_sem_enam = array_search($nilai_sem_enam, $nilai_all_sem_enam) + 1;
            $partisipan_sem_enam = NilaiSemEnam::count();
            // Tambahkan data rata-rata dan ranking
            $data += compact(
                'rata_sem_enam',
                'rank_sem_enam',
                'partisipan_sem_enam'
            );
            // Ubah data objek nilai semester enam menjadi angka
            $data['nilai_sem_enam'] = $nilai_sem_enam;
        } 
        
        // --- SKD ---

        // Ambil tabel nilai skd, return objek
        $id = session('user')->id;
        $nilai_skd = User::find($id)->skd()->first();
        $data += compact('nilai_skd');

        // Cek, jika ada skd maka hitung rata-rata angkatan dan ranking user
        if(isset($nilai_skd)){
            $nilai_skd = $nilai_skd->skd;
            $rata_skd = skd::avg('skd');
            $nilai_all_skd = skd::orderBy('skd', 'desc')->pluck('skd')->toArray();
            $rank_skd = array_search($nilai_skd, $nilai_all_skd) + 1;
            $partisipan_skd = skd::count();
            // Tambahkan data rata-rata dan ranking
            $data += compact(
                'rata_skd',
                'rank_skd',
                'partisipan_skd'
            );
            // Ubah data objek skd menjadi angka
            $data['nilai_skd'] = $nilai_skd;
        }   
        
        return view('dashboard',$data);
    }
}
