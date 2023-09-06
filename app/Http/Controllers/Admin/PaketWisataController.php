<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;
use App\Models\PaketWisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PaketWistaFormRequest;

class PaketWisataController extends Controller
{
    public function index()
    {
        $paketwisata = PaketWisata::all();
        return view('admin.paket-wisata.index', compact('paketwisata'));
    }
    public function create()
    {
        $paketwisata = PaketWisata::all();
        return view('admin.paket-wisata.create');
    }

    public function store(PaketWistaFormRequest $request)
    {
        $data = $request->validated();

        $paketwisata = new PaketWisata;
        $paketwisata->nama_paket_wisata = $data['nama_paket_wisata'];
        $paketwisata->lokasi_tempat_wisata = $data['lokasi_tempat_wisata'];
        $paketwisata->nama_tempat_wisata = $data['nama_tempat_wisata'];
        $paketwisata->kontak =  $data['kontak'];
        $paketwisata->deskripsi_singkat = $data['deskripsi_singkat'];
        $paketwisata->informasi = $data['informasi'];
        $paketwisata->embed_gmaps = $data['embed_gmaps'];
        $paketwisata->tour = $data['tour'];
       
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/paket-wisata/', $filename);
            $paketwisata->image = $filename;
        }
       
        $paketwisata->save();

        return redirect('admin/paket-wisata')->with('message', 'Add Success');
    }

    public function edit($id){
        $paketwisata = PaketWisata::find($id);
        return view('admin.paket-wisata.edit', compact('paketwisata'));
    }

    public function update(PaketWistaFormRequest $request, $id){
        $data = $request->validated();
        
        $paketwisata = PaketWisata::find($id);
        
        $paketwisata->nama_paket_wisata = $data['nama_paket_wisata'];
        $paketwisata->lokasi_tempat_wisata = $data['lokasi_tempat_wisata'];
        $paketwisata->nama_tempat_wisata = $data['nama_tempat_wisata'];
        $paketwisata->kontak =  $data['kontak'];
        $paketwisata->deskripsi_singkat = $data['deskripsi_singkat'];
        $paketwisata->informasi = $data['informasi'];
        $paketwisata->embed_gmaps = $data['embed_gmaps'];
        $paketwisata->tour = $data['tour'];

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/paket-wisata/', $filename);
            $paketwisata->image = $filename;
        }

        $paketwisata->update();

        return redirect('admin/paket-wisata')->with('message', 'Update Success');
    }

    public function destroy($id){
        $paketwisata = PaketWisata::find($id);
        if($paketwisata)
        {
            $destination = 'uploads/paket-wisata/'.$paketwisata->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $paketwisata->delete();
            return redirect('admin/paket-wisata')->with('message', 'Delete Data Success');
        }
        else{
            return redirect('admin/paket-wisata')->with('message', 'No Data Found');
        }
    }
}
