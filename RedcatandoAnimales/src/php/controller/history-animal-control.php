<?php
include '../model/dao/AnimalDao.php';

function llenarTabla()
{
    $aDao = new AnimalDao();
    $tabla = $aDao->buscarAnimales();
    foreach ($tabla as $f) {
        echo "<tr><th scope='row'><input type='checkbox'></th>
        <td><a class='btn btn-link' href='animal.php?cod=".$f->getCodigo()."'>" . $f->getNombre(). "</a></td>
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