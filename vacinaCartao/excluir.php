<?php
require_once dirname(dirname(DIR)) . '/Rota.php';
$cor = CorSgav5Class::buscarPorId(Rota::getId());
?>

<form method="post" id="vinculoVacina" data-template="vacinaCartao"  >

  <div class="form-row">
    <input type="hidden" class="form-control" name="data[cor][id]" value="<?php echo (!empty($cartao)) ? $cartao['id'] : "" ?>" >
    <input type="hidden" class="form-control" name="data[cor][situacao]" value="<?php echo ChaveSgav5Class::criptKey("E", "geral") ?>" >
    <p><strong>Deseja excluir: </strong><p>
      <p><?php echo $cor->descricao ?>?</p>
    </div>
    <button type="submit" class="btn btn-primary">Excluir</button>
  </form>