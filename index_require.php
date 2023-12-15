<?php
echo "<h1>Acá están los 3 componentes -header, main y footer- con require</h1>";

require 'index_header.php';
require 'index_main.php';

// puse mal el footer a propósito para comprobar que no sale
require 'index_foooooooooooooter.php'; 

?>

<html>
<body>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Javascript -->
    <script src="./javascript/script.js"></script>
    <!-- swalert2???? -->
    <script src="./javascript/swalert2.js"></script>
</body>

</html>