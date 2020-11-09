
		<input type="checkbox" id="check">
		<label for="check">
			<i class=" fa fa-bars" id="btn"></i>
			<i class="fa fa-times " id="cancel"></i>
		</label>
		<div class="sidebar">

			<header>Mon menu</header>

			<a class="active" href="#"><i class="fa fa-qrcode"></i><span>Dashboard</span></a>
			<a href="{{ route('typeComptes') }}"><i class="fa fa-link"></i><span>Type de compte</span></a>
			<a href="{{ route('comptes') }}"><i class="fa fa-stream"></i><span>Compte</span></a>
			<a href="{{ route('login') }}"><i class="fa fa-calender"></i><span>Login</span></a>
			<a href="#"><span>About</span></a>
			<a href="#"><i class="fas fa-sliders-h"></i><span>Services</span></a>
			<a href="#"><i class="fa fa-envelope"></i><span>Contact</span></a>

		</div>
