@extends('admin.layout')


@section('title',' List all data')


@section('content')

<div class="box">
  <div class="box-header">
    <div class="col-md-3">
     <h3 class="box-title" >  <i class="fa fa-play-circle-o"></i> Videos</h3>   <a class="btn btn btn-success btn-sm" href="/administrator/addvideos"><i class="fa fa-plus"></i>  Addnew</a>   
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
        <th>Tile</th>
        <th class="width-img">Pricture</th>
        <th>Url</th>
        <th>Category</th>
        <th>Active</th>
      </tr>
    </thead>
    <tbody>
        @php
        $i=1;
        @endphp
      @foreach($videos as $videoss)
      <tr>

        <td>{{$i++}}</td>  
         <td>{{$videoss->name}}</td>
        <td class="img"><a href="{{$videoss->url}}" title="{{ $videoss->name }}"><img src="/uploads/{{$videoss->picture}}" alt=""></a></td>
        <td>{{$videoss->url}}</td>
        <td>{{$videoss->cat_name}}</td>
        <td>
          @if($videoss->status == 1)
          <a href="{{route('updateStatus',['id'=>$videoss->id,'status'=>0])}}"  id="alert" class="btn btn-success btn-sm" ><i class="fa fa-check"> </i></a>
          @else
          <a href="{{route('updateStatus',['id'=>$videoss->id,'status'=>1])}}"  id="alert1" class="btn btn-danger btn-sm" ><i class="fa fa-times"></i></a>
          @endif
          <a href="{{route('edit-videos',['id'=>$videoss->id])}}" title="" class="btn btn btn-success btn-sm" ><i class="fa fas fa-edit"></i></a>

          <a  href="/administrator/delect/{{ $videoss->id }}" title="" id="" class="btn btn-danger btn-sm delete-model"  ><i class="fa fa-trash-o"></i></a>

        </td>

      </tr>
      @endforeach
    </tbody>
    <tfoot>
      <tr>

        <th>No</th>
        <th>Tile</th>
        <th>Pricture</th>
        <th>Url</th>
        <th>Category</th>
        <th>Active</th>

      </tr>
    </tfoot>
  </table>
</div><!-- /.box-body -->
</div><!-- /.box -->





@stop

