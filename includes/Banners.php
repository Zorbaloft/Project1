
<section>
    <div class="container-fluid">
        <div class="row justify-content-center g-4">
            <?php
            $imageIds = range(3, 5);

            foreach ($imageIds as $imageId) {
                $advertising_assets = "SELECT * FROM advertising_assets WHERE IDA = $imageId";
                $advertising_assetsResult = mysqli_query($mysqli, $advertising_assets);

                while ($advertising_assetsRow = mysqli_fetch_assoc($advertising_assetsResult)) {
                    ?>
                    <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                        <div class="banner-container2 border position-relative">
                            <img class="img-fluid"
                                src="img/imagensMiguel/Banners/<?php echo $advertising_assetsRow["image"]; ?>" alt="">
                            <div class="banner-content text-center align-items-center position-absolute w-100 top-0 text-light mt-5">
                                <h4 class="w-100">
                                    <?php echo $advertising_assetsRow["title"]; ?> <br>
                                    <?php echo $advertising_assetsRow["semi-title"]; ?>
                                </h4>
                                <p>
                                    <?php echo $advertising_assetsRow["body"]; ?>
                                </p>
                                <a class="text-decoration-none " href="ContactUs.php">Peça agora!
                                    <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>
