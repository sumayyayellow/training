<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<div class="container mt-5">
    <div class="card card-login mx-auto text-center bg-dark col-md-4 col-xs-12">
        <div class="card-header mx-auto bg-dark">
            <span> <img src="{{asset('assets/images/school.png')}}" class="w-75" alt="Logo"> </span><br/>
            <span class="logo_title mt-5 text-white"> Login For Admin </span>
            <!--            <h1>--><?php //echo $message?><!--</h1>-->

        </div>
        <div class="card-body">
           <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group">


                    <button type="submit" class="btn btn-outline-danger float-right login_btn">
                        {{ __('Login') }}
                    </button>




                </div>

            </form>
        </div>
    </div>
</div>