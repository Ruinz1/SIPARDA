<?php

namespace App\Http\Controllers;

use App\Models\Ekraf;
use App\Models\EventWisata;
use App\Models\PaketWisata;
use Illuminate\Http\Request;
use App\Models\CategorySubEkraf;
use App\Http\Requests\Admin\EkrafFromRequest;

class LandingPage extends Controller
{
public function index()
{
    $ekraf = Ekraf::all();
    $category = CategorySubEkraf::all();
    $event = EventWisata::all();
    $paketwisata = PaketWisata::all();
    $toppw = PaketWisata::orderBy('created_at', 'DESC')->get()->take(3);
    $topevent = EventWisata::orderBy('created_at', 'DESC')->get()->take(2);
    $sub = CategorySubEkraf::orderBy('created_at', 'DESC')->get()->take(3);
    $kriya = Ekraf::where('id_category_sub_ekraf', '1')->count();
    $sp = Ekraf::where('id_category_sub_ekraf', '2')->count();
    $dp = Ekraf::where('id_category_sub_ekraf', '3')->count();
    return view('landing_page', compact('ekraf','category','event','paketwisata','toppw','topevent','sub'
    ,'kriya','sp','dp'));
}

public function allPaket()
{
    $paketwisata = PaketWisata::all();
   
    return view('pages.all-paket', compact('paketwisata'));
}  

public function indexpaket($id){
    $paketwisata = PaketWisata::find($id);
    return view('pages.paket-wisata', compact('paketwisata'));
}

public function allEvent()
{
    $event = EventWisata::all();
   
    return view('pages.all-event', compact('event'));
}  

public function indexevent($id){
    $event = EventWisata::find($id);
    return view('pages.event-wisata', compact('event'));
}


public function allEkraf()
{
    $ekraf = Ekraf::all();
    $category = CategorySubEkraf::all();
    $kriya      = Ekraf::where('id_category_sub_ekraf', '1')->where('status', 'Active')->count();
    $sp         = Ekraf::where('id_category_sub_ekraf', '2')->where('status', 'Active')->count();
    $dp         = Ekraf::where('id_category_sub_ekraf', '3')->where('status', 'Active')->count();
    $sr         = Ekraf::where('id_category_sub_ekraf', '4')->where('status', 'Active')->count();
    $kuliner    = Ekraf::where('id_category_sub_ekraf', '5')->where('status', 'Active')->count();
    $fotografi  = Ekraf::where('id_category_sub_ekraf', '6')->where('status', 'Active')->count();
    $musik      = Ekraf::where('id_category_sub_ekraf', '7')->where('status', 'Active')->count();
    $arsitektur = Ekraf::where('id_category_sub_ekraf', '8')->where('status', 'Active')->count();
    $di         = Ekraf::where('id_category_sub_ekraf', '9')->where('status', 'Active')->count();
    $fashion    = Ekraf::where('id_category_sub_ekraf', '10')->where('status', 'Active')->count();
    $af         = Ekraf::where('id_category_sub_ekraf', '11')->where('status', 'Active')->count();
    $dk         = Ekraf::where('id_category_sub_ekraf', '12')->where('status', 'Active')->count();
    $tvd        = Ekraf::where('id_category_sub_ekraf', '13')->where('status', 'Active')->count();
    $iklan      = Ekraf::where('id_category_sub_ekraf', '14')->where('status', 'Active')->count();
    $penerbitan = Ekraf::where('id_category_sub_ekraf', '15')->where('status', 'Active')->count();
    $apk        = Ekraf::where('id_category_sub_ekraf', '16')->where('status', 'Active')->count();
    $pg         = Ekraf::where('id_category_sub_ekraf', '17')->where('status', 'Active')->count();
    
    return view('pages.all-ekraf', compact('ekraf','category',
    'kriya','sp','dp','sr','kuliner','fotografi','musik','arsitektur','di','fashion','af','dk'
    ,'tvd','iklan','penerbitan','apk','pg'));
}   

public function create()
    {
        $category = CategorySubEkraf::all();
        return view('pages.daftar-ekraf', compact('category'));
    }

public function store(EkrafFromRequest $request)
    {
        $data = $request->validated();

        $ekraf = new Ekraf;
        $ekraf->nama = $data['nama'];
        $ekraf->no_whatsapp = $data['no_whatsapp'];
        $ekraf->email = $data['email'];
        $ekraf->jenis_kelamin = $data['jenis_kelamin'];
        $ekraf->nama_usaha = $data['nama_usaha'];
        $ekraf->alamat = $data['alamat'];
        $ekraf->lokasi_usaha = $data['lokasi_usaha'];
        $ekraf->jenis_usaha = $data['jenis_usaha'];
        $ekraf->tahun_berdiri = $data['tahun_berdiri'];
        $ekraf->jumlah_karyawan = $data['jumlah_karyawan'];
        $ekraf->modal = $data['modal'];
        $ekraf->omset = $data['omset'];
        $ekraf->marketplace = $data['marketplace'];
        $ekraf->website = $data['website'];
        $ekraf->permasalahan = $data['permasalahan'];
        $ekraf->id_category_sub_ekraf = $data['id_category_sub_ekraf'];
        $ekraf->status = 'Pending';
       
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/ekraf/', $filename);
            $ekraf->image = $filename;
        }
       
        $ekraf->save();

        return redirect('regis-ekraf')->with('message', 'Berhasil Ditambahkan');
    }

public function indexekraf(string $slug){
    $category = CategorySubEkraf::where('slug', $slug)->first();
    if($category){
        $ekraf = Ekraf::with('CategorySubEkraf')->get();
        return view('pages.category-ekraf', compact('ekraf','category'));
        }
    else{
         return redirect('all-ekraf');
    }
    }


}
