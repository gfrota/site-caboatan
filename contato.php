<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once("commons/header.html"); ?>
    </head>

    <style>
        #headerContato{
            display: flex;
            flex-direction: column;
            align-items: center;
            width:100%;
            margin-bottom: 100px;
        }
        .icon-title{
            margin-bottom: 80px;
        }
        #contatoRedes{
            width: 80%;
            text-align: center;
            display:flex;
            justify-content: space-around;
        }
        #contatoRedes img{
            width: 200px;
        }

        @media (max-width: 786px) {
            #headerContato{
                margin-top:50px;
                height: 1024px;
            }
            #headerContato div p{
                margin-bottom: 100px;
            }
            #contatoRedes{
                width: 100%;
                text-align: center;
                display:flex;
                flex-direction: column;
            }
            #contatoRedes img{
                width: 180px;
                margin-bottom: 40px;
            }
        }

    </style>

<body>
    <header class="site-header">
        <?php include_once("commons/submenu.html"); ?>
        <?php include_once("commons/menu.html"); ?>  
    </header>

	<div class="bread_area" style="margin-bottom:-40px">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="index.php" title="Post">Home</a></li>
                        <li class="active">Contato</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>

    <main class="site-main">
        <section class="services">
            <h2 class="section-title">CONTATO</h2>
            <p class="desc">Fique a vontade para nos contactar.</p>
            <div class="contato_area"></div>
        </section>
            
        <secition id="headerContato">
            <h2 class="section-title icon-title">NOS ENCONTRE NAS REDES SOCIAIS</h2>
            <div id="contatoRedes">
                <a href="https://www.linkedin.com/in/reginaldo-caboatan-aa601043/" target="_blank">
                    <img src="img/link.png">
                </a>
                <a href="" target="_blank">
                    <img src="img/face.png">
                </a>
                <a href="mailto:reginaldo@caboataneassociados.com.br?subject=Contato Site&body=Olá, gostaria de um orçamento">
                    <img src="img/email.png">
                </a>
                <a href="https://api.whatsapp.com/send?phone=5511997329573" target="_blank">
                    <img src="img/zap.png">
                </a>
            </div>
        </secition>

        <section class="services">
			<h2 class="section-title" style="margin-top:50px;">COMO CHEGAR</h2>
			<p class="desc">Venha fazer uma visita.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.26153621262!2d-46.5718418850221!3d-23.559048584684028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5e9954a955bf%3A0x54468dc816840c93!2sAv.+Reg.+Feij%C3%B3%2C+944+-+Vila+Formosa%2C+S%C3%A3o+Paulo+-+SP%2C+03342-000!5e0!3m2!1sen!2sbr!4v1558438974983!5m2!1sen!2sbr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>  
        </section>

    </main>

    <footer class="site-footer">

         <?php include_once("commons/footer.html"); ?>

		<?php include_once("commons/foot.html"); ?>      

    </footer>

    <?php include_once("commons/scripts.html"); ?>

</body>

</html>