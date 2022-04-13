@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3 class="display-3 mb-5">{{ __('Sign in' )}}</h3>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <x-forms.input name="email" type="email" label="{{ __('Email address')}}"/>
                        <x-forms.input name="password" type="password" label="{{ __('Password') }}" />
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="1" id="remember" name="remember">
                            <label class="form-check-label" for="remember">
                              {{ __('Remember me') }}
                            </label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">
                                {{ __('Sign in') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
