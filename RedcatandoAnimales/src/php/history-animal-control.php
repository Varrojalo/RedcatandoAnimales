<?php
include 'AnimalDao.php';

function llenarTabla()
{
    $tabla = buscarAnimales();
    foreach ($tabla as $f) {
        echo "<tr><th scope='row'><input type='checkbox'></th>
        <td>" . $f->getNombre(). "</td>
        <td>" . $f->getEdad(). "</td>
        <td>" . $f->getRaza(). "</td>
        <td>" . $f->getSexo(). "</td>
        <td>" . $f->getFechaIngreso(). "</td>
        <td>" . $f->getChip(). "</td>
        <td>" . $f->getObservacion(). "</td></tr>";
    }
}

function eliminarAnimal()
{
}
?>