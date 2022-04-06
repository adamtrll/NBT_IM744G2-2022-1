@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3 class="display-3 mb-5">{{ __('Sign up' )}}</h3>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <x-forms.input name="name" label="{{ __('Full name') }}" />
                        <x-forms.input name="email" type="email" label="{{ __('Email address')}}"/>
                        <x-forms.input name="password" type="password" label="{{ __('Password') }}" />
                        <x-forms.input name="password_confirmation" type="password" label="{{ __('Password confirmation') }}" />
                        <div class="form-check mb-4">
                            <input class="form-check-input{{ $errors->has('terms') ? ' is-invalid' : ''}}" type="checkbox" value="1" id="terms" name="terms">
                            <label class="form-check-label" for="terms">
                              {{ __('Agree to terms and conditions') }}
                            </label>
                            <div class="invalid-feedback">
                                {{ __('You must agree before submitting.') }}
                            </div>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
