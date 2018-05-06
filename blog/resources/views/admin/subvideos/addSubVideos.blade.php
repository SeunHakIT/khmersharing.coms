@extends('admin.layout')


@section('title',' Date')


@section('content')

<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><i class="fa fa-play-circle-o"></i>  Add Videos</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="{{ route('savesubvideos') }}" enctype="multipart/form-data" >
				{!! csrf_field() !!}
				<div class="box-body">
					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
					<div class="form-group">
						<label for="text">Name</label>
						<input type="text" name="name" class="form-control" id="name" placeholder="name" value="{{ old('name') }}">
					</div>

				{{-- 	<div class="form-group">
						<label for="exampleInputFile">Picture</label>
						<input type="file" id="exampleInputFile" name="file" value="{{ old('file') }}">
						
					</div> --}}

						<div class="form-group">
						<label for="text">Picture</label>
						<input type="file" class="form-control" id="name" name="file" value="{{old('file')}}" placeholder="file" required  >
					</div>
					<div class="form-group">
						<label for="text">Url</label>
						<input type="text" class="form-control" id="url" placeholder="url" name="url" value="{{ old('url') }}">
					</div>

					<div class="form-group" name="mainvideos">
						<label>Main Videoos</label>
						<select class="form-control" name="mainvideos">
							<option disabled="0">--Main Videoos--</option>
							@foreach($videos as $vid)
							<option value="{{ $vid->id }}">{{  $vid->name }}</option>
							@endforeach
						</select>
					</div>
						<div class="form-group" >
						<label>Status</label>
						<select class="form-control" name="Status">
							<option disabled="0">--Status--</option>
							
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