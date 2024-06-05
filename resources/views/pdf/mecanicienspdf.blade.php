<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css" integrity="sha512-h+jxHd1kXOv1UbYfS8+kZXRwACrzoi2Lvc4hHa4Jbb4xGd7yXHlGgYzq3KjMkVt+ZABsTynT7iC2Q1yV7skacQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <img src="{{ public_path($logo) }}" class="w-24">
    <table class="table table-striped mt-10" style="background-color: #BAD1C2;">
        <thead>
            <tr>
                <th class="mb-2" style="background-color: #23049D; color: #000000;">@lang('Nom')</th>
                <th class="mb-2" style="background-color: #23049D; color: #000000;">@lang('prenom')</th>
                <th class="mb-2" style="background-color: #23049D; color: #000000;">@lang('telephone')</th>
                <th class="mb-2" style="background-color: #23049D; color: #000000;">@lang('adresse')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mecaniciens as $m)
            <tr>
                <td>{{ $m->nom }}</td>
                <td>{{ $m->prenom }}</td>
                <td>{{ $m->telephone }}</td>
                <td>{{ $m->adresse }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
