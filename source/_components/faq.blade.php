@php
	$faqs =[
		["title" => "¿Cuáles son los servicios eléctricos que ofrecen?", "content" => "Ofrecemos instalación, reparación y mantenimiento de sistemas eléctricos, iluminación, cuadros eléctricos, y más. Contáctanos para detalles específicos."],
		["title" => "¿Cuánto tiempo toma completar una reparación o instalación?", "content" => "El tiempo depende de la complejidad del trabajo. Generalmente, realizamos una evaluación inicial para darte una estimación precisa del tiempo necesario."],
		["title" => "¿Ofrecen garantías en sus trabajos?", "content" => "Sí, ofrecemos garantías en todos nuestros servicios para asegurar tu tranquilidad y la calidad del trabajo realizado."],
		["title" => "¿Cómo puedo solicitar un presupuesto o una consulta?", "content" => "Puedes solicitar un presupuesto o una consulta escribiendonos por WhatsApp o llamandonos directamente. Estaremos encantados de responder a tus preguntas y programar una visita."],

	];
@endphp

<section class="container-fluid bg-body-tertiary text-center py-5">
	<div class="container">
		<span id="preguntas-frecuentes" class="badge text-bg-primary text-primary bg-opacity-25 mb-2 text-uppercase">Alguna duda?</span>
		<h2 class="mb-4">Respondemos a tus preguntas frecuentes</h2>
		<div class="accordion text-start" id="accordionExample">
			@foreach($faqs as $faq)
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button @class(['accordion-button fw-semibold', 'collapsed' => $loop->index != 0]) type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$loop->index}}" aria-expanded="true" aria-controls="collapse{{$loop->index}}">
							{{$faq['title']}}
						</button>
					</h2>
					<div id="collapse{{$loop->index}}" @class(['accordion-collapse', 'collapse', 'show' => $loop->first]) data-bs-parent="#accordionExample">
						<div class="accordion-body">
							{{$faq['content']}}
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
