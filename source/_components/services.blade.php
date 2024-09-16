@php
	$attributes = [
		["title" => "Experiencia profesional", "icon" => "bi-shield-fill-check"],
		["title" => "Servicio confiable", "icon" => "bi-hand-thumbs-up-fill"],
		["title" => "Tarifas asequibles", "icon" => "bi-stars"],

	];

	$services = [
		["title" => "Instalación de sistemas eléctricos en viviendas y locales comerciales", "description" => "Diseño e implementación de redes eléctricas desde cero, incluyendo cableado, paneles eléctricos y sistemas de protección.", "icon" => "bi-building-fill-gear"],
		["title" => "Mantenimiento y reparación de instalaciones eléctricas", "description" => "Diagnóstico y resolución de problemas eléctricos, tales como cortocircuitos, sobrecargas y fallos en interruptores automáticos.", "icon" => "bi-lightning-charge-fill"],
		["title" => "Instalación de iluminación", "description" => "Colocación de luces LED, lámparas, focos, y sistemas de iluminación inteligente tanto en interiores como en exteriores.", "icon" => "bi-lamp-fill"],
		["title" => "Automatización del hogar (domótica)", "description" => "Configuración de sistemas inteligentes para control de iluminación, persianas eléctricas, climatización y otros dispositivos eléctricos a través de asistentes virtuales o smartphones.", "icon" => "bi-gear-wide-connected"],
		["title" => "Instalación de cuadros eléctricos y sistemas de protección", "description" => "Instalación de cuadros eléctricos y sistemas de protección", "icon" => "bi-cast"],
		["title" => "Instalación de sistemas de climatización eléctrica:", "description" => "Montaje y conexión de aires acondicionados, calefacción eléctrica y ventiladores, incluyendo sistemas con eficiencia energética.", "icon" => "bi-fan"],
	];
@endphp

<section class="container-fluid bg-dark position-relative py-5">
	<div class="row text-center text-white justify-content-center">
		<div class="col-12 col-lg-6 py-3 py-lg-5">
			<span id="servicios" class="badge text-bg-secondary text-white bg-opacity-25 text-uppercase mb-3">Servicios</span>
			<h2 class="mb-3 fw-semibold	">Explore nuestra amplia gama de servicios profesionales</h2>
		</div>
	</div>
	<div class="container">
		<div class="row g-3 text-white">
			@foreach($services as $service)
				<div class="col-12 col-lg-4 text-center p-3">
					<div class="p-3 border border-secondary h-100">
						<i class="fs-1 bi {{$service['icon']}}"></i>
						<h3 class="my-2 fs-5 fw-semibold">{{$service['title']}}</h3>
						<p>{{$service['description']}}</p>
					</div>
				</div>
			@endforeach
		</div>
	</div>

</section>
