<?php
include '../model/dao/AnimalDao.php';

function llenarTabla()
{
    $aDao = new AnimalDao();
    $tabla = $aDao->buscarAnimales();
    foreach ($tabla as $f) {
        $sexo = "macho";
        if($f->getSexo()=='h')
        {
            $sexo = "hembra"; 
        }
        echo "<tr><th scope='row'><input type='checkbox'></th>
        <td><a class='btn btn-link' href='view-animal.php?cod=".$f->getCodigo()."'>" . $f->getNombre(). "</a></td>
        <td>" . $f->getEdad(). "</td>
        <td>" . $f->getRaza(). "</td>
        <td>" . $sexo. "</td>
        <td>" . $f->getFechaIngreso(). "</td>
        <td>" . $f->getChip(). "</td>
        <td>" . $f->getObservacion(). "</td></tr>";
    }
}

function eliminarAnimal()
{
}
function ingresarAnimal($animal)
{
    $aDao = new AnimalDao();
    $aDao->agregarAnimal($animal);
    header("Location:../view/history-animal.php");
}
?>