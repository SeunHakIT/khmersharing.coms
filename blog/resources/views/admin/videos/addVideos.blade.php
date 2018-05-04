@extends('admin.layout')


@section('title',' Add New Videos')


@section('content')

<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><i class="fa fa-play-circle-o"></i>  Add Videos</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" enctype="multipart/form-data">
				{!! csrf_field() !!}
				<div class="box-body">
					<div class="form-group">
						<label for="text">Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="name">
					</div>

					<div class="form-group">
						<label for="exampleInputFile">Picture</label>
						<input type="file" name="file" id="exampleInputFile">
						
					</div>
					<div class="form-group">
						<label for="text">Url</label>
						<input type="text" class="form-control" name="url" id="url" placeholder="url">
					</div>

					<div class="form-group" >
						<label>Category</label>
						<select class="form-control" name="category">
							<option value="o" disabled>----Category---- </option>
							@foreach($categorys as $category)
							<option value="{{$category->id}}">{{$category->cat_name}}</option>
							@endforeach
							
						</select>
					</div>

					<div class="form-group" >
						<label>Status</label>
						<select class="form-control" name="status">
							<option value="1">enable</option>
							<option value="0">disable</option>
							
						</select>
					</div>
				</div><!-- /.box-body -->
				<div class="box-footer">
					<a href="/index.html" class="btn btn-success" >Back</a>
					<button type="submit"  class="btn btn-success" name="btn-addmore">Save Add More</button>
					<button type="submit"  class="btn btn-success" name="btn-save">Save</button>
				</div>
			</form>
		</div><!-- /.box -->
	</div>
	
</div>


@stop