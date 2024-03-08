<!---------------------------------------------------------------------------SLIDER ------------------------------------------------------------------------>
<section id="slider-1">
    <div class="container-fluid p-0">
        <div class="swiper" id="hero_slider">
            <div class="swiper-wrapper">
                <?php
                $imageIds = array(1, 2, 7);

                foreach ($imageIds as $imageId) {
                    $advertising_assets = "SELECT * FROM advertising_assets WHERE IDA = $imageId";
                    $advertising_assetsResult = mysqli_query($mysqli, $advertising_assets);

                    while ($advertising_assetsRow = mysqli_fetch_assoc($advertising_assetsResult)) {
                        ?>
                        <div class="swiper-slide">
                            <img src="img/imagensMiguel/Banners/<?php echo $advertising_assetsRow["image"]; ?>" alt="teste" class="img-fluid">
                        </div>
                        <?php
                    }
                }
                ?>
            </div> <!-- end swiper wrapper -->
            <div class="swiper-pagination"></div>
        </div>
    </div><!-- end swiper -->
</section>


<!---------------------------------------------------------------------------Info_Bar------------------------------------------------------------------------>
<div class="container-fluid d-none d-lg-block" >
    <div class="row d-flex bg-white text-center justify-content-around p-2">
        <div class="col">
            <i class="fa-solid fa-truck-fast custom-icon fs-3 " alt="Portes"></i>
            <div>
                <strong><span> Portes Grátis</span></strong>
                <p class="mt-2">Para encomendas superiores a 200$</p>
            </div>
        </div>
        <div class="col ">

            <i class="fa-solid fa-headset custom-icon fs-3" alt="Suporte"></i>
            <div>
                <strong><span> Apoio ao cliente 9-18 </span></strong>
                <p class="mt-2">Por telefone, email ou chat</p>
            </div>

        </div>
        <div class="col ">

            <i class="fa-solid fa-tags custom-icon fs-3" alt="Seguranca"></i>
            <div>
                <strong><span> Pagamentos 100% Seguros </span></strong>
                <p class="mt-2">Segurança reforçada</p>
            </div>

        </div>
        <div class="col ">

            <i class="fa-solid fa-box custom-icon fs-3" alt="Prazo de entrega"></i>
            <div>
                <strong><span> Envio Rápido </span></strong>
                <p class="mt-2">Prazo de entrega 2-3 dias úteis</p>
            </div>
        </div>
    </div>
</div>