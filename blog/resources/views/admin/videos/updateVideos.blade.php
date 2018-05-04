@extends('admin.layout')


@section('title',' update videos')


@section('content')

<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><i class="fa fa-play-circle-o"></i>  update Videos</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="{{route('save-updatevideos',$videos->id)}}">
				{!! csrf_field() !!}
				
				<div class="box-body">
					<div class="form-group">
						<label for="text">Name</label>
						<input type="text" class="form-control" id="name" placeholder="name" required value="{{$videos->name}}">
					</div>

					<div class="form-group">
						<label for="exampleInputFile">Picture</label>
						<input type="file" id="exampleInputFile" value="{{$videos->picture}}">
						
					</div>
					<div class="form-group">
						<label for="text">Url</label>
						<input type="text" class="form-control" id="url" placeholder="url" required value="{{$videos->url}}">
					</div>

					<div class="form-group" name="category">
						<label>Category</label>
						<select class="form-control" name="category">
							<option value="o" disabled>----Category----</option>
							@foreach($category as $categoryss)
							<option value="{{$categoryss->id}}">{{$categoryss->cat_name}}</option>
							@endforeach
							
						</select>
					</div>

					
				</div><!-- /.box-body -->

				<div class="box-footer">
					<a href="/index.html" class="btn btn-success" >Back</a>
					
					<button type="submit"  class="btn btn-success" name="btn-save">Update</button>
				</div>
			</form>
		</div><!-- /.box -->
	</div>
	
</div>
 @foreach($categories as $cat)

 $cat->id;
                @endforeach
@stop