@extends('admin.elements.master')
@section('title')
	Thống Kê
@endsection
@section('content')
	<!-- Date picker -->
	<div class="panel panel-flat">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-6">	
							<div class="content-group-lg">
								<h6 class="text-semibold">Từ Ngày:</h6>
								<div class="input-group">
									<span class="input-group-addon"><i class="icon-calendar"></i></span>
										<input type="text" class="form-control datepicker-menus" placeholder="Pick a date&hellip;">
								</div>
							</div>
						</div>
						<div class="col-md-6">	
							<div class="content-group-lg">
								<h6 class="text-semibold">Đến Ngày:</h6>
								<div class="input-group">
									<span class="input-group-addon"><i class="icon-calendar"></i></span>
										<input type="text" class="form-control datepicker-menus" placeholder="Pick a date&hellip;">
								</div>
							</div>
						</div>
						<div class="col-md-12">						
							<button type="button" class="btn border-slate text-slate-800 btn-flat legitRipple">
							Thống Kê
							</button>			
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="col-md-6"></div>
					<div class="col-md-6">
						<div class="content-group-lg">
							<h6 class="text-semibold">Tổng:</h6>
							<div class="input-group">
								<h1 style="color: red;font-size: 30px">100000000000VND</h1>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Thời Gian</th>
						<th>Tổng</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>1/10/2018</td>
						<td>22000000</td>
					</tr>
					<tr>
						<td>2</td>
						<td>2/10/2018</td>
						<td>22000000</td>
					</tr>
					<tr>
						<td>3</td>
						<td>13/10/2018</td>
						<td>22000000</td>
					</tr>
					<tr>
						<td>4</td>
						<td>14/10/2018</td>
						<td>22000000</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- /date picker -->
<script type="text/javascript" src="{{ asset('employee/js/core/libraries/jquery_ui/widgets.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('employee/js/core/libraries/jquery_ui/effects.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('employee/js/pages/jqueryui_forms.js') }}"></script>	
@endsection