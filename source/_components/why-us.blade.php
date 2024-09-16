@php
	$benefits = ["Servicio Rápido y Eficiente", "Calidad Garantizada", "Atención Personalizada"];
@endphp

<section class="container p-3 py-lg-5">
	<div class="row p-3">
		<div class="col-12 col-lg-6 text-center">
			<img src="/assets/img/razones-para-elegirnos.png" class="w-100 rounded shadow">
		</div>
		<div class="col-12 col-lg-6 d-flex align-items-center">
			<div class="p-3">
				<span id="porque-elegirnos" class="mb-3 badge text-bg-primary text-primary bg-opacity-25 text-uppercase">¿Por qué elegirnos?</span>
				<h2 class="mb-3">Razones para confiar en nuestra experiencia</h2>
				<p>Descubre por qué somos la elección perfecta para tus necesidades:</p>
				<ul class="list-unstyled">
					@foreach($benefits as $item)
						<li class="fw-medium fs-5"><i class="bi-check-circle-fill me-2"></i>{{$item}}</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</section>
