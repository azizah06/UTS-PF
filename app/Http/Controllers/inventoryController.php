<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\tb_barang;
use App\Models\tb_satuan;
use Illuminate\Http\Request;

class inventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = tb_barang::all();
        return view('inventory.index', [
            // 'pageTitle' => $pageTitle,
            'barang' => $barang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $satuan = tb_satuan::all();
        return view('inventory.create', compact('satuan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $validator = Validator::make($request->all(), [
        //     'kode_barang' => ['required', 'unique:tb_barangs,kode_barang'],
        //     'nama_barang' => ['required', 'string'],
        //     'harga_barang' => ['required', 'numeric'],
        //     'deskripsi_barang' => ['required', 'string'],
        //     'satuan' => ['required', 'exists:tb_satuans,id'],
        // ], [
        //     'kode_barang.required' => 'Kode Barang harus diisi.',
        //     'kode_barang.unique' => 'Kode Barang sudah digunakan.',
        //     'nama_barang.required' => 'Nama Barang harus diisi.',
        //     'harga_barang.required' => 'Harga Barang harus diisi.',
        //     'harga_barang.numeric' => 'Harga Barang harus berupa angka.',
        //     'deskripsi_barang.required' => 'Deskripsi Barang harus diisi.',
        //     'satuan.required' => 'Satuan Barang harus dipilih.',
        //     'satuan.exists' => 'Satuan Barang tidak valid.',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // dd($request->all());
        $messages = [
            'unique' => 'ID Barang Sudah ada.',
            'numeric' => 'Isi :attribute dengan angka',
            'required' => 'Mohon diisi'
        ];

        $validator = Validator::make($request->all(), [
            'kode_barang' => ['required', 'unique:tb_barangs,kode_barang'],
            'nama_barang' => 'required',
            'harga_barang' => 'required',
            'deskripsi_barang' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $barang = new tb_barang;
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->satuan_barang_id = $request->satuan;
        $barang->save();

        return redirect()->route('inventorys.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang = tb_barang::findOrFail($id);
        return view('inventory.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $satuan = tb_satuan::all();
        $barang = tb_barang::findOrFail($id);
        return view('inventory.edit', compact('satuan', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'unique' => 'ID Barang Sudah ada.',
            'numeric' => 'Isi :attribute dengan angka',
            'required' => 'Mohon diisi'
        ];

        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required',
            'harga_barang' => 'required',
            'deskripsi_barang' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $barang = tb_barang::findOrFail($id);
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->satuan_barang_id = $request->satuan;
        $barang->save();

        return redirect()->route('inventorys.index')->with('success', 'Data Berhasil Ubah ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        tb_barang::find($id)->delete();
        return redirect()->route('inventorys.index')->with('success', 'Data Berhasil Di Hapus');
    }
}
