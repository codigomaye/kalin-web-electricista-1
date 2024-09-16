@php
	$socials = [
		["title" => "instagram", "icon" => "bi-instagram", "url" => "", ],
		["title" => "twitter", "icon" => "bi-twitter", "url" => "", ]
	]
@endphp

<footer class="container-fluid bg-dark text-white py-3">
	<div class="container">
		<div class="row g-3">
			<div class="col-12 text-center">
				@foreach($socials as $social)
					<a class="me-2" href="#"><i class="fs-4 bi {{$social['icon']}}" title="{{$social['title']}}"></i></a>
				@endforeach
			</div>
			<div class="col-12 text-center">
				© {{date('Y')}} {{$page->siteName}} | Todos los derechos reservados
			</div>
		</div>
	</div>

</footer>
