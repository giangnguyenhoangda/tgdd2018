@extends('employee.elements.master')
@section('title')
	Sửa Bài Đăng
@endsection
@section('content')
	<!-- Basic layout-->
						<form action="{{ route('postEditNew') }}" method="post" enctype="multipart/form-data">
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
											<label class="text-semibold">Ảnh Bìa:</label>
											<div class="media no-margin-top">
												<div class="media-left">
													<a href="#"><img src="{{ asset($news['logo']) }}" style="width: 200px; height: 150px; border-radius: 2px;" alt=""></a>
												</div>
												
												<div class="media-body">
													<input type="file" class="file-styled" name="logo">
													<input type="hidden" name="old_logo" value="{{ $news['logo'] }}">
													<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
												</div>
											</div>
									</div>
									<div class="form-group">
										<label>Tiêu Đề:</label>
										<input type="hidden" name="id" value="{{ $news['id'] }}">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="text" class="form-control" name="title" placeholder="Tiêu đề của tin tức" value="{{ $news['title'] }}">
									</div>									
												<div class="form-group">
						                            <label>Loại:</label>
						                            <select data-placeholder="Chọn loại tin tức" name="type" class="select">
						                            	<option></option>
						                                <option value="tin-tuc-cong-nghe" @if ($news['type']=='tin-tuc-cong-nghe') selected 
						                                @endif>Tin Tức Công Nghệ</option> 
						                                <option value="tu-van-mua-hang" @if ($news['type']=='tu-van-mua-hang') selected 
						                                @endif>Tư Vấn Mua Hàng</option> 
						                                <option value="hinh-nen" @if ($news['type']=='hinh-nen') selected 
						                                @endif>Hình Nền</option> 
						                                <option value="danh-gia-san-pham" @if ($news['type']=='danh-gia-san-pham') selected 
						                                @endif>Đánh Giá Sản Phẩm</option>
						                                <option value="tuyen-dung" @if ($news['type']=='tuyen-dung') selected 
						                                @endif>Tuyển Dụng</option> 
						                                <option value="download-rom" @if ($news['type']=='download-rom') selected 
						                                @endif>Download Rom</option> 
						                                <option value="game-ung-dung" @if ($news['type']=='game-ung-dung') selected 
						                                @endif>Game & Ứng Dụng</option>  
						                            </select>
					                            </div>

									

									<div class="form-group">
										<label>Nội Dung:</label>
										<!-- Summernote editor -->
											<div class="panel-body">
												<textarea id="hidden_content" style="display: none;" name="content"></textarea>
												<div class="summernote">
													{!! $news['content'] !!}
												</div>
											</div>
										<!-- /summernote editor -->
									</div>

									<div class="text-right">
										<button type="submit" id="save" class="btn btn-primary">Sửa Tin Tức <i class="icon-arrow-right14 position-right"></i></button>
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