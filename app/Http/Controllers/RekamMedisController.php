<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\RekamMedis;
use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
    public function index_rekam_medis() {
        return view('index-rekam-medis', [
            "rekam_medis" => RekamMedis::all()
        ]);
    }

    public function pasien_rekam_medis($id) {
        return view('pasien-rekam-medis', [
            "rekam_medis_pasien" => RekamMedis::where('pasien_id', $id)->get(),
            "nama_pasien" => Pasien::where('id', $id)->first()
        ]);
    }
    
    public function dokter_rekam_medis($id) {
        return view('dokter-rekam-medis', [
            "rekam_medis_dokter" => RekamMedis::where('dokter_id', $id)->get(),
            "nama_dokter" => Dokter::where('id', $id)->first()
        ]);
    }

    public function form_rekam_medis() {
        return view('form-rekam-medis', [
            "pasien" => Pasien::all(),
            "dokter" => Dokter::all()
        ]);
    }

    public function post_rekam_medis(Request $request) {
        // dd($request->pasien);
        $rekam_medis = new RekamMedis;
        $rekam_medis->pasien_id = $request->pasien;
        $rekam_medis->dokter_id = $request->dokter;
        $rekam_medis->kondisi = $request->kondisi;
        $rekam_medis->suhu = $request->suhu;
        
        $imageName = $request->image->getClientOriginalName();
        $uploadedImage = $request->file("image");
        $uploadedImage->move(public_path().'/images/', $imageName);
        $rekam_medis->image = $imageName;

        $rekam_medis->save();
        return redirect('/dashboard');
    }
}
