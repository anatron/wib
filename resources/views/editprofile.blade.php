@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h1 class="display-3">Update Profile</h1>
        
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br /> 
                @endif
                <form method="post" action="{{ route('profile.edit') }}">
                    @method('PATCH') 
                    @csrf
                    <div class="form-group">
        
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" value={{ $user->name }} />
                    </div>
        
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" value={{ $user->email }} />
                    </div>
        
                    <div class="form-group">
                        <label for="business_name">Business Name:</label>
                        <input type="text" class="form-control" name="business_name" value={{ $user->business_name }} />
                    </div>
                    <div class="form-group">
                        <label for="linkedin_link">LinkedIn Link:</label>
                        <input type="text" class="form-control" name="linkedin_link" value={{ $user->linkedin_link }} />
                    </div>
                    <div class="form-group">
                        <label for="website">Website:</label>
                        <input type="text" class="form-control" name="website" value={{ $user->website }} />
                    </div>
                    <div class="form-group">
                        <label for="business_description">Business Description:</label>
                        <input type="text" class="form-control" name="business_description" value={{ $user->business_description }} />
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>

    </div>
    
@endsection