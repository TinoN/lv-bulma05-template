<nav class="navbar is-primary">
	<!-- Branding Image -->
	<div class="navbar-brand">
	   	<a class="navbar-item" href="{{ url('/') }}">
	        {{ config('app.name', 'Laravel') }}
	    </a>

	    <!-- Collapsed Hamburger -->
	    <div class="navbar-burger burger" data-target="navMenubd">
	      	<span></span>
	      	<span></span>
	      	<span></span>
	    </div>
	</div>
	<div id="navMenubd" class="navbar-menu">
	    <div class="navbar-start">
	    <!-- add left-side navbar content -->
	    </div>

	    <div class="navbar-end">
	    	<a class="navbar-item" href="#">
		    	<span class="icon" style="color: #333;">
		        	<i class="fa fa-github"></i>
		        </span>
		    </a>

	        <!-- Authentication Links -->
	        @if (Auth::guest())
	            <a class="navbar-item" href="{{ route('login') }}">Login</a>
	            <a class="navbar-item" href="{{ route('register') }}">Register</a>
	        @else
	            <div class="navbar-item has-dropdown is-hoverable">
	                <a class="navbar-link  is-active" href="#">
	                    {{ Auth::user()->name }}
	                </a>
	                <div class="navbar-dropdown ">
	                    <a class="navbar-item " href="{{ route('logout') }}" onclick="event.preventDefault();
	                    	document.getElementById('logout-form').submit();">
	                        Logout
	                    </a>
	                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                        {{ csrf_field() }}
	                    </form>
	                </div>
	            </div>
	        @endif

	    </div>
	</div>
</nav>
