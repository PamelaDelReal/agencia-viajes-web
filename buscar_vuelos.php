<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $origen = htmlspecialchars($_POST['origen']);
    $destino = htmlspecialchars($_POST['destino']);
    echo "Buscando vuelos de $origen a $destino...";
}
?>
<form method="post">
  <label>Origen: <input name="origen"></label>
  <label>Destino: <input name="destino"></label>
  <button type="submit">Buscar</button>
</form>
