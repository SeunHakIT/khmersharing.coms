@extends('admin.layout')


@section('title',' Date')


@section('content')

<div class="box">
    <div class="box-header">
        
<div class="col-md-3">
   <h3 class="box-title">  <i class="fa fa fa-tasks"></i> Category</h3> <a class="btn btn-success btn-sm" href="{{route('addcategory')}}"><i class="fa fa-plus"></i>  Addnew</a>  
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
                    <th class="category_name">Category Name</th>
                    <th class="action-category" >Action</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($categorys as $category)
                <tr>
                    <td>{{$category->cat_name}}</td>
                    <td>

                        <a href="{{route('editcategory',['id'=>$category->id])}} " title="" class="btn btn btn-success btn-sm" ><i class="fa fas fa-edit"></i></a>

                        <a href="{{route('delect-category',['id'=>$category->id])}} " title="" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i></a>
                    </td>

                </tr>

                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <th class="category_name">Category Name</th>
                    <th class="action-category">Action</th>
                </tr>
            </tfoot>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->

@stop