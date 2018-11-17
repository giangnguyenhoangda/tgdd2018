@extends('employee.elements.master')
@section('title')
	Sửa Phụ Kiện
@endsection
@section('content')
	<!-- Wizard with validation -->
		            <div class="panel panel-white">
						<div class="panel-heading">
							<h6 class="panel-title">Thông Tin</h6>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

	                	<form class="stepy-validation" method="post" action="{{ route('postEditAccessory') }}" enctype="multipart/form-data">
							<fieldset title="1">
								<legend class="text-semibold">Bước 1</legend>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Loại Phụ Kiện: <span class="text-danger">*</span></label>
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<input type="hidden" name="id" value="{{ $accessory['id'] }}">
											<select name="productType" data-placeholder="Chọn loại phụ kiện" class="select required">
												<option></option>
													<option value="bao-da-op-lung" @if ($product['productType']=='bao-da-op-lung')
														selected 
													@endif>Bao Da Ốp Lưng</option>
													<option value="sac-du-phong" @if ($product['productType']=='sac-du-phong')
														selected 
													@endif>Sạc Dự Phòng</option>
													<option value="the-nho" @if ($product['productType']=='the-nho')
														selected 
													@endif>Thẻ Nhớ</option>
													<option value="tai-nghe-loa" @if ($product['productType']=='tai-nghe-loa')
														selected 
													@endif>Tai Nghe, Loa</option>
													<option value="chuot" @if ($product['productType']=='chuot')
														selected 
													@endif>Chuột</option>
													<option value="mieng-dan-man-hinh" @if ($product['productType']=='mieng-dan-man-hinh')
														selected 
													@endif>Miếng Dán Màn Hình</option>
													<option value="phu-kien-khac" @if ($product['productType']=='phu-kien-khac')
														selected 
													@endif>Phụ Kiện Khác</option>
											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Tên Phụ Kiện: <span class="text-danger">*</span></label>
											<input type="text" name="productName" class="form-control required" placeholder="Samsung Note 9" value="{{ $product['productName'] }}">
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

										
									</div>
								</div>
							</fieldset>

							

							<fieldset title="3">
								<legend class="text-semibold">Bước 3</legend>

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