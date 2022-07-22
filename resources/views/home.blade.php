@extends('frontend.index')
@section('content')
    <div class="container-fluid p-0 bg-dark">
        <div class="mb-4">
            <div class="position-relative">
                <img src="{{ url('assets/img/bg3.jpg') }}" width="100%">
                <div style="position: absolute;left: 0;top: 0;width: 100%;height: 100%;">
                    <div style="position: absolute;left: 0;bottom: 0;width: 100%;">
                        <div class="row">
                            <div class="col btn-meja">
                                {{-- <p style="background-color:white ;" width="100px" align="center">Hello</p> --}}
                                <label style="position: absolute;margin:10%;margin-top:5%;width:70%;" class="text-white">PT. Zamasco Mitra Solusindo</label>
                                <div class="d-flex justify-content-center align-items-end w-100 h-100" style="padding-bottom: 50px;">
                                      <img src="{{ url('assets/img/tb1.png') }}" width="250">  
                                </div>
                           
                            </div>
                                <div class="col btn-meja">
                                    {{-- <p style="background-color:white ;" width="100px" align="center">Hello</p> --}}
                                <label style="position: absolute;margin:10%;margin-top:-10%;width:70%;" class="text-white">PT. Zamasco Mitra Solusindo</label>
                                <div class="d-flex justify-content-center align-items-end w-100 h-100" style="padding-bottom: 100px;">
                                    <img src="{{ url('assets/img/tb1.png') }}" width="250">  
                                </div>
                            </div>
                            <div class="col btn-meja">
                                {{-- <p style="background-color:white ;" width="100px" align="center">Hello</p> --}}
                                <label style="position: absolute;margin:10%;margin-top:20%;width:70%;" class="text-white">PT. Zamasco Mitra Solusindo</label>
                                <div class="d-flex justify-content-center align-items-end w-100 h-100">
                                    <img src="{{ url('assets/img/tb1.png') }}" width="250">  
                                </div>
                            </div>
                                <div class="col btn-meja">
                                    {{-- <p style="background-color:white ;" width="100px" align="center">Hello</p> --}}
                                <label style="position: absolute;margin:10%;margin-top:-10%;width:70%;" class="text-white">PT. Zamasco Mitra Solusindo</label>
                                <div class="d-flex justify-content-center align-items-end w-100 h-100" style="padding-bottom: 100px;">
                                    <img src="{{ url('assets/img/tb1.png') }}" width="250">  
                                </div>
                            </div>
                            <div class="col btn-meja">
                                {{-- <p style="background-color:white ;" width="100px" align="center">Hello</p> --}}
                                <label style="position: absolute;margin:10%;margin-top:20%;width:70%;" class="text-white">PT. Zamasco Mitra Solusindo</label>
                                <div class="d-flex justify-content-center align-items-end w-100 h-100">
                                    <img src="{{ url('assets/img/tb1.png') }}" width="250">  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row detail" id="detail-1">
            <div class="col-md-4 mb-4" >
                <div class="card" >
                    <div class="card-header bg-info pl-2">
                        <b class="text-white" >Job Fair</b>
                    </div>
                    <div class="card-body p-1 over" style="height: 220px;overflow-x: hidden;overflow-y: scroll;">
                        <div class="bg-gray p-1 mb-1">
                            Spa Therapist <br>
                            PT.bumi berkah Boga<br>
                            Bogor <br>
                            Rp.1.800.000 a Month | Part-Time
                        </div>
                        <div class="bg-gray p-1 mb-1">
                            Barista Part-time Bogor <br>
                            PT.bumi berkah Boga <br>
                            Bogor <br>
                            Part-Time
                        </div>
                        <div class="bg-gray p-1 mb-1">
                            Kondektur Bus <br>
                            PT.bumi berkah Boga<br>
                            Bogor <br>
                            
                        </div>
                        <div class="bg-gray p-1 mb-1">
                            Admin Kasir Gudang <br>
                            PT.bumi berkah Boga<br>
                            Depok <br>
                            Rp.4.600.000 a Month | Part-Time
                        </div>
                        <div class="bg-gray p-1 mb-1">
                            Barista Part-time Bogor <br>
                            PT.bumi berkah Boga <br>
                            Bogor <br>
                            Part-Time
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-info pl-2">
                        <b class="text-white">Company Description</b>
                    </div>
                    <div class="card-body p-2 over" style="height: 220px;overflow-x: hidden;overflow-y: scroll;">
                        PT.Bumi Berkah Boga adalah suatu perusahan yang bergerak pada bidang kontruksi, dimana perusahaan ini merupakan vendor dari beberapa perusahan besar, di antara MNC, MCD, dan Global TV
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <!-- <div class="embed-responsive embed-responsive-16by9"> -->
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/rLLZ7YnX-yg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <!-- </div> -->
            </div>
        </div>
        <div class="row detail" id="detail-2" style="display: none;">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-info pl-2">
                        <b class="text-white">Job Fair</b>
                    </div>
                    <div class="card-body p-1 over" style="height: 220px;overflow-x: hidden;overflow-y: scroll;">
                        <div class="bg-gray p-1 mb-1">
                            Spa Therapist <br>
                            PT.Jaya Abadi<br>
                            Bogor <br>
                            Rp.1.800.000 a Month | Part-Time
                        </div>
                        <div class="bg-gray p-1 mb-1">
                            Barista Part-time Bogor <br>
                            PT.Jaya Abadi <br>
                            Bogor <br>
                            Part-Time
                        </div>
                        <div class="bg-gray p-1 mb-1">
                            Kondektur Bus <br>
                            PT.Jaya Abadi<br>
                            Bogor <br>
                            
                        </div>
                        <div class="bg-gray p-1 mb-1">
                            Admin Kasir Gudang <br>
                            PT.Jaya Abadi<br>
                            Depok <br>
                            Rp.4.600.000 a Month | Part-Time
                        </div>
                        <div class="bg-gray p-1 mb-1">
                            Barista Part-time Bogor <br>
                            PT.Jaya Abadi <br>
                            Bogor <br>
                            Part-Time
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-info pl-2">
                        <b class="text-white">Company Description</b>
                    </div>
                    <div class="card-body p-2 over" style="height: 220px;overflow-x: hidden;overflow-y: scroll;">
                        PT.Jaya Abadi adalah suatu perusahan yang bergerak pada bidang Perikanan, dimana perusahaan ini merupakan vendor dari beberapa perusahan besar, di antaranya  MNC, MCD, dan Global TV
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <!-- <div class="embed-responsive embed-responsive-16by9"> -->
                    <iframe width="100%" height="100%" class="embed-responsive-item" src="https://www.youtube.com/embed/M1vg_Js-zeY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <!-- </div> -->
            </div>
        </div>
        <div class="row detail" id="detail-3" style="display: none;">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-info pl-2">
                        <b class="text-white">Job Fair</b>
                    </div>
                    <div class="card-body p-1 over" style="height: 220px;overflow-x: hidden;overflow-y: scroll;">
                        <div class="bg-gray p-1 mb-1">
                            Spa Therapist <br>
                            PT.Jaya Abadi<br>
                            Bogor <br>
                            Rp.1.800.000 a Month | Part-Time
                        </div>
                        <div class="bg-gray p-1 mb-1">
                            Barista Part-time Bogor <br>
                            PT.Jaya Abadi <br>
                            Bogor <br>
                            Part-Time
                        </div>
                        <div class="bg-gray p-1 mb-1">
                            Kondektur Bus <br>
                            PT.Jaya Abadi<br>
                            Bogor <br>
                            
                        </div>
                        <div class="bg-gray p-1 mb-1">
                            Admin Kasir Gudang <br>
                            PT.Jaya Abadi<br>
                            Depok <br>
                            Rp.4.600.000 a Month | Part-Time
                        </div>
                        <div class="bg-gray p-1 mb-1">
                            Barista Part-time Bogor <br>
                            PT.Jaya Abadi <br>
                            Bogor <br>
                            Part-Time
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-danger pl-2">
                        <b class="text-white">Company Description</b>
                    </div>
                    <div class="card-body p-2 over" style="height: 220px;overflow-x: hidden;overflow-y: scroll;">
                        PT.Jaya Abadi adalah suatu perusahan yang bergerak pada bidang Perikanan, dimana perusahaan ini merupakan vendor dari beberapa perusahan besar, di antaranya  MNC, MCD, dan Global TV
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <!-- <div class="embed-responsive embed-responsive-16by9"> -->
                    <iframe width="100%" height="100%" class="embed-responsive-item" src="https://www.youtube.com/embed/M1vg_Js-zeY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <!-- </div> -->
            </div>
        </div>
        <div class="row detail" id="detail-4" style="display: none;">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-danger pl-2">
                        <b class="text-white">Job Fair</b>
                    </div>
                    <div class="card-body p-1 over" style="height: 220px;overflow-x: hidden;overflow-y: scroll;">
                        <div class="bg-gray p-1 mb-1">
                            Spa Therapist <br>
                            PT.Jaya Abadi<br>
                            Bogor <br>
                            Rp.1.800.000 a Month | Part-Time
                        </div>
                        <div class="bg-gray p-1 mb-1">
                            Barista Part-time Bogor <br>
                            PT.Jaya Abadi <br>
                            Bogor <br>
                            Part-Time
                        </div>
                        <div class="bg-gray p-1 mb-1">
                            Kondektur Bus <br>
                            PT.Jaya Abadi<br>
                            Bogor <br>
                            
                        </div>
                        <div class="bg-gray p-1 mb-1">
                            Admin Kasir Gudang <br>
                            PT.Jaya Abadi<br>
                            Depok <br>
                            Rp.4.600.000 a Month | Part-Time
                        </div>
                        <div class="bg-gray p-1 mb-1">
                            Barista Part-time Bogor <br>
                            PT.Jaya Abadi <br>
                            Bogor <br>
                            Part-Time
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-danger pl-2">
                        <b class="text-white">Company Description</b>
                    </div>
                    <div class="card-body p-2 over" style="height: 220px;overflow-x: hidden;overflow-y: scroll;">
                        PT.Jaya Abadi adalah suatu perusahan yang bergerak pada bidang Perikanan, dimana perusahaan ini merupakan vendor dari beberapa perusahan besar, di antaranya  MNC, MCD, dan Global TV
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <!-- <div class="embed-responsive embed-responsive-16by9"> -->
                    <iframe width="100%" height="100%" class="embed-responsive-item" src="https://www.youtube.com/embed/M1vg_Js-zeY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <!-- </div> -->
            </div>
        </div>
    </div>
@endsection