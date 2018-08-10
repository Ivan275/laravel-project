@extends('layouts.app')

@section('content')
<div class="home-banner3">
    <div class="user-profile-text"> 
        <h1 class="header-color">User Profile</h1>
    </div>
</div>
<div class="padding-profile">
        <form action="/create" method="POST" >
        @csrf
            <div class="form-group">
            <input name= "token" hidden= "true" value= {{ Auth::user()->remember_token }} />
            <label for="exampleInputName">Name</label>
            <br />
            <input type="name" class="form-user-profile" name='name' id="name" aria-describedby="name" placeholder={{ Auth::user()->name }}>
            </div>
            <div class="form-group">
            <label for="exampleInputSurname">Surname</label>
            <br />
            <input type="Surname" class="form-user-profile" name='surname' id="surname" aria-describedby="Surname" placeholder= {{ Auth::user()->surname }}>
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <br />
            <input type="email" class="form-user-profile" name='email' id="email" aria-describedby="emailHelp" placeholder= {{ Auth::user()->email }}>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <input type="hidden"  name ="_token" value= "{{ csrf_token() }}" />
            <div class="form-group">
            <button type="submit" class="submit-button2">Submit</button>
            </div>
        </form>
</div>
@endsection
