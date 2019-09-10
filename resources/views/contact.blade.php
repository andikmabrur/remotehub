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

                <form method="POST" action="{{ url('contact/store') }}">
                  @csrf

                  <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                      <div class="col-md-8">
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>

                      <div class="col-md-8">
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Message') }}</label>

                      <div class="col-md-8">
                          <textarea class="form-control @error('name') is-invalid @enderror" id="message" name="message" rows="4" required></textarea>

                          @error('message')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <button type="submit" class="btn btn-call">Send mail</button>

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