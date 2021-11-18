<?php
$select="SELECT id,nome,fabricante,qtd_dose,dose_unica from vacina";
$vacinas=mysqli_query($conect,$select);
?>
<!-- <script src"></script> -->
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h3 class="modal-title" id="exampleModalLongTitle">Vincular Vacina</h3>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form id="vinculaVacina">
      <div class="modal-body row">

        <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $logado?>">

        <div class="col-md-8 col-xs-8">
          <div class="form-group">
            <label for="nome_vacina" class="text-info">Nome da vacina:</label>
            <select name="nome_vacina" id="nome_vacina" class="form-control">
              <option value="">--Selecione--</option>
              <?php while($vacina = mysqli_fetch_array($vacinas)) { ?>

                <option value="<?php echo $vacina['id']?>">
                  <?php 
                  $dose_unica = $vacina['dose_unica'];
                  $qtd_dose = $vacina['qtd_dose'];
                    echo $vacina['nome']." - ".$vacina['fabricante'] 
                  ?>
                </option><?php
              }?>
            </select>
          </div>
        </div>
        <!-- <?php echo $vacina['id']?> -->

        <div class="col-md-4 col-xs-4">
          <div class="form-group">
            <label for="data_aplicacao" class="text-info">Data aplicação:</label>
            <input type="date" name="data-aplicacao" id="data_aplicacao" class="form-control input-login" placeholder="dd/mm/aaaa" data-mask="00/00/0000" maxlength="10" autocomplete="off">
          </div>
        </div>

        <div class="col-md-4 col-xs-4">
          <div class="form-group">
            <label for="dose_unica" class="text-info" id="dose_unica" value="<?php echo $dose_unica?>" >Dose unica ?</label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-label" type="radio" id="dose_unica_sim" name="dose_unica">
                <label for="sim">Sim</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="dose_unica_nao" name="dose_unica">
                <label class="form-check-label" for="nao" >Não</label>
              </div>
          </div>
        </div>
        <!-- <?php echo $dose_unica ?> -->

        <div class="col-md-2 col-xs-2">
          <div class="form-group">
            <label for="dose_atual" class="text-info">Dose atual:</label>
            <input type="number" name="dose_atual" id="dose_atual" min="1" class="form-control" >
          </div>
        </div>

        <div class="col-md-2 col-xs-2">
          <div class="form-group">
            <label for="total_dose" class="text-info">Total de dose:</label>
            <input type="number" name="total_dose" id="total_dose" class="form-control" value="<?php echo $qtd_dose?>" >
          </div>
          <!-- <?php echo $qtd_dose ?> -->
        </div>

        <div class="col-md-4 col-xs-4">
          <div class="form-group">
            <label for="data_proxima_aplicacao" class="text-info">Data proxima aplicação:</label>
            <input type="date" name="data_proxima_aplicacao" id="data_proxima_aplicacao" class="form-control " placeholder="dd/mm/aaaa" data-mask="00/00/0000" maxlength="10" autocomplete="off">
          </div>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        <input type="submit" class ="btn btn-success center"  form="vinculaVacina" value="Salvar">
      </div>
    </form>
    <script src="vacinaCartao/vacinaCartao.js"></script>
  </div>
</div>
