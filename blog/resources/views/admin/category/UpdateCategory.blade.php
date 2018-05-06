@extends('admin.layout')


@section('title',' update')


@section('content')

<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">   <i class="fa fa fa-tasks"></i>  update Category</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="{{route('update',$categorys->id)}}">
				{!! csrf_field() !!}
				
			
				<div class="box-body">
					<div class="form-group">
						<label for="text">Name</label>
						<input type="text" class="form-control" id="name" name="category" placeholder="Category" required value="{{$categorys->cat_name}}">
					</div>

				</div><!-- /.box-body -->

				<div class="box-footer">
					<a href="/administrator" class="btn btn-success btn-sm" >Back</a>
					<button type="submit"  class="btn btn-success btn-sm" name="btn-addmore">Save Add More</button>
					<button type="submit"  class="btn btn-success btn-sm" name="btn-save">Save</button>
				</div>
			</form>
		</div><!-- /.box -->
	</div>
	
</div>


@stop