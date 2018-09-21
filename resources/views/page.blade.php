<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title','ELESUD')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta prefix="og: http://ogp.me/ns#" property="og:url" content="{{ isset($meta['url'])?$meta['url']:'http://www.elesud.com/' }}"/>
	<meta prefix="og: http://ogp.me/ns#" property="og:type" content="{{ isset($meta['type'])?$meta['type']:'website' }}"/>
	<meta prefix="og: http://ogp.me/ns#" name="title" property="og:title" content="{{ isset($meta['title'])?$meta['title']:'ELESUD - Elevadores Sudamericanos' }}"/>
	<meta prefix="og: http://ogp.me/ns#" name="description" property="og:description" content="{{ isset($meta['description'])? $meta['description']:'Somos una empresa de capitales peruanos, especialistas en soluciones de transporte vertical.'}}"/>
	<meta prefix="og: http://ogp.me/ns#" name="image" property="og:image" content="{{ isset($meta['image'])?$meta['image']:'http://subirimagen.me/uploads/20180921020954.jpg' }}"/>
	<meta prefix="og: http://ogp.me/ns#" name="author" content="Quickly LA"/>
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/> </head>

<body>
	@include ('partials.nav-dark')
	@yield('content')
	<section id="contact" class="section-index">
		<div class="container">
			<h2>Contáctanos</h2>
			<hr role="sub">
			<div class="row">
				<div class="col-lg-6 py-3">
					<div class="well well-sm">

						<form class="" action="{{route('contact')}}" method="post">
							{{ csrf_field() }}
							<fieldset>
								<div class="form-group">
									<div class="col-md-12">
										<input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<input id="lname" name="name" type="text" placeholder="Apellidos" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<input id="email" name="email" type="text" placeholder="Correo" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<input id="phone" name="phone" type="text" placeholder="Teléfono" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<textarea class="form-control" id="message" name="message" placeholder="Escribe tu mensaje." rows="7"></textarea>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12">
										<button type="submit" class="w-100 btn btn-secondary">Enviar</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				<div class="col-lg-6 py-3">
					<div class="contact-layer">
						<p><img class="mr-2" src="{{ asset('img/index/email.svg') }}" alt="icon" width="28">ventas@elesud.com</p>
						<p><img class="mr-2" src="{{ asset('img/index/phone.svg') }}" alt="icon" width="28">(+51) 975 148 573</p>
						<p><img class="mr-2" src="{{ asset('img/index/map.svg') }}" alt="icon" width="28">Víctor Maurtua 166, LIMA 18</p>
						<div class="fb-like pb-2" data-href="https://www.facebook.com/ELESUDPERU/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
						<div class="map-responsive">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.9307751752735!2d-77.01556568580192!3d-12.11688899142063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c914b4a64b8b%3A0xf92e1fca8fcb661b!2sElevadores+Sudamericanos+S.A.C!5e0!3m2!1ses!2spe!4v1537468818065" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="py-3 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright 2018 &copy;Elevadores Sudamericanos S.A.C &#124; Designed by Quickly LA</p>
		</div>
	</footer>
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/scroll.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/wow.js') }}"></script>
	<script>
		new WOW().init();
	</script>

</body>

</html>