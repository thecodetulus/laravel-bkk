@extends('layouts.master')

@section('title')
    lowongan
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">lowongan</h3>
                    <br><br>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                        Tambah lowongan
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Tambah Data lowongan</h4>
                                </div>

                                {{-- tampilan form tambah lowongan --}}
                                <form action="{{ route('lowongan.store') }}" class="form-horizontal" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="box box-info">
                                            <div class="box-header with-border">
                                            </div>
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="id_admin" class="col-sm-3">Admin :</label>
                                                    <div class="col-sm-7">
                                                        <select name="id_admin" id="id_admin" class="form-control">
                                                          <option value="">= Pilih Admin =</option>
                                                          @foreach ($admin as $a)
                                                              <option value="{{ $a->id_admin }}">{{ $a->nama_admin }}</option>
                                                          @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="id_mitra" class="col-sm-3">Mitra :</label>
                                                    <div class="col-sm-7">
                                                      <select name="id_mitra" id="id_mitra" class="form-control">
                                                        <option value="">= Pilih Mitra =</option>
                                                        @foreach ($mitra as $m)
                                                            <option value="{{ $m->id_mitra }}">{{ $m->nama_mitra }}</option>
                                                        @endforeach
                                                      </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_lowongan" class="col-sm-3">Nama lowongan :</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="nama_lowongan"
                                                            name="nama_lowongan" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl_lowongan" class="col-sm-3">Tanggal Dibuka :</label>
                                                    <div class="col-sm-7">
                                                        <input type="date" class="form-control" id="tgl_lowongan"
                                                            name="tgl_lowongan" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl_habis" class="col-sm-3">Tanggal Berakhir :</label>
                                                    <div class="col-sm-7">
                                                        <input type="date" class="form-control" id="tgl_habis"
                                                            name="tgl_habis" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="keterangan" class="col-sm-3">Keterangan :</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="keterangan"
                                                            name="keterangan" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="bidang" class="col-sm-3">Bidang :</label>
                                                    <div class="col-sm-7">
                                                        <select name="bidang" id="bidang" class="form-control" required>
                                                            <option value="">Pilih Bidang</option>
                                                            @foreach ($jurusan as $j)
                                                                <option value="{{ $j->bidang }}">{{ $j->bidang }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left"
                                            data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- tamilan nama field tabel --}}
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <th width="2%">No</th>
                            <th>Nama Admin</th>
                            <th>Mitra</th>
                            <th>Nama Lowongan</th>
                            <th>Tanggal Dibuka</th>
                            <th>Tanggal Berakhir</th>
                            <th>Keterangan</th>
                            <th>Bidang</th>
                            <th width="5%"><i class="fa fa-pencil"></i></th>
                            <th width="6%"><i class="fa fa-trash"></i></th>
                        </thead>

                        {{-- isi tabel --}}
                        <tbody>
                            <?php $i = 1 ?>
                            @foreach ($lowongan as $l)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $l->admin->nama_admin }}</td>
                                <td>{{ $l->mitra->nama_mitra }}</td>
                                <td>{{ $l->nama_lowongan }}</td>
                                <td>{{ $l->tgl_lowongan }}</td>
                                <td>{{ $l->tgl_habis }}</td>
                                <td>{{ $l->keterangan }}</td>
                                <td>{{ $l->bidang }}</td>
                                <td>
                                    <a href="{{ route('lowongan.edit', $l->id_lowongan) }}" class="btn btn-sm btn-primary">Edit</a>

                                </td>
                                <td>
                                    <form action="{{ route('lowongan.destroy', $l->id_lowongan) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <?php $i++ ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection