@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Welcome to Women in Business</h1>
    </div>
    <div class="row justify-content-center">
        <p>The perfect place where you can find like-minded entrepreuners and investors.</p>
    </div>
    <div class="row justify-content-center">
        <p>You can also calculate your expenses for your day to keep everything tracked.</p>
    </div>

    <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Expenses</h5>
              <p class="card-text">Enter your expenses here.</p>
              <a href="/expenses" class="btn btn-primary">Expenses</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
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
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Networking</h5>
              <p class="card-text">Network with other female business owners and entrepreuners.</p>
              <a href="/networking" class="btn btn-primary">Network</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Profile</h5>
              <p class="card-text">View your profile.</p>
              <a href="/profile" class="btn btn-primary">Profile</a>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
