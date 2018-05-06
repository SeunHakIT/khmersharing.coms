
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Khmersharings | ADMIN @yield('title')</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="css/bootstrap.min.css">


  <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css')}}">

  <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css')}}">

  <link rel="stylesheet" href="{{ URL::asset('css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css/dataTables.bootstrap.min.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('css/skin-blue.min.css')}}">  

  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}"> 
  <link rel="stylesheet" href="{{ URL::asset('css/custom.css')}}">
  <!-- Google Font -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    @include('admin.inc.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.inc.sibar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Page Header
          <small>Optional description</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
          <li class="active">Here</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">
       @yield('content')


     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->

   <!-- Main Footer -->




</div>

{{--   <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script> --}}


<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.min.js')}}"></script>
<script src="{{ asset('js/demo.js')}}"></script>
<script src="{{ asset('js/fastclick.js')}}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('js/dataTables.bootstrap.min.js')}}"></script>
<script>
 $('.alert').hide().show('slow').html('You have successfully registered').delay(10000).hide();
</script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>