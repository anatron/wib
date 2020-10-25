@extends('layout')

@section('content')
    <div class="container">
        <h1>Investors</h1>
        <p>Find some great investors and sponsorships! Don't be shy!</p>
        <div class="row">
        @foreach ($investors as $investor)
            
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$investor->investor_name}}</h5>
                  <p class="card-text">{{$investor->investor_description}}</p>
                  <a href="{{$investor->investor_link}}" class="card-text">{{$investor->investor_link}}</a>
                  <p class="card-text">{{$investor->investor_email}}</p>
                </div>
              </div>
            </div>
        @endforeach
        </div>
    </div>
    
@endsection