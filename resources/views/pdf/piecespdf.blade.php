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
            <tr style="gap: 15px">
                <th class="mb-2" style="background-color: #FAEF5D; color: #000000;">@lang('Nom piece')</th>
                <th class="mb-2" style="background-color: #FAEF5D; color: #000000;">@lang('Reference')</th>
                <th class="mb-2" style="background-color: #FAEF5D; color: #000000;">@lang('Prix')</th>
                <th class="mb-2" style="background-color: #FAEF5D; color: #000000;">@lang('Fournisseur')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pieces as $p)
            <tr>
                <td>{{ $p->nompiece }}</td>
                <td>{{ $p->referencep }}</td>
                <td>{{ $p->prix }}</td>
                <td>{{ $p->fournisseur }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
