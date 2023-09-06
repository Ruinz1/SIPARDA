<?php

namespace App\Http\Controllers\Admin;

use App\Models\EventWisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\EventWistaFormRequest;

class EventWisataController extends Controller
{
    public function index(){
        $event = EventWisata::all();
        return view('admin.event-wisata.index', compact('event'));
    }

    public function create()
    {
        $event = EventWisata::all();
        return view('admin.event-wisata.create');
    }

    public function store(EventWistaFormRequest $request)
    {
        $data = $request->validated();

        $event = new EventWisata;
        $event->nama_event = $data['nama_event'];
        $event->lokasi_event = $data['lokasi_event'];
        $event->tanggal_event = $data['tanggal_event'];
        $event->deskripsi = $data['deskripsi'];
        $event->informasi = $data['informasi'];
        $event->embed_gmaps = $data['embed_gmaps'];

       
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/event-wisata/', $filename);
            $event->image = $filename;
        }
       
        $event->save();

        return redirect('admin/event-wisata')->with('message', 'Add Success');
    }

    public function edit($id){
        $event = EventWisata::find($id);
        return view('admin.event-wisata.edit', compact('event'));
    }

    public function update(EventWistaFormRequest $request, $id){
        $data = $request->validated();
        
        $event = EventWisata::find($id);
        
        $event->nama_event = $data['nama_event'];
        $event->lokasi_event = $data['lokasi_event'];
        $event->tanggal_event = $data['tanggal_event'];
        $event->deskripsi = $data['deskripsi'];
        $event->informasi = $data['informasi'];
        $event->embed_gmaps = $data['embed_gmaps'];

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/event-wisata/', $filename);
            $event->image = $filename;
        }

        $event->update();

        return redirect('admin/event-wisata')->with('message', 'Update Success');
    }

    public function destroy($id){
        $event = EventWisata::find($id);
        if($event)
        {
            $destination = 'uploads/event-wisata/'.$event->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $event->delete();
            return redirect('admin/event-wisata')->with('message', 'Delete Data Success');
        }
        else{
            return redirect('admin/paket-wisata')->with('message', 'No Data Found');
        }
    }
}
