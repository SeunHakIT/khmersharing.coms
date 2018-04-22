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
			<form role="form">
				<div class="box-body">
					<div class="form-group">
						<label for="text">Name</label>
						<input type="text" class="form-control" id="name" placeholder="name" required>
					</div>

					<div class="form-group">
						<label for="exampleInputFile">Picture</label>
						<input type="file" id="exampleInputFile">
						
					</div>
					<div class="form-group">
						<label for="text">Url</label>
						<input type="text" class="form-control" id="url" placeholder="url" required>
					</div>

					<div class="form-group" name="category">
						<label>Category</label>
						<select class="form-control">
							<option>option 1</option>
							<option>option 2</option>
							<option>option 3</option>
							<option>option 4</option>
							<option>option 5</option>
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

@stop