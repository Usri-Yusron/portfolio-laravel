<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Projek;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //buat ke view add_projek
    public function add_projek(){
        return view('admin.child_projek.add_projek');
    }

    // buat save upload projek
    public function upload_projek(Request $request){
        $data = new Projek();

        $data->title = $request->title;
        $data->description = $request->description;
        $data->link = $request->link;

        // upload image
        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('projek', $imagename);

            $data->image = $imagename;
        }

        $data->save();
        // notif succes dari toastr
        toastr()->timeOut(10000)->closeButton()->success('Projek added successfully.');
        
        return redirect()->back();
    }

    // buat edit produk
    public function edit_projek($id){
        $data = Projek::find($id);

        return view('admin.child_projek.edit_projek', compact('data'));
    }

    // buat save edit projek
    public function saveEdit_projek(Request $request, $id){    
        $data = Projek::find($id);
    
        if (!$data) {
            // Jika projek tidak ditemukan
            return redirect('dashboard')->withErrors(['Projek not found.']);
        }
    
        // Simpan data yang diedit
        $data->title = $request->title;
        $data->description = $request->description;
        $data->link = $request->link;
        $image = $request->file('image');
    
        if ($image) {
            // Hapus gambar lama jika ada
            $imagePath = public_path('projek/'.$data->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
    
            // Simpan gambar baru
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('projek'), $imagename);
            $data->image = $imagename;
        }
    
        $data->save();
    
        // Tampilkan notifikasi sukses
        toastr()->timeOut(10000)->closeButton()->success('Projek updated successfully.');
    
        return redirect('dashboard');
    }
    

    // buat delete projek
    public function delete_projek($id){
        $data = Projek::find($id);

        // hapus gambar dari folder
        $imagePath = public_path('projek/'.$data->image);
        if(file_exists($imagePath)){
            unlink($imagePath);
        }

        $data->delete();
        // notif succes delete dari toastr
        toastr()->timeOut(10000)->closeButton()->warning('Projek deleted successfully.');
        return redirect()->back();
    }
    // buat projek selesai

    // buat sertifikat
        //buat ke view add_projek
    public function add_sertifikat(){
        return view('admin.child_sertifikat.add_sertifikat');
    }

        // buat save upload sertifikat
    public function upload_sertifikat(Request $request){
        $data = new Certificate();

        $data->title = $request->title;
        $data->link = $request->link;
        $data->by = $request->by;

        // upload image
        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('sertifikat', $imagename);

            $data->image = $imagename;
        }

        $data->save();
        // notif succes dari toastr
        toastr()->timeOut(10000)->closeButton()->success('Your Sertifikat added successfully.');
        
        return redirect('certificate');

    }

    // buat edit serifikat
    public function edit_sertifikat($id){
        $data = Certificate::find($id);

        return view('admin.child_sertifikat.edit_sertifikat', compact('data'));
    }

        // buat save edit sertifikat
    public function saveEdit_sertifikat(Request $request, $id){    
        $data = Certificate::find($id);
    
        if (!$data) {
            // Jika projek tidak ditemukan
            return redirect('certificate')->withErrors(['Projek not found.']);
        }
    
        // Simpan data yang diedit
        $data->title = $request->title;
        $data->link = $request->link;
        $data->by = $request->by;
        $image = $request->file('image');
    
        if ($image) {
            // Hapus gambar lama jika ada
            $imagePath = public_path('sertifikat/'.$data->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
    
            // Simpan gambar baru
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('sertifikat'), $imagename);
            $data->image = $imagename;
        }
    
        $data->save();
    
        // Tampilkan notifikasi sukses
        toastr()->timeOut(10000)->closeButton()->success('Certificate updated successfully.');
    
        return redirect('certificate');
    }

    // buat delete sertifikat
    public function delete_sertifikat($id){
        $data = Certificate::find($id);

        // hapus gambar dari folder
        $imagePath = public_path('sertifikat/'.$data->image);
        if(file_exists($imagePath)){
            unlink($imagePath);
        }

        $data->delete();
        // notif succes delete dari toastr
        toastr()->timeOut(10000)->closeButton()->warning('Sertifikat deleted successfully.');
        return redirect()->back();
    }
    // buat sertifikat selesai
    

}
