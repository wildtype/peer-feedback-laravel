<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<meta name="csrf-token" content="{{ csrf_token()  }}" />
		<title>Peer Feedback | {{ $page_title }}</title>
		<link rel="stylesheet" href="/css/app.css" type="text/css">
	</head>
	<!-- Body -->
	@include('partials._body')
</html>
