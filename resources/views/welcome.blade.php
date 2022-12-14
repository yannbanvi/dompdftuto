<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    </head>
    <body class="antialiased">
        <div class="container mt-5">
            <form id="generateForm" method="POST" action="{{ route("pdf.generate") }}" target="__blank">
                @csrf
            </form>

            <form id="downloadForm" method="POST" action="{{ route("pdf.download") }}">
                @csrf
            </form>

            <button type="submit" form="generateForm" class="btn btn-primary">Generate PDF</button>
            <button type="submit" form="downloadForm" class="btn btn-success">Download PDF</button>
        </div>
    </body>
</html>
