@extends('layout')

@section('content')
    <div class="container">
        <h1>Your Profile</h1>

        <div class="profile">
            <a href="/editprofile" class="btn btn-primary">Edit</a>
            
            <img class="profileImg" src='{{ asset('img/woman.png') }}'>
            <div class="pCenter">
                <h1>{{ $user->name }}</h1>
                <p></p>    
        </div>
        
        <div class="pContent">
            Email: {{ $user->email }}
        </div>

        <div class="pContent">
            Busness Name:  {{ $user->business_name }}
        </div>
        <div class="pContent">
            Linkedin: {{ $user->linkedin_link }}
        </div>
        <div class="pContent">
            Website: {{ $user->website }}
        </div>
        
        </div>
        <!--footer-->
        <footer>

        </footer>
        
    </div>
    
@endsection