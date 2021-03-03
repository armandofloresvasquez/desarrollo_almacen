<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css">

<body>
    <div class="container">
        <h1 class="h1">Detalle de la orden de pedido</h1>

        <div>
            <button class="btn btn-success" id="boton">mostrar sitio</button>
            <div id="response"></div>
        </div>
    </div>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/main.js"></script>
    <script>
        function ajax() {

            const http = new XMLHttpRequest();
            const url = 'http://localhost/PROJECTS/PRUEBAS/prueba_bd/App/buscar.php';

            http.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    document.getElementById("response").innerHTML = this.responseText;
                }
            }

            http.open("GET", url);
            http.send();
        }

        document.getElementById("boton").addEventListener("click", function() {
            ajax();
        });

    </script>

</body>

</html>
