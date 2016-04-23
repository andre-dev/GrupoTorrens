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
               <!-- <img src="../img/logo.png" class="img-responsive" alt="Logo da empresa">-->
                <?php echo $this->Html->image('logo.png', ['alt' => 'Logo da empresa', 'url' => ['controller' => 'ProjetoGrupoTorrens', 'action' => 'index']]);?>
                <!--<a class="navbar-brand" href="index.html"></a>-->
            </div>
            <div class="navbar-collapse collapse">

                <!-- Start Navigation List -->
                <ul class="nav navbar-nav navbar-right ajusteTop">
                    <li>
                       <!-- <a href="index">Home</a>-->
                       <?php echo $this->Html->Link('Home', ['controller' => 'projetoGrupoTorrens', 'action' => 'index']);?>
                    </li>
                    <li>
                        <!--<a href="quemSomos">Quem Somos</a>-->
                        <?php echo $this->Html->Link('Quem Somos', ['controller' => 'projetoGrupoTorrens', 'action' => 'quemSomos']);?>
                    </li>
                    <li>
                        <!--<a href="servicos">Serviços</a>-->
                        <?php echo $this->Html->Link('Serviços', ['controller' => 'projetoGrupoTorrens', 'action' => 'servicos']);?>
                    </li>
                    <li>
                        <!--<a href="vagas">Vagas</a>-->
                          <?php echo $this->Html->Link('Vagas', ['controller' => 'projetoGrupoTorrens', 'action' => 'vagas']);?>
                    </li>
                    <li>
                        <!--<a class="active" href="contato">Contato</a>-->
                        <?php echo $this->Html->Link('Contato','/ProjetoGrupoTorrens/contato',['class' => 'active']);?>
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
                            <h1>Entre em contato</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->

        <!-- Start Contact Us Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2>Entre em contato</h2>
                        <p>Teremos o prazer em atende-lô!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php error_reporting(0); ?>
                    <?php echo $this->Form->create($user,['url' => ['action' => 'salvar']]); ?>
                        <div class="row">
                            <div class="col-md-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">
                                <div class="form-group">
                                    <?php echo $this->Form->input('', array('type' => 'text', 'class' => 'form-control', 'placeholder' => 'Digite seu nome', 'required' => 'true', 'data-validation-required-message' => 'Por favor digite seu nome')); ?>
                                    <!--<input type="text" class="form-control" placeholder="Seu Nome *" id="name" required data-validation-required-message="Por favor digite seu nome.">-->
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Seu Email *" id="email" required data-validation-required-message="Por favor digite seu email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Seu Telefone *" id="phone" required data-validation-required-message="Por favor digite seu telefone.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="600ms">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Sua Mensagem *" id="message" required data-validation-required-message="Por favor digite sua mensagem."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="600ms">
                                <div id="success"></div>
                                <!--<button type="submit" class="btn btn-primary">Enviar Mensagem</button>-->
                                <?php echo $this->Form->button('Enviar Mensagem', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
                            </div>
                        </div>
                    <?php  echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
        
    </section>

    <div class="google-map">
        <div id="map" data-position-latitude="-23.9886802" data-position-longitude="-46.2793505"></div>
    </div>


<?php include("footer.ctp") ?>