<!-- HEADER -->
	<nav class="navbar navbar-default navbar-fixed-top navShadow">
		<div class="conatiner">
			<div class="navbar-header">

				<!-- Collapsed Hamburger -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="#app-navbar-collapsed">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					
				<!-- Branding Image -->
				<a class="navbar-brand navv" href="{{ url('/') }}">
					<img class="naving" src="/img/globe.png" alt="My Web"/>
				</a>
			</div>

				<div class="collapse navbar-collapse" id="app-navbar-collapsed">
					<!-- Left Sideof Navbar -->
					<ul class="nav navbar-nav">
						<li><a href="{{ url('/about') }}"><i class="fa fa-info-circle"></i>&nbsp;&nbsp;About</a></li>
						<li><a href="{{ url('/contact') }}"><i class="fa fa-paper-plane"></i>&nbsp;&nbsp;Contact</a></li>
						
					</ul>
					
				</div>		
		</div>
	</nav><br><br><br>