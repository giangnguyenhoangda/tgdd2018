@extends('guest.elements.master')

@section('title')
	Giỏ hàng
@endsection

@section('head')
	<link rel="canonical" href="http://localhost/TGDD/gio-hang/" />
	<link rel='shortlink' href='http://localhost/TGDD/?p=21' />
	<link rel="alternate" type="application/json+oembed" href="http://localhost/TGDD/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%2FTGDD%2Fgio-hang%2F" />
	<link rel="alternate" type="text/xml+oembed" href="http://localhost/TGDD/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%2FTGDD%2Fgio-hang%2F&#038;format=xml" />
@endsection

@section('style2')
	<link rel='stylesheet' id='select2-css'  href='{{ asset('plugins/woocommerce/assets/css/select2.css?ver=3.3.4') }}' type='text/css' media='all' />
@endsection

@section('main')
	<main id="main" class="">
		<div id="content" class="content-area page-wrapper" role="main">
			<div class="row row-main">
				<div class="large-12 col">
					<div class="col-inner">																		
						<div class="woocommerce">
							{{-- Không có sản phẩm --}}
							<div class="text-center pt pb">
								<p class="cart-empty">Chưa có sản phẩm nào trong giỏ hàng.</p>		
								<p class="return-to-shop">
									<a class="button primary wc-backward" href="http://localhost/TGDD/cua-hang/">Quay trở lại cửa hàng</a>
								</p>
							</div>

							{{-- Có sản phẩm --}}
							{{-- <div class="woocommerce row row-large row-divided">
								<div class="col large-7 pb-0 ">
									<form class="woocommerce-cart-form" action="http://localhost/TGDD/gio-hang/" method="post">
										<div class="cart-wrapper sm-touch-scroll">
  											<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
    											<thead>
      												<tr>
        												<th class="product-name" colspan="3">Sản phẩm</th>
        												<th class="product-price">Giá</th>
        												<th class="product-quantity">Số lượng</th>
        												<th class="product-subtotal">Tổng cộng</th>
      												</tr>
    											</thead>
    											<tbody>
               										<tr class="woocommerce-cart-form__cart-item cart_item">
            											<td class="product-remove">
              												<a href="http://localhost/TGDD/gio-hang/?remove_item=a448573f6ed0269f3a4baab777fdbdca&#038;_wpnonce=263b818ada" class="remove" aria-label="Xóa sản phẩm này" data-product_id="1951" data-product_sku="15">&times;
              												</a>            
              											</td>
            											<td class="product-thumbnail">
            												<a href="http://localhost/TGDD/cua-hang/iphone-6s-16gb-lock-my-like-new/?attribute_pa_dung-luong=32gb&#038;attribute_pa_mau-sac=vang&#038;attribute_pa_trang-thai=may-moi-100">
            													<img width="247" height="296" src="{{ asset('themes/flatsome/assets/img/lazy.png') }}" data-src="{{ asset('uploads/iphone-6s-hong-didongviet_5_6-247x296.jpg') }}" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" />
            												</a>
            											</td>
            											<td class="product-name" data-title="Sản phẩm">
            												<a href="http://localhost/TGDD/cua-hang/iphone-6s-16gb-lock-my-like-new/?attribute_pa_dung-luong=32gb&#038;attribute_pa_mau-sac=vang&#038;attribute_pa_trang-thai=may-moi-100">iPhone 6S 16GB Lock Mỹ (Like New)
            												</a>
            												<dl class="variation">
																<dt class="variation-DungLng">Dung Lượng:</dt>
																<dd class="variation-DungLng">
																	<p>32gb</p>
																</dd>
																<dt class="variation-MuSc">Màu Sắc:</dt>
																<dd class="variation-MuSc">
																	<p>vàng</p>
																</dd>
																<dt class="variation-Trngthi">Trạng thái:</dt>
																<dd class="variation-Trngthi">
																	<p>Máy mới 100%</p>
																</dd>
															</dl>
              												<p class="show-for-small mobile-product-price">
              													<span class="mobile-product-price__qty">2 x </span>
               													<span class="woocommerce-Price-amount amount">4.500.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>              
               												</p>
            											</td>
            											<td class="product-price" data-title="Giá">
              												<span class="woocommerce-Price-amount amount">4.500.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>            
              											</td>
            											<td class="product-quantity" data-title="Số lượng">	
            												<div class="quantity buttons_added">
																<input type="button" value="-" class="minus button is-form">		
																<label class="screen-reader-text" for="quantity_5bc72a5af1a4a">Số lượng
																</label>
																<input type="number" id="quantity_5bc72a5af1a4a" class="input-text qty text" step="1" min="0" max="9999" name="cart[a448573f6ed0269f3a4baab777fdbdca][qty]" value="2" title="SL" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="iPhone 6S 16GB Lock Mỹ (Like New) số lượng" />
																<input type="button" value="+" class="plus button is-form">	
															</div>
														</td>
           												<td class="product-subtotal" data-title="Tổng cộng">
              												<span class="woocommerce-Price-amount amount">9.000.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>            
              											</td>
          											</tr>     
      												<tr>
        												<td colspan="6" class="actions clear">
          													<div class="continue-shopping pull-left text-left">
    															<a class="button-continue-shopping button primary is-outline"  href="http://localhost/TGDD/cua-hang/">&#8592; Tiếp tục xem sản phẩm</a>
															</div>
          													<button type="submit" class="button primary mt-0 pull-left small" name="update_cart" value="Cập nhật giỏ hàng">Cập nhật giỏ hàng</button>
          													<input type="hidden" id="_wpnonce" name="_wpnonce" value="263b818ada" /><input type="hidden" name="_wp_http_referer" value="/TGDD/gio-hang/" />        
          												</td>
      												</tr>
          										</tbody>
  											</table>
  										</div>
									</form>
								</div>
								<div class="cart-collaterals large-5 col pb-0">
									<div class="cart-sidebar col-inner ">
										<div class="cart_totals ">
	          								<table cellspacing="0">
          										<thead>
              										<tr>
                  										<th class="product-name" colspan="2" style="border-width:3px;">Tổng số lượng</th>
              										</tr>
          										</thead>
          									</table>  
											<h2>Tổng số lượng</h2>
											<table cellspacing="0" class="shop_table shop_table_responsive">
												<tr class="cart-subtotal">
													<th>Tổng cộng</th>
													<td data-title="Tổng cộng">
														<span class="woocommerce-Price-amount amount">9.000.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
													</td>
												</tr>			
												<tr class="shipping">
													<th>Giao hàng 1</th>
														<td data-title="Giao hàng 1">
															Miễn phí vận chuyển 
															<input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0" value="devvn_district_zone_shipping_1" class="shipping_method" />							
															<form class="woocommerce-shipping-calculator" action="http://localhost/TGDD/gio-hang/" method="post">
																<p><a href="#" class="shipping-calculator-button">Tính phí giao hàng</a></p>
																<section class="shipping-calculator-form" style="display:none;">
																	<p class="form-row form-row-wide" id="calc_shipping_country_field">
																		<select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state country_select" rel="calc_shipping_state">
																			<option value="">Chọn quốc gia&hellip;</option>
																			<option value="VN" selected='selected'>Việt Nam</option>			
																		</select>
																	</p>
																	<p class="form-row form-row-wide" id="calc_shipping_state_field">
																		<span>
																			<select name="calc_shipping_state" class="state_select" id="calc_shipping_state" placeholder="Quận / huyện">
																				<option value="">Chọn tiểu bang&hellip;</option>
																				<option value="01"  selected='selected'>Hà Nội</option><option value="02" >Hà Giang</option><option value="04" >Cao Bằng</option><option value="06" >Bắc Kạn</option><option value="08" >Tuyên Quang</option><option value="10" >Lào Cai</option><option value="11" >Điện Biên</option><option value="12" >Lai Châu</option><option value="14" >Sơn La</option><option value="15" >Yên Bái</option><option value="17" >Hoà Bình</option><option value="19" >Thái Nguyên</option><option value="20" >Lạng Sơn</option><option value="22" >Quảng Ninh</option><option value="24" >Bắc Giang</option><option value="25" >Phú Thọ</option><option value="26" >Vĩnh Phúc</option><option value="27" >Bắc Ninh</option><option value="30" >Hải Dương</option><option value="31" >Hải Phòng</option><option value="33" >Hưng Yên</option><option value="34" >Thái Bình</option><option value="35" >Hà Nam</option><option value="36" >Nam Định</option><option value="37" >Ninh Bình</option><option value="38" >Thanh Hóa</option><option value="40" >Nghệ An</option><option value="42" >Hà Tĩnh</option><option value="44" >Quảng Bình</option><option value="45" >Quảng Trị</option><option value="46" >Thừa Thiên Huế</option><option value="48" >Đà Nẵng</option><option value="49" >Quảng Nam</option><option value="51" >Quảng Ngãi</option><option value="52" >Bình Định</option><option value="54" >Phú Yên</option><option value="56" >Khánh Hòa</option><option value="58" >Ninh Thuận</option><option value="60" >Bình Thuận</option><option value="62" >Kon Tum</option><option value="64" >Gia Lai</option><option value="66" >Đắk Lắk</option><option value="67" >Đắk Nông</option><option value="68" >Lâm Đồng</option><option value="70" >Bình Phước</option><option value="72" >Tây Ninh</option><option value="74" >Bình Dương</option><option value="75" >Đồng Nai</option><option value="77" >Bà Rịa - Vũng Tàu</option><option value="79" >Hồ Chí Minh</option><option value="80" >Long An</option><option value="82" >Tiền Giang</option><option value="83" >Bến Tre</option><option value="84" >Trà Vinh</option><option value="86" >Vĩnh Long</option><option value="87" >Đồng Tháp</option><option value="89" >An Giang</option><option value="91" >Kiên Giang</option><option value="92" >Cần Thơ</option><option value="93" >Hậu Giang</option><option value="94" >Sóc Trăng</option><option value="95" >Bạc Liêu</option><option value="96" >Cà Mau</option>					
																			</select>
																		</span>		
																	</p>		
																	<p class="form-row form-row-wide" id="calc_shipping_city_field">
																		<input type="text" class="input-text" value="" placeholder="Thành phố" name="calc_shipping_city" id="calc_shipping_city" />
																	</p>		
																	<p class="form-row form-row-wide" id="calc_shipping_postcode_field">
																		<input type="text" class="input-text" value="" placeholder="Mã bưu điện" name="calc_shipping_postcode" id="calc_shipping_postcode" />
																	</p>		
																	<p><button type="submit" name="calc_shipping" value="1" class="button">Cập nhật tổng</button></p>
																	<input type="hidden" id="_wpnonce" name="_wpnonce" value="263b818ada" /><input type="hidden" name="_wp_http_referer" value="/TGDD/gio-hang/" />	
																</section>
															</form>
														</td>
													</tr>						
													<tr class="order-total">
														<th>Tổng cộng</th>
														<td data-title="Tổng cộng"><strong><span class="woocommerce-Price-amount amount">9.000.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></strong> </td>
													</tr>		
												</table>
												<div class="wc-proceed-to-checkout">		
													<a href="http://localhost/TGDD/thanh-toan/" class="checkout-button button alt wc-forward">Tiến hành thanh toán</a>
												</div>	
											</div>
										<form class="checkout_coupon mb-0" method="post">
												<div class="coupon">
													<h3 class="widget-title">
														<i class="icon-tag" ></i> Mã ưu đãi
													</h3>
													<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Mã ưu đãi" /> 
													<input type="submit" class="is-form expand" name="apply_coupon" value="Áp dụng mã ưu đãi" />
												</div>
										</form>
										<div class="cart-sidebar-content relative"></div>
									</div>
								</div>
							</div>
							<div class="cart-footer-content after-cart-content relative"></div> --}}

						</div>
					</div><!-- .col-inner -->
				</div><!-- .large-12 -->
			</div><!-- .row -->
		</div>
	</main><!-- #main -->
@endsection

@section('script')
	<script type='text/javascript'>
		/* <![CDATA[ */
			var wc_country_select_params = {"countries":"{\"VN\":{\"01\":\"H\\u00e0 N\\u1ed9i\",\"02\":\"H\\u00e0 Giang\",\"04\":\"Cao B\\u1eb1ng\",\"06\":\"B\\u1eafc K\\u1ea1n\",\"08\":\"Tuy\\u00ean Quang\",\"10\":\"L\\u00e0o Cai\",\"11\":\"\\u0110i\\u1ec7n Bi\\u00ean\",\"12\":\"Lai Ch\\u00e2u\",\"14\":\"S\\u01a1n La\",\"15\":\"Y\\u00ean B\\u00e1i\",\"17\":\"Ho\\u00e0 B\\u00ecnh\",\"19\":\"Th\\u00e1i Nguy\\u00ean\",\"20\":\"L\\u1ea1ng S\\u01a1n\",\"22\":\"Qu\\u1ea3ng Ninh\",\"24\":\"B\\u1eafc Giang\",\"25\":\"Ph\\u00fa Th\\u1ecd\",\"26\":\"V\\u0129nh Ph\\u00fac\",\"27\":\"B\\u1eafc Ninh\",\"30\":\"H\\u1ea3i D\\u01b0\\u01a1ng\",\"31\":\"H\\u1ea3i Ph\\u00f2ng\",\"33\":\"H\\u01b0ng Y\\u00ean\",\"34\":\"Th\\u00e1i B\\u00ecnh\",\"35\":\"H\\u00e0 Nam\",\"36\":\"Nam \\u0110\\u1ecbnh\",\"37\":\"Ninh B\\u00ecnh\",\"38\":\"Thanh H\\u00f3a\",\"40\":\"Ngh\\u1ec7 An\",\"42\":\"H\\u00e0 T\\u0129nh\",\"44\":\"Qu\\u1ea3ng B\\u00ecnh\",\"45\":\"Qu\\u1ea3ng Tr\\u1ecb\",\"46\":\"Th\\u1eeba Thi\\u00ean Hu\\u1ebf\",\"48\":\"\\u0110\\u00e0 N\\u1eb5ng\",\"49\":\"Qu\\u1ea3ng Nam\",\"51\":\"Qu\\u1ea3ng Ng\\u00e3i\",\"52\":\"B\\u00ecnh \\u0110\\u1ecbnh\",\"54\":\"Ph\\u00fa Y\\u00ean\",\"56\":\"Kh\\u00e1nh H\\u00f2a\",\"58\":\"Ninh Thu\\u1eadn\",\"60\":\"B\\u00ecnh Thu\\u1eadn\",\"62\":\"Kon Tum\",\"64\":\"Gia Lai\",\"66\":\"\\u0110\\u1eafk L\\u1eafk\",\"67\":\"\\u0110\\u1eafk N\\u00f4ng\",\"68\":\"L\\u00e2m \\u0110\\u1ed3ng\",\"70\":\"B\\u00ecnh Ph\\u01b0\\u1edbc\",\"72\":\"T\\u00e2y Ninh\",\"74\":\"B\\u00ecnh D\\u01b0\\u01a1ng\",\"75\":\"\\u0110\\u1ed3ng Nai\",\"77\":\"B\\u00e0 R\\u1ecba - V\\u0169ng T\\u00e0u\",\"79\":\"H\\u1ed3 Ch\\u00ed Minh\",\"80\":\"Long An\",\"82\":\"Ti\\u1ec1n Giang\",\"83\":\"B\\u1ebfn Tre\",\"84\":\"Tr\\u00e0 Vinh\",\"86\":\"V\\u0129nh Long\",\"87\":\"\\u0110\\u1ed3ng Th\\u00e1p\",\"89\":\"An Giang\",\"91\":\"Ki\\u00ean Giang\",\"92\":\"C\\u1ea7n Th\\u01a1\",\"93\":\"H\\u1eadu Giang\",\"94\":\"S\\u00f3c Tr\\u0103ng\",\"95\":\"B\\u1ea1c Li\\u00eau\",\"96\":\"C\\u00e0 Mau\"}}","i18n_select_state_text":"Ch\u1ecdn m\u1ed9t t\u00f9y ch\u1ecdn\u2026","i18n_no_matches":"Kh\u00f4ng t\u00ecm th\u1ea5y k\u1ebft qu\u1ea3 ph\u00f9 h\u1ee3p","i18n_ajax_error":"T\u1ea3i th\u1ea5t b\u1ea1i","i18n_input_too_short_1":"Vui l\u00f2ng nh\u1eadp 1 ho\u1eb7c nhi\u1ec1u k\u00fd t\u1ef1","i18n_input_too_short_n":"Vui l\u00f2ng nh\u1eadp %qty% ho\u1eb7c nhi\u1ec1u k\u00fd t\u1ef1","i18n_input_too_long_1":"Vui l\u00f2ng x\u00f3a 1 k\u00fd t\u1ef1","i18n_input_too_long_n":"Vui l\u00f2ng x\u00f3a %qty%  k\u00fd t\u1ef1","i18n_selection_too_long_1":"B\u1ea1n ch\u1ec9 c\u00f3 th\u1ec3 ch\u1ecdn 1 s\u1ea3n ph\u1ea9m","i18n_selection_too_long_n":"B\u1ea1n c\u00f3 th\u1ec3 ch\u1ecdn %qty% s\u1ea3n ph\u1ea9m","i18n_load_more":"T\u1ea3i nhi\u1ec1u k\u1ebft qu\u1ea3 h\u01a1n\u2026","i18n_searching":"T\u00ecm ki\u1ebfm\u2026"};
		/* ]]> */
	</script>
	<script type='text/javascript' src='{{ asset('plugins/woocommerce/assets/js/frontend/country-select.min.js?ver=3.3.4') }}'></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
			var wc_address_i18n_params = {"locale":"{\"VN\":{\"state\":{\"required\":false},\"postcode\":{\"priority\":65,\"required\":false,\"hidden\":false},\"address_2\":{\"required\":false,\"hidden\":true}},\"default\":{\"last_name\":{\"label\":\"H\\u1ecd v\\u00e0 t\\u00ean\",\"placeholder\":\"Nh\\u1eadp \\u0111\\u1ea7y \\u0111\\u1ee7 h\\u1ecd v\\u00e0 t\\u00ean c\\u1ee7a b\\u1ea1n\",\"required\":true,\"class\":[\"form-row-wide\"],\"clear\":true},\"company\":{\"label\":\"T\\u00ean c\\u00f4ng ty\",\"class\":[\"form-row-wide\"],\"autocomplete\":\"organization\",\"priority\":30},\"country\":{\"type\":\"country\",\"label\":\"Qu\\u1ed1c gia\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\",\"update_totals_on_change\"],\"autocomplete\":\"country\",\"priority\":40},\"address_1\":{\"label\":\"\\u0110\\u1ecba ch\\u1ec9\",\"placeholder\":\"S\\u1ed1 nh\\u00e0 v\\u00e0 t\\u00ean \\u0111\\u01b0\\u1eddng\",\"required\":true,\"class\":{\"1\":\"address-field\",\"2\":\"form-row-first\"},\"autocomplete\":\"address-line1\",\"priority\":50},\"city\":{\"label\":\"\\u0110\\u1ecba ch\\u1ec9\"},\"address_2\":{\"class\":[\"form-row-last\"],\"label\":\"\\u0110\\u1ecba ch\\u1ec9 nh\\u00e0, c\\u0103n h\\u1ed9, to\\u00e0 nh\\u00e0,.. (tu\\u1ef3 ch\\u1ecdn)\"}}}","locale_fields":"{\"address_1\":\"#billing_address_1_field, #shipping_address_1_field\",\"address_2\":\"#billing_address_2_field, #shipping_address_2_field\",\"state\":\"#billing_state_field, #shipping_state_field, #calc_shipping_state_field\",\"postcode\":\"#billing_postcode_field, #shipping_postcode_field, #calc_shipping_postcode_field\",\"city\":\"#billing_city_field, #shipping_city_field, #calc_shipping_city_field\"}","i18n_required_text":"b\u1eaft bu\u1ed9c"};
		/* ]]> */
	</script>
	<script type='text/javascript' src='{{ asset('plugins/woocommerce/assets/js/frontend/address-i18n.min.js?ver=3.3.4') }}'></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
			var wc_cart_params = {"ajax_url":"\/TGDD\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/TGDD\/?wc-ajax=%%endpoint%%","update_shipping_method_nonce":"f3b94d7e1f","apply_coupon_nonce":"7b0af84177","remove_coupon_nonce":"36497b5e8b"};
		/* ]]> */
	</script>
	<script type='text/javascript' src='{{ asset('plugins/woocommerce/assets/js/frontend/cart.min.js?ver=3.3.4') }}'></script>
	<script type='text/javascript' src='{{ asset('plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js?ver=1.0.3') }}'></script>
@endsection