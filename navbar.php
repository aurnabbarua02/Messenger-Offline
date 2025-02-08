<section class="header shadow-sm p-3 mb-5 bg-white rounded">
        <div class="d-flex float-start">
            <a href="index.php"><i class="bi bi-arrow-left"></i></a>
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
<img src="<?php echo $data[0]; ?>" style="cursor:pointer;"></button>
            <p><b><?php echo $data[1]; ?></b></p>
        </div>
        <div class="d-flex float-end right">
            <i class="bi bi-telephone-fill"></i>
            <i class="bi bi-camera-video-fill"></i>
            <a href="textdata.php?data=<?php echo urlencode(serialize($data)); ?>"> <i class="bi bi-info-circle-fill"></i></a>
        </div></section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $data[1]; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="<?php echo $data[0]; ?>">
      </div>
    </div>
  </div>
</div>      