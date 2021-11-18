<?php
include("config/databaseconnect.php");
$select="SELECT * from tipo_vacina";

$tipoVacina=mysqli_query($conect,$select);
?>
<!DOCTYPE html>
<html lang="pt-br">
<title>Cadastro Vacina</title>
<body>
   
    <div class="container-fluid">
        <h2 class=" titulo-principal">Cadastro de Vacina</h2>
        <!-- <div class="float-right"> -->
        <form id="formulario_vacina">
            <div id="vacina-row" class="row container-principal">
    
                <div class="col-md-6 col-xs-6">
                    <div class="form-group">
                        <label for="nome_vacina" class="text-info">Nome:</label>
                        <input type="text" name="nome_vacina" id="nome_vacina" class="form-control" required>
                    </div>
                </div>
    
                <div class="col-md-6 col-xs-6">
                    <div class="form-group">
                        <label for="fabricante" class="text-info">Fabricante:</label>
                        <input type="text" name="fabricante" id="fabricante" class="form-control" required>
                    </div>
                </div>
    

                <div class="col-md-6 col-xs-6">
                    <div class="form-group">
                        <label for="tipo_vacina" class="text-info">Tipo de vacina:</label>
                        <div class="input-group">
                            <select name="tipo_vacina" id="tipo_vacina" class="form-control" required>
                                <option value="">--Selecione--</option>
                                    <?php while($tipo = mysqli_fetch_array($tipoVacina)) { ?>
                                 <option value="<?php echo $tipo['id']?>"><?php echo $tipo['descricao'] ?></option><?php
                                    }?>
                            </select>
                            <div class="input-group-append">
                                <span class="input-group-text"><a href="#" onclick="requisitarPagina('tipoVacina/cadastrar.php')"><i class="fas fa-plus"></i></a></span>
                                <span class="input-group-text"><i class="fas fa-redo-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

    
                <div class="col-md-3 col-xs-3">
                    <div class="form-group">
                      <label for="dose_unica" class="text-info">Dose unica ?</label><br>
                      <span style="margin-right:60px;">
                          <input  type="radio" id="dose_unica" name="dose_unica" value="Y" checked>
                          <label for="sim">Sim</label></span>
                          <input type="radio" id="dose_unica" name="dose_unica" value="N"><label for="nao">Não</label>
                      </span>
                    </div>
                </div>
    
                <div class="col-md-3 col-xs-3">
                    <div class="form-group">
                        <label for="qtd_dose" class="text-info">Quantidade de dose:</label>
                        <input type="number" min="1"name="qtd_dose" id="qtd_dose" class="form-control" required>
                    </div>
                </div>
    
                <div class="col-md-6 col-xs-6">
                    <div class="form-group">
                        <label for="intervalo_dias" class="text-info">Intervalo de dias:</label >
                        <input type="number" min="0" name="dias" id="intervalo_dias" class="        form-control" required>
                    </div>
                </div>
                <div class="col-md-8 col-xs-8">
                    <div class="form-group">
                        <input type="submit" class ="btn btn-success center" value="Salvar">
                    </div>
                </div>
            </div>
        </form>
        <span id="msg"></span>
        <script src="vacina/vacina.js"></script>
    <!-- </div> -->
    </div>
</body>
</html>

