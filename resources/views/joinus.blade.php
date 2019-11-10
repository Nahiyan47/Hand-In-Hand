<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="{{ URL::asset('css1/joinus.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="/joinus" method="POST">

          {{ csrf_field() }}
          <div class="top-row">
            <div class="field-wrap">
              <label>
                 Name<span class="req">*</span>
              </label>
              <input type="text" name="name" value="{{old('name')}}"  required autocomplete="off" />
              {!! $errors->first('name', '<p>:message</p>') !!}
            </div>
        
            <div class="field-wrap">
              <label>
                Mobile no<span class="req">*</span>
              </label>
              <input type="text" name="mobile" value="{{old('mobile')}}" />
              {!! $errors->first('mobile', '<p class="help-block">:message</p>') !!}

            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="emails" value="{{old('emails')}}" required autocomplete="off"/>
            {!! $errors->first('emails', '<p style="color: orange;">:message</p>') !!}
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" value="{{old('password')}}" required autocomplete="off"/>
            {!! $errors->first('password', '<p style="color: orange;">:message</p>') !!}
          </div>
          <div class="field-wrap">
            <label>
              Confirm Password<span class="req">*</span>
            </label>
            <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" required autocomplete="off"/>
            {!! $errors->first('password_confirmation', '<p style="color: orange">:message</p>') !!}
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="{{ route('login') }}" method="POST">
            {{ csrf_field() }}
              <div class="field-wrap">
                <label>
                Email Address<span class="req">*</span>
                </label>
                <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email"/>
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong style="color: orange">{{ $message }}</strong>
                </span>
                @enderror
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password"/>
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="{{ URL::asset('js/script1.js') }}"></script>

</body>
</html>