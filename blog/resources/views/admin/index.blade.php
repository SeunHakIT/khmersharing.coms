@extends('admin.layout')


@section('title',' Date')


@section('content')

<div class="row">
	<div class="col-lg-4 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3>
					{{$count}}
				</h3>

				<p>Videos</p>

			</div>
			<div class="icon">
				<i class="fa fa-play-circle"></i>
			</div>
			<a href="{{ route('listvideos') }}" class="small-box-footer">
				More info <i class="fa fa-play-circle"></i>
			</a>
		</div>
	</div><!-- ./col -->
	<div class="col-lg-4 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green">
			<div class="inner">
				<h3>
					{{$sub}}
				</h3>
				<p>
					Sub Videos
				</p>
			</div>
			<div class="icon">
				<i class="fa fa-play-circle"></i>
			</div>
			<a href="{{ route('listsubvideos') }}" class="small-box-footer">
				More info <i class="fa fa-play-circle"></i>
			</a>
		</div>
	</div><!-- ./col -->
	<div class="col-lg-4 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-yellow">
			<div class="inner">
				<h3>
					{{$Users}}
				</h3>
				<p>
					User 
				</p>
			</div>
			<div class="icon">
				<i class="fa fa-users"></i>
			</div>
			<a href="{{ route('listuser') }}" class="small-box-footer">
				More info <i class="fa fa-users"></i>
			</a>
		</div>
	</div><!-- ./col -->

</div>

@stop