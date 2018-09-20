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
	<!--SUBIR IMAGEN CHULA-->
	<meta prefix="og: http://ogp.me/ns#" name="image" property="og:image" content="{{ isset($meta['image'])?$meta['image']:'#' }}"/>
	<meta prefix="og: http://ogp.me/ns#" name="author" content="Quickly LA"/>
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/> </head>

<body>
	@include ('partials.nav-trans')
	@yield('content')
	<section id="contact" class="section-index">
			<div class="container">
				<h2>Contáctanos</h2>
				<hr role="sub">
				<div class="row">
					<div class="col-lg-6 py-3">
						<div class="well well-sm">
							<form class="" action="{{route('contacto')}}" method="post">
								<fieldset>
									<div class="form-group">
										<div class="col-md-10 offset-md-1">
											<input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-10 offset-md-1">
											<input id="lname" name="name" type="text" placeholder="Apellidos" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-10 offset-md-1">
											<input id="email" name="email" type="text" placeholder="Correo" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-10 offset-md-1">
											<input id="phone" name="phone" type="text" placeholder="Teléfono" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-10 offset-md-1">
											<textarea class="form-control" id="message" name="message" placeholder="Escribe tu mensaje." rows="7"></textarea>
										</div>
									</div>

									<div class="form-group">
										<div class="col-lg-12 px-5 mx-1">
											<button type="submit" class="mx-2 btn btn-secondary">Enviar</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
					<div class="col-lg-6 py-3">
						<div class="fb-page" data-href="https://www.facebook.com/ELESUDPERU" data-tabs="timeline" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/ELESUDPERU" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ELESUDPERU">Elevadores Sudamericanos</a></blockquote></div>
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