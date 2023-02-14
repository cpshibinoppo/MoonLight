@extends('layout.admin.main')
@push('style')
    @vite(['resources/css/admin/login.css'])
@endpush
@section('main')
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form>
        <h3>Login Here</h3>
        <label for="username">Username</label>
        <input type="text" placeholder="Email" id="username">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password">
        <button><span>Log In</span><span><i class='bx bx-right-arrow-alt'></i></span></button>
    </form>
@endsection
