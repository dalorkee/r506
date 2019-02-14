@extends('layouts.index')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xl-12">
			<div class="breadcrumb-holder">
				<h1 class="main-title float-left">Sittuation</h1>
				<ol class="breadcrumb float-right">
					<li class="breadcrumb-item">Home</li>
					<li class="breadcrumb-item active">Sittuation</li>
				</ol>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- end row -->
	<div class="row">
		<div class="col-xl-12">
			<p>สวัสดีชาวโลกน้ำค้ำสำเร็จ</p>
		</div>
	</div>
</div>
@endsection
@section("customScript")
{{ Html::script("public/assets/js/jquery.canvasjs.min.js") }}
@endsection
