<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
// use Illuminate\Contracts\Auth\Authenticatable;
use App\Models\User;

class AuthController extends Controller
{

    public function redirect(){
        return Socialite::driver('google')->redirect();
    }
    public function proses(){
        // Ambil data user dari google
        $user = Socialite::driver('google')->stateless()->user();
        // $user = Socialite::driver('google')->user();

        $user_data = $user->user;
        // Cek email pkn stan
        if( isset($user_data['hd']) && ($user_data['hd'] == 'pknstan.ac.id')){
            $email = $user_data['email'];
            $npm = explode('_',$email)[0];
            // Cek email manset 18
            if(preg_match("/430218/i", $npm)){

            } else {
                $this->flash_data('warning','Maaf, website ini hanya mengakomodir mahasiswa Manajemen Aset angkatan 2018');
                return view('guest');
            }
        } else {
            $this->flash_data('danger','Gunakan alamat gmail dengan domain pknstan.ac.id');
            return view('guest');
        }

        // cocokan dengan database
        $user_lama = User::where('google_id', $user->id)->first();
        if(!empty($user_lama)){
            session(['user' => $user_lama]);
            return redirect(route('dashboard'));
        } else {
            $user_baru = new User();
            $user_baru->name = $user->getName();
            $user_baru->email = $user->getEmail();
            $user_baru->google_id = $user->getId();
            $user_baru->avatar = $user->getAvatar();
            $user_baru->npm = $npm;
            $user_baru->ipk = null;
            $user_baru->is_anonim = 0;
            $user_baru->save();
            session(['user' => $user_baru]);
            return redirect(route('dashboard'));
        }
    }
    public function logout(){
        session()->forget('user');
        return redirect(route('guest'));
    }
}
