@extends('alumni.layout.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row pt-4">
          <div class="col-lg-3">
            {{-- <div class="card">
              <div class="card-body">
                <h5 class="card-title">Filter Lowongan</h5>

                <p class="card-text">
                  <ul>
                    <li>Web developer</li>
                    <li>desain grafis</li>
                    <li>sales</li>
                    <li>marketing</li>
                    <li>seerfice</li>
                  </ul>
                </p>

                <a href="#" class="card-link"> <i class="fa fa-search"></i>Terapkan Filter </a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div> --}}
            <!-- /.card -->
          </div>

          <!-- /.col-md-9 -->
          <div class="col-lg-12">
            {{-- top card --}}

            @foreach ($lowongan as $item)
            <div class="card m-0 p-0">
              <div class="card-header d-inline">
                <p class="h5 pull-left">{{ $item->nama_lowongan }}</p>
                <p class="pull-right"><a href="">Lihat Detail >></a> </p>
              </div>
              <div class="card-body loker-info">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-10">
                    <h5 class="card-title">{{ $item->mitra->nama_mitra }}</h5>
                    <p class="card-text">{{ $item->mitra->keterangan }}</p>
                    <p><i class="fa fa-industry"></i> {{ $item->bidang }}</p>
                    <p><i class="fa fa-map-marker"></i> {{ $item->mitra->alamat_mitra }}</p>
                  </div>
                </div>
                <div class="row mt-1 p-1">
                  <div class="col-6 d-flex align-items-end">
                    <p class="mr-2"><i class="fa fa-clock-o"></i> valid {{ hitungSelisihHari($item->tgl_lowongan, $item->tgl_habis) }} hari lagi</p>
                  </div>
                  <div class="col-6">
                    <a href="#" class="btn btn-success pull-right">Lamar</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection