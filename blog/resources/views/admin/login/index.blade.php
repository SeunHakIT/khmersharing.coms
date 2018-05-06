<!DOCTYPE html>
<html class="bg-black">
<head>
    <meta charset="UTF-8">
    <title>AdminLTE | Registration Page</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />

    <!-- font Awesome -->
    <link href="{{ URL::asset('css/font-awesome.min.css')}} " rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{URL::asset('css/AdminLTE.css')}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
  </head>
  <body class="bg-black">

    <div class="form-box" id="login-box">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (session('msg'))
        <div class="alert alert-danger">
            {{ session('msg') }}
        </div>
        @endif
        <div class="header">
            Login
            
        </div>

        <form  action="{{ route('login') }}" method="post">

         {!! csrf_field() !!}

         <div class="body bg-gray">
            <div class="form-group">
                <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="email"/>
            </div>

            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password"/>
            </div>

        </div>
        <div class="footer">                    

            <button type="submit" class="btn btn-primary">Login</button>


        </div>
    </form>


</div>


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{URL::asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

</body>
</html>