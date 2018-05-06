@extends('admin.layout')


@section('title',' Date')


@section('content')

<div class="box">
  <div class="box-header">
    
    <div class="col-md-3">
      
    </div>
    <div class="col-md-9">
      <div class="flash-message">
        @foreach (['danger', 'success'] as $msg)
        @if(Session::has($msg))
        <p class="alert alert-{{ $msg }} alert-dismissible">{{ Session::get($msg) }}</p>
        @endif
        @endforeach
      </div>

    </div>                                
  </div><!-- /.box-header -->
  
  <div class="box-body table-responsive">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>picture</th>
          <th>Email</th>
          <th>role</th>
          <th>Active</th>

        </tr>
      </thead>
      <tbody>
        @php
        $i=1;
        @endphp
        @foreach ($user as $users )

        <tr>
         <td>{{ $i++ }}</td>
         <td>{{$users->name}}</td>
         <td class="img"><img src="/uploads/users/{{$users->picture}}" alt="{{ $users->name }}"></td>
         <td>{{$users->email}}</td>
         <td>{{$users->role}}</td>
         <td>

           <a href="/administrator/updateuser/{{$users->id}}" title="{{$users->name}}" class="btn btn btn-success btn-sm" ><i class="fa fas fa-edit"></i></a>|
           <a href="/administrator/delectuser/{{$users->id}}" title="{{$users->name}}" id="alert2" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i></a>
         </td>

       </tr>

       @endforeach



     </tbody>
     <tfoot>
      <tr>
       <th>No</th>
       <th>Name</th>
       <th>picture</th>
       <th>Email</th>
       <th>role</th>
       <th>Active</th>
       

     </tr>
   </tfoot>
 </table>
</div><!-- /.box-body -->
</div><!-- /.box -->

@stop