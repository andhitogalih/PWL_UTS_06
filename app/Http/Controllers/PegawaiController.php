<?php

    namespace App\Http\Controllers;
    
    use App\Models\Pegawai;
    use Illuminate\Http\Request;
    
    class PegawaiController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //fungsi eloquent menampilkan data menggunakan pagination
            $pegawai = Pegawai::all(); // Mengambil semua isi tabel
            $posts = Pegawai::orderBy('nip', 'desc')->paginate(6);
            return view('pegawai.index', compact('pegawai'))->with('i', (request()->input('page', 1) - 1) * 5);
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('pegawai.Create');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //melakukan validasi data
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'janbatan' => 'required',
            'gaji_pokok' => 'required',
        ]);
    
        //fungsi eloquent untuk menambah data
        Pegawai::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('pegawai.index')
        ->with('success', 'Pegawai Berhasil Ditambahkan');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($nip)
        {
            //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
            $Pegawai = Pegawai::find($nip);
            return view('pegawai.detail', compact('Pegawai'));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($nip)
        {
            $Pegawai = Pegawai::find($nip);
            return view('pegawai.edit', compact('Pegawai'));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $nip)
        {
            //melakukan validasi data
            $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'janbatan' => 'required',
            'gaji_pokok' => 'required',
            ]);
            //fungsi eloquent untuk mengupdate data inputan kita
            pegawai::find($nip)->update($request->all());
    
            //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai Berhasil Diupdate');
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($nip)
        {
            //fungsi eloquent untuk menghapus data
            Pegawai::find($nip)->delete();
             return redirect()->route('pegawai.index')
            -> with('success', 'Pegawai Berhasil Dihapus');
        }
    
        public function search(Request $request)
        {
            $keyword = $request->search;
            $pegawai = Pegawai::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
            return view('pegawai.index', compact('peagawai'))->with('i', (request()->input('page', 1) - 1) * 5);
        }
    }
