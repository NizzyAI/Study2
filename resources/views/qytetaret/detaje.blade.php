<!DOCTYPE html>
<html lang="en">
<head>
    <title>Citizen Details</title>
</head>
<body>

    <a href="{{ url('/') }}">Kthehu tek tabela</a>
    <h1>Detajet e qytetarit: {{ $qytetar->emri }}</h1>
    <p><strong>ID:</strong> {{ $qytetar->id }} </p>
    <p><strong>Emri:</strong> {{ $qytetar->emri }} </p>
</body>
</html>