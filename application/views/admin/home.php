<div>
  <div class="row">
    <?php foreach ($products as $product){
      echo'
      <div class="col-lg-4 col-6 ms-0"  style="padding: 0;">
      <div class="card border-0">
      <img class="card-img-top rounded-0" src="assets/kafe.jpg" alt="Card image">
      <div class="card-img-overlay ">
        <p class="card-text text-white fw-bold" style="transform: rotate(270deg); position:absolute; top: 50px; left: 350px;">'.substr($product['content']['rendered'], 4, -5).'</p>
      </div>
      <div class="card-img-overlay d-flex flex-column justify-content-end">
        <p class="card-text text-white fw-bold text-uppercase"> '.$product['title']['rendered'].'</p>
      </div>
    </div>
    </div>';
    }
    ?>
  </div>
  <div>