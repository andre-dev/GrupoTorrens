<!-- Start Footer Section -->
<section id="footer-section" class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-heading-2">
                    <h3 class="section-title">
                        <span>ENDEREÇO</span>
                    </h3>
                </div>

                <div class="footer-address">
                    <ul>
                        <li class="footer-contact"><i class="fa fa-home"></i>Rua: Acadêmico Inacio Nas. Opazo, nº226</li>
                        <li class="footer-contact"><i class="fa fa-envelope"></i><a href="#">contato@mrm.com</a></li>
                        <li class="footer-contact"><i class="fa fa-whatsapp"></i>(13) 9 9146-0869</li>
                        <li class="footer-contact"><i class="fa fa-facebook"></i><a href="#" target="_blank">Facebok/MRM</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3 -->


            <div class="col-md-3 espacamentoMenuFooter">
                <div class="section-heading-2">
                    <h3 class="section-title">
                        <span>MENU</span>
                    </h3>
                </div>

                <div class="footer-address">
                    <ul>
                        <li><a href="index" class="active">Home</a></li>
                        <li><a href="quemSomos">Quem Somos</a></li>
                        <li><a href="servicos">Serviços</a></li>
                        <li><a href="vagas">Vagas</a></li>
                        <li><a href="contato">Contato</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3 -->

            <div class="col-md-3">
                <div class="section-heading-2">
                    <h3 class="section-title">
                        <span>Ligamos para você</span>
                    </h3>
                </div>
                <div class="subscription">
                    <p>Se preferir, deixe-nos seu telefone que entraremos em contato.</p>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Digite seu nome" id="name" required data-validation-required-message="Please enter your name.">
                        <input type="text" class="form-control" placeholder="Digite seu telefone" id="tel" required data-validation-required-message="Please enter your tel.">
                        <input type="submit" class="btn btn-primary" value="Enviar">
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="fb-page" data-href="https://www.facebook.com/IBMBrasil" data-tabs="timeline" data-width="392.5" data-height="250" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <span style="vertical-align: top;width: 261px;height: 300px;overflow: hidden;">
                                <iframe name="f3fec856102a64c" width="1000px" height="250px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="http://www.facebook.com/v2.5/plugins/page.ctp?adapt_container_width=true&amp;app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.ctp%3Fversion%3D42%23cb%3Dfe6d01c08977b8%26domain%3D%26origin%3Dfile%253A%252F%252F%252Ff4126a41a66294%26relation%3Dparent.parent&amp;container_width=263&amp;height=250&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FIBMBrasil&amp;locale=pt_BR&amp;sdk=joey&amp;show_facepile=true&amp;small_header=true&amp;tabs=timeline" style="border: none;visibility: visible;width: 261px;height: 300px;"></iframe>
                            </span>
                </div>
            </div><!--/.col-md-3 -->
        </div><!--/.row -->
    </div><!-- /.container -->
</section>
<!-- End Footer Section -->


<!-- Start CCopyright Section -->
<div id="copyright-section" class="copyright-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    Copyright © 2016. Todos os direitos reservados. Developed by <a href="https://br.linkedin.com/in/andreluizdossantos">Andre Luiz</a>
                </div>
            </div>
        </div><!--/.row -->
    </div><!-- /.container -->
</div>
<!-- End CCopyright Section -->

<!-- JS Grupo Torrens -->
    <?= $this->Html->script('jquery-2.1.3.min.js') ?>
    <?= $this->Html->script('jquery-migrate-1.2.1.min.js') ?>
    <?= $this->Html->script('bootstrap/js/bootstrap.min.js') ?>
    <?= $this->Html->script('owl.carousel.min.js') ?>
    <?= $this->Html->script('jquery.appear.js') ?>
    <?= $this->Html->script('jquery.fitvids.js') ?>
    <?= $this->Html->script('jquery.nicescroll.min.js') ?>
    <?= $this->Html->script('lightbox.min.js') ?>
    <?= $this->Html->script('count-to.js') ?>
    <?= $this->Html->script('styleswitcher.js') ?>
    
    <?= $this->Html->script('map.js') ?>
    <?= $this->Html->script('http://maps.googleapis.com/maps/api/js?sensor=false') ?>
    <?= $this->Html->script('script.js') ?>


</body>
</html>