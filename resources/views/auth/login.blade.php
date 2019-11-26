@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                <div class="card-body">
                        <div class="col-6 mx-auto col-md-6 order-md-2 d-flex justify-content-center">
                                <img src="<?php echo asset('img/LogoRescueKKU.png'); ?>" width="212" class="img-fluid">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="430" class="img-fluid mb-3 mb-md-0" role="img" viewBox="0 0 1024 860" focusable="false"><title>Bootstrap</title><defs><linearGradient id="c" x1="50%" x2="50%" y1="0%" y2="100%"><stop offset="0%" stop-color="#5C24AE"/><stop offset="100%" stop-color="#30135A"/></linearGradient><path id="b" d="M355.967 242.807l-322 216.395c-44.275 29.754-44.275 78.443 0 108.197l322 216.395c44.275 29.754 116.725 29.754 161 0l322-216.395c44.275-29.754 44.275-78.443 0-108.197l-322-216.395c-44.275-29.754-116.725-29.754-161 0z"/><filter id="a" width="108%" height="112%" x="-4%" y="-4.3%" filterUnits="objectBoundingBox"><feOffset dy="10" in="SourceAlpha" result="shadowOffsetOuter1"/><feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="10"/><feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/></filter><linearGradient id="f" x1="50%" x2="50%" y1="-17.303%" y2="100%"><stop offset="0%" stop-color="#7331D4"/><stop offset="100%" stop-color="#461B84"/></linearGradient><path id="e" d="M355.967 132.807l-322 216.395c-44.275 29.754-44.275 78.443 0 108.197l322 216.395c44.275 29.754 116.725 29.754 161 0l322-216.395c44.275-29.754 44.275-78.443 0-108.197l-322-216.395c-44.275-29.754-116.725-29.754-161 0z"/><filter id="d" width="108%" height="112%" x="-4%" y="-4.3%" filterUnits="objectBoundingBox"><feOffset dy="10" in="SourceAlpha" result="shadowOffsetOuter1"/><feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="10"/><feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/></filter><linearGradient id="i" x1="50%" x2="50%" y1="0%" y2="100%"><stop offset="0%" stop-color="#905BDD"/><stop offset="100%" stop-color="#5521A0"/></linearGradient><path id="h" d="M355.967 22.807l-322 216.395c-44.275 29.754-44.275 78.443 0 108.197l322 216.395c44.275 29.754 116.725 29.754 161 0l322-216.395c44.275-29.754 44.275-78.443 0-108.197l-322-216.395c-44.275-29.754-116.725-29.754-161 0z"/><filter id="g" width="108%" height="112%" x="-4%" y="-4.3%" filterUnits="objectBoundingBox"><feOffset dy="10" in="SourceAlpha" result="shadowOffsetOuter1"/><feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="10"/><feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/></filter></defs><g fill="none"><g transform="translate(75 23)"><use fill="#000" filter="url(#a)" xlink:href="#b"/><use fill="url(#c)" xlink:href="#b"/></g><g transform="translate(75 23)"><use fill="#000" filter="url(#d)" xlink:href="#e"/><use fill="url(#f)" xlink:href="#e"/></g><g transform="translate(75 23)"><use fill="#000" filter="url(#g)" xlink:href="#h"/><use fill="url(#i)" xlink:href="#h"/></g><path fill="#FFF" d="M558.273 447.667L308.036 279.5l97.982-65.847c42.83-28.784 96.789-31.483 134.245-6.311 26.044 17.502 31.214 46.615 11.444 65.724l1.389.934c38.324-19.932 84.107-18.527 117.396 3.845 44.046 29.6 38.671 68.419-14.561 104.193l-97.658 65.629zM447.112 331.01l49.942-33.562c36.935-24.822 42.31-48.249 15.224-66.451-24.798-16.665-55.49-14.453-85.851 5.95l-59.641 40.081 80.326 53.982zm176.532 35.663c37.63-25.289 42.136-48.832 13.203-68.276-28.932-19.444-64.163-15.614-104.042 11.186l-58.789 39.508 87.92 59.084 61.708-41.502z"/></g></svg> --}}
                        </div>
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row mt-5 d-flex justify-content-center">
                            {{-- <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="E-mail" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-center">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
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
