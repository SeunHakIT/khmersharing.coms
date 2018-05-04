@extends('admin.layout') @section('title',' Date') @section('content')

<div class="col-md-6">
          <div class="box box-primary">
                    <div class="box-header">
                              <h3 class="box-title">
                                        <i class="fa fa-users"></i> Add User</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" enctype="multipart/form-data" action="{{route('updateusers',$user->id)}}">
                              {!! csrf_field() !!}
                              <div class="box-body">
              

                                       
                                        <div class="form-group">
                                                  <label>Role</label>
                                                  <select class="form-control" name="role">
                                                            <option value="o" disabled="">----Role---- </option>
                                                            <option value="1">Admin</option>
                                                            <option value="2">Report</option>

                                                  </select>
                                        </div>
                                        <div class="form-group ">
                                                  <label for="text">Name</label>
                                                  <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{$user->name}}">
                                        </div>

                                        <div class="form-group ">
                                                  <label for="text">Email</label>
                                                  <input type="text" class="form-control" name="email" id="email" placeholder="email" value="{{$user->email}}">
                                        </div>

                                        <div class="form-group">
                                                  <label for="text">Password</label>
                                                  <input type="password" class="form-control" name="password" id="Password" placeholder="password" value="{{$user->password}}">

                                         



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
