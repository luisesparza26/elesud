<div id="contact-products">
	<form action="{{route('cotizacion')}}" method="POST">
		{{ csrf_field() }}
		<h1 class="py-3">Solicitar cotización</h1>
		<div class="row form-group">
			<div class="col-sm-6">
				<input type="text" class="form-control" name="nombre" placeholder="Nombre">
			</div>
			<div class="col-sm-6">
				<input type="text" name="apellido" class="form-control" placeholder="Apellido">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-sm-6">
				<input type="tel" class="form-control" name="phone" placeholder="Teléfono" pattern="[0-9]{10}">
			</div>
			<div class="col-sm-6">
				<input type="text" name="email" class="form-control" placeholder="Correo">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-sm-6">
					<input type="text" class="form-control" name="categoria" value="{{$categoria}}" disabled>
				</div>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="producto" value="{{$producto}}" disabled>
			</div>
		</div>

		<div class="form-group">
			<textarea class="form-control" id="message" name="mensaje" rows="3"></textarea>
		</div>
		<button type="submit" class="w-100 btn btn-primary">Solicitar</button>
	</form>
</div>