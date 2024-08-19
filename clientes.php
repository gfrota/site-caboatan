<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("commons/header.html"); ?>
</head>

<body>
	<header class="site-header">
		<?php include_once("commons/submenu.html"); ?>
        <?php include_once("commons/menu.html"); ?>      
    </header>

    <style>
        table {
            border-collapse: collapse;
        }
        
        table td {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        .media{
            display:flex;
            align-items:center;
        }

        .media-object{
            width:250px;
        }

        @media (max-width:764px){
            .media{
                flex-direction: column;
            }
        }
    </style>

    <div class="bread_area">

        <div class="container">

            <div class="row">

                <div class="col-sm-12">

                    <ol class="breadcrumb">

                        <li><a href="index.php" title="Post">Home</a></li>

                        <li class="active">Clientes</li>

                    </ol>                    

                </div>

            </div>

        </div>

    </div>    

    <main class="site-main category-main">

        <div class="container">

            <div class="row">

                <section class="category-content col-sm-9">

                    <h2 class="category-title">ALGUNS CLIENTES ATENDIDOS POR NOSSOS PROFÍSSIONAIS</h2>

                    <ul class="media-list">

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/industria.jpg" alt="Post">
                            </div>
                            <div class="media-body">

                                <h3 class="media-heading" id="industrias"><a href="#" title="Post Title">Industrias</a></h3>

                                <table>
                                    <tr>
                                        <td>Grupo Bignardi - Indústria e Comércio de Papéis e Artefatos</td>
                                        <td>São Paulo – SP</td>
                                    </tr>
                                    <tr>
                                        <td>Ciba Especialidades Químicas S.A.</td>
                                        <td>São Paulo – SP</td>
                                    </tr>
                                    <tr>
                                        <td>USACIGA - Açúcar Álcool e Energia Elétrica S.A.</td>
                                        <td>Cidade Gaúcha – PR</td>
                                    </tr>
                                    <tr>
                                        <td>Usina Rio Paraná S.A.</td>
                                        <td>Eldorado-MT</td>
                                    </tr>
                                    <tr>
                                        <td>Indústria Gráfica Jandaia S.A.</td>
                                        <td>Jundiaí – SP</td>
                                    </tr>
                                </table>
                            </div>

                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/comercio.jpg" alt="Post">
                            </div>
                            <div class="media-body">

                                <h3 class="media-heading" id="comercio"><a href="#" title="Post Title">Comércios</a></h3>

                                <table>
                                    <tr>
                                        <td>Lojas Brasileiras S.A.</td>
                                        <td>São Paulo – SP</td>
                                    </tr>
                                    <tr>
                                        <td>Lojas Marisa S. A.</td>
                                        <td>São Paulo – SP</td>
                                    </tr>
                                    <tr>
                                        <td>Loja de Artigos Esportivos – Author
                                        Lojas de Shopping	São Paulo - SP
                                        Shopping Villas Lobos, Ibirapuera, Santa Cruz e Moema.
                                        </td>
                                        <td>São Paulo - SP
                                        Shopping Villas Lobos, Ibirapuera, Santa Cruz e Moema
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>M.P.F.  Nova União Alimentos e Comercio de Carne.</td>
                                        <td>Guarulhos - SP</td>
                                    </tr>
                                    <tr>
                                        <td>Bella Fruta Hortifrutigranjeiro</td>
                                        <td>Fortaleza – CE</td>
                                    </tr>
                                    <tr>
                                        <td>Top Fit Gourmet Comércio Alimentos</td>
                                        <td>Eusébio – CE</td>
                                    </tr>
                                    <tr>
                                        <td>Gran Coffee - Máquinas de Café e Alimentos S. A</td>
                                        <td>São Paulo – SP</td>
                                    </tr>
                                </table>
                            </div>

                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/servicos.jpg" alt="Post">
                            </div>
                            <div class="media-body">

                                <h3 class="media-heading" id="servicos"><a href="#" title="Post Title">Serviços</a></h3>

                                <table>
                                    <tr>
                                        <td>IBM Brasil S. A.</td>
                                        <td>Hortolândia -SP
                                        São Paulo -SP
                                        Brasília -DF 
                                        Rio de Janeiro – RJ
                                        Porto Alegre - RS
                                        Belo Horizonte - MG 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Wtorre Engenharia S.A.</td>
                                        <td>São Paulo – SP</td>
                                    </tr>
                                    <tr>
                                        <td>Construtora JHSJ S.A.</td>
                                        <td>São Paulo – SP</td>
                                    </tr>
                                    <tr>
                                        <td>Constarco Engenharia</td>
                                        <td>São Paulo – SP</td>
                                    </tr>
                                    <tr>
                                        <td>Imbra Implantes Dentários</td>
                                        <td>São Paulo – SP</td>
                                    </tr>
                                    <tr>
                                        <td>Uni Radial Europan – Grupo Estácio de Sá.</td>
                                        <td>São Paulo – SP</td>
                                    </tr>
                                </table>
                            </div>

                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/planos.jpg" alt="Post">
                            </div>
                            <div class="media-body">

                                <h3 class="media-heading" id="servicos"><a href="#" title="Post Title">Operadora de Planos de Saúde</a></h3>

                                <table>
                                    <tr>
                                        <td>Unimed</td>
                                        <td>Itapetininga - SP</td>
                                    </tr>
                                    <tr>
                                        <td>Crusam Cruzeiro do Sul Serviços. Assistência. Médica</td>
                                        <td>Osasco – SP</td>
                                    </tr>
                                </table>
                            </div>

                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/sorteios.jpg" alt="Post">
                            </div>
                            <div class="media-body">

                                <h3 class="media-heading" id="sorteios"><a href="#" title="Post Title">Sorteios e Promoções</a></h3>

                                <table>
                                    <tr>
                                        <td>Ajinomoto Internacional Indústria e Comércio.</td>
                                        <td>São Paulo - SP</td>
                                    </tr>
                                    <tr>
                                        <td>Chiclete Adams - Cadbury Adams Brasil Indústria e Comércio</td>
                                        <td>São Paulo – SP</td>
                                    </tr>
                                    <tr>
                                        <td>Johnson & Johnson</td>
                                        <td>São Paulo – SP</td>
                                    </tr>
                                    <tr>
                                        <td>Unilever Brasil Gelados do Nordeste S/A (Kibon)</td>
                                        <td>Valinhos – SP</td>
                                    </tr>
                                </table>
                            </div>

                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/saude.jpg" alt="Post">
                            </div>
                            <div class="media-body">

                                <h3 class="media-heading" id="servicos"><a href="#" title="Post Title">Organização Social de Saúde - OSS</a></h3>

                                <table>
                                    <tr>
                                        <td>Hospital Regional do Marajó</td>
                                        <td>Ilha de Marajó – PA</td>
                                    </tr>
                                    <tr>
                                        <td>Hospital e Maternidade Dr. Eugênio Gomes Carvalho</td>
                                        <td>Pedro Leopoldo – MG</td>
                                    </tr>
                                    <tr>
                                        <td>Hospital Geral de Tailândia</td>
                                        <td>Tailândia – PA</td>
                                    </tr>
                                    <tr>
                                        <td>Hospital Regional Público do Leste do Para</td>
                                        <td>Paragominas – PA</td>
                                    </tr>
                                    <tr>
                                        <td>Hospital de Regional de Tucuruí</td>
                                        <td>Tucuruí – PA</td>
                                    </tr>
                                    <tr>
                                        <td>Hospital Jean Bittar</td>
                                        <td>Belém – PA</td>
                                    </tr>
                                    <tr>
                                        <td>UPA - Unidade de Pronto Atendimento – Santa Paula</td>
                                        <td>Ponta Grossa – PR</td>
                                    </tr>
                                    <tr>
                                        <td>Hospital Municipal Araucária</td>
                                        <td>Araucária – PR</td>
                                    </tr>
                                </table>
                            </div>

                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/religiao.jpg" alt="Post">
                            </div>
                            <div class="media-body">

                                <h3 class="media-heading" id="servicos"><a href="#" title="Post Title">Instituições Religiosas</a></h3>

                                <table>
                                    <tr>
                                        <td>Rede SAT 7 Internacional </td>
                                        <td>São Paulo - SP</td>
                                    </tr>
                                </table>
                            </div>

                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src="img/philan.jpg" alt="Post">
                            </div>
                            <div class="media-body">

                                <h3 class="media-heading" id="servicos"><a href="#" title="Post Title">Entidades sem Finalidade de Lucro Diversas</a></h3>

                                <table>
                                    <tr>
                                        <td>Federação de Bandeirantes do Brasil</td>
                                        <td>São Paulo - SP</td>
                                    </tr>
                                    <tr>
                                        <td>Condomínio Residencial Nova Higienópolis.	Jandira-SP</td>
                                        <td>Jandira – SP</td>
                                    </tr>
                                    <tr>
                                        <td>Condomínio Residencial Arujá Hills III</td>
                                        <td>Arujá - SP</td>
                                    </tr>
                                    <tr>
                                        <td>ACISA – Associação Comercial e Industrial de Santo André</td>
                                        <td>São Paulo – SP</td>
                                    </tr>
                                </table>
                            </div>

                        </li>


                    </ul>                    

                </section>

                <aside class="sidebar col-sm-3">

                    <div class="widget">

                        <h4>CLIENTES</h4>

                        <ul>

                            <li class="current"><a href="#" title="">Indústrias</a></li>

							<li><a href="#comercio" title="">Comércios</a></li>

							<li><a href="#servicos" title="">Serviços</a></li>

							<li><a href="#planosaude" title="">Plano de Saúde</a></li>

							<li><a href="#sorteios" title="">Sorteios e Promoções</a></li>

							<li><a href="#oss" title="">OSS</a></li>

							<li><a href="#religiosas" title="">Instituições Religiosas</a></li>

							<li><a href="#semlucro" title="">Entidades sem Lucros</a></li>


                        </ul>

                    </div>

                </aside>

            </div>

        </div>

		

		<?php include_once("commons/prefooter.html"); ?>

    </main>

    <footer class="site-footer">

		<?php include_once("commons/footer.html"); ?>

		<?php include_once("commons/foot.html"); ?>

	</footer>

	<?php include_once("commons/scripts.html"); ?>

</body>

</html>