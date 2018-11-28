@extends('admin.elements.master')
@section('title')
	Trang Quản Trị
@endsection
@section('content')
<div class="row">
	<div class="col-lg-9">
		<!-- Quick stats boxes -->
		<div class="row">
			<div class="col-lg-4">
				<!-- Current server load -->
				<div class="panel bg-teal-400">
					<div class="panel-body">
						<div class="heading-elements">
							<ul class="icons-list">
								<li class="dropdown">
							    	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-sync"></i> Cập nhật</a></li>
										<li><a href="#"><i class="icon-list-unordered"></i> Xem</a></li>
									</ul>
								</li>
							</ul>
						</div>
						Doanh Số
						<h3 class="no-margin">{{ $kq[0] }}</h3>										
						<div class="text-muted text-size-small">VND</div>
					</div>
					<div id="server-load"></div>
				</div>
				<!-- /current server load -->
			</div>
			<div class="col-lg-4">
				<!-- Current server load -->
				<div class="panel bg-pink-400">
					<div class="panel-body">
						<div class="heading-elements">
							<ul class="icons-list">
								<li class="dropdown">
							    	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-sync"></i> Cập nhật</a></li>
										<li><a href="#"><i class="icon-list-unordered"></i> Xem</a></li>
									</ul>
								</li>
							</ul>
						</div>
						Doanh Thu
						<h3 class="no-margin">{{ $kq[1] }}</h3>										
						<div class="text-muted text-size-small">VND</div>
					</div>
					<div id="server-load"></div>
				</div>
				<!-- /current server load -->
			</div>
			<div class="col-lg-4">
				<!-- Current server load -->
				<div class="panel bg-blue-400">
					<div class="panel-body">
						<div class="heading-elements">
							<ul class="icons-list">
								<li class="dropdown">
							    	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-sync"></i> Cập nhật</a></li>
										<li><a href="#"><i class="icon-list-unordered"></i> Xem</a></li>
									</ul>
								</li>
							</ul>
						</div>
						Lợi Nhuận
						<h3 class="no-margin">{{ $kq[2] }}</h3>										
						<div class="text-muted text-size-small">VND</div>
					</div>
				<div id="server-load"></div>
			</div>
			<!-- /current server load -->
		</div>								
	</div>
	<!-- /quick stats boxes -->
	<div class="row">
		<!-- Chart data colors -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h6 class="panel-title text-semibold">Chart data colors</h6>
				<div class="heading-elements">
					<ul class="icons-list">
			            <li><a data-action="collapse"></a></li>
			            <li><a data-action="reload"></a></li>
			            <li><a data-action="close"></a></li>
			        </ul>
		        </div>
			</div>
			<div class="panel-body">
				<div class="chart-container">
					<div class="chart" id="c3-data-color"></div>
				</div>
			</div>
		</div>
		<!-- /chart data colors -->
	</div>
	</div>
	<div class="col-lg-3">
		<div class="panel panel-flat">
			<div class="table-responsive">
				<table class="table text-nowrap">
					<tbody>
						<tr class="active">
							<td colspan="5">Hôm Nay</td>
							<td></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-stats"></i> Cập nhật</a></li>
											<li><a href="#"><i class="icon-file-text2"></i> Xem</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td colspan="5">Doanh Số</td>
							<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 2.43%</span></td>
							<td >
								
							</td>
						</tr>
						<tr>
							<td colspan="5">Doanh Thu</td>
							<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 2.43%</span></td>
							<td>
							</td>
						</tr><tr>
							<td colspan="5">Lợi Nhuận</td>
							<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 2.43%</span></td>
							<td>
							</td>
						</tr>
						<tr class="active">
							<td colspan="5">Hôm Qua</td>
							<td></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-stats"></i> Cập nhật</a></li>
											<li><a href="#"><i class="icon-file-text2"></i> Xem</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td colspan="5">Doanh Số</td>
							<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 2.43%</span></td>
							<td>
							</td>
						</tr><tr>
							<td colspan="5">Doanh Thu</td>
							<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 2.43%</span></td>
							<td >
							</td>
						</tr><tr>
							<td colspan="5">Lợi Nhuận</td>
							<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 2.43%</span></td>
							<td>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="{{ asset('employee/js/plugins/visualization/d3/d3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('employee/js/plugins/visualization/c3/c3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('employee/js/charts/c3/c3_advanced.js') }}"></script>
@endsection
@section('js3')
	<script type="text/javascript" src="{{ asset('employee/js/pages/dashboard.js') }}"></script>
@endsection

@section('js2')
	<script type="text/javascript" src="{{ asset('employee/js/plugins/ui/moment/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('employee/js/plugins/pickers/daterangepicker.js') }}"></script>
@endsection