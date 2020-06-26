<?php

namespace App\Http\Controllers;
use App\Barang;
use App\Pesanan;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TumbasoController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $barang = Barang::paginate(10);
        return view('tumbaso.index', compact('barang'));
    }

    public function create()
    {
        return view('tumbaso.create');
    }
    // public function store(Request $request)
    // {
    //   $barang = new Barang;
    //   $barang ->id =$request->id;
    //   $barang ->nama_barang = $request->nama_barang;
    //   $barang ->harga = $request->harga;
    //   $barang ->stok = $request->stok;
    //   $barang ->gambar = $request->gambar;
    //   $barang ->keterangan = $request->keterangan;
    //   $barang ->save();

    //   return redirect('/zara');
    // }

    public function proses_upload(Request $request){

            $file = $request->file('gambar');
    
            $tujuan_upload = 'uploads';
            
            $name_image = $file->getClientOriginalName();

            $file->move($tujuan_upload, $name_image);

            $barang = new Barang;
            $barang ->id =$request->id;
            $barang ->nama_barang = $request->nama_barang;
            $barang ->harga = $request->harga;
            $barang ->stok = $request->stok;
            $barang ->gambar = $file->getClientOriginalName();
            $barang ->keterangan = $request->keterangan;
            $barang ->save();

         return redirect('/zara');

    }

    public function edit(Request $request, $id)
    {
        $barang = Barang::find($id);

        return view('tumbaso.edit', ['barang'=> $barang]);
    }

    public function update(Request $request, $id)
    {

            $file = $request->file('gambar');

            if ($file = $request->file('gambar')) {

                $tujuan_upload = 'uploads';
        
                $name_image = $file->getClientOriginalName();

                $file->move($tujuan_upload, $name_image);
                

                $barang = Barang::where('id',$id)->first();
                $barang ->nama_barang = $request->nama_barang;
                $barang ->harga = $request->harga;
                $barang ->stok = $request->stok;
                $barang ->gambar = $file->getClientOriginalName();
                $barang ->keterangan = $request->keterangan;
                $barang ->save();
            
            } else {
                $barang = Barang::where('id',$id)->first();
                $barang ->nama_barang = $request->nama_barang;
                $barang ->harga = $request->harga;
                $barang ->stok = $request->stok;
                $barang ->keterangan = $request->keterangan;
                $barang ->save();
            }
    
        

        return redirect('/zara');
    }

    public function destroy($id)
    {
        // DB::table('barang')->where('id',$id)->delete();
        $barang = Barang::where('id',$id)->delete();
        
        return redirect('/zara');
    }
}