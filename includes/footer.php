<div class="container-fluid bg-white p-5 z-3">
    <div class="container ">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="">
                    <h3>Eixorientador</h3>
                    <p>A sua escolha profissional para soluções de limpeza e manutenção.</p>
                    <div class="copywrite-text mb-5">
                        <p class="mb-0"><a href="tel:+351231094753">(+351)231-094-753</a> <span class="mx-2"> ou
                            </span><a href="mailto:miguelgaspar2010@gmail.com"
                                class="text-break">miguelgaspar2010@gmail.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg">
                <div class="">
                    <h5 class="widget-title">Links Úteis</h5>
                    <div class="footer_menu">
                        <ul class="list-unstyled">
                            <li><a href="About_us.php" class="text-decoration-none">Sobre Nós</a></li>
                            <li><a href="Account.php" class="text-decoration-none">A sua conta</a></li>
                            <?php
                            if (isset($_SESSION['isMaster']) && $_SESSION['isMaster'] == 1) { ?>
                                <li><a href="crud\admin_page.php" class="text-decoration-none">Admin Page</a></li>
                                <?php
                            } else {
                                
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg">
                <div class="">
                    <h5 class="widget-title">Suporte</h5>
                    <div class="footer_menu">
                        <ul class="list-unstyled">
                            <li class="d-block d-md-inline-block"><a href="#" class="text-decoration-none">Política de
                                    Cookies</a></li>
                            <li class="d-block d-md-inline-block"><a href="FAQ.php" class="text-decoration-none">Termos
                                    e Condições</a></li>
                            <li class="d-block d-md-inline-block"><a href="FAQ.php"
                                    class="text-decoration-none">Política de Privacidade</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg">
                <div class="">
                    <h5 class="widget-title">Contacto</h5>
                    <div class="footer_menu">
                        <ul class="list-unstyled">
                            <li><a href="ContactUs.php" class="text-decoration-none">Entre em Contacto</a></li>
                            <li><a href="ContactUs.php" class="text-decoration-none">Orçamentos</a></li>
                            <li><a href="ContactUs.php" class="text-decoration-none">Assistência Técnica</a></li>
                            <li><a href="ContactUs.php" class="text-decoration-none">Garantia</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="socials d-none d-sm-block mt-xl-3 me-5 pt-4 h-60">
                <div class="d-lg-inline d-none me-1">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="text-decoration-none">
                                <i class="fab fa-facebook"></i>
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-decoration-none">
                                <i class="fab fa-linkedin"></i>
                                <span>Linkedin</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-decoration-none">
                                <i class="fab fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-decoration-none">
                                <i class="fab fa-whatsapp"></i>
                                <span>Whatsapp</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="small_copyright d-flex justify-content-end">
        <p><span id="current-year"></span></p>
        <p id="copyright-text"></p>
    </div>
</div>
</div>