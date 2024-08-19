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
            
            <div id="barra-de-contato">
            
            <div class="content">
            
            <a href="mailto:reginaldo@caboataneassociados.com.br">
            <div class="emaildecontato"><i class="fa fa-envelope-o"></i> • reginaldo@caboataneassociados.com.br</div>
            </a>    
            
            <a href="https://api.whatsapp.com/send?phone=5511997329573&text=Oi%2C%20tudo%20bem%3F">    
            <div class="whatsappcontato"><i class="fa fa-whatsapp"></i> 11 99732-9573</div>
            </a>
            
            <a href="https://www.linkedin.com/in/reginaldo-caboatan-aa601043/">
                <div class="linkedincontato"><i class="fa fa-linkedin"></i></div>
            </a>    
                        
            </div>
			
			<div class="container contact-form">
            
            <form method="post">
                <h3>ENVIA SUA MENSAGEM!!</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Seu Nome *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Seu E-mail *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Telefone Celular *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Enviar Mensagem" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Deixe sua mensagem aqui  *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>

            </div>
            
			
		
					<h2 class="section-title" style="margin-top:50px;">COMO CHEGAR</h2>
					<p class="desc">Venha fazer uma visita.</p>
			
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.26153621262!2d-46.5718418850221!3d-23.559048584684028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5e9954a955bf%3A0x54468dc816840c93!2sAv.+Reg.+Feij%C3%B3%2C+944+-+Vila+Formosa%2C+S%C3%A3o+Paulo+-+SP%2C+03342-000!5e0!3m2!1sen!2sbr!4v1558438974983!5m2!1sen!2sbr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>  
					
                    
                    
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