@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">mobil</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Tambah Data mobil</li>
            </ol>
            <a href="/mobil" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/mobil/simpan-data" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">nama Mobil</label>
                        <input type="text" class="form-control" name="nama_mobil" required>
                    </div>
                    <div class="form-group">
                        <label for="">cc</label>
                        <input type="text" class="form-control" name="cc" required>
                    </div>
                    <div class="form-group">
                        <label for="">tahun Mobil</label>
                        <input type="text" class="form-control" name="tahun_mobil" required>
                    </div>
                    <div class="form-group">
                        <label for="">nomor polisi</label>
                        <input type="text" class="form-control" name="nomor_polisi" required>
                    </div>
                    <div class="form-group">
                        <label for="">warna</label>
                        <input type="text" class="form-control" name="warna" required>
                    </div>
                    <div class="form-group">
                        <label for="">foto</label>
                        <input type="file" class="form-control" name="foto" required>
                    </div>
                    <div class="form-group">
                        <label for="">merk mobil</label>
                        <select name="merk_id" class="form-control">
                            @foreach ($MerkData as $merk)
                                <option value="{{ $merk->id }}">{{ $merk->merk }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">tipe mobil</label>
                        <select name="tipe_mobil_id" class="form-control">
                            @foreach ($TipeMobilData as $tipe)
                                <option value="{{ $tipe->id }}">{{ $tipe->tipe }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
