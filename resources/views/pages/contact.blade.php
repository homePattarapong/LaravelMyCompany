@extends('layouts.master_template')
@section('title') Contact @endsection
@section('style') 
<style>
    .jumbotron {
        background-image: url("https://www.autobooster.com/wp-content/uploads/Contact-us-1600x602.jpg.imgix_.banner.png");
        background-size: cover;
    }
</style> 
@endsection
@section('content')


<div class="jumbotron">
    <div class="container">
        
        <h1 class="display-3">Contact us</h1>
        <p class="lead">This is Contact page</p>
        <hr class="my-2">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, explicabo laudantium magnam beatae aspernatur veritatis, omnis at voluptas nisi quidem atque sed. Aperiam perspiciatis quod nostrum tempora est obcaecati voluptas!</p>
    </div>

</div>
<div class="container my-5 py-5 z-depth-1">


    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
  
      <style>
        .map-container {
          height: 200px;
          position: relative;
        }
  
        .map-container iframe {
          left: 0;
          top: 0;
          height: 100%;
          width: 100%;
          position: absolute;
        }
      </style>
  
      <!--Google map-->
      <div id="map-container-google-1" class="z-depth-1 map-container mb-5">
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15497.90697709359!2d100.55541721845545!3d13.81038708712147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29c5d5acc5a2f%3A0x40100b25de28e40!2sChatuchak%2C%20Bangkok%2010900!5e0!3m2!1sen!2sth!4v1589823378519!5m2!1sen!2sth" frameborder="0"
          style="border:0" allowfullscreen></iframe>
      </div>
      <!--Google Maps-->
  
      <!--Grid row-->
      <div class="row">
  
        <!--Grid column-->
        <div class="col-lg-5 col-md-12 mb-0 mb-md-0">
  
          <h3 class="font-weight-bold">Contact Us</h3>
  
          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>
  
          <p><span class="font-weight-bold mr-2">Email:</span><a href="">contact@mycompany.site</a></p>
          <p><span class="font-weight-bold mr-2">Phone:</span><a href="">+66 123 456 78</a></p>
  
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-7 col-md-12 mb-4 mb-md-0">
  
          <!--Grid row-->
          <div class="row">
  
            <!--Grid column-->
            <div class="col-md-6">
  
              <!-- Material outline input -->
              <div class="md-form md-outline mb-0">
                <label for="form-first-name">First name</label>
                <input type="text" id="form-first-name" class="form-control" placeholder="Frist name">
              </div>
  
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-6">
  
              <!-- Material outline input -->
              <div class="md-form md-outline mb-0">
                <label for="form-last-name">Last name</label>
                <input type="text" id="form-last-name" class="form-control" placeholder="Last name">
              </div>
  
            </div>
            <!--Grid column-->
  
          </div>
          <!--Grid row-->
  
          <!-- Material outline input -->
          <div class="md-form md-outline mt-3">
            <label for="form-email">E-mail</label>
            <input type="email" id="form-email" class="form-control" placeholder="E-mail">
          </div>
  
          <!-- Material outline input -->
          <div class="md-form md-outline">
            <label for="form-subject">Subject</label>
            <input type="text" id="form-subject" class="form-control" placeholder="Subject">
          </div>
  
          <!--Material textarea-->
          <div class="md-form md-outline mb-3">
            <label for="form-message">How we can help?</label>
            <textarea id="form-message" class="md-textarea form-control" rows="3"></textarea>
          </div>
  
          <button type="submit" class="btn btn-info btn-sm ml-0">Submit<i class="far fa-paper-plane ml-2"></i></button>
  
        </div>
        <!--Grid column-->
  
      </div>
      <!--Grid row-->
  
  
    </section>
    <!--Section: Content-->
  
  
  </div>
  
  

@endsection
