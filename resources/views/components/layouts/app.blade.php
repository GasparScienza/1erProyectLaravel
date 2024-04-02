<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? ''}}</title>
</head>
<body>
    <x-layouts.nav/>{{-- con el / al final cierro la etiqueta --}}
    {{$slot}}
</body>
</html>