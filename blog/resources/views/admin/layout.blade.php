<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Khmersharings | ADMIN @yield('title')</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- bootstrap 3.0.2 -->
  
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/AdminLTE.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css') }}" />

  <link rel="stylesheet" href="{{ URL::asset('css/datatables/dataTables.bootstrap.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/sweetalert.css') }}" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
      </head>
      <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        @include('admin.inc.header')
        <div class="wrapper row-offcanvas row-offcanvas-left">
         @include('admin.inc.sibar')
         <!-- Right side column. Contains the navbar and content of the page -->
         @include('admin.inc.content')
       </div><!-- ./wrapper -->





       {{--   <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}


       <script src="{{ asset('js/app.js') }}"></script>
       <script src="{{ asset('js/bootstrap.min.js') }}"></script>
       <script src="{{ asset('js/jquery-1.10.1.js') }}"></script>
       <script src="{{ asset('js/plugins/datatables/jquery.dataTables.js') }}"></script>
       <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap.js') }}"></script>
       <script src="{{ asset('js/bootstrap.min.js') }}"></script>

       <script>
         $('.alert').hide().show('slow').html('You have successfully registered').delay(10000).hide();
       </script>




       <script type="text/javascript">
        $(function() {
          $("#example1").dataTable();
          $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
          });
        });
      </script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script>





      </script>
    </body>
    </html>