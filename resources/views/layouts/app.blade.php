<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('layouts.head')
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
	
	<div id="app">

		<div>
			<navigation></navigation>
			
			@yield('content')
		</div>

    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>