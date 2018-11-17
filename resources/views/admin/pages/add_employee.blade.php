@extends('admin.elements.master')
@section('title')
	Thêm Nhân Viên
@endsection
@section('content')
	<!-- 2 columns form -->
	<div class="col-md-3"></div>
					<form action="{{ route('postAddEmployee') }}" method="post" enctype="multipart/form-data">
						<div class="panel panel-flat col-md-6">
							<div class="panel-heading">
								<h5 class="panel-title">Thêm Nhân Viên</h5>
								<div class="heading-elements">
									<ul class="icons-list">
				                		<li><a data-action="collapse"></a></li>
				                		<li><a data-action="reload"></a></li>
				                		<li><a data-action="close"></a></li>
				                	</ul>
			                	</div>
							</div>

							<div class="panel-body">
								<div class="row">
									<div>
										<fieldset>
						                	<legend class="text-semibold"><i class="icon-reading position-left"></i> Thông Tin Nhân Viên</legend>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="display-block">Avatar</label>
							                            <input type="file" name="avatar" class="file-styled">
							                            <span class="help-block">Định Dạng Hỗ Trợ: gif, png, jpg.</span>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<input type="hidden" name="_token" value="{{ csrf_token() }}">
														<label>Tên Đăng Nhập:</label>
														<input type="text" name="username" placeholder="Nhập tên đăng nhập của bạn" class="form-control">
														
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Mật Khẩu:</label>
														<input type="text" name="password" placeholder="Nhập mật khẩu của bạn" class="form-control">
														
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label>Họ Và Tên:</label>
														<input type="text" name="fullname" placeholder="Nguyễn Văn A" class="form-control">
														
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Số Điện Thoại:</label>
														<input type="text" name="phonenumber" placeholder="+8412345678" class="form-control">
														
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Email:</label>
														<input type="text" name="email" placeholder="abc@email.com" class="form-control">
													</div>
												</div>
											</div>

										</fieldset>
									</div>
									<div class="col-md-3"></div>
								</div>

								<div class="text-right">
									<button type="submit" class="btn btn-primary">Thêm Nhân Viên <i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</div>
						</div>
					</form>
					<!-- /2 columns form -->
					<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/selects/select2.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/styling/uniform.min.js') }}"></script>	
					<script type="text/javascript" src="{{ asset('employee/js/pages/form_layouts.js') }}"></script>
@endsection