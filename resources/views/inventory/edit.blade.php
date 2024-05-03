@extends('layouts.app')

@section('content')
    <!-- Page content -->
    <div class="container-sm my-5 pt-5">
        <form action="{{ route('inventorys.update', $barang->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                {{-- Dan Seterusnya --}}
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <h4>Edit Data Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input value="{{ $barang->kode_barang }}"
                                class="form-control @error('kode_barang') is-invalid @enderror"
                                type="text"name="kode_barang" id="kode_barang" value="{{ old('kode_barang') }}"
                                placeholder="Masukkan Kode Barang" readonly>
                            @error('kode_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input
                                value="{{ $barang->nama_barang }}"class="form-control @error('nama_barang') is-invalid @enderror"
                                type="text" name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}"
                                placeholder="Masukkan Nama Barang">
                            @error('nama_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga_barang" class="form-label">Harga Barang</label>
                            <input value="{{ $barang->harga_barang }}"
                                class="form-control @error('harga_barang') is-invalid
                            @enderror"
                                type="number" name="harga_barang" id="harga_barang" value="{{ old('harga_barang') }}"
                                placeholder="Masukkan Harga Barang">
                            @error('harga_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsi_barang" class="form-label">Deskripsi Barang</label>
                            <input value="{{ $barang->deskripsi_barang }}"
                                class="form-control @error('deskripsi_barang') is-invalid
                            @enderror"
                                type="text" name="deskripsi_barang" id="deskripsi_barang"
                                value="{{ old('deskripsi_barang') }}" placeholder="Masukkan Deskripsi">
                            @error('deskripsi_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="satuan" class="form-label">Satuan</label>
                            <select class="form-select" name="satuan" id="satuan" required>
                                @php
                                    $selected = '';
                                    if ($errors->any()) {
                                        $selected = old('satuan');
                                    } else {
                                        $selected = $barang->satuan_barang_id;
                                    }
                                @endphp
                                @foreach ($satuan as $s)
                                    <option value="{{ $s->id }}" {{ $selected == $s->id ? 'selected' : '' }}>
                                        {{ $s->kode_satuan . ' - ' . $s->nama_satuan }}</option>
                                @endforeach
                            </select>
                            @error('satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('inventorys.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i>
                                Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-success btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
    </div>
@endsection
