<?php include './inc/data.php'; ?>
<?php include './inc/header.php'; ?>

<!-- Carousel -->
<div id="carouselExample" class="carousel slide mb-4" data-bs-ride="carousel">
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="./img/slide1.jpg" class="d-block w-100" alt="Library 1" >
    </div>
    <div class="carousel-item">
      <img src="./img/slide2.jpg" class="d-block w-100" alt="Library 2" >
    </div>
    <div class="carousel-item">
      <img src="./img/slide3.jpg" class="d-block w-100" alt="Library 2">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Featured Books -->
<h2 class="mb-4 text-center">Featured Books</h2>

<div class="row">
    <?php foreach ($books as $id => $book): ?>
        <div class="col-md-4 mb-4 d-flex">
            <div class="card h-100 w-100">
                <img src="<?= $book['image']; ?>" class="card-img-top" style="height: 250px; height: 250px;object-fit: cover;" alt="<?= $book['title']; ?>">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?= $book['title']; ?></h5>
                    <div class="mt-auto">
                        <a href="details.php?id=<?= $id; ?>" class="btn btn-primary">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- footer -->
<?php include "./inc/footer.php" ?>

