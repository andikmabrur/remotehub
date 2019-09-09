@extends('layouts.app-template')

@section('content')
<!-- Landing background -->
<div class="search-service">
    <div class="container">
        <h4>What services do you need?</h4>
        <form action="">
        <div class="form-group search-form">
            <input type="text" class="form-control" id="search-service" aria-describedby="service" name="service"
            placeholder="Web design, logo design, branding, etc">
        </div>
        </form>
    </div>
    </div>
    <!-- End of landing background -->

    <!-- Service -->
    <div class="post-update">
    <div class="container">
        <h4>Our service</h4>
        <div class="row">
        <div class="col-sm-12 col-md-4">
            <a href="#" class="card card-service logo-design" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Logo Design & Branding</h5>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-4">
            <a href="#" class="card card-service profilling" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Profilling skill of remote worker</h5>
            </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-4">
            <a href="#" class="card card-service afiliateprogram" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Affiliate program development</h5>
            </div>
            </a>
        </div>
        </div>
    </div>
    </div>
    <!-- Service -->

    <!-- Marketplace -->
    <div class="marketplace-section">
    <div class="container">
        <h4>Our marketplace</h4>
        <div class="row">
        <div class="col-sm-4 col-md-2">
            <div class="card card-books">
            <img src="assets/images/books/killing.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Killing</h5>
            </div>
            <a href="#" class="btn btn-primary">Buy</a>
            </div>
        </div>
        <div class="col-sm-4 col-md-2">
            <div class="card card-books">
            <img src="assets/images/books/design-basic.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">How to study smart</h5>
            </div>
            <a href="#" class="btn btn-primary">Buy</a>
            </div>
        </div>
        <div class="col-sm-4 col-md-2">
            <div class="card card-books">
            <img src="assets/images/books/set-life.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Set for life</h5>
            </div>
            <a href="#" class="btn btn-primary">Buy</a>
            </div>
        </div>
        <div class="col-sm-4 col-md-2">
            <div class="card card-books">
            <img src="assets/images/books/killing.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Killing</h5>
            </div>
            <a href="#" class="btn btn-primary">Buy</a>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Marketplace -->
@endsection