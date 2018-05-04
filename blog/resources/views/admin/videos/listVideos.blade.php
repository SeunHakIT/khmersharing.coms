@extends('admin.layout')


@section('title',' List all data')


@section('content')

<div class="box">
  <div class="box-header">
    <h3 class="box-title" >  <i class="fa fa-play-circle-o"></i> Videos</h3>   <a class="btn btn btn-success btn-sm" href="/administrator/addvideos"><i class="fa fa-plus"></i>  Addnew</a>                                    
  </div><!-- /.box-header -->
  <div class="box-body table-responsive">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Tile</th>
          <th class="width-img">Pricture</th>
          <th>Url</th>
          <th>Category</th>
          <th>Active</th>
        </tr>
      </thead>
      <tbody>
        @foreach($videos as $videoss)
        <tr>

          <td>{{$videoss->name}}</td>
          <td class="img"><a href="{{$videoss->url}}" title="{{ $videoss->name }}"><img src="/uploads/{{$videoss->picture}}" alt=""></a></td>
          <td>{{$videoss->url}}</td>
          <td>{{$videoss->cat_name}}</td>
          <td>
            @if($videoss->status == 1)
            <a href="{{route('updateStatus',['id'=>$videoss->id,'status'=>0])}}"  class="btn btn-success btn-sm" ><i class="fa fa-check"> </i></a>
            @else
            <a href="{{route('updateStatus',['id'=>$videoss->id,'status'=>1])}}"  class="btn btn-danger btn-sm" ><i class="fa fa-times"></i></a>
            @endif
            <a href="{{route('edit-videos',['id'=>$videoss->id])}}" title="" class="btn btn btn-success btn-sm" ><i class="fa fas fa-edit"></i></a>
            
            <a href="/delect.html/{{$videoss->id}}" title="" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i></a>

          </td>

        </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>

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