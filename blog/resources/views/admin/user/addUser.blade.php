@extends('admin.layout') @section('title',' Date') @section('content')

<div class="col-md-6">
          <div class="box box-primary">
                    <div class="box-header">
                              <h3 class="box-title">
                                        <i class="fa fa-users"></i> Add User</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" enctype="multipart/form-data" action="{{'/administrator/SaveUser'}}">
                              {!! csrf_field() !!}
                              <div class="box-body">
                              @if ($errors->any())
                              <div class="alert alert-danger">
                              <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                              </ul>
                              </div>
                              @endif

                                        @php 
                                        $error_name=''; 
                                          $error_email=''; 
                                          $password_error=''; 
                                          $ConfirmPassword_error=''; 
                                        if ($errors->has('email')) { 
                                           $error_email='has-error'; 
                                        }
                                          if($errors->has('name'))
                                          { 
                                          $error_name='has-error';
                                         }
                                                       
                                        if($errors->has('password'))

                                        { 
                                                  $password_error='has-error'; 
                                        }
                                        if($errors->has('Confirm'))
                                        {
                                        $ConfirmPassword='has-error';
                                        } 
                                        @endphp
                                        <div class="form-group">
                                                  <label>Role</label>
                                                  <select class="form-control" name="role">
                                                            <option value="o" disabled="">----Role---- </option>
                                                            <option value="1">Admin</option>
                                                            <option value="2">Report</option>

                                                  </select>
                                        </div>
                                        <div class="form-group {{$error_name}}">
                                                  <label for="text">Name</label>
                                                  <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{ old('name') }}">
                                        </div>

                                        <div class="form-group {{$error_email}}">
                                                  <label for="text">Email</label>
                                                  <input type="text" class="form-control" name="email" id="email" placeholder="email" value="{{ old('email') }}">
                                        </div>

                                        <div class="form-group {{$password_error}}">
                                                  <label for="text">Password</label>
                                                  <input type="password" class="form-control" name="password" id="Password" placeholder="password">

                                                  <div class="form-group {{$ConfirmPassword_error}}">
                                                            <label for="text"> Confirm Password</label>
                                                            <input type="password" class="form-control" name="Confirm" id="ConfirmPassword" placeholder="Confirm password">
                                                  </div>



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
