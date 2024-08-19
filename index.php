<!DOCTYPE html>
<html lang="pt-br">
<head><?php include_once("commons/header.html"); ?></head>
<body>

    <header class="site-header">
		<?php include_once("commons/submenu.html"); ?>
        <?php include_once("commons/menu.html"); ?>   
    </header>

    <main class="site-main">

    <?php include_once("commons/bannerMain.html"); ?>
    <?php include_once('commons/profile.html'); ?>
    <?php include_once("commons/areaBox.html"); ?>

        <section class="services">

            <h2 class="section-title">SERVIÇOS</h2>

            <p class="desc">Conte com a Caboatan & Associados para oferecer inovação e serviços de alta qualidade</p>

            <div class="container">

                <div class="row">

                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <div class="media">

                            <div class="media-left">

                                <i class="fa fa-file-text-o"></i>

                            </div>

                            <div class="media-body">

                                <h4 class="media-heading">Auditorias</h4>

                                <p>Auditoria das demonstrações contábeis, auditoria interna, Due Diligence, auditoria de sorteio e promoções, auditoria em operações.</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <div class="media">

                            <div class="media-left">

                                <i class="fa fa-industry"></i>

                            </div>

                            <div class="media-body">

                                <h4 class="media-heading">Industrias</h4>

                                <p>Auditoria em industrias das demonstrações contábeis, auditoria interna, Due Diligence, auditoria de sorteio e promoções, auditoria em operações.</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <div class="media">

                            <div class="media-left">

                                <i class="fa fa-puzzle-piece"></i>

                            </div>

                            <div class="media-body">

                                <h4 class="media-heading">Comercio</h4>

                                <p>Auditoria em comercios das demonstrações contábeis, auditoria interna, Due Diligence, auditoria de sorteio e promoções, auditoria em operações.</p>

                            </div>

                        </div>

                    </div>

				</div>

				<div class="row">

                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <div class="media">

                            <div class="media-left">

                                <i class="fa fa-sitemap"></i>

                            </div>

                            <div class="media-body">

                                <h4 class="media-heading">Terceirização de Processos (BPO)</h4>

                                <p>Realizamos a terceirização de departamentos ou funções de departamentos administrativos e financeiros.</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <div class="media">

                            <div class="media-left">

                                <i class="fa fa-cogs"></i>

                            </div>

                            <div class="media-body">

                                <h4 class="media-heading">Serviços</h4>

                                <p>Serviços para Associações, Fundações, Instituições Religiosas, Escolas, Hospitais, Sindicatos de Classe, Organizações Sociais de Saúde OSS, Condomínios Residenciais e Comerciais, ONGS, e Filantropias.</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <div class="media">

                            <div class="media-left">

                                <i class="fa fa-building"></i>

                            </div>

                            <div class="media-body">

                                <h4 class="media-heading">Terceiro Setor</h4>

                                <p>Sendo Associações, Fundações, Instituições Religiosas, Escolas, Hospitais, Sindicatos de Classe, Organizações Sociais de Saúde OSS, Condomínios Residenciais e Comerciais, ONGS, e Filantropias.</p>

                            </div>

                        </div>

                    </div>                     

                </div>

            </div>

        </section>

        <section class="home-area">

            <div class="home_content">

                <div class="container">

                    <div class="row text-center">

                        <div class="col-sm-12"><h2>NOSSOS CLIENTES</h2></div>

                        <div class="home_list">

                            <ul>

                                <li class="col-md-3 col-sm-6 col-xs-12">

                                    <div class="thumbnail">

                                        <img src="img/h1.jpeg" alt="Post">

                                        <div class="caption">

                                            <h3><a href="clientes.php">Associações</a></h3>

                                            <p></p>

                                            

                                        </div>

                                    </div>                                        

                                </li>

                                <li class="col-md-3 col-sm-6 col-xs-12">

                                    <div class="thumbnail">

                                        <img src="img/h2.jpg" class="img-responsive" alt="Post">

                                        <div class="caption">

                                            <h3><a href="clientes.php">Fundações</a></h3>

                                            <p></p>

                                            

                                        </div>

                                    </div>                                        

                                </li>

                                <li class="col-md-3 col-sm-6 col-xs-12">

                                    <div class="thumbnail">

                                        <img src="img/h3.jpeg" class="img-responsive" alt="Post">

                                        <div class="caption">

                                            <h3><a href="clientes.php">Instituições Religiosas</a></h3>

                                            <p></p>

                                          

                                        </div>

                                    </div>                                        

                                </li>

                                <li class="col-md-3 col-sm-6 col-xs-12">

                                    <div class="thumbnail">

                                        <img src="img/h4.jpeg" class="img-responsive" alt="Post">

                                        <div class="caption">

                                            <h3><a href="clientes.php">Escolas e Hospitais</a></h3>

                                            <p></p>


                                        </div>

                                    </div>                                        

                                </li>                                    

                            </ul>

                        </div>

                        

                        <?php include_once("commons/prefooter.html"); ?>

                        

                    </div>

                </div>

            </div>

        </section>

    </main>
        <footer class="site-footer">
            <?php include_once("commons/footer.html"); ?>
            <?php include_once("commons/foot.html"); ?>
        </footer>
        <?php include_once("commons/scripts.html"); ?>
    </body>
</html>
