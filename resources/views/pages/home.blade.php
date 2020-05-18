@extends('layouts.master_template')
@section('title') Home @endsection
@section('content')
<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="{{asset('assets/images/slide1.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/slide3.jpg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/slide2.jpg')}}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <i class="fas fa-home fa-3x text-success"></i>
            <h1>Home</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente quibusdam voluptatibus quae explicabo libero asperiores, harum enim, magnam sed vel quod sequi iusto, dolores tempore veniam! Amet numquam necessitatibus nobis!</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-concierge-bell fa-3x text-warning"></i>
            <h1>About us</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim accusantium omnis consectetur praesentium natus. Dignissimos repellendus placeat rem delectus pariatur ducimus quibusdam, exercitationem at quia! Tempora quae voluptate doloremque magni.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-cloud-showers-heavy fa-3x text-danger"></i>
            <h1>Services</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam tempora voluptates, quia magni ipsum unde? Cumque deleniti consequuntur minus quae reprehenderit autem aliquid, saepe quasi fuga nesciunt adipisci labore dolorum?</p>
        </div>
    </div>
</div>

@endsection