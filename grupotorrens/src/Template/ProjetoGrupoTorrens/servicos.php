<?php include("topo.php") ?>

    <!-- Start  Logo & Naviagtion  -->
    <div class="navbar navbar-default navbar-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Stat Toggle Nav Link For Mobiles -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- End Toggle Nav Link For Mobiles -->
                <img src="asset/images/logo.png" class="img-responsive" alt="Logo da empresa">
                <!--<a class="navbar-brand" href="index.html"></a>-->
            </div>
            <div class="navbar-collapse collapse">

                <!-- Start Navigation List -->
                <ul class="nav navbar-nav navbar-right ajusteTop">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="quemSomos.php">Quem Somos</a>
                    </li>
                    <li>
                        <a class="active" href="servicos.php">Serviços</a>
                    </li>
                    <li>
                        <a href="vagas.php">Vagas</a>
                    </li>
                    <li>
                        <a href="contato.php">Contato</a>
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
                            <h1>Nossos Serviços</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->

    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">

        <!-- Start Accordion Section -->
        <div class="panel-group" id="accordion">

            <!-- Start Accordion 1 -->
        <div class="panel panel-default" id="painelDP">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
                        <i class="fa fa-angle-left control-icon"></i> Departamento Pessoal
                    </a>
                </h4>
            </div>
            <div id="collapse-1" class="panel-collapse collapse in">
                <div class="panel-body justificarTexto"><strong>Nós processamos toda sua folha de pagamento, cartão de ponto, gestao de benefícios, e-social, admissão, demissão, rotinas mensais e anuais.</strong></div>
                <div class="panel-body justificarTexto"><strong>Redução de custos</strong> – Um funcionário especifico para essa função com um salario base de R$ 1000,00 custa mensalmente para o empregador em media R$ 1660,00. Oferecemos  um serviço de tecnologia, qualidade e baixo custo.</div>
                <div class="panel-body justificarTexto"><strong>Atualização</strong> – Sua empresa não precisa se preocupar em estar atualizado com as mudanças que ocorrem na legislação trabalhista, nos fazemos isso para você e mantemos nossos clientes atualizados.</div>
                <div class="panel-body justificarTexto" id=painelSW><strong>Sistema WEB</strong> – Oferecemos um sistema web para nossos cliente e seus colaboradores aonde terão acesso a diversas informaçoes como:
                    <ul>
                        <li class="justificarTexto subSistema"><i class="fa fa-check-square"></i> Portal Colaborador – Consulta de dados cadastrais, holerite online, solicitações de documentos, extrato de FGTS, duvidas e sugestões.</li>
                    </ul>
                    <ul>
                        <li class="justificarTexto subSistema"><i class="fa fa-check-square"></i> Portal Empresa – Consulta e atualização de dados cadastrais, holerite online, solicitações de documentos, extrato de FGTS, duvidas e sugestões, Relatorios e indicadores.</li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- End Accordion 1 -->

        <!-- Start Accordion 2 -->
         <div class="panel panel-default" id="painelRH">
             <div class="panel-heading">
                 <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse-2">
                         <i class="fa fa-angle-left control-icon"></i> Recrutamento e Seleção
                     </a>
                 </h4>
             </div>
             <div id="collapse-2" class="panel-collapse collapse in">
                 <div class="panel-body justificarTexto">Através do nosso site disponibilizamos gratuitamente um portal de vagas aonde a empresa pode cadastrar vagas, receber  os currículos e fazer a própria seleção ou se preferir pode deixar com a equipe do Grupo Torrens, nos fazemos a seleçao, verificamos os candidatos com perfil para a vaga, enviamos para aprovação final e contratação. </div>								</div>
         </div>
         <!-- End Accordion 2 -->

        <!-- Start Accordion 3 -->
        <div class="panel panel-default" id="painelCRH">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-3">
                        <i class="fa fa-angle-left control-icon"></i> Consultoria RH
                    </a>
                </h4>
            </div>
            <div id="collapse-3" class="panel-collapse collapse in">
                <div class="panel-body justificarTexto">O Grupo Torrens está pronto para estruturar o Departamento de Recursos Humanos da sua empresa, através de consultoria nos analisamos o cenário atual e verificamos as mudanças necessárias para um funcionamento interno de qualidade e eficiência. Empresas atuais sabem que o seu colaborador é o contato direto com seu cliente e é necessário que as empresas valorizem seus colaboradores para ter um produto ou serviço de qualidade.</div>								</div>
        </div>
        <!-- End Accordion 3 -->

        <!-- Start Accordion 4 -->
        <div class="panel panel-default" id="painelMEI">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse-4">
                        <i class="fa fa-angle-left control-icon"></i> Assessoria Micro Empreendedor Individual (MEI)
                    </a>
                </h4>
            </div>
            <div id="collapse-4" class="panel-collapse collapse in">
                <div class="panel-body justificarTexto">Legalizamos sua atividade, oferecemos apoio jurídico, fiscal e pessoal para estruturar seu negocio, cuidamos da contratação do funcionário, folha de pagamento, tributos mensais, anuais, emissão de nota fiscal e declaração de imposto de renda, apoiamos você para sua empresa crescer forte e legalizada.</div>
            </div>
        </div>
        <!-- End Accordion 4 -->

        <!-- Start Accordion 5 -->
         <div class="panel panel-default" id="painelFolha">
             <div class="panel-heading">
                 <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse-5">
                         <i class="fa fa-angle-left control-icon"></i> Folha Domestica
                     </a>
                 </h4>
             </div>
             <div id="collapse-5" class="panel-collapse collapse in">
                 <div class="panel-body justificarTexto">Legalize seu funcionário e evite ações trabalhistas que são caras e demoradas, nos cuidamos para que tudo esteja dentro da legalidade, realizamos a folha de pagamento, o e-social e estamos sempre atualizados sobre a legislação vigente.</div>
             </div>
         </div>
         <!-- End Accordion 5 -->
            <!-- Start Accordion 6 -->
            <div class="panel panel-default" id="painelIRPF">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-6">
                            <i class="fa fa-angle-left control-icon"></i> Imposto de Renda Pessoa Física
                        </a>
                    </h4>
                </div>
                <div id="collapse-6" class="panel-collapse collapse in">
                    <div class="panel-body justificarTexto">Precisa fazer a declaração do imposto de renda? O Grupo Torrens oferece esse serviço para pessoas físicas com total qualidade e segurança das suas informações. </div>
                </div>
            </div>
            <!-- End Accordion 6 -->

            <!-- Start Accordion 7 -->
            <div class="panel panel-default" id="painelIG">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-7">
                            <i class="fa fa-angle-left control-icon"></i> Infográfico
                        </a>
                    </h4>
                </div>
                <div id="collapse-7" class="panel-collapse collapse in">
                    <div class="panel-body justificarTexto">No infográfico abaixo mostramos... </div>
                </div>
            </div>
            <!-- End Accordion 7 -->

        </div>
        <!-- End Accordion section -->

        </div><!--/.col-md-6 -->
        <div class="col-md-2"></div>
        </div>


    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <img src="asset/images/INFOGRAFICO.png" alt="Infográfico sobre o custo total de um funcionário" title="Custo total de um funcionário para o RH">
        </div>
        <div class="col-md-2">
        </div>
    </div>
        
        <!-- Start Fun Facts Section -->
    <section class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                      <div class="counter-item">
                        <i class="fa fa-cloud-upload"></i>
                        <div class="timer" id="item1" data-to="991" data-speed="5000"></div>
                          <p>Sed ut perspiciatis unde omnis iste natus voluptatem accusantium laudantium aperiam.</p>
                        <h3>Files uploaded</h3>                               
                      </div>
                    </div>  
                    <div class="col-xs-12 col-sm-3 col-md-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay="300ms">
                      <div class="counter-item">
                        <i class="fa fa-check"></i>
                        <div class="timer" id="item2" data-to="7394" data-speed="5000"></div>
                          <p>Sed ut perspiciatis unde omnis iste natus voluptatem accusantium laudantium aperiam.</p>
                        <h3>Projects completed</h3>                               
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 wow fadeInDown" data-wow-duration="2s" data-wow-delay="300ms">
                      <div class="counter-item">
                        <i class="fa fa-code"></i>
                        <div class="timer" id="item3" data-to="18745" data-speed="5000"></div>
                          <p>Sed ut perspiciatis unde omnis iste natus voluptatem accusantium laudantium aperiam.</p>
                        <h3>Lines of code written</h3>                               
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 wow fadeInRight" data-wow-duration="2s" data-wow-delay="300ms">
                      <div class="counter-item">
                        <i class="fa fa-male"></i>
                        <div class="timer" id="item4" data-to="8423" data-speed="5000"></div>
                          <p>Sed ut perspiciatis unde omnis iste natus voluptatem accusantium laudantium aperiam.</p>
                        <h3>Happy clients</h3>                               
                      </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts Section -->
        
        <!-- Start Testimonial Section -->
        <section id="testimonial-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-wrapper">
                            <div class="testimonial-item">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                                <img src="asset/images/team/team-1.jpg" alt="Testimonial images">
                                <h5>John Doe</h5>
                                <div class="desgnation">CEO, ThemeBean</div>
                            </div>
                            <div class="testimonial-item">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <img src="asset/images/team/team-2.jpg" alt="Testimonial images">
                                <h5>John Doe</h5>
                                <div class="desgnation">CEO, ThemeBean</div>
                            </div>
                            <div class="testimonial-item">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <img src="asset/images/team/team-3.jpg" alt="Testimonial images">
                                <h5>John Doe</h5>
                                <div class="desgnation">CEO, ThemeBean</div>
                            </div>
                            <div class="testimonial-item">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <img src="asset/images/team/team-4.jpg" alt="Testimonial images">
                                <h5>John Doe</h5>
                                <div class="desgnation">CEO, ThemeBean</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Section -->



<?php include("footer.php") ?>