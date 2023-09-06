<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ekraf;
use App\Mail\MailSend;
use App\Mail\MailDenied;
use Illuminate\Http\Request;
use App\Models\CategorySubEkraf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Admin\EkrafFromRequest;


class EkrafController extends Controller
{
    public function index()
    {
        $ekraf = Ekraf::all();
        return view('admin.ekraf.index', compact('ekraf'));
    }
    public function create()
    {
        $category = CategorySubEkraf::all();
        return view('admin.ekraf.create', compact('category'));
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
        $ekraf->status = $data['status'];
       
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/ekraf/', $filename);
            $ekraf->image = $filename;
        }
       
        $ekraf->save();

        return redirect('admin/ekraf')->with('message', 'Add Success');
    }

    public function edit($id){
        $category = CategorySubEkraf::all();
        $ekraf = Ekraf::find($id);
        return view('admin.ekraf.edit', compact('ekraf','category'));
    }

    public function update(EkrafFromRequest $request, $id){
        $data = $request->validated();

        $ekraf = Ekraf::find($id);

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
        $ekraf->status = $data['status'];
       
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/ekraf/', $filename);
            $ekraf->image = $filename;
        }
       
        $ekraf->update();

        return redirect('admin/ekraf')->with('message', 'Update Success');

    }

    public function destroy($id){
        $ekraf = Ekraf::find($id);
        if($ekraf)
        {
            $destination = 'uploads/ekraf/'.$ekraf->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $ekraf->delete();
            return redirect('admin/ekraf')->with('message', 'Delete Data Success');
        }
        else{
            return redirect('admin/ekraf')->with('message', 'No Data Found');
        }
    }

    public function verifiedekraf($id, Request $request){
        
        $ekraf = Ekraf::find($id);
        $ekraf->status = 'Active';

        $ekraf->update();

        $details = [
            'nama' => $ekraf->nama,
            'nama_usaha' => $ekraf->nama_usaha,
            'website' => $ekraf->website,
        ];
         
        Mail::to($ekraf->email)->send(new MailSend($details));



        return redirect('admin/ekraf')->with('message', 'Berhasil Kirim Email');

    }
    
    public function deniedekraf($id){
        
        $ekraf = Ekraf::find($id);
        $ekraf->status = 'Denied';

        $ekraf->update();

        $details = [
            'nama' => $ekraf->nama,
            'nama_usaha' => $ekraf->nama_usaha,
            'website' => $ekraf->website,
        ];
         
        Mail::to($ekraf->email)->send(new MailDenied($details));


        return redirect('admin/ekraf')->with('message', 'Berhasil Kirim Email');

    }

}
