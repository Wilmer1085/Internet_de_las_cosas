<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Panel de control IoT</h1>

    <p>Base de datos: {{ $dbDriver }}</p>
    <p>Sensores en línea: {{ $sensorsOnline }}</p>
    <p>Última sincronización: {{ $lastSync }}</p>

    <h3>Estaciones registradas:</h3>
    <ul>
        @foreach($stations as $station)
            <li>{{ $station->name }}</li>
        @endforeach
    </ul>
</body>
</html>
