
<section >
    <div class="container d-none d-md-block py-5">
        <div class="section-header d-flex flex-wrap justify-content-between mb-5">
            <h2 class="section-title">Categorias</h2>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6 d-flex justify-content-center">
            <?php
            $categorySql = "SELECT * FROM category";
            $categoryResult = mysqli_query($mysqli, $categorySql);
            while ($categoryRow = mysqli_fetch_assoc($categoryResult)) {
                ?>
            <div class="col">
                <a href="Shop.php?IDCAT=<?= $categoryRow['IDCAT']; ?>" class="nav-link category-item bg-white border text-center">
                    <img src="img/imagensMiguel/<?= $categoryRow["image"] ?>" alt="Category Thumbnail" class="img-fluid">
                    <h5 class="category-title mt-2">
                        <?= $categoryRow["name"] ?>
                    </h5>
                </a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>


<section >
    <div class="container overflow-hidden d-block d-md-none py-5" id="categories">
        <div class="section-header d-flex flex-wrap justify-content-between mb-5">
            <h2 class="section-title">Categorias</h2>
        </div>
        <div class="swiper-container" id="categories_slider">
            <div class="swiper-wrapper">
                <?php
                $categorySql = "SELECT * FROM category";
                $categoryResult = mysqli_query($mysqli, $categorySql);
                while ($categoryRow = mysqli_fetch_assoc($categoryResult)) {
                    ?>
                <div class="swiper-slide">
                    <a href="Shop.php?IDCAT=<?= $categoryRow['IDCAT']; ?>" class="nav-link category-item bg-white border text-center ">
                        <img src="img/imagensMiguel/<?= $categoryRow["image"] ?>" alt="Category Thumbnail" class="img-fluid">
                        <h5 class="category-title mt-2">
                            <?= $categoryRow["name"] ?>
                        </h5>
                    </a>
                </div>
                <?php
                }
                ?>
            </div>
        </div>

</section>