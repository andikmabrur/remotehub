@extends('layouts.app-template')

@section('content')

<div class="content-wrapper">
  
  <!-- Post/Update -->
  <div class="contact-us">
      <div class="contact-body">
        <h4>Contact Us</h4>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6">
              <div class="card card-contact-address">
                <div class="card-body">
                  <h5>Address</h5>
                  <p>Jl Gading Arcadia G/21 RW 03 Pegangsaan Dua
                    Kelapa gading Jakarta Utara
                    Jakarta
                    DKI Jakarta 14250
                    Indonesia
                  </p>
                  <a href="https://www.google.com/maps/dir//RemoteHUB+Indonesia/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69f1161cf97e0d:0x8f1a0c1d0a9afe20!2m2!1d106.9186325!2d-6.1634366"
                    class="btn btn-call">Get direction</a>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="card card-contact-mail">
                <form>
                  <div class="form-group">
                    <label for="Input1">Email address</label>
                    <input type="email" class="form-control" id="Input1" placeholder="name@example.com">
                  </div>
                  <div class="form-group">
                    <label for="Textarea1">Send us a messages</label>
                    <textarea class="form-control" id="Textarea1" rows="4"></textarea>
                  </div>
                  <button class="btn btn-call">Send mail</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of post -->
  </div>

@endsection