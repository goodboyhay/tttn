@extends('master');
@section('content')
<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(sublime/images/cart.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="index.html">Trang chủ</a></li>
										<li><a href="categories.html">Hãng</a></li>
										<li>Giỏ hàng</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cart Info -->

	<div class="cart_info">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Column Titles -->
					<div class="cart_info_columns clearfix">
						<div class="cart_info_col cart_info_col_product">Sản phẩm</div>
						<div class="cart_info_col cart_info_col_price">Giá</div>
						<div class="cart_info_col cart_info_col_quantity">Số lượng</div>
						<div class="cart_info_col cart_info_col_total">Tổng</div>
					</div>
				</div>
			</div>
			<div class="row cart_items_row">
				<div class="col">

					<!-- Cart Item -->
					<div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<!-- Name -->
						<div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
							<div class="cart_item_image">
								<div><img src="sublime/images/cart_1.jpg" alt=""></div>
							</div>
							<div class="cart_item_name_container">
								<div class="cart_item_name"><a href="#">Iphone 7 Plus</a></div>
								<div class="cart_item_edit"><a href="#">Chỉnh sửa</a></div>
							</div>
						</div>
						<!-- Price -->
						<div class="cart_item_price">$790.90</div>
						<!-- Quantity -->
						<div class="cart_item_quantity">
							<div class="product_quantity_container">
								<div class="product_quantity clearfix" style="margin-top: -50px ">
									
									<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
									<div class="quantity_buttons">
										<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
										<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Total -->
						<div class="cart_item_total">$790.90</div>
					</div>

				</div>
			</div>
			<div class="row row_cart_buttons">
				<div class="col">
					<div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="button continue_shopping_button"><a href="#">Tiếp tục mua hàng</a></div>
						<div class="cart_buttons_right ml-lg-auto">
							<div class="button clear_cart_button"><a href="#">Xóa giỏ hàng</a></div>
							<div class="button update_cart_button"><a href="#">Cập nhật giỏ hàng</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row row_extra">
				<div class="col-lg-4">
					
					<!-- Delivery -->
					<div class="delivery">
						<div class="section_title">Hình thức vận chuyển</div>
						<div class="section_subtitle">Chọn hình thức bạn muốnt</div>
						<div class="delivery_options">
							<label class="delivery_option clearfix">Giao ngay
								<input type="radio" name="radio">
								<span class="checkmark"></span>
								<span class="delivery_price">$4.99</span>
							</label>
							<label class="delivery_option clearfix">Giao vào ngày hôm sau
								<input type="radio" name="radio">
								<span class="checkmark"></span>
								<span class="delivery_price">$1.99</span>
							</label>
							<label class="delivery_option clearfix">Giao máy tại quầy
								<input type="radio" checked="checked" name="radio">
								<span class="checkmark"></span>
								<span class="delivery_price">Free</span>
							</label>
						</div>
					</div>

					<!-- Coupon Code -->
					<div class="coupon">
						<div class="section_title">Mã giảm giá</div>
						<div class="section_subtitle">Vui lòng nhập mã giảm giá</div>
						<div class="coupon_form_container">
							<form action="#" id="coupon_form" class="coupon_form">
								<input type="text" class="coupon_input" required="required">
								<button class="button coupon_button"><span>Apply</span></button>
							</form>
						</div>
					</div>
				</div>

				<div class="col-lg-6 offset-lg-2">
					<div class="cart_total">
						<div class="section_title">Tổng giỏ hàng</div>
						
						<div class="cart_total_container">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Tổng tiền</div>
									<div class="cart_total_value ml-auto">$790.90</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Phí ship</div>
									<div class="cart_total_value ml-auto">Free</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Tổng cộng</div>
									<div class="cart_total_value ml-auto">$790.90</div>
								</li>
							</ul>
						</div>
						<div class="button checkout_button"><a href="#">Thanh toán ngay</a></div>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection