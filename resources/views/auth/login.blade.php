@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ __('Login') }}</h3></div>
                                    <div class="card-body">
                                        <div class="card-body">
                                            <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <form>
                                                <div class="form-group">
                                                    <label class="small mb-1" for="email">{{ __('E-Mail Address') }}</label>
                                                    <input class="form-control py-4 @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="email" type="email" placeholder="Enter email address" />
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="small mb-1" for="password">{{ __('Password') }}</label>
                                                    <input class="form-control py-4 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password" type="password" placeholder="Enter password" />
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                        <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                    </div>
                                                </div>
                                                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Login') }}
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div> 
    </body>   
@endsection

