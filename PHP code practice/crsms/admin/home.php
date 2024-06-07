<h1>Welcome to <?php echo $_settings->info('name') ?></h1>
<hr>
<div class="row">
        <div class="col-12 col-sm-4 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-gradient-navy elevation-1"><i class="fas fa-cogs"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Service List</span>
                <span class="info-box-number">
                  <?php 
                    $service = $conn->query("SELECT * FROM service_list where delete_flag = 0 and `status` = 1")->num_rows;
                    echo format_num($service);
                  ?>
                  <?php ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-4 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-gradient-light border elevation-1"><i class="fas fa-calendar-minus"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Peding Transaction</span>
                <span class="info-box-number">
                  <?php 						
                    if($_settings->userdata('type') == 3):
                      $total = $conn->query("SELECT * FROM transaction_list where `status` = 0 and tech_id = '{$_settings->userdata('id')}' ")->num_rows;
                    else:
                      $total = $conn->query("SELECT * FROM transaction_list where `status` = 0 ")->num_rows;
                    endif;
                    echo format_num($total);
                  ?>
                  <?php ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-4 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fa-spinner"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">On-Progress</span>
                <span class="info-box-number">
                  <?php 
                    if($_settings->userdata('type') == 3):
                      $total = $conn->query("SELECT * FROM transaction_list where `status` = 1 and tech_id = '{$_settings->userdata('id')}' ")->num_rows;
                    else:
                      $total = $conn->query("SELECT * FROM transaction_list where `status` = 1 ")->num_rows;
                    endif;
                    echo format_num($total);
                  ?>
                  <?php ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
<div class="container">
  <?php 
    $files = array();
      $fopen = scandir(base_app.'uploads/banner');
      foreach($fopen as $fname){
        if(in_array($fname,array('.','..')))
          continue;
        $files[]= validate_image('uploads/banner/'.$fname);
      }
  ?>
  <div id="tourCarousel"  class="carousel slide" data-ride="carousel" data-interval="3000">
      <div class="carousel-inner h-100">
          <?php foreach($files as $k => $img): ?>
          <div class="carousel-item  h-100 <?php echo $k == 0? 'active': '' ?>">
              <img class="d-block w-100  h-100" style="object-fit:contain" src="<?php echo $img ?>" alt="">
          </div>
          <?php endforeach; ?>
      </div>
      <a class="carousel-control-prev" href="#tourCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#tourCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
  </div>
</div>
