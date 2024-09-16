<header class="container-fluid bg-body-tertiary p-3">
	<nav class="container navbar navbar-expand-lg">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">{{$page->siteName}}</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
	    @foreach($page->menu as $menu)
	        <a class="menu-link nav-link" href="{{$menu['url']}}">{{$menu['title']}}</a>
	     @endforeach
	      </div>
	    </div>

	  </div>
	</nav>
</header>
