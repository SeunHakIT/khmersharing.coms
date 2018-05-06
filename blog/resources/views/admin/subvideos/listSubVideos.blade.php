@extends('admin.layout')


@section('title',' Date')


@section('content')

<div class="box">
    <div class="box-header">
     <div class="col-md-3">
        <h3 class="box-title">  <i class="fa fa-play-circle-o"></i> Sub Videos</h3> <a class="btn btn-success btn-sm" href="{{ route('createsubvideos') }}"><i class="fa fa-plus"></i>  Addnew</a>                
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
                <th>title</th>
                <th>picture</th>
                <th>url</th>
                <th>Main videos</th>
                <th>active</th>
            </tr>
        </thead>
        <tbody>
          @php
$i=1;
          @endphp
            @foreach($subvideos as $sub)
            <tr>
               <td>{{ $i++ }}</td>
                <td>{{ $sub->subname }}</td>
                <td class="img"><img src="/uploads/{{ $sub->picture }}" alt="{{ $sub->name }}"></td>
                <td>{{ $sub->url }}</td>
                <td>{{ $sub->name }}</td>
                
                <td>
                   @if($sub->status == 1)
                   <a href="{{route('updateStatuss',['id'=>$sub->id,'status'=>0])}}"  class="btn btn-success btn-sm" ><i class="fa fa-check"> </i></a>
                   @else
                   <a href="{{route('updateStatuss',['id'=>$sub->id,'status'=>1])}}"  class="btn btn-danger btn-sm" ><i class="fa fa-times"></i></a>
                   @endif
                   <a href="{{ route('updatesubvideos',['id'=>$sub->id]) }}" title="" class="btn btn btn-success btn-sm" ><i class="fa fas fa-edit"></i></a>

                   <a href="{{route('delectsubVideos',['id'=>$sub->id])}}" title="{{ $sub->name }}" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i></a>

               </td>
           </tr>
           @endforeach


       </tbody>
       <tfoot>
        <tr>
            <th>No</th>
            <th>title</th>
            <th>picture</th>
            <th>url</th>
            <th>Main videos</th>
            <th>active</th>
        </tr>
    </tfoot>
</table>
</div><!-- /.box-body -->
</div><!-- /.box -->

@stop