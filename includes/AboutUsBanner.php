<?php
$imageId = 6;

$advertising_assets = "SELECT * FROM advertising_assets WHERE IDA = $imageId";
$advertising_assetsResult = mysqli_query($mysqli, $advertising_assets);
$advertising_assetsRow = mysqli_fetch_assoc($advertising_assetsResult);
?>
<section>
    <div class="container-fluid d-sm-flex justify-content-sm-center my-5 p-0" id="Banner_1">
        <div class="banner-container position-relative">

            <img class="img-fluid d-none d-md-block w-100"
                src="img\imagensMiguel\Banners\<?= $advertising_assetsRow["image"]; ?>" alt="Large Screen Banner">


            <img class="d-block d-md-none w-100" src="img\imagensMiguel\Banners\Dbanner.png"
                alt="Mobile-friendly Banner">


            <div class="banner-text position-absolute w-100 text-center top-0 end-0 d-md-none mt-5 text-light">
                <span>
                    <?= $advertising_assetsRow["title"]; ?>
                </span>
                <h1>
                    <?= $advertising_assetsRow["semi-title"]; ?>
                </h1>
                <p>
                    <?= $advertising_assetsRow["body"]; ?>
                </p>
                <a href="About_us.php" class="btn btn-primary rounded-pill">Saiba mais sobre nós!<i
                        class="fa-solid fa-arrow-right ms-2"></i></a>
            </div>

            <div class="banner-text position-absolute text-center d-none d-md-block top-0 end-0 m-4 w-50 text-light">
                <span>
                    <?= $advertising_assetsRow["title"]; ?>
                </span>
                <h1>
                    <?= $advertising_assetsRow["semi-title"]; ?>
                </h1>
                <p>
                    <?= $advertising_assetsRow["body"]; ?>
                </p>
                <a href="About_us.php" class="btn btn-primary rounded-pill">Saiba mais sobre nós!<i
                        class="fa-solid fa-arrow-right ms-2"></i></a>
            </div>
        </div>

    </div>
</section>