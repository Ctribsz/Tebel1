@extends('templates.frontend')

@section('content')
	<div class="container mt-5">
		<div class="pd-20 card-box mb-30">
			<div class="clearfix">
				<h4 class="text-blue h4">Formulario de envío</h4>
				<p class="mb-30">jQuery Step Wizard</p>
			</div>
			<div class="wizard-content">
				<form class="tab-wizard wizard-circle wizard">
					<!-- Paso 1: Información del Destinatario -->
					<h5>Información del Destinatario</h5>
					<section>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Nombre del Destinatario :</label>
									<input type="text" class="form-control" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Apellido del Destinatario :</label>
									<input type="text" class="form-control" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Dirección de Correo Electrónico :</label>
									<input type="email" class="form-control" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Número de Teléfono :</label>
									<input type="text" class="form-control" />
								</div>
							</div>
						</div>
					</section>
					<!-- Paso 2: Dirección de Envío -->
					<h5>Dirección de Envío</h5>
					<section>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Dirección :</label>
									<input type="text" class="form-control" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Ciudad :</label>
									<input type="text" class="form-control" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Código Postal :</label>
									<input type="text" class="form-control" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>País :</label>
									<select class="custom-select form-control">
										<option value="">Selecciona País</option>
										<option value="India">India</option>
										<option value="UK">Reino Unido</option>
										<option value="US">Estados Unidos</option>
										<!-- Añadir más países según sea necesario -->
									</select>
								</div>
							</div>
						</div>
					</section>
					<!-- Paso 3: Detalles de Pago -->
					<h5>Detalles de Pago</h5>
					<section>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Número de Tarjeta :</label>
									<input type="text" class="form-control" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Nombre en la Tarjeta :</label>
									<input type="text" class="form-control" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Fecha de Expiración :</label>
									<input type="text" class="form-control" placeholder="MM/AA" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>CVV :</label>
									<input type="text" class="form-control" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Tipo de Tarjeta :</label>
									<select class="form-control">
										<option value="Visa">Visa</option>
										<option value="MasterCard">MasterCard</option>
										<option value="Amex">Amex</option>
										<!-- Añadir más tipos de tarjetas según sea necesario -->
									</select>
								</div>
							</div>
						</div>
					</section>
					<!-- Paso 4: Confirmación -->
					<h5>Confirmación</h5>
					<section>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Comentarios Adicionales :</label>
									<textarea class="form-control"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<button type="submit" class="btn btn-primary">Enviar Pedido</button>
							</div>
						</div>
					</section>
				</form>
			</div>
		</div>
	</div>
@endsection