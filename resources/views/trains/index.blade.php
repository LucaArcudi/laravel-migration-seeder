<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
    <main class="container">
        <div class="row">
            @dump($trains)
            @forelse ($trains as $train)
            <div class="col-4 mb-4">
                <p>Azienda: {{ $train->azienda }}</p>
                <p>Stazione di partenza: {{ $train->stazione_di_partenza }}</p>
                <p>Stazione di arrivo: {{ $train->stazione_di_arrivo }}</p>
                <p>Orario di partenza: {{ $train->orario_di_partenza }}</p>
                <p>Orario di arrivo: {{ $train->orario_di_arrivo }}</p>
                <p>Codice treno: {{ $train->codice_treno }}</p>
            </div>
            @empty
            <div class="col">
                <p>Non ci sono treni</p>
            </div>
            @endforelse
        </div>
    </main>
</body>

</html>