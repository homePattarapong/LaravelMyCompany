@extends('layouts.master_template')
@section('title') About @endsection
@section('content')

<div class="jumbotron">
    <div class="container">
        
        <h1 class="display-3">About</h1>
        <p class="lead">This is about page</p>
        <hr class="my-2">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, ea velit recusandae doloremque pariatur itaque ducimus architecto, iure ipsam a nihil provident asperiores voluptas modi voluptatem aliquam, vel ut saepe deleniti id quaerat obcaecati repellendus omnis! Nisi voluptates maxime unde architecto voluptate ullam necessitatibus totam itaque odit qui optio cum tempora incidunt dolorem eos culpa possimus inventore saepe, suscipit delectus illo et est explicabo? Tempore, deleniti?</p>
       
    </div>

</div>
<div class="container mb-5">
    <img src="{{asset('assets/images/about.jpg')}}" class="img-fluid" alt="">
</div>
@endsection