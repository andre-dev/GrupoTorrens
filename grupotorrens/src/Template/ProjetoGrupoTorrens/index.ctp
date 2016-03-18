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
                <a href="index.ctp"><img src="asset/images/logo.png" class="img-responsive" alt="Logo da empresa"></a>
                <!--<a class="navbar-brand" href="index.html"></a>-->
            </div>
            <div class="navbar-collapse collapse">

                <!-- Start Navigation List -->
                <ul class="nav navbar-nav navbar-right ajusteTop">
                    <li>
                        <a class="active" href="index.ctp">Home</a>
                    </li>
                    <li>
                        <a href="quemSomos.ctp">Quem Somos</a>
                    </li>
                    <li>
                        <a href="servicos.ctp">Serviços</a>
                    </li>
                    <li>
                        <a href="vagas.ctp">Vagas</a>
                    </li>
                    <li>
                        <a href="contato.ctp">Contato</a>
                    </li>
                </ul>
                <!-- End Navigation List -->
            </div>
        </div>
    </div>
    <!-- End Header Logo & Naviagtion -->
        
        <!-- Start Header Section -->
        <div class="banner">
            <div class="overlay">
                <div class="container">
                    <div class="intro-text">
                        <h1>Sejam <span>Bem vindos!</span></h1>
                        <p>O único capital insubstituível de uma organização <br> é o conhecimento e a habilidade do seu pessoal.</p>
                        <a href="quemSomos.ctp" class="page-scroll btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->

        <!-- Start Call to Action Section -->
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow zoomIn" data-wow-duration="2s" data-wow-delay="300ms">
                    <a href="servicos.ctp#painelIG"><p>Por aqui você tera acesso <br> Ao Infográfico relacionado de <br>Custos de um funcionário de RH bla bla bla ...</p></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call to Action Section -->

        <!-- Start Service Section -->
        <section id="service-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                            <h2>Nossos Serviços</h2>
                            </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="services-post">
				            <a href="servicos.ctp#painelDP"><i class="fa fa-user"></i></a>
				            <h2>DEPARTAMENTO PESSOAL</h2>
							<p>Processamento de folha de Pagamento, Gestão de Benefícios, Rotinas Mensais e Anuais.</p>
				        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services-post">
				            <a href="servicos.ctp#painelCRH"><i class="fa fa-sitemap"></i></a>
				            <h2>CONSULTORIA EM RECURSOS HUMANOS</h2>
							<p>Analíse de cenário, estruturação de departamento, soluções em RH.</p>
				        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services-post">
				            <a href="servicos.ctp#painelRH"><i class="fa fa-users"></i></a>
				            <h2>RECRUTAMENTO E SELEÇÃO</h2>
							<p>Seleção de curriculos, analíse de perfil, testes e avaliações.</p>
				        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services-post">
				            <a href="vagas.ctp"><i class="fa fa-desktop"></i></a>
				            <h2>PORTAL VAGAS</h2>
							<p>Cadastro de Vagas gratuito, divulgue a vaga em aberto e analise os candidatos. </p>
				        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services-post">
				            <a href="servicos.ctp#painelFolha"><i class="fa fa-slideshare"></i></a>
				            <h2>FOLHA DOMÉSTICA</h2>
							<p>Registro, folha de pagamento,rotinas mensais e anuais </p>
				        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services-post">
				            <a href="servicos.ctp#painelSW"><i class="fa fa-connectdevelop"></i></a>
				            <h2>PORTAL CLIENTE E COLABORADOR</h2>
							<p>Acesse online as informações dos seus coladores </p>
				        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services-post">
				            <a href="servicos.ctp#painelMEI"><i class="fa fa-line-chart"></i></a>
				            <h2>ASSESSORIA AO MICRO EMPREENDEDOR(MEI)</h2>
							<p>Registro de Empresa, funcionários, rotinas mensais e anuais </p>
				        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="services-post">
				            <a href="servicos.ctp#painelIRPF"><i class="fa fa-paw"></i></a>
				            <h2>IMPOSTO DE RENDA PESSOA FISÍCA</h2>
							<p>Declaração Anual e Retificações</p>
				        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Service Section -->

<?php include("footer.ctp") ?>