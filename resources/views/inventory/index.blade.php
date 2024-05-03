@extends('layouts.app')

@section('content')
    <!-- Page content -->
    <div class="table-inventory pt-5 mt-5">

        <div class="container mb-0">
            <div class="row">

                <div class="col">
                    <h3>Data Barang</h3>

                </div>
                <div class="col-auto mb-4">

                    <a href="{{ route('inventorys.create') }}" class="btn btn-primary">Tambah Inventory</a>
                </div>
            </div>
            @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

            {{-- <hr> --}}
            <div class="table-responsive border p-3 rounded-3">
                <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Satuan</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $sortedBarang = $barang->sortBy('kode_barang');
                    @endphp
                    @foreach ($sortedBarang as $barangs)
                        {{-- @foreach ($barang as $barangs) --}}
                            <tr>
                                <td>{{ $barangs->kode_barang }}</td>
                                <td>{{ $barangs->nama_barang }}</td>
                                <td>Rp. {{ number_format($barangs->harga_barang, 0, ',', '.') }}</td>
                                <td>{{ $barangs->satuan->kode_satuan }}</td>
                                <td>{{ $barangs->deskripsi_barang }}</td>
                                <td>
                                    <a class="btn btn-sm btn-success" href="{{ route('inventorys.show', $barangs->id) }}">Detail</a>
                                    <a class="btn btn-sm btn-outline-warning"
                                        href="{{ route('inventorys.edit', $barangs->id) }}">Edit</a>
                                    <form action="{{ route('inventorys.destroy', $barangs->id) }}" method="POST" type="button"
                                        class="btn btn btn-outline-danger p-0"
                                        onsubmit="return confirm('Yakin Hapus Data ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger m-0 border-0">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
