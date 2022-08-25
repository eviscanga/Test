<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <meta name="viewport" content="width=device-width, initial-scale=0.4">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.98.0">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/css/bootstrap.min.css"
    integrity="sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css"
    integrity="sha512-YzwGgFdO1NQw1CZkPoGyRkEnUTxPSbGWXvGiXrWk8IeSqdyci0dEDYdLLjMxq1zCoU0QBa4kHAFiRhUL3z2bow=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



  <link href="<?php echo base_url();?>assets/dashboard.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/js/bootstrap.min.js"
    integrity="sha512-Hqe3s+yLpqaBbXM6VA0cnj/T56ii5YjNrMT9v+us11Q81L0wzUG0jEMNECtugqNu2Uq5MSttCg0p4KK0kCPVaQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<style>
  
div.scrollmenu {
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px;
  text-decoration: none;
  font-weight: bold;
}

div.scrollmenu a:hover {
  color: red;
}
</style>
<header>
  <nav class="navbar navbar-expand navbar-light">
    <a class="navbar-brand ms-3 d-flex flex-row" href="#">

    <div class="d-inline-block align-top"
                style="width: 75px !important; height: 75px !important; background-image: url(assets/red.jpg); background-size: cover; background-position: center; border-radius: 50%;">

            </div>
      <div class="d-flex flex-column ms-3">
        <p class="fw-bold">Mc Cafee</p>
        <p style="margin-top:-15px;">menu</p>
      </div>
    </a>
  </nav>
  <div class="scrollmenu bg-light d-flex justify-content-evenly text-uppercase" >
    <?php foreach ($categories as $category): ?>
  <a href="#home"><?php echo $category['name']?></a>
  <?php endforeach;?>



</div>
</header>


<body>
  <!-- Image and text -->
<!-- menuja -->
