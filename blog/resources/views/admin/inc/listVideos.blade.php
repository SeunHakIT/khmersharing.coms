@extends('admin.layout')


@section('title',' Date')


@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title" >  <i class="fa fa-play-circle-o"></i> Videos</h3>   <a class="btn btn btn-success btn-sm" href="/addvideos.html"><i class="fa fa-plus"></i>  Addnew</a>                                    
    </div><!-- /.box-header -->
    <div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Tile</th>
                    <th>Pricture</th>
                    <th>Url</th>
                    <th>Category</th>
                    <th>Active</th>
                </tr>
            </thead>
            <tbody>
              @foreach($videos as $videoss)
              <tr>

                <td>{{$videoss->name}}</td>
                <td>{{$videoss->picture}}</td>
                <td>{{$videoss->url}}</td>
                <td>{{$videoss->category_id}}</td>
                <td>
                    @if($videoss->status == 1)
                    <a href="" title="" class="btn btn-success btn-sm" ><i class="fa fa-check"> </i></a>

                   
                

                    @else
                       <a href="" title="" class="btn btn-danger btn-sm" ><i class="fa fa-times"></i></a>
                    @endif


                    <a href="" title="" class="btn btn btn-success btn-sm" ><i class="fa fas fa-edit"></i></a>
                  
                    <a href="" title="" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i></a>

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