@extends('layouts.master')

@section('title')
    mitra
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Mitra</h3>
                    <br><br>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                        Tambah Mitra
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Tambah Data Mitra</h4>
                                </div>
                                <form action="{{ route('mitra.store') }}" class="form-horizontal" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="box box-info">
                                            <div class="box-header with-border">
                                            </div>
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="nama_mitra" class="col-sm-3">Nama Mitra :</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="nama_mitra"
                                                            name="nama_mitra" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat_mitra" class="col-sm-3">Alamat Mitra :</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="alamat_mitra"
                                                            name="alamat_mitra" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="telepon" class="col-sm-3">Telepon :</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="telepon"
                                                            name="telepon" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="col-sm-3">Email :</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="email"
                                                            name="email" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="bidang" class="col-sm-3">Bidang :</label>
                                                    <div class="col-sm-7">
                                                        <select name="bidang" id="bidang" class="form-control" required>
                                                            <option value="">Pilih Bidang</option>
                                                            @foreach ($jurusan as $item)
                                                                <option value="{{ $item->bidang }}">{{ $item->bidang }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="keterangan" class="col-sm-3">Keterangan :</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="keterangan"
                                                            name="keterangan" required>
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
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <th width="2%">No</th>
                            <th>Nama Mitra</th>
                            <th>Alamat</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Bidang</th>
                            <th>Keterangan</th>
                            <th width="5%"><i class="fa fa-pencil"></i></th>
                            <th width="6%"><i class="fa fa-trash"></i></th>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            @foreach ($mitra as $m)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $m->nama_mitra }}</td>
                                <td>{{ $m->alamat_mitra }}</td>
                                <td>{{ $m->telepon }}</td>
                                <td>{{ $m->email }}</td>
                                <td>{{ $m->bidang }}</td>
                                <td>{{ $m->keterangan }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#modalEdit{{ $m->id_mitra }}"><i class="fa fa-edit"></i></button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modalEdit{{ $m->id_mitra }}" tabindex="-1"
                                        role="dialog" aria-labelledby="modalEdit{{ $m->id_mitra }}Label"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalEdit{{ $m->id_mitra }}Label">Edit
                                                        Mitra</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('mitra.update', $m->id_mitra) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="nama_mitra">Nama Mitra</label>
                                                            <input type="text" class="form-control" id="nama_mitra"
                                                                name="nama_mitra" value="{{ $m->nama_mitra }}"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alamat_mitra">Alamat Mitra</label>
                                                            <input type="text" class="form-control" id="alamat_mitra"
                                                                name="alamat_mitra" value="{{ $m->alamat_mitra }}"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="telepon">telepon</label>
                                                            <input type="text" class="form-control" id="telepon"
                                                                name="telepon" value="{{ $m->telepon }}"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="text" class="form-control" id="email"
                                                                name="email" value="{{ $m->email }}"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="bidang" class="col-sm-3">Bidang :</label>
                                                            <div class="col-sm-7">
                                                                <select name="bidang" id="bidang" class="form-control" value="{{ $item->bidang }}" required>
                                                                    <option value="{{ $m->bidang }}">{{ $m->bidang }}</option>
                                                                    @foreach ($jurusan as $item)
                                                                        <option value="{{ $item->bidang }}">{{ $item->bidang }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="keterangan">Keterangan</label>
                                                            <input type="text" class="form-control" id="keterangan"
                                                                name="keterangan" value="{{ $m->keterangan }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>
                                    <form action="{{ route('mitra.destroy', $m->id_mitra) }}" method="POST"
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