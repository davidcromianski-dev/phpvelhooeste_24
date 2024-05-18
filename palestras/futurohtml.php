<?php

// PHP Velho Oeste 2024
// Palestra 7: O futuro do desenvolvimento web será HTML pelo fio
// Palestrante: Fernando Bevilacqua

// html over the wire
?>
<html>
    <head>
        <title>PHP Velho Oeste 2024 - Palestra 7</title>
    </head>
    <body>
    <div id="teste">
        <button onclick="getData()">Buscar dados</button>
    </div>
    <script type="module">
        import morphdom from "morphdom";
        function getData() {
            fetch('http://localhost:8080/palestras/futurohtml_endpoint.php')
                .then(response => response.text())
                .then(data => {
                    morphdom(document.getElementById('teste'), data);
                });
        }
    </script>
    </body>
</html>
