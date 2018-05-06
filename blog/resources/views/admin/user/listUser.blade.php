@extends('admin.layout')


@section('title',' Date')


@section('content')

<div class="box">
  <div class="box-header">
    <h3 class="box-title">  <i class="fa fa-users"></i>  Add User</h3> <a class="btn btn-success btn-sm" href="{{'/administrator/createuser'}}"><i class="fa fa-plus"></i>  Addnew</a>                                    
  </div><!-- /.box-header -->
  <div class="flash-message">
    @foreach (['danger', 'success'] as $msg)
    @if(Session::has($msg))
    <p class="alert alert-{{ $msg }}">{{ Session::get($msg) }}</p>
    @endif
    @endforeach
  </div>
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

        @foreach ($user as $users)

        <tr>
         <td>0</td>
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