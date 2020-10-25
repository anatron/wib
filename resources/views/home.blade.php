@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center col-sm-12">
        <h1>Welcome to Women in Business</h1>
    </div>
    <div class="row justify-content-center col-sm-12">
        <p>The perfect place where you can find like-minded entrepreuners and investors.</p>
    </div>
    <div class="row justify-content-center col-sm-12">
        <p>You can also calculate your expenses for your day to keep everything tracked.</p>
    </div>

    @auth
    <div class="row">
      <div class="col-sm-6">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Expenses</h5>
            <p class="card-text">Enter your expenses here.</p>
            <a href="/expenses" class="btn btn-primary">Expenses</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Investors</h5>
            <p class="card-text">Find an investor or sponsor here.</p>
            <a href="/investors" class="btn btn-primary">Investors</a>
          </div>
        </div>
      </div>
  </div>
  <div class="row">
      <div class="col-sm-6">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Networking</h5>
            <p class="card-text">Network with other female business owners and entrepreuners.</p>
            <a href="/networking" class="btn btn-primary">Network</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Profile</h5>
            <p class="card-text">View your profile and enter your business details.</p>
            <a href="/profile" class="btn btn-primary">Profile</a>
          </div>
        </div>
      </div>
  </div>
</div>
    @endauth
  @guest
<div class="row">
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">Login</h5>
        <p class="card-text">Login to our powerful network.</p>
        <a href="/login" class="btn btn-primary">Login</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">Register</h5>
        <p class="card-text">Join our great community!</p>
        <a href="/register" class="btn btn-primary">Register</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">About Us</h5>
        <p class="card-text">Find out more about us.</p>
        <a href="/aboutus" class="btn btn-primary">About Us</a>
      </div>
    </div>
  </div>
</div>
  @endguest
    
@endsection
