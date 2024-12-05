@extends('layouts.app')

@section('content')
<div class="container">
    <div  class="row justify-content-center my-5"  >
        <div     class="col-md-5 ">
            <div class="card" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5)">
                <div   style="text-align: center;background-color:#393a42;font-family: initial;font-weight: 900;font-size: 30px;color:white ;letter-spacing: 5px" class="card-header "><em>{{ __('Login') }}</em></div>

                <div style=" height: 300px;" class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-5 mt-3">
                            <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-5">
                            <label for="password" class="col-md-3 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div style="text-align: center">
                                <button style="background-color: #393a42;width:200px; initial;font-weight: 700;color: aliceblue" type="submit" class="btn btn  ">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection