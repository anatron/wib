@extends('layout')

@section('content')
    <div class="container">
        <h1>Networking</h1>

        <p>Find other like-minded business owners.</p>

        <div class="row">
            @foreach ($users as $user)
                
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h3 class="card-title">{{$user->name}}</h3>
                      <h4 class="card-text"><strong>{{$user->business_name}}</strong></h4>
                      <p class="card-text">{{ $user->business_description }}</p>
                      <a href="{{$user->linkedin_link}}" class="card-text">{{$user->linkedin_link}}</a>
                      <a href="{{$user->website}}" class="card-text">{{$user->website}}</a>
                    </div>
                  </div>
                </div>
            @endforeach
        </div>
    </div>
    
@endsection