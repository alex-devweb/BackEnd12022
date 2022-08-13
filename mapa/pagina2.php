<?php
include("dados.php");
//var_dump($tutoriais);//utilizei para testar o conteúdo recebido
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
			<ul>
				<li><a href="#" title="Home" alt="Home">Home</a></li>
				<li><a href="#" title="Blog" alt="Blog">Blog</a></li>
				<li><a href="#" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>

	<main>

		<section class="main_tutorial">
			<?php
			if (isset($_GET['id']) && !empty($_GET['id'])) {
				// echo "ID = ". $_GET['id'];
				$id = $_GET['id']; // Validar o recebimento do id
				foreach ($tutoriais as $key => $value) {
					if ($value['id'] == $id) {

			?>
						<header class="main_tutorial_header">
							<h1><?= $value['titulo']; ?></h1>
						</header>
						<img src=<?=$value['imagem']; ?> title="<?= $value['title_img'];?>" alt="<?=$value['title_img'];?>">
							<p><?= $value['descricao'];?></P>
							<?php
						}
					}
				} else {
					echo "Não Existe";
				}

							?>
			
		</section>


        <section class=" main_tutorial">
						<header class="main_tutorial_header">
							<h1>Ver outras  Marmitas</h1>
						</header>
						<?php
						$id = 0;
							foreach ($tutoriais as $key => $value) {
								if ($value['id'] != $id) {
						?>
						<article>
							<h2><a href="pagina2.php?id=<?=$value['id'];?>"><?=$value['titulo']; ?></h2>
						</article>
						<?php
							}
						}
						?>

		</section>



		<!--suport -->
		<article class="main_suport">
			<div class="main_suport_content">
				<header>
					<h1>Quer receber todas as novidades em seu e-mail?</h1>
					<p>Informe seu nome e o melhor e-mail no campo ao lado e clique em ok!</p>
				</header>
				<form>
					<input type="text" placeholder="Seu nome">
					<input type="email" placeholder="Seu e-mail">
					<button>OK!</button>
				</form>
			</div>
		</article>
		<!--3ª dobra-->
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