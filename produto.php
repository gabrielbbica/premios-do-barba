<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/site.css">
    <title>Página do Produto - Prêmios do Barba</title>
  </head>
</head>
<body class="">
	<?php include('inc/parts/header.php'); ?>
	
	<section class="product-info py-4 py-lg-5">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6 mb-4 mb-lg-5">
					<img class="img-fluid" src="img/produtos/001.png">
				</div>
				
				<div class="col-12 col-lg-6 text-white mb-5">
					<h1 class="title-product font-bold">Harley-Davidson Iron 883 Zero KM ou 50 mil reias na conta</h1>
					<p class="desc-product mb-0">Toda a família Sportster recebeu novos amortecedores dianteiro e traseiro, que agora vem com ajuste, e novos bancos. Iron 883 Minimalista, a Iron 883, assim como a Fourty-Eight, tem por objetivo aproximar a marca dos motociclistas mais jovens. Na configuração original, não tem garupa. Motor: Evolution com 883 cm³ Torque: 6,7 Kgf.m @ 3.750 rpm Comprimento: 2.185 mm Altura do banco: 653 mm Altura mínima: 140 mmv Entre-eixos: 1.515 mm Aros: 19’’ e 16’’ Tanque: 12,5 litros Peso úmido: 256 kg</p>
				
					<div class="row align-items-center justify-content-between mt-3">
						<div class="col price pt-3 text-center text-md-left">
							<div class="text-primary price-product">R$ 10,00</div>
						</div>

						<div class="col-12 col-md-auto buttons pt-3">
							<div class="form-row">
								<div class="col">
									<button class="btn btn-xl btn-outline-light d-block w-100 px-xs-0"><span class="btn-text">Escolher seu KM</span></button>
								</div>
								<div class="col">
									<button class="btn btn-xl btn-primary d-block w-100 px-xs-0"><span class="btn-text">Comprar</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="page-content product-details text-white pb-5">
		<div class="container">
			<span class="text-primary subtitle">Clique e Selecione quantos KM's quiser!</span>
			<h2 class="title-page">Escolha seu KM</h2>

			<p>Escolha quantos KM's quiser dentre os disponíveis abaixo, conforme a quantidade de produtos adquiridos (que lhe dão créditos para concorrer no sorteio).</p>
			<p>Lembre-se: quanto mais KM's você escolher, mais chances terá de ganhar!</p>

			<div class="mb-5">
				<button class="btn btn-lg btn-primary mr-3"><span class="btn-text">Disponíveis</span></button>
				<button class="btn btn-lg btn-outline-light"><span class="btn-text">Vendidos</span></button>
			</div>

			<div class="wrapper-km-list d-flex flex-wrap justify-content-center mx-n2">
				<?php
					for ($i=0; $i < 1000; $i++) {
						echo '<div class="mb-4 px-2"><div class="km-list-item"><span class="km-bg"></span><span class="km-label"><i class="fas fa-check"></i></span><span class="km-number">'.str_pad($i, 3, '0', STR_PAD_LEFT).'</span><div class="km-btn"></div></div></div>';
					}
				?>
			</div>
		
			<div class="tabs mt-4">
				<ul class="nav nav-tabs mb-4" id="tabs" role="tablist">
					<li class="nav-item"><a class="nav-link active show" href="#descricao" data-toggle="tab" aria-controls="Descrição">Descrição</a></li>
					<li class="nav-item"><a class="nav-link" href="#especificacoes" data-toggle="tab" aria-controls="Especificações">Especificações</a></li>
					<li class="nav-item"><a class="nav-link" href="#regulamento" data-toggle="tab" aria-controls="Regulamento">Regulamento</a></li>
				</ul>

				<div class="tab-content" id="tabs-content">
					<div class="tab-pane fade show active" id="descricao" role="tabpanel">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
					</div>

					<div class="tab-pane fade" id="especificacoes" role="tabpanel">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
					</div>

					<div class="tab-pane fade" id="regulamento" role="tabpanel">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include('inc/parts/footer.php'); ?>

	<div class="fixed-bar d-none">
		<div class="container">
			<div class="row">
				<div class="col">
					<div>Números selecionados:</div>
					<div>Valor unitário:</div>
				</div>

				<div class="col-auto">
					<div>R$ 50,00</div>
					<div><a href=""></a></div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/util.js"></script>
	<script type="text/javascript" src="js/tab.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>