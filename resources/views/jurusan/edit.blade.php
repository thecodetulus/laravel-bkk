@extends('layouts.master')


@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="card-body">
                        <form action="{{ route('jurusan.update', $jurusan->id_jurusan) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nama_jurusan">Nama Jurusan</label>
                                <input type="text" class="form-control @error('nama_jurusan') is-invalid @enderror" id="nama_jurusan" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}">
                                @error('nama_jurusan')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="bidang">Bidang</label>
                                <input class="form-control @error('bidang') is-invalid @enderror" id="bidang" name="bidang" value="{{ $jurusan->bidang }}">
                                @error('bidang')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                            <a href="/jurusan" class="btn btn-warning pull-left">Kembali</a>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection