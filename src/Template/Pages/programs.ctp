 <main role="main">

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Training Programme Description</h1>
    <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
  </div>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <?php 
        if (!empty($courseitem)) {  
          foreach ($courseitem as $courses): ?>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="<?php echo ($courses->mainimage); ?>" alt="Card image cap">
              <div class="card-body">
                <h6><?php echo ($courses->title); ?></h6>
                <p class="card-text">
                  <?php echo ($courses->description); ?>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a class="btn btn-sm btn-outline-secondary" href="<?= h($courses->_matchingData['Brochures']['pdffile']) ?>" download>Download</a>
                    <a class="btn btn-sm btn-outline-secondary" href="/program-single/<?php echo ($courses->id); ?>">More Information</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php 
        endforeach; 
      } 
      ?>
    </div>
  </div>
</div>

</main>