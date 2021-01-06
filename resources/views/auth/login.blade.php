@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if(session()->get('lang')=='english')
                        {{ __('Login') }}
                    @else
                        {{ __('লগইন') }}
                    @endif
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                @if(session()->get('lang')=='english')
                                    {{ __('E-mail') }}
                                @else
                                    {{ __('আপনার ইমেল আইডি লিখুন') }}
                                @endif
                                    
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">
                                @if(session()->get('lang')=='english')
                                    {{ __('Password') }}
                                @else
                                    {{ __('আপনার পাসওয়ার্ডটি লিখুন') }}
                                @endif
                            </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        @if(session()->get('lang')=='english')
                                            {{ __('Remember Me') }}
                                        @else
                                            {{ __('সংরক্ষণ করুন') }}
                                        @endif
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    @if(session()->get('lang')=='english')
                                        {{ __('Login') }}
                                    @else
                                        {{ __('লগইন') }}
                                    @endif
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        @if(session()->get('lang')=='english')
                                            {{ __('Forgot Password') }}
                                        @else
                                            {{ __('পাসওয়ার্ড মনে নেই?') }}
                                        @endif
                                    </a>
                                @endif
                                <span>
                                    @if(session()->get('lang')=='english')
                                        {{ __('Not a member yet?') }}
                                    @else
                                        {{ __('এখনো সদস্য নন ?') }}
                                    @endif
                                </span>
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    @if(session()->get('lang')=='english')
                                        {{ __('Register') }}
                                    @else
                                        {{ __('রেজিস্টার করুন') }}
                                    @endif
                                    </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
