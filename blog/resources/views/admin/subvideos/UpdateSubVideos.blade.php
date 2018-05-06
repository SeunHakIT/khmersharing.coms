@extends('admin.layout')


@section('title',' Date')


@section('content')

<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><i class="fa fa-play-circle-o"></i> Update Sub Videos</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="{{ route('updatesubvideossave',$Subvideos->id) }}" enctype="multipart/form-data">
				{!! csrf_field() !!}
				<div class="box-body">
					<div class="form-group">
						<label for="text">Name</label>
						<input type="text" class="form-control" id="name" placeholder="name" name="name" value="{{ $Subvideos->subname }}">
					</div>

					<div class="form-group">
						<label for="exampleInputFile">Picture</label>
						<input type="file" id="exampleInputFile" name="file" value="{{ $Subvideos->picture }}">
						
					</div>
					<div class="form-group">
						<label for="text">Url</label>
						<input type="text" class="form-control" id="url" placeholder="url" name="url" value="{{ $Subvideos->url }}">
					</div>

					<div class="form-group" name="category">
						<label>Main Videoos</label>
						<select class="form-control" name="main">
							@foreach($videos as $vi)
							<option value="{{ $vi->id }}" @if($Subvideos->videos_id==$vi->id)

								selected 


								@endif
								>{{ $vi->name }}</option>
								@endforeach
							</select>
						</div>


					</div><!-- /.box-body -->

					<div class="box-footer">
						<a href="/administator/dashboard" class="btn btn-success" >Back</a>
						<button type="submit"  class="btn btn-success" name="btn-addmore">Save Add More</button>
						<button type="submit"  class="btn btn-success" name="btn-save">Save</button>
					</div>
				</form>
			</div><!-- /.box -->
		</div>

	</div>


	@stop