<!-- resources/views/react.blade.php -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>React in Laravels</title>
		<!-- Link to your compiled CSS if needed -->
		<link rel="stylesheet" href="{{ mix('css/app.css') }}">
	</head>
	<body>
		<!-- This is where your React app will be mounted -->
		<div id="root"></div>

		<!-- Include your compiled JavaScript -->
		<script src="{{ mix('js/app.js') }}"></script>
		{{-- <script src="./../js/app.js"></script> --}}
	</body>
</html>
