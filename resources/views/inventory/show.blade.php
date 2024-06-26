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
                        <h4>Detail Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input value="{{ $barang->kode_barang }}"
                                class="form-control @error('kode_barang') is-invalid @enderror"
                                type="text"name="kode_barang" id="kode_barang" value="{{ old('kode_barang') }}"
                                placeholder="Enter First Name" readonly>
                            @error('kode_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input
                                value="{{ $barang->nama_barang }}"class="form-control @error('nama_barang') is-invalid @enderror"
                                type="text" name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}"
                                placeholder="Enter Last Name" readonly>
                            @error('nama_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga_barang" class="form-label">harga_barang</label>
                            <input value="{{ $barang->harga_barang }}"
                                class="form-control @error('harga_barang') is-invalid
                            @enderror"
                                type="number" name="harga_barang" id="harga_barang" value="{{ old('harga_barang') }}"
                                placeholder="Enter harga_barang" readonly>
                            @error('harga_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsi_barang" class="form-label">deskripsi_barang</label>
                            <input value="{{ $barang->deskripsi_barang }}"
                                class="form-control @error('deskripsi_barang') is-invalid
                            @enderror"
                                type="text" name="deskripsi_barang" id="deskripsi_barang"
                                value="{{ old('deskripsi_barang') }}" placeholder="Enter deskripsi_barang" readonly>
                            @error('deskripsi_barang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="satuan" class="form-label">satuan</label>
                            <input  value="{{ $barang->satuan->kode_satuan . ' - ' . $barang->satuan->nama_satuan }}"
                                class="form-control @error('deskripsi_barang') is-invalid
                            @enderror"
                                type="text" name="deskripsi_barang" id="deskripsi_barang"
                                value="{{ old('deskripsi_barang') }}" placeholder="Enter deskripsi_barang" readonly>
                            {{-- <select class="form-select" name="satuan" id="satuan" required>
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
                            </select> --}}
                            @error('satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                    </div>
                    <hr>
                </div>
            </div>
    </div>
    </form>
    </div>
@endsection
