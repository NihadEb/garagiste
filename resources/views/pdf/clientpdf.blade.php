<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css" integrity="sha512-h+jxHd1kXOv1UbYfS8+kZXRwACrzoi2Lvc4hHa4Jbb4xGd7yXHlGgYzq3KjMkVt+ZABsTynT7iC2Q1yV7skacQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <img src="{{ public_path($logo) }}" class="w-24">
    <div class="mt-4">
        @foreach($clients as $clt)
            <div class="border border-gray-300 p-4 mb-4">
                <p class="mb-2"><strong>@lang('Nom'):</strong> {{ $clt->nom }}</p>
                <p class="mb-2"><strong>@lang('Prenom'):</strong> {{ $clt->prenom }}</p>
                <p class="mb-2"><strong>@lang('Telephone'):</strong> {{ $clt->telephone }}</p>
                <p class="mb-2"><strong>@lang('Adresse'):</strong> {{ $clt->adresse }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
