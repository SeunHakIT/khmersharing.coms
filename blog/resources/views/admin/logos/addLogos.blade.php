@extends('admin.layout')


@section('title',' Add Logos')


@section('content')

<div class="row">
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">   <i class="fa fa fa-tasks"></i>  Add Category</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post" action="{{ route('Savelogos') }}" enctype="multipart/form-data">
				{!! csrf_field() !!}
				<div class="box-body">
					<div class="form-group">
						<label for="text">Name</label>
						<input type="text" class="form-control" id="name" name="logos_name" placeholder="logos Name" required  value="{{ old('logos_name') }}" >
					</div>


					<div class="form-group">
						<label for="text">Picture</label>
						<input type="file" class="form-control" id="name" name="file" placeholder="file" required  >
					</div>

				</div><!-- /.box-body -->

				<div class="box-footer">
					<a href="/index.html" class="btn btn-primary" >Back</a>
					<button type="submit"  class="btn btn-primary" name="btn-addmore">Save Add More</button>
					<button type="submit"  class="btn btn-primary" name="btn-save">Save</button>
				</div>
			</form>
		</div><!-- /.box -->
	</div>
	
</div>


@stop