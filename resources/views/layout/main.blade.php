<!DOCTYPE html>
<html>
<head>
	<title>App form Me</title>
</head>
<body>
       <header>
       	<nav>
       		<ul>
       			<li><a href="{{ route('/') }}">home</li>
       			<li><a href="{{ route('about') }}">about</li>
       			<li><a href="{{ route('contact') }}">contact</li>
       		</ul>
       	</nav>
       	@yield('content');
       </header>
</body>
</html>