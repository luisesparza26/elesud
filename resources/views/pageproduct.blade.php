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
	@include ('partials.nav-dark') @yield('content')
	<section id="contact" class="section-index">
		<div class="container">
			<h2>Contáctanos</h2>
			<hr role="sub">
			<div class="contact-content row text-center py-5">
				<div class="col-sm-4">
					<img class="mr-2" src="{{ asset('img/index/email.svg') }}" alt="icon" width="35">
					<p>ventas@elesud.com</p>
				</div>
				<div class="col-sm-4">
					<img class="mr-2" src="{{ asset('img/index/phone.svg') }}" alt="icon" width="35">
					<p>(+51) 975 148 573</p>
					<p>(+51) 948 582 846</p>
				</div>
				<div class="col-sm-4">
					<img class="mr-2" src="{{ asset('img/index/map.svg') }}" alt="icon" width="35">
					<p>Víctor Maurtua 166, LIMA 18</p>
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

@if( Session::has('status'))
   <script type="text/javascript">
      $(document).ready(function() {
        $('#popupmodal').modal();
      });
   </script>

	<!-- Modal -->
<div class="modal fade" id="popupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notificación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         {{ Session::get('status') }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endif
</body>

</html>