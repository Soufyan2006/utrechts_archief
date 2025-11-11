<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panorama van Utrecht</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/openseadragon/4.1.0/openseadragon.min.js"></script>
</head>
<body>
    <header>
        <h1>Panorama van Utrecht</h1>
    </header>

    <div id="openseadragon-viewer" style="width:100%; height:80vh;"></div>

    <footer>
        <button onclick="openColofon()">Colofon</button>
    </footer>

    <!-- Colofon pop-up -->
    <div id="colofon" class="modal">
        <div class="modal-content">
            <h2>Het Utrechts Archief</h2>
            <p>Deze interactieve applicatie is ontwikkeld door team Morros.</p>
            <p>In samenwerking met Het Utrechts Archief.</p>
            <button onclick="closeColofon()">Sluiten</button>
        </div>
    </div>

    <script src="assets/js/main.js"></script>
</body>
</html>
