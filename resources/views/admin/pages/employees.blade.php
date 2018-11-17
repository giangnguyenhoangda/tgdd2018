@extends('admin.elements.master')
@section('title')
	Danh Sách Nhân Viên
@endsection
@section('content')
	<!-- Multi column ordering -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Danh Sách Nhân Viên</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							
						</div>

						<table class="table datatable-multi-sorting">
							<thead>
								<tr>
									<th>Avatar</th>
									<th>UserName</th>
									<th>Password</th>
									<th>Họ Và Tên</th>
									<th>Số Điện Thoại</th>
									<th>Email</th>
									<th class="text-center">Hành Động</th>
								</tr>
							</thead>
							<tbody>
								@if (count($list)>0)
								
								@foreach ($list as $element)
								<tr>
									<td ><img src="{{ asset($element->avatar) }}" width="50px"></td>
									<td>{{ $element->username }}</td>
									<td>{{ $element->password }}</td>
									<td>{{ $element->fullname }}</td>
									<td>{{ $element->phonenumber }}</td>
									<td>{{ $element->email }}</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="{{ route('getEditEmployee',$element->id) }}"><i class="icon-file-pdf"></i> Sửa</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Xóa</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								@endforeach
								@endif
							</tbody>
						</table>
					</div>
					<!-- /multi column ordering -->
					<script type="text/javascript" src="{{ asset('employee/js/plugins/tables/datatables/datatables.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/pages/datatables_sorting.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/selects/select2.min.js') }}"></script>
@endsection