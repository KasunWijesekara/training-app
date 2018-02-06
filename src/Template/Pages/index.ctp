<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <?php 
    if (!empty($oneslider)) {  
      foreach ($oneslider as $onesliders): ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo ($onesliders->id); ?>"></li>
      <?php 
    endforeach; 
  } 
  ?>
</ol>

<div class="carousel-inner">
  <div class="carousel-item active">
    <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
  </div>

  <?php 
  if (!empty($oneslider)) {  
    foreach ($oneslider as $onesliders): ?>
    <div class="carousel-item">
      <img class="<?php echo ($onesliders->id); ?>-slide" src="<?php echo ($onesliders->image); ?>" alt="<?php echo ($onesliders->id); ?> slide">
    </div>
    <?php 
  endforeach; 
} 
?>
</div>
<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>


<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Pricing</h1>
  <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
</div>

<div class="container">
  <div id="myCarousel2" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>

      <?php 
      if (!empty($twoslider)) {  
        foreach ($twoslider as $twosliders): ?>
        <li data-target="#myCarousel2" data-slide-to="<?php echo ($twosliders->id); ?>"></li>
        <?php 
      endforeach; 
    } 
    ?>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
    </div>

    <?php 
      if (!empty($twoslider)) {  
        foreach ($twoslider as $twosliders): ?>
    <div class="carousel-item">
      <img class="<?php echo ($twosliders->id); ?>-slide" src="<?php echo ($twosliders->image); ?>" alt="<?php echo ($twosliders->id); ?> slide">
    </div>
    <?php 
      endforeach; 
    } 
    ?>

  </div>
  <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>