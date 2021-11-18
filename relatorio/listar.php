<!DOCTYPE html>
<html lang="pt-br">
<title>Relatório</title>
<body>


  <div class="container-fluid">
    <h2 class=" titulo-principal">Relatório</h2>
    <!-- <div class="float-right"> -->
      <form id="busca">
         <h5 class=" titulo-principal">Buscar por periodo:</h5>
        <label for="data_aplicacao" class="text-info"></label>
        <div id="vacina-row" class="row container-principal">
         <!--  <div> -->
           
           <div class="col-md-4 col-xs-4">
            <div class="form-group">
              <label for="data_aplicacao" class="text-info">De:</label>
              <input type="date" name="data-aplicacao" id="data_aplicacao" class="form-control    input-login" placeholder="dd/mm/aaaa" data-mask="00/00/0000" maxlength="10"   autocomplete ="off">
            </div>
          </div>
          
          <div class="col-md-4 col-xs-4">
            <div class="form-group">
              <label for="data_aplicacao" class="text-info">Até:</label>
              <input type="date" name="data-aplicacao" id="data_aplicacao" class="form-control    input-login" placeholder="dd/mm/aaaa" data-mask="00/00/0000" maxlength="10"   autocomplete ="off">
            </div>
          </div>
        <!-- </div> -->
      </form>
      <span id="msg"></span>
      <script src="vacina/vacina.js"></script>
      <!-- </div> -->
    </div>
  </body>
</html>
