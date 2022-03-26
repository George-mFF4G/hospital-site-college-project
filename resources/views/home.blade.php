@extends('layouts.main')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{-- <center>
                        @if(Session::has('msg')) 
                            <div style="background-color: bisque; width: 20%; margin:auto; border-radius: 15px;"><h2 style="display: block;
                              font-size: 1.5em;
                              margin-top: 0.83em;
                              margin-bottom: -1em;
                              padding:8px;
                              font-weight: bold;" >{{Session::get('msg')}}</h2></div>
                        @endif
                    </center> --}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br>
                    <span>{{ __('Click On (Hospital Site) to Go') }}</span>
                    {{-- @yield('reg') --}}
                    {{-- <a href="{{route('home')}}"></a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    span{
        color: red;
    }
</style>
