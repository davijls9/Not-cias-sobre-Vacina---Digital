 <?php 
    $tema ='vacinacao';
    $chaveAPI ='558873e9c6044919b3956c8510f9f85c' ;
    $url ='https://newsapi.org/v2/everything?q='.$tema.'&qInTitle='.$tema.'&sortBy=relevancy&pageSize=7&apiKey='.$chaveAPI;
    $response = file_get_contents($url);
    $NewsData = json_decode($response);
    // print_r($NewsData);
   ?>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php 
    $controle_ativo=2;
    $controle_num_slide =0;
    foreach ($NewsData->articles as $New)
    { 
      if($controle_ativo==2){?>
       <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $controle_num_slide; ?>" class="active"></li>
      <?php $controle_ativo=1;
      }else{ 
        $controle_num_slide++;
        ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $controle_num_slide; ?>"></li>
        <?php 
      } 
    }?>
  </ol>
  <div class="carousel-inner">
    <?php 
    $controle_ativo=2;
    foreach ($NewsData->articles as $New)
    { 
      if($controle_ativo==2){?>
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo $New->urlToImage?>" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5><?php echo $New->title?></h5>
            <p><?php echo $New->description?></p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo $New->urlToImage?>" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="font-weight-bold"><?php echo $New->title?></h5>
            <p class="font-weight-bold"><?php echo $New->description?></p>
          </div>
        </div><?php 
      } 
    }?>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>