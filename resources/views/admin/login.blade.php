<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

  <link rel="stylesheet" href="{{ url('assets_login/login/style.css', []) }}">
</head>
<body>
  
  <div class="container">
    @if (session()->has('error'))
    <div class="alert alert-danger mt-2">
      {{ session()->get('error') }}
    </div>
    @endif

    @if (session()->has('success'))
    <div class="alert alert-success mt-2">
      {{ session()->get('success') }}
    </div>
    @endif
   
   <div class="row">
      <div class="col-lg-3 col-md-2"></div>
      <div class="col-lg-6 col-md-8 login-box">
        <div class="col-lg-12 login-key">
          <i class="fa fa-key" aria-hidden="true"></i>
        </div>
        <div class="col-lg-12 login-title">
          ADMIN PANEL
        </div>
        
        <div class="col-lg-12 login-form">
          <div class="col-lg-12 login-form">
            <form action="{{ url('loginpost', []) }}" method="post">
              @csrf
              <div class="form-group">
                <label class="form-control-label">Email</label>
                <input type="text" class="form-control" name="email">
              </div>
              <div class="form-group">
                <label class="form-control-label">PASSWORD</label>
                <input type="password" class="form-control" i name="password">
              </div>
              
              <div class="col-lg-12 loginbttm">
                <div class="col-lg-6 login-btm login-text">
                  <!-- Error Message -->
                </div>
                <div class="col-lg-6 login-btm login-button">
                  {{-- <a type="submit" class="btn btn-outline-primary text-white" href="{{ url('register', []) }}">Register</a> --}}
                  <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-3 col-md-2"></div>
      </div>
    </div>
  </body>
  </html>