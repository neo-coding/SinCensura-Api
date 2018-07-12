<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title> {{env('APP_NAME')}} </title>
  
  
  
      <link rel="stylesheet" href="{{asset('css/login.css')}}">

  
</head>

<body>

  <div class="login-page">
  <div class="form">
    <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf
        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus/>
          @if ($errors->has('email'))
              <span class="invalid-feedback">
               <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        <input type="password" placeholder="password" name="password" />
        @if ($errors->has('password'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
          <button type="submit">Enviar</button>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="{{asset('js/login.js')}}"></script>




</body>

</html>
