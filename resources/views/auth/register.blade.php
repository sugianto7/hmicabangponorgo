

<!doctype html>
<html lang="en">
  <head>
    <title>HMI CABANG PONOROGO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="asset/css/style.css">

    </head>
    <body class="img js-fullheight" style="background-image: url(asset/images/bg1.jpg);">
    <section class="ftco-section">
        <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center">
                            <h2 class="heading-section text-center">Registrasi </h2>
                            <h2 class="heading-section"><img src="asset/images/logo-2.png" style="width: 250px;"> </h2>
                        </div>
                    </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4" >            
                    <div class="login-wrap p-0">
                <form method="POST" action="{{ route('register') }}" class="signin-form">
                    @csrf
                    <div class="form-group">
                        <input id="name" name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="Username"  required autofocus autocomplete="name">
                        @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="email" name="email" value="{{ old('email') }}" type="email" class="form-control" placeholder="Email" required>
                        @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                <div class="form-group">
                  <input id="password-field" type="password"  name="password"  class="form-control" placeholder="Password" required autocomplete="new-password">
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                @error('password')
                     <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                @enderror
                <div class="form-group">
                  <input id="password-fiel" type="password"  name="password_confirmation"  class="form-control" placeholder="Ulangi Password" required autocomplete="new-password">
                  <span toggle="#password-fiel" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary submit px-3">{{ __('Register') }}</button>
                </div>
                    <div class="form-group d-md-flex">
                        <div class="w-50">
                            <label class="checkbox-wrap checkbox-primary">Remember Me
                              <input type="checkbox" checked>
                              <span class="checkmark"></span>
                            </label>
                        </div>
                      <!--   <div class="w-50 text-md-right">
                            <a href="#" style="color: #fff">Forgot Password</a>
                        </div> -->
                    </div>
                  </form>
    <!--                   <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                      <div class="social d-flex text-center">
                        <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
                        <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
                      </div -->
                  </div>
                </div>
            </div>
        </div>
    </section>

    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/popper.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/main.js"></script>

    </body>
</html>

