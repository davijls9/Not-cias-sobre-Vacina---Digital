<?php
    $select="SELECT C.id as codigo,V.nome as nome_vacina,TV.descricao as tipo_vacina,C.data_aplicacao as data, C.dose_atual as dose_atual,C.data_proxima_aplicacao as proxima_data
    FROM cartao C
    INNER JOIN vacina V ON C.id_vacina = V.id
    INNER JOIN tipo_vacina TV ON TV.id = V.id_tipo_vacina
    WHERE C.id_usuario =$logado";
    $result=mysqli_query($conect,$select);
?>
<!DOCTYPE html>
<html lang="pt-br">
<body>
<div class="container">
    <div>
        <h2 class=" titulo-principal">Dados do Cartão</h2>
        <div class="float-right">
            <div class="form-group">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i></i> Vincular vacina</button>
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <?php 
                    include_once('./vacinaCartao/cadastrar.php');  
                    ?>
                </div>
            </div>
        </div>
        <table class="table" id="vacina_lista">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Data aplicação</th>
                    <th>Nº dose</th>
                    <th>Proxima aplicação</th>
                    <th></th>
                </tr>
            </thead>
                <?php while($dado = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $dado['codigo']?></td>
                    <td><?php echo $dado['nome_vacina']?></td>
                    <td><?php echo $dado['tipo_vacina']?></td>
                    <td><?php echo $dado['data']?></td>
                    <td><?php echo $dado['dose_atual']?></td>
                    <td><?php echo $dado['proxima_data']?></td>
                    <td><a class='btn btn-secondary' href="#"><i class="far fa-edit"></i></a></td>
                    <td><a class='btn btn-danger' href="#"><i class="far fa-trash-alt"></i></a></td>
                </tr>
                <?php }?>
        </table>
    </div> 
</div>
</body>
</html>
