<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BKK | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('/AdminLTE-2/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/AdminLTE-2/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('/AdminLTE-2/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/AdminLTE-2/dist/css/AdminLTE.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('/AdminLTE-2/plugins/iCheck/square/blue.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b>Register</b>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form method="POST" action="/register">
                @csrf

                <div class="form-group has-feedback">
                    <strong>NIS :</strong>
                    <input id="nis" type="text" class="form-control @error('nis') is-invalid @enderror" name="nis"
                        value="{{ old('nis') }}" required autocomplete="nis" placeholder="Masukkan NIS" autofocus>
                    @error('nis')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group has-feedback">
                    <strong>Nama Jurusan :</strong>
                    <select id="id_jurusan" name="id_jurusan"
                        class="form-control @error('id_jurusan') is-invalid @enderror" required>
                        <option value="">== Pilih Jurusan ==</option>
                        @foreach($jurusan as $j)
                        <option value="{{ $j->id_jurusan }}">{{ $j->nama_jurusan }}</option>
                        @endforeach
                    </select>

                    @error('id_jurusan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group has-feedback">
                    <strong>Nama :</strong>
                    <input id="nama_alumni" type="text" class="form-control @error('nama_alumni') is-invalid @enderror"
                        name="nama_alumni" value="{{ old('nama_alumni') }}" required autocomplete="nama_alumni"
                        placeholder="Masukkan Nama" autofocus>
                    @error('nama_alumni')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group has-feedback">
                    <strong>Tempat Lahir :</strong>
                    <input id="tempat_lahir" type="text"
                        class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir"
                        value="{{ old('tempat_lahir') }}" required autocomplete="tempat_lahir"
                        placeholder="Masukkan Tempat Lahir" autofocus>
                    @error('tempat_lahir')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group has-feedback">
                    <strong>Tanggal Lahir :</strong>
                    <input id="tanggal_lahir" type="date"
                        class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir"
                        value="{{ old('tanggal_lahir') }}" required autocomplete="tanggal_lahir"
                        placeholder="Tanggal Lahir" autofocus>
                    @error('tanggal_lahir')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group has-feedback">
                    <strong>Alamat :</strong>
                    <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"
                        name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" placeholder="Masukkan Alamat"
                        autofocus>
                    @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group has-feedback">
                    <strong>Jenis Kelamin :</strong>
                    <select name="jenis_kelamin" id="jenis_kelamin"
                        class="form-control @error('jenis_kelamin') is-invalid @enderror">
                        <option value="">== Pilih Jenis Kelamin ==</option>
                        <option value="L" @if(old('jenis_kelamin')=='L' ) checked @endif>Laki-Laki</option>
                        <option value="P" @if(old('jenis_kelamin')=='P' ) checked @endif>Perempuan</option>
                    </select>
                </div>

                <div class="form-group has-feedback">
                    <strong>Tahun Lulus :</strong>
                    <input id="tahun_lulus" type="text" class="form-control @error('tahun_lulus') is-invalid @enderror"
                        name="tahun_lulus" value="{{ old('tahun_lulus') }}" required autocomplete="tahun_lulus"
                        placeholder="Masukkan Tahun Lulus" autofocus>
                    @error('tahun_lulus')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group has-feedback">
                    <strong>Telepon :</strong>
                    <input id="telepon" type="text" class="form-control @error('telepon') is-invalid @enderror"
                        name="telepon" value="{{ old('telepon') }}" required autocomplete="telepon"
                        placeholder="Telepon" autofocus>
                    @error('telepon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group has-feedback">
                    <strong>Jenis Status :</strong>
                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                        <option value="">== Pilih Status ==</option>
                        <option value="belum menikah" @if(old('status')=='belum menikah' ) checked @endif>Belum Menikah</option>
                        <option value="menikah" @if(old('status')=='menikah' ) checked @endif>Menikah</option>
                    </select>
                </div>

                <div class="form-group has-feedback">
                    <strong>Email :</strong>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukkan Email"
                        autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group has-feedback">
                    <strong>Password :</strong>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required placeholder="Masukkan Password" autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto Profil') }}</label>

                    <div class="col-md-6">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" name="foto">
                            <label class="custom-file-label" for="foto">Pilih file</label>
                        </div>

                        @error('foto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
    </div>

    <a href="register.html" class="text-center">Register a new membership</a>

    </div>
    <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="{{ asset('/AdminLTE-2/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('/AdminLTE-2/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('/AdminLTE-2/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
    $('#foto').on('change', function(){
        var fileName = $(this).val();
        $(this).next('.custom-file-label').html(fileName);
    });
</script>
</body>

</html>