@extends('layouts.master')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="card-body">
                        <form action="{{ route('mitra.update', $mitra->id_mitra) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nama_mitra">Nama Mitra</label>
                                <input type="text" class="form-control @error('nama_mitra') is-invalid @enderror" id="nama_mitra" name="nama_mitra" value="{{ $mitra->nama_mitra }}">
                                @error('nama_mitra')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="alamat_mitra">Alamat Mitra</label>
                                <input class="form-control @error('alamat_mitra') is-invalid @enderror" id="alamat_mitra" name="alamat_mitra" value="{{ $mitra->alamat_mitra }}">
                                @error('alamat_mitra')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" value="{{ $mitra->telepon }}">
                                @error('telepon')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $mitra->email }}">
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="bidang">Bidang</label>
                                <select name="bidang" id="bidang" class="form-control">
                                    <option value="{{ $mitra->bidang }}">== Edit Bidang ==</option>
                                    @foreach ($jurusan as $j)
                                        <option value="{{ $j->bidang }}">{{ $j->bidang }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{ $mitra->keterangan }}">
                                @error('keterangan')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                            <a href="/mitra" class="btn btn-default pul-left">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection