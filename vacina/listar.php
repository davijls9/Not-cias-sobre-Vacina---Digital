<?php
    include("config/databaseconnect.php");
    $select='SELECT * FROM vacina';
    $result=mysqli_query($conect,$select);
?>
<!DOCTYPE html>
<html lang="pt-br">
<body>
    <div class="container-fluid">
        <h2 class=" titulo-principal">Lista de Vacinas</h2>

            <div class="float-right">
                <div class="form-group">
                    <a href="./home.php?p=cadastraVacina"><button type="button" class="btn btn-primary">Adiconar</button></a>
                </div>
            </div>
            <table class="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Fabricante</th>
                    <th>Dose Única</th>
                </tr>
            </thead>
            <?php while($dado = mysqli_fetch_array($result)){?>
                <tr>
                    <td><?php echo $dado['id']?></td>
                    <td><?php echo $dado['nome']?></td>
                    <td><?php echo $dado['fabricante']?></td>
                    <td><?php 
                    $dado['dose_unica']=="Y"? $dose="Sim" : $dose="Não"; 
                    echo $dose;
                    ?>
                    </td>
                </tr>
            <?php }?>
            </table>
        </div>
    </div>
</body>
</html>