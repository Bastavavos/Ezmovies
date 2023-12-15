<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Example Website' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon"
          href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>">
</head>
<body>

@include('header')
<div class="class flex justify-center">
    {{ $slot }}
</div>

{{-- ce que je vais écrire dans welcome--}}
@include('footer')

</body>
</html>




