<?php

namespace App\Http\Controllers;

use App\Models\Komputer;
use Illuminate\Http\Request;
use Phpml\Clustering\KMeans;
use Phpml\Regression\LeastSquares;

class KomputerController extends Controller
{
    public function index()
    {
        // untuk mendapatkan seemua data pelanggan 
        $komputer = Komputer::latest()->get();

        // render view
        return view('komputer.index', compact('komputer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('komputer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // menambahakan validasi pada form
        $validate = $this->validate($request, [
            'merek'         => 'required|min:2',
            'bulan'         => 'required',
            'tahun'         => 'required',
            'jumlah'        => 'required|numeric',
        ]);

        // Untuk menambahkan daata ke dalam database
        Komputer::create($validate);
        // Redierect ke halaman index dengan mengirem pesan menggunkan session
        return redirect()->route('komputer.index')->with(['success' => 'Data Berhasil Ditambahkan!!!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // untuk mendecrypt kode pelanggan yang telah terenkripsi
        $decrypt = decrypt($id);
        // Untuk menampilkan data pelanggan berdasarkan Kode pelanggan
        $komputer = Komputer::where('id', $decrypt)->first();
        return view('komputer.show', compact('komputer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // untuk mendecrypt kode pelanggan yang telah terenkripsi
        $decrypt = decrypt($id);
        // Untuk menampilkan data pelanggan berdasarkan Kode pelanggan
        $komputer = Komputer::where('id', $decrypt)->first();
        return view('komputer.edit', compact('komputer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kode)
    {
        // menambahakan validasi pada form
        $validate = $this->validate($request, [
            'merek'         => 'required|min:2',
            'bulan'         => 'required',
            'tahun'         => 'required',
            'jumlah'        => 'required|numeric',
        ]);

        // untuk mendecrypt kode pelanggan yang telah terenkripsi
        $decrypt = decrypt($kode);
        // Untuk mencari data pelanggan berdasarkan kode pelanggan
        $komputer = Komputer::where('id', $decrypt);
        // Untuk menupdate data pelanggan
        $komputer->update($validate);
        // Redierect ke halaman index dengan mengirem pesan menggunkan session
        return redirect()->route('komputer.index')->with(['success' => 'Data Berhasil Diupdate!!!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // untuk mendecrypt kode pelanggan yang telah terenkripsi
        $decrypt = decrypt($id);
        // Untuk mencari data pelanggan berdasarkan kode pelanggan
        $komputer = Komputer::where('id', $decrypt);
        // Untuk menghapus data pelanggan
        $komputer->delete();
        // Redierect ke halaman index dengan mengirem pesan menggunkan session
        return redirect()->route('komputer.index')->with(['success' => 'Data Berhasil Dihapus!!!']);
    }

    public function tampil()
    {

        $merek = Komputer::select('merek')->groupBy('merek')->get();

        return view('komputer.predict', compact('merek'));
    }

    public function prediksi(Request $request)
    {
        // Mengambil data dari request yang dikirim user
        $merek = $request->input('merek');
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');

        // Mendapatkan data dari database berdasrkan merek yang diinputkan user
        $dataset = Komputer::where('merek', $merek)->get();

        // Menyimpan data samples dari database yang berisi bulan dan tahun
        $samples = [];
        // Mentimpan data targest dari database yang berisi jumlah penjualan
        $targets = [];

        foreach ($dataset as $data) {
            $samples[] = [$data->bulan, $data->tahun];
            $targets[] = $data->jumlah;
        }

        // Mengambil data dari inputan user sebagai data testing
        $testing = [$bulan, $tahun];

        // Menggunakan Library PHP-ML Algoritma Regresi Linier/Least Square Untuk Memprediksi Penjualan
        $regression = new LeastSquares();
        $regression->train($samples, $targets);
        $prediksiPenjualan = $regression->predict($testing);

        // Membulatkan Hasil Prediksi
        $prediksiPenjualan = round($prediksiPenjualan);

        return response()->json(['prediksiPenjualan' => $prediksiPenjualan]);
    }
}
