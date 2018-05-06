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
			<form role="form" method="post" action="{{route('updatevideos',$videos->id)}}" enctype="multipart/form-data">
				{!! csrf_field() !!}
				
				<div class="box-body">
					<div class="form-group">
						<label for="text">Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="name" required value="{{$videos->name}}">
					</div>

					<div class="form-group">
						<label for="exampleInputFile">Picture</label>
						<div class="fallback">
							<input type="file" name="file" value="{{$videos->picture}}"  />
						</div>
					</div>
					<div class="form-group">
						<label for="text">Url</label>
						<input type="text" class="form-control" id="url" placeholder="url" name="url" required value="{{$videos->url}}">
					</div>

					<div class="form-group" name="category">
						<label>Category</label>
						<select class="form-control" name="category">
							<option value="o" disabled>----Category----</option>
							@foreach($category as $categorys)
							<option value="{{$categorys->id}}" @if($videos->category_id==$categorys->id)

								selected 
								@endif

								>{{$categorys->cat_name}}</option>
								@endforeach
								
							</select>
						</div>
						<div class="form-group" name="category">
							<label>Status</label>
							<select class="form-control" name="status">
								<option value="o" disabled>----Category----</option>

								<option value="1"

								@if($videos->status==1)

								selected 

								@endif
								
								>enable</option><option value="0"


								@if($videos->status==0)

								selected 

								@endif

								>disable</option>	<option value="0">disable</option>
								
							</select>
						</div>
						
					</div><!-- /.box-body -->

					<div class="box-footer">
						<a href="/index.html" class="btn btn-success" >Back</a>
						
						<button type="submit"  class="btn btn-success" name="btn-save" id="update">Update</button>
					</div>
				</form>
			</div><!-- /.box -->
		</div>
		
	</div>

	@stop

