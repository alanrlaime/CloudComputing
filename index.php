<?php
echo "<h1>Hola Mundo Cloud Computing desde GitHub</h1>";
echo "<br>";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código QR</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        img {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Generador de Código QR</h1>
    <input type="text" id="urlInput" placeholder="Ingresa el enlace aquí" />
    <button id="generateBtn">Generar QR</button>
    <img id="qrCode" src="" alt="Código QR" style="display:none;"/>

    <script>
        document.getElementById('generateBtn').addEventListener('click', function() {
            const url = document.getElementById('urlInput').value;
            const qrCodeImg = document.getElementById('qrCode');
            if (url) {
                qrCodeImg.src = `https://api.qrserver.com/v1/create-qr-code/?data=${encodeURIComponent(url)}&size=200x200`;
                qrCodeImg.style.display = 'block';
            } else {
                alert('Por favor, ingresa un enlace válido.');
            }
        });
    </script>
</body>
</html>
