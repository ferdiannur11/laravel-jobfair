@extends('frontend.index')
@section('content')
<div class="container">
    <div class="row">
        {{-- <div class="col-md-12 my-3">
            <a href="index.html" class="btn btn-secondary">< Back Home</a>
        </div> --}}
        <div class="col-md-12 mb-3">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ url('assets/img/download.png') }}" style="width: 100%;">
                </div>
                {{-- <div class="col-md-7">
                    <div class="d-flex align-items-end h-100">
                        <h3 class="mb-3">PT XYZ</h3>
                    </div>
                </div>--}}
                <div class="col-md-8">
                    <div class="d-flex align-items-center h-100">
                        
                        <p align="left">WberPack berdiri pada Tahun 2017. WberPack didirikan oleh 3 orang profesional yang memiliki pengalaman di bidang paper packaging dan finance selama 16 tahun. Setelah mengalami beberapa kali kegagalan dalam berusaha, akhirnya pendiri perusahaan memanfaatkan keahlian yang ada pada bidang karton packaging dan paper core untuk mendirikan sebuah perusahaan yaitu PT. Wahana Bermuda Nusantara yang dikenal sebagai WBN dan sekarang menjadi WberPack.

                    </div> 
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-3">

            {{-- <p class="m-0">
                <b>Staff</b>
                <br>
                <b>Admin Keudangan</b>
                <br>
                <br>
                Tanggerang, Banten
                <br>
                <br>
                <b>Job Description:</b>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste aliquid ipsa blanditiis, neque, a pariatur in fuga dolorum minus impedit, libero, deleniti assumenda culpa eligendi quaerat est voluptatibus fugiat illo?
                <br>
                <br>
                <b>Aditional Information:</b>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste aliquid ipsa blanditiis, neque, a pariatur in fuga dolorum minus impedit, libero, deleniti assumenda culpa eligendi quaerat est voluptatibus fugiat illo?
                <br>
                <br>
                <b>Experience level:</b>
                <br>
                Staff
                <br>
                <br>
                <b>Year of  Experience:</b>
                <br>
                2 years
                <br>
                <br>
                <b>Qualification Degree:</b>
                <br>
                2 years
                <br>
                <br>
                <b>Job Type:</b>
                <br>
                Full-time
            </p> --}}
        </div>
    </div>
</div>
@endsection
{{-- <div class="row">
	
	<div class="col-lg-5 col-md-6 probootstrap-animate">
		<div class="about-img">
			<img src="{{ url('assets/img/download.PNG') }}" style="width: 100%;">
		</div>
	</div>

	<div class="col-lg-7 col-md-6 probootstrap-animate">
		<div class="about-content">
            <body>
                <h1>About</h1>
                <p align="left">WberPack berdiri pada Tahun 2017. WberPack didirikan oleh 3 orang profesional yang memiliki pengalaman di bidang paper packaging dan finance selama 16 tahun. Setelah mengalami beberapa kali kegagalan dalam berusaha, akhirnya pendiri perusahaan memanfaatkan keahlian yang ada pada bidang karton packaging dan paper core untuk mendirikan sebuah perusahaan yaitu PT. Wahana Bermuda Nusantara yang dikenal sebagai WBN dan sekarang menjadi WberPack.
                    Pada awal berdiri PT. Wahana Bermuda Nusantara beroperasi di gudang kecil di daerah Karanggan, Bekasi, dengan menggunakan 1 mesin dan 4 orang karyawan. Karena keterbatasan tenaga kerja maka pendiri perusahaan juga turut ikut serta dalam memproduksi dan mengirimkan pesanan ke pelanggan. Dengan kegigihan dan kerja keras maka di Tahun kedua Perusahaan sudah memiliki 45 karyawan dan mampu menghasilkan penjualan hingga 825 juta rupiah perbulan dengan 21 pelanggan tetap.</p>
     </body>
		</div>
	</div>

</div> --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        .bg-gray {
            background-color: #E0E2E4;
        }

        .shadow {
            box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light border-bottom">
        <a class="navbar-brand" href="index.html">
            <img src="assets/img/logo.png" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="job-fair.html">JOB FAIR !</a>
                </li>
            </ul>
        </div>  
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-3">
                <a href="index.html" class="btn btn-secondary">< Back Home</a>
            </div>
            <div class="col-md-12 mb-3">
                <div class="row">
                    <div class="col-md-2">
                        <img src="assets/img/logo2.png" height="150" class="border">
                    </div>
                    <div class="col-md-7">
                        <div class="d-flex align-items-end h-100">
                            <h3 class="mb-3">PT XYZ</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex align-items-center h-100">
                            <a href="#" class="btn btn-secondary btn-block">Apply</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <p class="m-0">
                    <b>Staff</b>
                    <br>
                    <b>Admin Keudangan</b>
                    <br>
                    <br>
                    Tanggerang, Banten
                    <br>
                    <br>
                    <b>Job Description:</b>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste aliquid ipsa blanditiis, neque, a pariatur in fuga dolorum minus impedit, libero, deleniti assumenda culpa eligendi quaerat est voluptatibus fugiat illo?
                    <br>
                    <br>
                    <b>Aditional Information:</b>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste aliquid ipsa blanditiis, neque, a pariatur in fuga dolorum minus impedit, libero, deleniti assumenda culpa eligendi quaerat est voluptatibus fugiat illo?
                    <br>
                    <br>
                    <b>Experience level:</b>
                    <br>
                    Staff
                    <br>
                    <br>
                    <b>Year of  Experience:</b>
                    <br>
                    2 years
                    <br>
                    <br>
                    <b>Qualification Degree:</b>
                    <br>
                    2 years
                    <br>
                    <br>
                    <b>Job Type:</b>
                    <br>
                    Full-time
                </p>
            </div>
        </div>
    </div>
</body>
</html> --}}