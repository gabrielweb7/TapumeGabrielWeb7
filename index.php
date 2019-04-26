<!-- /**
* ▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄
*                   Criado por Gabriel Azuaga Barbosa
*                  E-mail: gabrielbarbosaweb7@gmail.com
*  `•.¸¸.•´´¯`••._.• [ http://gabrieldaluz7.co.nf/ ] •._.••`¯´´•.¸¸.•`
* ▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄
*/ -->
<?php
	
	/* TitlePage */
	$titlePage = "GabrielWeb7 - Soluções Web!";
	
	/* DescricaoPage */
	$descricaoPage = "SITE EM DESENVOLVIMENTO!";
	
	/* BackgroundPage */
	#$backgroundPage = "img/bg/1.jpg";
	$backgroundPage = "img/bg/5.jpg";
	
	/* LogoSrc */
	#$logoHref = "http://empreendergrupocriativo.com.br/";
	#$logoSrc = "img/logo/empreendergrupocriativo.png";
	
	$logoHref = "http://gabrieldaluz.com.br";
	$logoSrc = "img/logo/gabriel.png";
	$classLogo = "";
	
	$logoTitle = "SITE EM DESENVOLVIMENTO!";
	
	/* Whats Plugin */
	$showWhats = true; /* false vai desativar o plugin ! */
	$celularWhats = "5567984660441";
	$celularMsg = "Olá, tudo bem ?";
	
	/* Metatags Facebook */
	$ogUrl = "http://gabrieldaluz.com.br";
	$ogTitle = $titlePage;
	$ogDescription = $descricaoPage;
	#$ogImage = $ogUrl."/img/faceCapa/fidelidadeFacil4.png";
	#$ogImageType = "image/png";
	#$ogImageWidth = "1200";
	#$ogImageHeight = "600";
?>
<!doctype html>
<html lang="pt-br">
	<head>
		
		<!-- MetasTags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Titulo -->
		<title> <?php echo $titlePage; ?> </title>
		
		<!-- Description -->
		<meta name="description" content="<?php echo $descricaoPage; ?>">

		<!-- Author-->
		<meta name="author" content="Autor da pagina">
		
	    <!-- Facebook -->
		<meta property="og:type" content="website">
		
		<?php if(isset($ogUrl)) { ?>
			<meta property="og:url" content="<?php echo $ogUrl; ?>">
		<?php } ?>
		<?php if(isset($ogTitle)) { ?>
			<meta property="og:title" content="<?php echo $ogTitle; ?>">
		<?php } ?>
		<?php if(isset($ogDescription)) { ?>
			<meta property="og:description" content="<?php echo $ogDescription; ?>">
		<?php } ?>
		<?php if(isset($ogImage)) { ?>
			<meta property="og:image" content="<?php echo $ogImage; ?>">
		<?php } ?>
		<?php if(isset($ogImage)) { ?>
			<meta property="og:image:secure_url" content="<?php echo $ogImage; ?>">
		<?php } ?>
		<?php if(isset($ogImageType)) { ?>
			<meta property="og:image:type" content="<?php echo $ogImageType; ?>">
		<?php } ?>
		<?php if(isset($ogImageWidth)) { ?>
			<meta property="og:image:width" content="<?php echo $ogImageWidth; ?>">
		<?php } ?>
		<?php if(isset($ogImageHeight)) { ?>
			<meta property="og:image:height" content="<?php echo $ogImageHeight; ?>">
		<?php } ?>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/default/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/default/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/default/favicon-16x16.png">
		<link rel="manifest" href="img/favicon/default/site.webmanifest">
		<link rel="mask-icon" href="img/favicon/default/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="img/favicon/default/favicon.ico">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="img/favicon/default/mstile-144x144.png">
		<meta name="msapplication-config" content="img/favicon/default/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

		<!-- Resets All Navigators -->
		<link rel="stylesheet" href="plugins/css-resets/normalize-8-0-0.css" />	
		
		<!-- Webfont :: Ubuntu ** Opcional ** -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500" rel="stylesheet"> -->
		
		<!-- Bootstrap 3 Latest compiled and minified CSS -->
		<link rel="stylesheet" href="plugins/bootstrap/3.3.7/css/bootstrap.min.css">

		
		<!-- Styles Website -->
		<link rel="stylesheet" href="css/styles.css" />
		
		<!-- Styles Responsive Website -->
		<link rel="stylesheet" href="css/responsive.css" />
		
		<style>
		
			
			body { position:relative; }
		
			.logoTipo { 
			    width: 100%;
    max-width: 400px;
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%);
	text-align:center;
			}
			
			.logoTipo img { transition: all 2s;
				width:100%;
			}
			
.logoTipo img:hover { transform:scale(1.05);  }
			
			.logoTipo span {
				margin-top:50px;
				padding: 10px 13px;
				border-radius:10px;
				font-size: 19px;
				color: white;
				 text-shadow: 0px 0px 1px black;
				display: inline-block;
				
				background:rgba(0,0,0,0.5);
			}
			
			.logoBgWhite { background: white;
    padding: 10px 18px;
			border-radius: 32px; }
		</style>
		
	
	</head>
	<body style="background-image: url('<?php echo $backgroundPage; ?>'); background-size: cover;">
	
		<!-- Logotipo -->
		<div class="logoTipo"> 
			<a href="<?php echo $logoHref; ?>" target="_blank">
				<img src="<?php echo $logoSrc; ?>" class="<?php echo $classLogo; ?>" /> 
			</a>
			
			<?php if(isset($logoTitle)) {  ?> 
				<!-- title -->
				<span> <?php echo $logoTitle; ?> </span>
			<?php } ?>
		</div>
	
		<!-- Javascript: Biblioteca Jquery -->
		<script src="plugins/jquery/jquery-3.3.1.min.js"></script>
		
		<!-- Javascript: Pre Loading Page By Gabriel A. Barbosa ** Optional ** -->
		<script src="plugins/preLoadingPage7/preLoadingPage7.jquery.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="plugins/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		
		<!-- Javascript: Funções Javascript do Projeto -->
		<script src="js/functions-site.js"></script>
			
		<!-- Javascript: Icon Whats Fixed by Gabriel A. Barbosa -->
		<script src="plugins/iconWhatsFixed/iconWhatsFixed.jquery.js"></script>
		
		<?php if($showWhats) { ?>
			<script>
				$(function() { 
					$("body").iconWhatsFixed({ celular: '<?php echo $celularWhats; ?>', mensagem: '<?php echo $celularMsg; ?>' });
				});
			</script>
		<?php } ?>
		
		
	
	</body>
</html>