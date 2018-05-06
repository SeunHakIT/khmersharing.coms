@extends('admin.layout') @section('title',' Logos Update') @section('content')

<div class="col-md-6">
     <div class="box box-primary">
          <div class="box-header">
               <h3 class="box-title">
                    <i class="fa fa-users"></i> Add User</h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" method="post" enctype="multipart/form-data" action="/administrator/savelogos/{{$logos->id }}">
                    {!! csrf_field() !!}
                    <div class="box-body">



                         <div class="form-group ">
                              <label for="text">Name</label>
                              <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{ $logos->logos_name }}">
                         </div>

                         <div class="form-group">
                              <label for="text">Picture</label>
                              <input type="file" class="form-control" id="name" name="file" placeholder="file" value="{{ $logos->icon }}">
                         </div>

                         <!-- /.box-body -->
                         <div class="box-footer">
                              <a href="{{'/administrator'}}" class="btn btn-success">Back</a>
                              <button type="submit" class="btn btn-success" name="btn-save">Save</button>
                         </div>
                    </form>
               </div>
               <!-- /.box -->
          </div>


          @stop
