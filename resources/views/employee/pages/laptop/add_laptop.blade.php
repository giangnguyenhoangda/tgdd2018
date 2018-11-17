@extends('employee.elements.master')
@section('title')
	Thêm Máy Tính
@endsection
@section('content')
	<!-- Wizard with validation -->
		            <div class="panel panel-white">
						<div class="panel-heading">
							<h6 class="panel-title">Máy Tính</h6>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

	                	<form class="stepy-validation" method="post" action="{{ route('postAddLaptop') }}" enctype="multipart/form-data">
							<fieldset title="1">
								<legend class="text-semibold">Bước 1</legend>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="display-block">Logo:</label>
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
		                                    <input name="imagesurl" type="file" class="file-styled">
		                                    <span class="help-block"><!-- Accepted formats: pdf, doc. Max file size 2Mb --></span>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Hãng Sản Xuất: <span class="text-danger">*</span></label>
											<select name="productType" data-placeholder="Chọn hãng sản xuất" class="select required">
												<option></option>
													<option value="asus">Asus</option>
													<option value="dell">Dell</option>
													<option value="acer">Acer</option>
													<option value="lenovo">Lenovo</option>
													<option value="hp">HP</option>
													<option value="apple">Apple</option>
													<option value="hang-khac">Hãng Khác</option>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Tên Máy Tính: <span class="text-danger">*</span></label>
											<input type="text" name="productName" class="form-control required" placeholder="Acer E5-476-33BQ">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Sản Xuất Tại: <span class="text-danger">*</span></label>
											<input type="text" name="madein" class="form-control required" placeholder="Việt Nam">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Khối Lượng: <span class="text-danger">*</span></label>
											<input type="number" name="weight" class="form-control required" placeholder="0.5kg">
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset title="2">
								<legend class="text-semibold">Bước 2</legend>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Giá Mua:</label>
											<input type="number" name="purchase" class="form-control" placeholder="20000000 VND">
		                                </div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Giá Bán:</label>
											<input type="number" name="price" class="form-control" placeholder="20000000 VND">
	                                    </div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Giảm Giá:</label>
											<input type="number" name="discountPercent" class="form-control" placeholder="5%">
		                                </div>

										<div class="form-group">
											<label>Trạng Thái: <span class="text-danger">*</span></label>
											<select name="status" data-placeholder="Chọn tình trạng" class="select required">
												<option></option>
													<option value="0">Sắp Về</option>
													<option value="1">Sẵn Có</option>
													<option value="-1">Ngừng Kinh Doanh</option>
											</select>
		                                </div>
		                                <div class="form-group">
											<label>Quà Tặng:</label>
		                                    <textarea name="gift" rows="4" cols="4" placeholder="Bao lô..." class="form-control"></textarea>
		                                    
		                                </div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
									
												<label>Số Lượng:</label>
											<input type="number" name="quantity" class="form-control" placeholder="20000000" >
										
										</div>

										<div class="form-group">
											<label>Bàn Phím:</label>
			                                <input type="number" name="keyboard" placeholder="" class="form-control">
		                                </div>
									</div>
								</div>
							</fieldset>

							<fieldset title="3">
								<legend class="text-semibold">Bước 3</legend>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Màn Hình: <span class="text-danger">*</span></label>
			                                <input type="text" name="screen" placeholder="Màn hình" class="form-control required">
		                                </div>

										<div class="form-group">
											<label>Camera Trước:</label>
			                                <input type="text" name="firstcamera" placeholder="13mpx" class="form-control">
		                                </div>

										
											<div class="form-group">
												<label>Chipset:</label>
			                                <input type="text" name="chipset" placeholder="" class="form-control">
											</div>

											<div class="form-group">
												<label>Bộ Nhớ:</label>
			                                <input type="text" name="memory" placeholder="" class="form-control">
											</div>
											<div class="form-group">
												<label>Thiết Kế:</label>
			                                <input type="text" name="design" placeholder="" class="form-control">
											</div>
											
										
									</div>

									<div class="col-md-6">
										<div class="form-group">
												<label>GPU:</label>
			                                <input type="text" name="gpu" placeholder="" class="form-control">
											</div>
		                                <div class="form-group">
		                                    <label>Ram:</label>
			                                <input type="text" name="ram" placeholder="" class="form-control">
		                                </div>

										<div class="form-group">
											<label>Kết Nối:</label>
			                                <input type="text" name="connections" placeholder="" class="form-control">
		                                </div>
		                                <div class="form-group">
												<label>Pin:</label>
			                                <input type="text" name="battery" placeholder="" class="form-control">
											</div>
											<div class="form-group">
												<label>Utility:</label>
			                                <input type="text" name="utility" placeholder="" class="form-control">
											</div>
									</div>
								</div>
							</fieldset>

							<fieldset title="4">
								<legend class="text-semibold">Bước 4</legend>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="display-block">Danh Sách Ảnh:</label>
		                                    <input type="file" name="pictures" class="file-styled">
		                                    <span class="help-block">Định Dạng Hỗ Trợ: jpg.</span>
	                                    </div>
									</div>
								</div>

								<div class="row">
									
										<div class="form-group">
											<label>Mô Tả:</label>
										<!-- Summernote editor -->
											<div class="panel-body">
												<textarea id="hidden_content" style="display: none;" name="description"></textarea>
												<div class="summernote">
												</div>
											</div>
										<!-- /summernote editor -->
										</div>
								</div>
							</fieldset>

							<button type="submit" class="btn btn-primary stepy-finish">Hoàn Thành <i class="icon-check position-right"></i></button>
						</form>
		            </div>
		            <!-- /wizard with validation -->
					<script type="text/javascript" src="{{ asset('employee/js/plugins/editors/summernote/summernote.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/pages/editor_summernote.js') }}"></script>
					
					<script type="text/javascript" src="{{ asset('employee/js/plugins/ui/nicescroll.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/ui/drilldown.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/ui/fab.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/wizards/stepy.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/selects/select2.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/styling/uniform.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/core/libraries/jasny_bootstrap.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/validation/validate.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/pages/wizard_stepy.js') }}"></script>
					<script type="text/javascript">
						$('form').submit(function(){
        					var content = $('#content').html();
        					$('#hidden_content').val(content);
						});
					</script>
@endsection