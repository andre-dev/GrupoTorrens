<?php include("topo.ctp") ?>

    <!-- Start  Logo & Naviagtion  -->
    <div class="navbar navbar-default navbar-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Stat Toggle Nav Link For Mobiles -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- End Toggle Nav Link For Mobiles -->
                <?php echo $this->Html->image('logo.png', ['alt' => 'Logo da empresa', 'url' => ['controller' => 'ProjetoGrupoTorrens', 'action' => 'index']]);?>
                <!--<a class="navbar-brand" href="index.html"></a>-->
            </div>
            <div class="navbar-collapse collapse">

                <!-- Start Navigation List -->
                <ul class="nav navbar-nav navbar-right ajusteTop">
                    <li>
                        <a href="index">Home</a>
                    </li>
                    <li>
                        <a href="quemSomos">Quem Somos</a>
                    </li>
                    <li>
                        <a href="servicos">Serviços</a>
                    </li>
                    <li>
                        <a class="active" href="vagas">Vagas</a>
                    </li>
                    <li>
                        <a href="contato">Contato</a>
                    </li>
                </ul>
                <!-- End Navigation List -->
            </div>
        </div>
    </div>
    <!-- End Header Logo & Naviagtion -->
        
        
        <!-- Start Header Section -->
        <div class="page-header">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Nossas Vagas</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->
        
        
        
        
        
        <!-- Start Portfolio Section -->
        <section id="portfolio" class="portfolio-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                        <!-- Start Portfolio items -->
                        <ul id="portfolio-list">
                            <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                                <div class="portfolio-item">
                                    <img src="../img/portfolio/img1.jpg" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>Portfolio Title</h4>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">
                                <div class="portfolio-item">
                                    <img src="../img/portfolio/img2.jpg" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>Portfolio Title</h4>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="900ms">
                                <div class="portfolio-item">
                                    <img src="../img/portfolio/img3.jpg" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>Portfolio Title</h4>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1200ms">
                                <div class="portfolio-item">
                                    <img src="../img/portfolio/img4.jpg" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>Portfolio Title</h4>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1500ms">
                                <div class="portfolio-item">
                                    <img src="../img/portfolio/img5.jpg" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>Portfolio Title</h4>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1800ms">
                                <div class="portfolio-item">
                                    <img src="../img/portfolio/img6.jpg" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>Portfolio Title</h4>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>
                            
                            
                        </ul>
                        <!-- End Portfolio items -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

<?php include("footer.ctp") ?>