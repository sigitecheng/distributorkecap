<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="" >
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Meta Responsive tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="../../assets22/assets/css/bootstrap.min.css">
    <!--Custom style.css-->
    <link rel="stylesheet" href="../../assets22/assets/css/quicksand.css">
    <link rel="stylesheet" href="../../assets22/assets/css/style.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="../../assets22/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets22/assets/css/fontawesome.css">

    {{-- @vite('resources/css/app.css') --}}
    @vite('resources/css/app.css')
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>{{ $title }}</title>
  </head>

  {{-- <h1>ini aku adalah kamu</h1> --}}
  <style>
    body {
        background-image: url('../../assets22/assets/img/gambarlogin.jpg'); /* Ganti 'path/to/your-image.jpg' dengan jalur gambar latar belakang Anda */
        background-size: cover; /* Menyesuaikan gambar agar selalu menutupi seluruh area body */
        background-position: center; /* Posisi gambar di tengah */
        /* Opsi lainnya: background-repeat: no-repeat; untuk mencegah gambar berulang */
        /* Opsi lainnya: background-attachment: fixed; untuk mengunci gambar latar belakang agar tidak bergeser saat menggulir halaman */
        margin: 0; /* Menghapus margin default */
        padding: 0; /* Menghapus padding default */
        height: 100vh; /* Mengatur tinggi body menjadi 100% dari viewport height */
        display: flex; /* Menggunakan flexbox untuk konten berada di tengah vertikal */
        justify-content: center; /* Mengatur konten berada di tengah horisontal */
        align-items: center; /* Mengatur konten berada di tengah vertikal */
    }
    
    /* Tambahan gaya untuk konten di dalam body jika diperlukan */
    .content {
        /* Tambahkan gaya sesuai kebutuhan */
    }
</style>
  
  <body class="">
    
    <!--Login Wrapper-->
    {{-- <h1 class="text-blue-800">nonn</h1> --}}

    <div class="container-fluid ">
        <div class="login-box">
            {{-- <h1 class="text-center mb-5 font-semibold text-blue-400" style="font-size: 24px">PT. Elzavira Anugrah Group</h1>     --}}
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12 login-box-info">
                
                    <h3 class="mb-4 font-bold mt-6 font-sans text-blue-500">PT. ELZAVIRA ANUGRAH GROUP</h3>
                    <p class="mb-4 font-sans font-semibold"><i class="fab fa-ravelry me-2"></i>
                        APLIKASI MONITORING CEKLIS PEGAWAI</p>
                </div>
                <div class="col-md-6 col-sm-6 col-12 login-box-form p-4">
                    <h3 class="mb-2 text-center font-bold text-slate-600">Halaman Login</h3>
                    {{-- <small class="text-muted bc-description">Sign in with your credentials</small> --}}
                   
             
             {{-- =========================================================================== --}}
             <form action="/login" method="post" class="mt-2">
                @csrf
                  <div class="input-group mb-3">
                      <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                      </div>
                      <input type="text" name="email" class="form-control mt-0 @error('email') is-invalid @enderror" id="email" placeholder="email" required value="{{ old('email') }}">
                      @error('email') 
                      <div class="invalid-feedback mb-2">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>

                  <div class="input-group mb-3">
                      <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                      </div>
                      <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                      @error('password')
                      <div class="invalid-feedback mb-2">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>

                  <div class="form-group mt-4">
                    {{-- <input type="submit" class="btn solid" /> --}}
                      {{-- <button type="submit" class=" btn-block p-2 mb-4">Login</button> --}}
                      <div class="flex justify-center">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded w-64">
                            Login
                        </button>
                    </div>

                      <div class="forgot-password mt-2" style="text-align: right;"> 
                        <small class="text-theme"><strong>Forgot password?</strong></small>
                        {{-- <a href="{{ route('password.request') }}"> <!-- Mengarahkan ke halaman forgot password -->
                        </a> --}}
                    </div>
                  

              </form>

              {{-- =========================================================================== --}}
          
                </div>
            </div>
        </div>
    </div>    

    <!--Login Wrapper-->

    <!-- Page JavaScript Files-->
    <script src="../../assets22/assets/js/jquery.min.js"></script>
    <script src="../../assets22/assets/js/jquery-1.12.4.min.js"></script>
    <!--Popper JS-->
    <script src="../../assets22/assets/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="../../assets22/assets/js/bootstrap.min.js"></script>

    <!--Custom Js Script-->
    <script src="../../assets22/assets/js/custom.js"></script>
    <!--Custom Js Script-->
  </body>
</html>