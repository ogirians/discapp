@extends('admin/layout/main')
@section('title', 'Home')
@section('container')

<section class="content-header">
	<h1>
		Room kode
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">room</li>
	</ol>
</section>


<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
					@foreach ($hasil as $data)
					<h3>{{$data -> kode}}</h3>
					@endforeach
					<p>Room Code for today</p>
				</div>
				<div class="icon">
					<i class="ion ion-person-add"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->

		<!-- ./col -->

		<!-- ./col -->

		<!-- ./col -->
	</div>
	<!-- /.row -->
	<!-- Main row -->

</section>
<!-- /.content -->
@endsection()