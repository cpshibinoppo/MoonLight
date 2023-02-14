@extends('layout.admin.main')
@section('main')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12" style="overflow: hidden;">
                @include('layout.admin.navbar')
                <div><img src="https://images.unsplash.com/photo-1670272505497-d532f0b50702?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxNnx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" alt=""></div>
            </div>
        </div>
    </div>
</section>

@endsection
{{-- <form action="{{route('admin.logout')}}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form> --}}
