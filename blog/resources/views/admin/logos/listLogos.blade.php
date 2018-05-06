@extends('admin.layout')


@section('title',' Date')


@section('content')

<div class="box">
    <div class="box-header">
        <div class="col-md-3">
         <h3 class="box-title">  <i class="fa fa-dribbble"></i> Logos</h3> <a class="btn btn-success btn-sm" href="{{ route('addlogos') }}"><i class="fa fa-plus"></i>  Addnew</a> 
     </div>


     <div class="col-md-9">
        <div class="flash-message">
            @foreach (['danger', 'success'] as $msg)
            @if(Session::has($msg))
            <p class="alert alert-{{ $msg }}">{{ Session::get($msg) }}</p>
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
                <th>Logos Name</th>
                <th>Logos</th>
                <th>Action(s)</th>

            </tr>
        </thead>
        <tbody>
            @php
            $i=1;

            @endphp
            @foreach($logos as $lo)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $lo->logos_name }}</td>
                <td class="img"><img src="/uploads/logos/{{ $lo->icon }}" alt="{{ $lo->logos_name }}"></td>
                <td>
                 {{--  {{route('edit-videos',['id'=>$videoss->id])}} --}}
                 <a href="{{ route('updatelogos',$lo->id) }}" title="" class="btn btn btn-success btn-sm" ><i class="fa fas fa-edit"></i></a>

                 <a  href="  {{ route('destroy',$lo->id) }}" title="" id="" class="btn btn-danger btn-sm delete-model"  ><i class="fa fa-trash-o"></i></a>
             </td>

         </tr>
         @endforeach
     </tbody>
     <tfoot>
        <tr>

         <th>No</th> 
         <th>Logos Name</th>
         <th>Logos</th>
         <th>Action(s)</th>

     </tr>
 </tfoot>
</table>
</div><!-- /.box-body -->
</div><!-- /.box -->

@stop