<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>How to Generate QR Code in Laravel 8</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>

<div class="container mt-4">

    <div class="card">
        <div class="card-header">
            <h2>Simple QR Code</h2>
        </div>
        <div class="card-body">
            {!! QrCode::size(300)->generate('https://play.anghami.com/song/32648006?adj_t=dgl0aa8_64v1dnl&adj_campaign=web&adj_adgroup=song&adj_creative=71596972') !!}
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Color QR Code</h2>
        </div>
        <div class="card-body">
            {!! QrCode::size(300)->backgroundColor(255,90,0)->generate('https://play.anghami.com/song/32648006?adj_t=dgl0aa8_64v1dnl&adj_campaign=web&adj_adgroup=song&adj_creative=71596972') !!}
        </div>
    </div>

</div>
</body>
</html>

