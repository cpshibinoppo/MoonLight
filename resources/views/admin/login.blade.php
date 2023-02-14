@extends('layout.admin.main')
@push('style')
    @vite(['resources/css/admin/login.css'])
@endpush
@section('main')
@guest('admin')
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="{{ route('admin.login') }}" method="POST">
        @csrf
        <h3>Login Here</h3>
        <label for="username">Email</label>
        <input type="text" value="awad@gmail.com" placeholder="Email" name="email">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="password">Password</label>
        <input type="password" value="2923" placeholder="Password" name="password">
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="remember" name="remember_token">
            <label class="form-check-label ms-2" for="remember">
              Remember Me
            </label>
          </div>
        <button type="submit"><span>Log In</span><span><i class='bx bx-right-arrow-alt'></i></span></button>
        @if (session()->has('loginerror'))
            <div class="alert alert-danger">
                {{ session()->get('loginerror') }}
            </div>
        @endif
    </form>
    @endguest
    @auth('admin')
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form style="height: 400px;" action="{{ route('admin.login') }}" method="POST">
        @csrf
        <h3>Hi {{$admin->name}}, Login</h3>
        <label for="username">Email</label>
        <input type="text" value="{{$admin->email}}" placeholder="Email" name="email">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit"><span>Log In</span><span><i class='bx bx-right-arrow-alt'></i></span></button>
        @if (session()->has('loginerror'))
            <div class="alert alert-danger">
                {{ session()->get('loginerror') }}
            </div>
        @endif
    </form>
    @endauth
@endsection
