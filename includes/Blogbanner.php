<section class="py-5 d-none d-md-block">
    <div class="container-fluid d-flex flex-column " id="Blog_">
        <div class="section-header d-flex flex-wrap justify-content-center mb-5">
            <h2 class="section-title">Conheça os nossos posts!</h2>
        </div>
        <div class="row d-flex justify-content-center">
            <?php


            $blogSql = "SELECT * FROM blog";
            $blogResult = mysqli_query($mysqli, $blogSql);

            if ($blogResult) {

                $blogEntries = mysqli_fetch_all($blogResult, MYSQLI_ASSOC);


                shuffle($blogEntries);


                $counter = 0;
                foreach ($blogEntries as $blogData) {
                    if ($counter < 3) {
                        ?>
                        <div class="col-md-3">
                            <article class="post-item card position-relative w-100 ">
                                <div class="card-top position-relative">
                                    <img src="img\imagensMiguel\Banners\<?= $blogData["thumb"] ?>" alt="post" class="img-fluid">
                                    <div class="image-overlay">
                                        <a href="Blog.php?IDB=<?= $blogData['IDB']; ?>" class="">Ver Mais... <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="post-header">
                                        <h5 class="post-title">
                                            <a href="Blog.php?IDB=<?= $blogData['IDB']; ?>" class="text-decoration-none">
                                                <?= $blogData["title"] ?>
                                            </a>
                                        </h5>
                                    </div>
                                    <ul class="meta-info list-unstyled list-group list-group-horizontal gap-3">
                                        <li>
                                            <span> <i class="fa-solid fa-user"></i>
                                                <?= $blogData["author"] ?>
                                            </span>
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-calendar-days"></i>
                                                <?= $blogData["date"] ?>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <?php
                        $counter++;
                    } else {
                        break;
                    }
                }
            } else {

                echo "Error: " . mysqli_error($mysqli);
            }
            ?>
        </div>
    </div>
</section>



<section>
    <div class="container-fluid mt-5 d-block d-md-none overflow-hidden ">

        <div class="section-header d-flex flex-wrap justify-content-between mb-5 ">
            <h2 class="section-title mt-5">O nosso Blog</h2>
        </div>

        <div class="swiper-container" id="blog_slider">
            <div class="swiper-wrapper">
                <?php
                $blogSql = "SELECT * FROM blog";
                $blogResult = mysqli_query($mysqli, $blogSql);
                if ($blogResult) {
                    $blogEntries = mysqli_fetch_all($blogResult, MYSQLI_ASSOC);
                    shuffle($blogEntries);
                    $counter = 0;
                    foreach ($blogEntries as $blogData) {
                        if ($counter < 3) {
                            ?>
                            <div class="swiper-slide d-flex justify-content-center">
                                <article class="post-item card position-relative w-100">
                                    <div class="card-top position-relative">
                                        <img src="img\imagensMiguel\Banners\<?= $blogData["thumb"] ?>" alt="post" class="img-fluid">
                                        <div class="image-overlay">
                                            <a href="Blog.php?IDB=<?= $blogData['IDB']; ?>" class="">Ver Mais... <i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="post-header">
                                            <h5 class="post-title">
                                                <a href="Blog.php?IDB=<?= $blogData['IDB']; ?>" class="text-decoration-none">
                                                    <?= $blogData["title"] ?>
                                                </a>
                                            </h5>
                                        </div>
                                        <ul class="meta-info list-unstyled list-group list-group-horizontal gap-3">
                                            <li>
                                                <span> <i class="fa-solid fa-user"></i>
                                                    <?= $blogData["author"] ?>
                                                </span>
                                            </li>
                                            <li>
                                                <span><i class="fa-solid fa-calendar-days"></i>
                                                    <?= $blogData["date"] ?>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <?php
                            $counter++;
                        } else {
                            break;
                        }
                    }
                } else {

                    echo "Error: " . mysqli_error($mysqli);
                }
                ?>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>