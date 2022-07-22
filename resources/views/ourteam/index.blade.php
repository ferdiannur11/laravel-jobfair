@extends('frontend.index')
@section('content')
<style>
.user-pic {
    width: 150px;
    height: 150px;
    overflow: hidden;
    border-radius: 100%;
    margin: 20px auto 20px;
    border-left: 3px solid #ddd;
    border-right: 3px solid #ddd;
    border-top: 3px solid rgb(33, 156, 189);
    border-bottom: 3px solid rgb(33, 156, 189);
    transform: rotate(-30deg);
    transition: 0.5s;
}
.card-box:hover .user-pic {
    transform: rotate(0deg);
    transform: scale(1.1);
}
.card-box {
    padding: 15px;
    background-color: #fdfdfd;
    margin: 20px 0px;
    border-radius: 10px;
    border: 1px solid #eee;
    box-shadow: 0px 0px 8px 0px #d4d4d4;
    transition: 0.5s;
}
.card-box:hover {
	border: 1px solid rgb(33, 156, 189);
}
.card-box p {
    color: #808080;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3 mt-4 mb-4">
            <h2 class="text-center">Our Team</h2>
            <p class="text-center">Team UI/UX, Web Develop, Front End, Back End </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card-box text-center">
                <div class="user-pic">
                    <img src="{{ url('assets/img/logo.png') }}" class="img-fluid" alt="User Pic">
                </div>
                <h4>Rajnish Kumar</h4>
                <h6>Web Designer</h6>
                <hr>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <hr>
                <a href="#" class="btn text-white" style="background-color: rgb(33, 156, 189);" >Know More</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-box text-center">
                <div class="user-pic">
                    <img src="{{ url('assets/img/logo.png') }}" class="img-fluid" alt="User Pic">
                </div>
                <h4>Satyam Tiwari</h4>
                <h6>Web Developer</h6>
                <hr>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <hr>
                <a href="#" class="btn text-white" style="background-color: rgb(33, 156, 189);" >Know More</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-box text-center">
                <div class="user-pic">
                    <img src="{{ url('assets/img/logo.png') }}" class="img-fluid" alt="User Pic">
                </div>
                <h4>Salim Malik</h4>
                <h6>Front End Developer</h6>
                <hr>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <hr>
                <a href="#" class="btn text-white" style="background-color: rgb(33, 156, 189);" >Know More</a>
            </div>
        </div>
    </div>
</div>
@endsection