<!DOCTYPE html>
<html lang="en">
<head>
<title>Sublime</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="sublime/styles/bootstrap4/bootstrap.min.css">
<link href="sublime/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="sublime/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="sublime/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="sublime/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="sublime/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="sublime/styles/responsive.css">
<link rel="stylesheet" type="text/css" href="sublime/styles/product.css">
<link rel="stylesheet" type="text/css" href="sublime/styles/product_responsive.css">
<link rel="stylesheet" type="text/css" href="sublime/styles/contact.css">
<link rel="stylesheet" type="text/css" href="sublime/styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="sublime/styles/checkout.css">
<link rel="stylesheet" type="text/css" href="sublime/styles/checkout_responsive.css">
<link rel="stylesheet" type="text/css" href="sublime/styles/categories.css">
<link rel="stylesheet" type="text/css" href="sublime/styles/categories_responsive.css">
<link rel="stylesheet" type="text/css" href="sublime/styles/cart.css">
<link rel="stylesheet" type="text/css" href="sublime/styles/cart_responsive.css">
</head>
<body>
	@include('header');
	<!-- Home -->

	@yield('content');

	<!-- Footer -->
	
	@include('foooter');
</body>
</html>