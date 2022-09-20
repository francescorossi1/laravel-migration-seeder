<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>
    @if($trains)      
            @foreach($trains as $train)
            <p>Agenzia: {{ $train->agency }}</p>
            <p>Stazione di partenza: {{ $train->departure_station }}</p>
            <p>Stazione di arrivo: {{ $train->arrival_station }}</p>
            <p>Ora partenza: {{ $train->departure_date }}</p>
            <p>Ora arrivo: {{ $train->arrival_date }}</p>
            <p>Treno numero: {{ $train->train_num }}</p>
            <p>Carrozze: {{ $train->carriages }}</p>
            <p>In Ritardo: {{ $train->is_on_schedule }}</p>
            <p>Cancellato: {{ $train->is_deleted }}</p>
            <hr>
            @endforeach
    @else
        <h2>Nessun treno disponibile, riprovare.</h2>
    @endif
</body>
</html>