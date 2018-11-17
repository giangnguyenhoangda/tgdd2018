@extends('employee.elements.master')
@section('title')
	Máy Tính Bảng
@endsection
@section('content')
	<!-- Wizard with validation -->
		            <div class="panel panel-white">
						<div class="panel-heading">
							<h6 class="panel-title">Sửa Thông Tin</h6>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

	                	<form class="stepy-validation" method="post" action="{{ route('postEditTablet') }}" enctype="multipart/form-data">
							<fieldset title="1">
								<legend class="text-semibold">Bước 1</legend>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Hãng Sản Xuất: <span class="text-danger">*</span></label>
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<input type="hidden" name="id" value="{{ $tablet['id'] }}">
											<select name="productType" data-placeholder="Chọn hãng sản xuất" class="select required">
												<option></option>
													<option value="apple" @if ($product['productType']=='apple')
														selected 
													@endif>Apple</option>
													<option value="samsung" @if ($product['productType']=='samsung')
														selected 
													@endif>Samsung</option>
													<option value="lenovo" @if ($product['productType']=='lenovo')
														selected 
													@endif>Lenovo</option>
													<option value="htc" @if ($product['productType']=='htc')
														selected 
													@endif>HTC</option>
													<option value="xiaomi" @if ($product['productType']=='xiaomi')
														selected 
													@endif>Xiaomi</option>
													<option value="sony" @if ($product['productType']=='sony')
														selected 
													@endif>Sony</option>
													<option value="hang-khac" @if ($product['productType']=='hang-khac')
														selected 
													@endif>Hãng Khác</option>
											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Tên Máy Tính Bảng: <span class="text-danger">*</span></label>
											<input type="text" name="productName" class="form-control required" placeholder="Acer..." value="{{ $product['productName'] }}">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Sản Xuất Tại: <span class="text-danger">*</span></label>
											<input type="text" name="madein" class="form-control required" placeholder="Việt Nam" value="{{ $product['madein'] }}">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Khối Lượng: <span class="text-danger">*</span></label>
											<input type="number" name="weight" class="form-control required" placeholder="0.5kg" value="{{ $product['weight'] }}">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="text-semibold">Ảnh Bìa:</label>
											<div class="media no-margin-top">
												<div class="media-left">
													<a href="#"><img src="{{ asset($product['imagesurl']) }}" style="width: 200px; height: 150px; border-radius: 2px;" alt=""></a>
												</div>
												
												<div class="media-body">
													<input type="file" class="file-styled" name="imagesurl">
													<input type="hidden" name="old_imagesurl" value="{{ $product['imagesurl'] }}">
												</div>
											</div>
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
											<input type="number" name="purchase" class="form-control" placeholder="20000000 VND" value="{{ $product['purchase'] }}">
		                                </div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Giá Bán:</label>
											<input type="number" name="price" class="form-control" placeholder="20000000 VND" value="{{ $product['price'] }}">
	                                    </div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Giảm Giá:</label>
											<input type="number" name="discountPercent" class="form-control" placeholder="5%" value="{{ $product['discountPercent'] }}">
		                                </div>

										<div class="form-group">
											<label>Trạng Thái: <span class="text-danger">*</span></label>
											<select name="status" data-placeholder="Chọn tình trạng" class="select required">
												<option></option>
													<option value="0" @if ($product['status']==0)
														selected 
													@endif>Sắp Về</option>
													<option value="1" @if ($product['status']==1)
														selected 
													@endif>Sẵn Có</option>
													<option value="-1" @if ($product['status']==-1)
														selected 
													@endif>Ngừng Kinh Doanh</option>
											</select>
		                                </div>
		                                <div class="form-group">
											<label>Quà Tặng:</label>
		                                    <textarea name="gift" rows="4" cols="4" placeholder="Thẻ nhớ, tai nghe..." class="form-control" >{{ $product['gift'] }}</textarea>
		                                    
		                                </div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
									
												<label>Số Lượng:</label>
											<input type="number" name="quantity" class="form-control" placeholder="20000000" value="{{ $product['quantity'] }}">
										
										</div>

										<div class="form-group">
											<label>Số Sim:</label>
			                                <input type="number" name="sim" placeholder="" class="form-control" value="{{ $tablet['sim'] }}">
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
			                                <input type="text" name="screen" placeholder="Màn Hình" class="form-control required" value="{{ $smartdevice['screen'] }}">
		                                </div>

										<div class="form-group">
											<label>Camera Trước:</label>
			                                <input type="text" name="firstcamera" placeholder="13mpx" class="form-control" value="{{ $smartdevice['firstcamera'] }}">
		                                </div>

										
											<div class="form-group">
												<label>Camera Sau:</label>
			                                <input type="text" name="second" placeholder="5mpx" class="form-control" value="{{ $smartdevice['second'] }}">
											</div>

											<div class="form-group">
												<label>Bộ Nhớ:</label>
			                                <input type="text" name="memory" placeholder="" class="form-control" value="{{ $smartdevice['memory'] }}">
											</div>
											<div class="form-group">
												<label>Thiết Kế:</label>
			                                <input type="text" name="design" placeholder="" class="form-control" value="{{ $smartdevice['design'] }}">
											</div>
											<div class="form-group">
												<label>Chipset:</label>
			                                <input type="text" name="chipset" placeholder="" class="form-control" value="{{ $smartdevice['chipset'] }}">
											</div>
										
									</div>

									<div class="col-md-6">
										<div class="form-group">
												<label>GPU:</label>
			                                <input type="text" name="gpu" placeholder="" class="form-control" value="{{ $smartdevice['gpu'] }}">
											</div>
		                                <div class="form-group">
		                                    <label>Ram:</label>
			                                <input type="text" name="ram" placeholder="" class="form-control" value="{{ $smartdevice['ram'] }}">
		                                </div>

										<div class="form-group">
											<label>Kết Nối:</label>
			                                <input type="text" name="connections" placeholder="" class="form-control" value="{{ $smartdevice['connections'] }}">
		                                </div>
		                                <div class="form-group">
												<label>Pin:</label>
			                                <input type="text" name="battery" placeholder="" class="form-control" value="{{ $smartdevice['battery'] }}">
											</div>
											<div class="form-group">
												<label>Utility:</label>
			                                <input type="text" name="utility" placeholder="" class="form-control" value="{{ $smartdevice['utility'] }}">
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
													{!! $product['description'] !!}
												</div>
											</div>
										<!-- /summernote editor -->
										</div>
								</div>
							</fieldset>

							<button type="submit" class="btn btn-primary stepy-finish">Sửa <i class="icon-check position-right"></i></button>
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