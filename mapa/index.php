<?php
include("dados.php");
//var_dump($tutoriais);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <header>
        <nav>
            <img src="img/logo.png" alt="Logo" width="200" height="150"></p>
            <ul class="logo">
                <li><a href="#" title="Home" alt="Home">HOME</a></li>
                <li><a href="#" title="Blog" alt="Blog">BLOG</a></li>
                <li><a href="#" title="Conheça a Dona Dirce" alt="Conheça a Dona Dirce">CONHEÇA A DONA DIRCE</a></li>
                <li><a href="#" title="Contato" alt="Contato">CONTATO</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Venha para a casa da Dona Dirce, e escolha a sua marmita!!!</h1>
                    </header>
                    <p>Impossível não voltar novamente.</p>
                    <p><a href="#" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>


        <section class="main_tutorial">
            <header class="main_tutorial_header">
                <h1>As mais Pedidas!</h1>
                <p>Desfrute das melhores marmitas da região, elas vão te surpreender!</p>
            </header>
            <?php
            if(is_array($tutoriais) && !empty($tutoriais)){
                foreach ($tutoriais as $key => $value) {
            ?>
                <article>
                    <a href="pagina2.php?id=<?= $value['id']; ?>"><img src=<?= $value['imagem']; ?>></a>
                    <h2><?= $value['titulo'];?></h2>
                    <p><?= substr($value['descricao'], 0, 150); ?>...</p>
                </article>
            <?php
            }
        }else{
            echo "Sem novas marmitas no momento!!!";
        }   
            ?>

        </section>
        
        <article class="main_suport">
            <div class="main_suport_content">
                <header>
                    <h1>Quer receber todas as novidades em seu e-mail?</h1>
                    <p>Informe seu nome e o melhor e-mail no campo ao lado e clique em ok!</p>
                </header>
                <form action="pagina1.php" method="POST">
                    <input type="text" name = "nome" placeholder="Seu nome">
                    <input type="email" name = "email" placeholder="Seu e-mail">
                    <button>OK!</button>
                </form>
            </div>
        </article>

    </main>


    
    <div class="jms-row footer-navbar">
					<div class="container">
				<div class="row">
					<div class="layout-column col-lg-4 col-md-6 col-sm-6 col-xs-6">
														<div class="addon-box">
						<img src="img/logo.png" alt="Logo" width="200" height="150"></p>
            				</div>
																			<div class="addon-box">
											</div>
																			<div class="addon-box">
						<div class="jms-empty-space clearfix" style="margin-bottom:30px;"></div>
					</div>
																			<div class="addon-box">
						<div class="contact-box">
	
	
	
</div>

					</div>
												</div>
					<div class="layout-column col-lg-2 col-md-6 col-sm-6 col-xs-6">
														<div class="addon-box">
						<div class="addon-title">
	<h3>Nossas Páginas</h3>
</div>
<div class="footer-list">
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Conheça a Dona Dirce</a></li>
<li><a href="#">Contato</a></li>
</ul>
</div>					</div>
												</div>
					<div class="layout-column col-lg-2 col-md-6 col-sm-6 col-xs-6 third">
														<div class="addon-box">
						<div class="addon-title">
	<h3>Links Úteis</h3>
</div>
<div class="footer-list">
<ul>
<li><a href="#">Politica de Privacidade</a></li>
<li><a href="#">Termo de Uso</a></li>
<li><a href="#">Aviso Legal</a></li>
</ul>
</div>					</div>
												</div>
					
																					</div>
				</div>
		</div>
	</div>


<hr>
    <div class="jms-row footer-copyright">
					<div class="container">
				<div class="row">
					<div class="layout-column col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<div class="addon-box">
						<div class="copy-right">© 2022 - Todos os direitos reservados a Marmitas Dona Dirce.</div>	
<small><center>Desenvolvido Por Alex Silva</center></small>
					</div>
												</div>
					
				</div>
		</div>
	</div>
    
</body>

</html>