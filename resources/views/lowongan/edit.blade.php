@extends('layouts.master')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="card-body">
                        <form action="{{ route('lowongan.update', $lowongan->id_lowongan) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="id_admin">Nama Admin</label>
                                <select name="id_admin" id="id_admin" class="form-control">
                                    <option value="{{ $lowongan->id_admin }}">== Edit Admin ==</option>
                                    @foreach ($admin as $a)
                                        <option value="{{ $a->id_admin }}">{{ $a->nama_admin }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="id_mitra">Nama Mitra</label>
                                <select name="id_mitra" id="id_mitra" class="form-control">
                                    <option value="{{ $lowongan->id_mitra }}">== Edit Mitra ==</option>
                                    @foreach ($mitra as $m)
                                        <option value="{{ $m->id_mitra }}">{{ $m->nama_mitra }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nama_lowongan">Nama Lowongan</label>
                                <input class="form-control @error('nama_lowongan') is-invalid @enderror" id="nama_lowongan" name="nama_lowongan" value="{{ $lowongan->nama_lowongan }}">
                                @error('nama_lowongan')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="tgl_lowongan">Tanggal Dibuka</label>
                                <input class="form-control @error('tgl_lowongan') is-invalid @enderror" id="tgl_lowongan" name="tgl_lowongan" value="{{ $lowongan->tgl_lowongan }}">
                                @error('tgl_lowongan')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="tgl_habis">Tanggal Ditutup</label>
                                <input class="form-control @error('tgl_habis') is-invalid @enderror" id="tgl_habis" name="tgl_habis" value="{{ $lowongan->tgl_habis }}">
                                @error('tgl_habis')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{ $lowongan->keterangan }}">
                                @error('keterangan')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="bidang">Bidang</label>
                                <select name="bidang" id="bidang" class="form-control">
                                    <option value="{{ $lowongan->bidang }}">== Edit Bidang ==</option>
                                    @foreach ($jurusan as $j)
                                        <option value="{{ $j->bidang }}">{{ $j->bidang }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                            <a href="/lowongan" class="btn btn-default pul-left">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection