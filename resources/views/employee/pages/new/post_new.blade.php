@extends('employee.elements.master')
@section('title')
	Đăng Bài
@endsection
@section('content')
	<!-- Basic layout-->
						<form action="{{ route('postPostNews') }}" method="post" enctype="multipart/form-data">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title">Tin Tức</h5>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="form-group">
										<label>Tiêu Đề:</label>
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="text" class="form-control" name="title" placeholder="Tiêu đề của tin tức">
									</div>									
												<div class="form-group">
						                            <label>Loại:</label>
						                            <select data-placeholder="Chọn loại tin tức" name="type" class="select">
						                            	<option></option>
						                                <option value="tin-tuc-cong-nghe">Tin Tức Công Nghệ</option> 
						                                <option value="tu-van-mua-hang">Tư Vấn Mua Hàng</option> 
						                                <option value="hinh-nen">Hình Nền</option> 
						                                <option value="danh-gia-san-pham">Đánh Giá Sản Phẩm</option>
						                                <option value="tuyen-dung">Tuyển Dụng</option> 
						                                <option value="download-rom">Download Rom</option> 
						                                <option value="game-ung-dung">Game & Ứng Dụng</option>  
						                            </select>
					                            </div>

									<div class="form-group">
										<label class="display-block">Ảnh Bìa:</label>
										<input type="file" class="file-styled" name="logo">
										<span class="help-block">Định Dạng Chấp Nhận: gif, png, jpg. Kích cỡ file tối đa 2Mb</span>
									</div>

									<div class="form-group">
										<label>Nội Dung:</label>
										<!-- Summernote editor -->
											<div class="panel-body">
												<textarea id="hidden_content" style="display: none;" name="content"></textarea>
												<div class="summernote">
												</div>
											</div>
										<!-- /summernote editor -->
									</div>

									<div class="text-right">
										<button type="submit" id="save" class="btn btn-primary">Thêm Tin Tức <i class="icon-arrow-right14 position-right"></i></button>
									</div>
								</div>
							</div>
						</form>
						<!-- /basic layout -->
					<script type="text/javascript" src="{{ asset('employee/js/plugins/editors/summernote/summernote.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/pages/editor_summernote.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/styling/uniform.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/forms/selects/select2.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/pages/form_layouts.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/ui/nicescroll.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/ui/drilldown.js') }}"></script>
					<script type="text/javascript" src="{{ asset('employee/js/plugins/ui/fab.min.js') }}"></script>
					<script type="text/javascript">
						$('form').submit(function(){
        					var content = $('#content').html();
        					$('#hidden_content').val(content);
						});
					</script>
@endsection