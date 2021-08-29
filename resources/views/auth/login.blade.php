<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('backend_partials.backend_css')
</head>
<body class="bg-info">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">

                    </a>
                </div>
                <div class="login-form">

                    {!!Form::open(['url' => route('store')])!!}

                        <div class="form-group">
                            {{Form::label('email','Email-Address')}}

                            {{Form::text('email','',['class'=>'form-control','placeholder'=> 'Email'])}}

                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="form-group">

                            {{Form::label('password','Password')}}

                            {{Form::password('password', [' class'=> 'form-control' , 'placeholder' => 'Password'])}}

                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                        </div>
                        {{-- <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button> --}}
                        {{Form::submit('sign in',['class'=> 'btn btn-success btn-flat m-b-30 m-t-30'])}}

                        <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    @include('backend_partials.backend_js')

</body>
</html>
