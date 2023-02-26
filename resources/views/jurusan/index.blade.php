@extends('layouts.master')

@section('title')
    jurusan
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Jurusan</h3>
                    <br><br>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                        Tambah Jurusan
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Tambah Data Jurusan</h4>
                                </div>
                                <form action="{{ route('jurusan.store') }}" class="form-horizontal" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="box box-info">
                                            <div class="box-header with-border">
                                            </div>
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="nama_jurusan" class="col-sm-3">Nama Jurusan :</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="nama_jurusan"
                                                            name="nama_jurusan" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="bidang" class="col-sm-3">Nama Bidang :</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" id="bidang"
                                                            name="bidang" required>
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
                            <th>Nama Jurusan</th>
                            <th>Bidang</th>
                            <th width="5%"><i class="fa fa-pencil"></i></th>
                            <th width="6%"><i class="fa fa-trash"></i></th>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            @foreach ($jurusan as $j)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $j->nama_jurusan }}</td>
                                <td>{{ $j->bidang }}</td>
                                <td>
                                    <a href="{{ route('jurusan.edit', $j->id_jurusan) }}" class="btn btn-sm btn-primary">Edit</a>

                                </td>
                                <td>
                                    <form action="{{ route('jurusan.destroy', $j->id_jurusan) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
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