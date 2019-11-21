<!doctype html>
<html lang="en" class="no-js">

<head>
@include('backend.partial.style')
</head>

<body>

@include('backend.partial.header')

	<div class="ts-main-content">
@include('backend.partial.leftbar')

@yield('content')
@include('backend.partial.script')

</body>
</html>
