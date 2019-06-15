<?php
include '../model/dao/AnimalDao.php';

function llenarTabla()
{
    $aDao = new AnimalDao();
    $tabla = $aDao->buscarAnimales();
    foreach ($tabla as $f) {
        //$sexo = "macho";
        $sexo = "<i class='fas fa-mars fa-2x text-info'></i>";
        if($f->getSexo()=='h')
        {
            //$sexo = "hembra"; 
            $sexo = "<i class='fas fa-venus fa-2x text-danger'></i>";
        }
        if($f->getCodigoDueño()==NULL)
        {
            echo "<tr>";
        }
        else
        {
            echo "<tr class='table-success'>";
        }
        echo "<th scope='row'><input type='checkbox' name='".$f->getCodigo()."' id='".$f->getCodigo()."'></th>";
        echo "<td><a class='btn btn-link' href='view-animal.php?cod=".$f->getCodigo()."'>" . $f->getNombre(). "</a></td>";
        echo "<td>" . $f->getEdad(). "</td>";
        echo "<td>" . $f->getRaza(). "</td>";
        echo "<td>" . $sexo. "</td>";
        echo "<td>" . $f->getFechaIngreso(). "</td>";
        echo "<td>" . $f->getChip(). "</td>";
        echo "<td>" . $f->getObservacion(). "</td>";
        echo "<td><a class='btn btn-link text-danger fas fa-times-circle'></a>|<a class='btn btn-link text-info fas fa-edit'></a></td>";
        echo "</tr>";
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