@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if(session()->get('lang')=='english')
                        {{ __('Register') }}
                    @else
                        {{ __('রেজিস্টার করুন') }}
                    @endif
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                @if(session()->get('lang')=='english')
                                    {{ __('Name') }}
                                @else
                                    {{ __(' আপনার নাম') }}
                                @endif
                            </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                @if(session()->get('lang')=='english')
                                    {{ __('E-mail') }}
                                @else
                                    {{ __('আপনার ইমেইল') }}
                                @endif
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    {{ __('পাসওয়ার্ড') }}
                                @endif
                            </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                                @if(session()->get('lang')=='english')
                                    {{ __('Confirm Password') }}
                                @else
                                    {{ __('পাসওয়ার্ড নিশ্চিত করুন') }}
                                @endif
                            </label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    @if(session()->get('lang')=='english')
                                        {{ __('Register') }}
                                    @else
                                        {{ __('রেজিস্টার') }}
                                    @endif
                                </button>
                                <span>
                                    @if(session()->get('lang')=='english')
                                        {{ __('Have an account?') }}
                                    @else
                                        {{ __('ইতিমধ্যে অ্যাকাউন্ট আছে ?') }}
                                    @endif
                                </span>
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    @if(session()->get('lang')=='english')
                                        {{ __('Login') }}
                                    @else
                                        {{ __('লগইন করুন') }}
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
