<?php require_once("res/x5engine.php"); ?>
<?php
$pa = Configuration::getPrivateArea();
if (isset($_GET['landing_page'])) {
	$pa->savePage($_GET['landing_page']);
}
$fromCart = strncmp($pa->getSavedPage(), 'cart/index.html', 15) === 0;
$pa->admin_email = 'alessiodicomo3@gmail.com';
$db = getDbData();
if ($db === false)
	die("Cannot find a database");
$pa->setDBData(ImDb::from_db_data($db), 'w5_oseohwdh_access_management');
if (isset($_GET['waitingusers']) && ($headers = imRequestHeaders()) !== false) {
	if (isset($_GET['wsx5callversion'])) {
		$token = "";
		foreach ($headers as $key => $value)
			if (strtolower($key) == 'x-incomedia-wsx5-token')
				$token = $value;
		if ($token == '662h4vny2exom5jehjqwd62s8m4ntsk79h3p2gugzw')
			echo $pa->getDbUsers($_GET['wsx5callversion']);
	} else {
		http_response_code(400);
	}
	exit();
}
if (isset($_GET['validate'])) {
	if ($pa->validateWaitingUserByKey($_GET['validate'], true))
		$pa->sessionSafeRedirect('imlogin.php?uservalidated');
	else
		header('Location: imlogin.php?err=-6');
	exit();
}
if (isset($_GET['cngpwd']) || isset($_GET['cngpwdml'])) {
	$token_status_code = $pa->get_token_status_code($_GET['cngpwdml'], $_GET['cngpwd']);
	if($token_status_code < 0) {
		if($token_status_code == -10) header('Location: imlogin.php');
		if($token_status_code == -11) header('Location: imlogin.php?loginstatus=' . $token_status_code);
		exit();	}}
if (isset($_POST['imCngPwdToken']) || isset($_POST['imCngPwdEmail'])) {
	if (!isset($_POST['imCngPwdToken']) || !isset($_POST['imCngPwdEmail'])) {
		header('Location: imlogin.php');
	} else if (isset($_POST['imCngPwd']) && isset($_POST['imCngPwdConfirm']) && $_POST['imCngPwd'] == $_POST['imCngPwdConfirm']) {
		$status_code = $pa->change_password($_POST['imCngPwdEmail'], $_POST['imCngPwdToken'], $_POST['imCngPwd']);
		if($status_code == -10) {
			header('Location: imlogin.php');
		} else if ($status_code == -9) {			header('Location: imlogin.php?cngpwd=' . $_POST['imCngPwdToken'] . '&cngpwdml=' . $_POST['imCngPwdEmail'] . '&loginstatus=' . $status_code);
		} else if ($status_code < 0) {			header('Location: imlogin.php?loginstatus=' . $status_code);
		} else {
			$page = $pa->getSavedPage() ? $pa->getSavedPage() : $pa->getLandingPage();
			$pa->clearSavedPage();
			$pa->sessionSafeRedirect($page);
		}
	} else {
		header('Location: imlogin.php?cngpwd=' . $_POST['imCngPwdToken'] . '&cngpwdml=' . $_POST['imCngPwdEmail'] . '&loginstatus=-12');
	}	exit();
}
if (isset($_POST['lostdata'])) {
	$res = $pa->sendLostPasswordEmail($_POST['lostdata']);
	header('Location: imlogin.php?loginstatus=' . ($res ? '4' : '-7'));
}
if (isset($_GET['registernew']) && $_GET['registernew'] == 1 && checkJsAndSpam('853201BF3952A7CB60F54B0AFF0B6B18')) {
	$res = $pa->registerNewUser($_POST['imUnameReg'], $_POST['imRegPwd'], $_POST['imFirstname'], $_POST['imLastname'], 0);
	if ($res > 0)
		$pa->sendValidationEmail($res);
	if ($res > 0)
		$pa->sendNotificationEmail($res);
	Configuration::getNotifier()->sendNotification('USERS_APPROVE', '{ "controlPanelQueryString": "users" }');
	if ($res > 0 && ($_GET['redirect_after_registration'] == 'true' || $fromCart)) {
		$page = $pa->getSavedPage() ? $pa->getSavedPage() : $pa->getLandingPage();
		$pa->clearSavedPage();
		$pa->sessionSafeRedirect($page);
	} else {
		header('Location: imlogin.php?registrationstatus=' . ($res <= 0 ? $res : '2'));
	}
	exit();
}
if (isset($_POST['imUname']) && isset($_POST['imPwd'])) {
	$result = $pa->login($_POST['imUname'], $_POST['imPwd']);
	if ($result < 0) {
		header('Location: imlogin.php?loginstatus=' . $result);
		exit();
	}
	$page = $pa->getSavedPage() ? $pa->getSavedPage() : $pa->getLandingPage();
	if (!$page) {
		if(isset($_SERVER["HTTP_REFERER"]) && strlen($_SERVER["HTTP_REFERER"]) && strpos($_SERVER["HTTP_REFERER"], 'imlogin.php') === false) {
			$page = preg_replace('/\?.*/', '', $_SERVER["HTTP_REFERER"]) . '?loginstatus=1';
		} else {
			$page = 'imlogin.php?loginstatus=1';
		}
	}
	$pa->clearSavedPage();
	$pa->sessionSafeRedirect($page);
}
?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="it-IT" dir="ltr">
	<head>
		<title>Accesso Riservato - Nuovo Progetto - WEBSITE X5 TRIAL VERSION </title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="generator" content="Incomedia WebSite X5 Pro Trial 2022.2.9 - www.websitex5.com" />
		<meta property="og:locale" content="it" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://trial-4087.websitex5.me/imlogin.php" />
		<meta property="og:title" content="Accesso Riservato" />
		<meta property="og:site_name" content="Nuovo Progetto" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="style/reset.css?2022-2-9-0" media="screen,print" />
		<link rel="stylesheet" href="style/print.css?2022-2-9-0" media="print" />
		<link rel="stylesheet" href="style/style.css?2022-2-9-0" media="screen,print" />
		<link rel="stylesheet" href="style/template.css?2022-2-9-0" media="screen" />
		<link rel="stylesheet" href="pcss/imlogin.css?2022-2-9-0-638004365842992273" media="screen,print" />
		<script src="res/jquery.js?2022-2-9-0"></script>
		<script src="res/x5engine.js?2022-2-9-0" data-files-version="2022-2-9-0"></script>
		<script>
			window.onload = function(){ checkBrowserCompatibility('Il Browser che stai utilizzando non supporta le funzionalità richieste per visualizzare questo Sito.','Il Browser che stai utilizzando potrebbe non supportare le funzionalità richieste per visualizzare questo Sito.','[1]Aggiorna il tuo browser[/1] oppure [2]procedi ugualmente[/2].','http://outdatedbrowser.com/'); };
			x5engine.utils.currentPagePath = 'imlogin.php';
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		
		<!-- Global site tag (gtag.js) - Google Analytics --><script async src="https://www.googletagmanager.com/gtag/js?id=G-8BXMERQC4D"></script><script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'G-8BXMERQC4D');</script>
	</head>
	<body>
		<div id="imPageExtContainer">
			<div id="imPageIntContainer">
				<div id="imHeaderBg"></div>
				<div id="imFooterBg"></div>
				<div id="imPage">
					<header id="imHeader">
						<h1 class="imHidden">Accesso Riservato - Nuovo Progetto - WEBSITE X5 TRIAL VERSION </h1>
						<div id="imHeaderObjects"><div id="imHeader_imMenuObject_05_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE --><div id="imHeader_imMenuObject_05"><div id="imHeader_imMenuObject_05_container"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class="imMnMnFirst imPage" data-link-paths=",/home.html,/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="home.html">
Home Page		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/about-us.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="about-us.html">
About Us		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/contacts.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="contacts.html">
Contacts		</a>
</div>
</div>
	</li><li class="imMnMnLast imLevel" data-link-paths=",/cart/index.html,/cart/" data-link-hash="-1004162320"><div class="label-wrapper"><div class="label-inner-wrapper"><a href="cart/index.html" class="label" onclick="return x5engine.utils.location('cart/index.html', null, false)">Cart</a></div></div></li></ul></div></div><!-- UNSEARCHABLE END --><script>
var imHeader_imMenuObject_05_settings = {
	'menuId': 'imHeader_imMenuObject_05',
	'responsiveMenuEffect': 'scale',
	'responsiveMenuLevelOpenEvent': 'mouseover',
	'animationDuration': 1000,
}
x5engine.boot.push(function(){x5engine.initMenu(imHeader_imMenuObject_05_settings)});
$(function () {$('#imHeader_imMenuObject_05_container ul li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0;    $this.on('mouseenter', function () {        if($(this).parents('#imHeader_imMenuObject_05_container-menu-opened').length > 0) return;         clearTimeout(timeout);        setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeIn(); }, 250);    }).on('mouseleave', function () {        if($(this).parents('#imHeader_imMenuObject_05_container-menu-opened').length > 0) return;         timeout = setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeOut(); }, 250);    });});});

</script>
</div><div id="imHeader_imTextObject_07_wrapper" class="template-object-wrapper"><div id="imHeader_imTextObject_07">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imHeader_imTextObject_07_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div data-line-height="1" class="lh1 imTACenter"><span class="fs18lh1"><b>Design Boutique</b></span></div>
		</div>
	</div>

</div>
</div><div id="imHeader_imObjectTitle_08_wrapper" class="template-object-wrapper"><div id="imHeader_imObjectTitle_08"><span id ="imHeader_imObjectTitle_08_text" >Design Boutique</span></div></div><div id="imHeader_imTextObject_09_wrapper" class="template-object-wrapper"><div id="imHeader_imTextObject_09">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imHeader_imTextObject_09_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div data-line-height="1" class="lh1 imTACenter"><span class="fs28lh1 cb1">NEW COLLECTION</span></div>
		</div>
	</div>

</div>
</div></div>
					</header>
					<div id="imStickyBarContainer">
						<div id="imStickyBarGraphics"></div>
						<div id="imStickyBar">
							<div id="imStickyBarObjects"><div id="imStickyBar_imTextObject_03_wrapper" class="template-object-wrapper"><div id="imStickyBar_imTextObject_03">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imStickyBar_imTextObject_03_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div style="text-align: left;" data-line-height="1" class="lh1"><b><span class="fs18 cf1">Design Boutique</span></b><br></div>
		</div>
	</div>

</div>
</div><div id="imStickyBar_imMenuObject_04_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE --><div id="imStickyBar_imMenuObject_04"><div id="imStickyBar_imMenuObject_04_container"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class="imMnMnFirst imPage" data-link-paths=",/home.html,/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="home.html">
Home Page		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/about-us.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="about-us.html">
About Us		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/contacts.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="contacts.html">
Contacts		</a>
</div>
</div>
	</li><li class="imMnMnLast imLevel" data-link-paths=",/cart/index.html,/cart/" data-link-hash="-1004162320"><div class="label-wrapper"><div class="label-inner-wrapper"><a href="cart/index.html" class="label" onclick="return x5engine.utils.location('cart/index.html', null, false)">Cart</a></div></div></li></ul></div></div><!-- UNSEARCHABLE END --><script>
var imStickyBar_imMenuObject_04_settings = {
	'menuId': 'imStickyBar_imMenuObject_04',
	'responsiveMenuEffect': 'scale',
	'responsiveMenuLevelOpenEvent': 'mouseover',
	'animationDuration': 1000,
}
x5engine.boot.push(function(){x5engine.initMenu(imStickyBar_imMenuObject_04_settings)});
$(function () {$('#imStickyBar_imMenuObject_04_container ul li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0;    $this.on('mouseenter', function () {        if($(this).parents('#imStickyBar_imMenuObject_04_container-menu-opened').length > 0) return;         clearTimeout(timeout);        setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeIn(); }, 250);    }).on('mouseleave', function () {        if($(this).parents('#imStickyBar_imMenuObject_04_container-menu-opened').length > 0) return;         timeout = setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeOut(); }, 250);    });});});

</script>
</div></div>
						</div>
					</div>
					<a class="imHidden" href="#imGoToCont" title="Salta il menu di navigazione">Vai ai contenuti</a>
					<div id="imSideBar">
						<div id="imSideBarObjects"></div>
					</div>
					<div id="imContentGraphics"></div>
					<main id="imContent">
						<a id="imGoToCont"></a>
						<div id="imLoginPage">
						<?php if ($fromCart): ?>
							<h2 id ="imPgTitle" class="imTitleMargin">Passo 1 - Dati del Cliente</h2>
							<script>x5engine.boot.push(function () {
							if (x5engine.cart.ui.steps.active) {
								$('#imPgTitle').before(x5engine.cart.ui.getStepStyleDom(0));
							}
							});</script>
						<?php elseif (isset($_GET['cngpwd']) && isset($_GET['cngpwdml'])): ?>
							<h2 id="imPgTitle" class="imTitleMargin">Reset Password</h2>
							<div style="height: 15px;">&nbsp;</div>
						<?php else: ?>
							<h2 id="imPgTitle" class="imTitleMargin">Accesso Riservato</h2>
							<div style="height: 15px;">&nbsp;</div>
						<?php endif; ?>
							<?php if (isset($_GET['loginstatus']) && $_GET['loginstatus'] == 1): ?>
							<div class="alert alert-green"><?php echo $pa->messageFromStatusCode(1) ?></div>
							<?php else: ?>
										<div id="imLoginDescription"><?php echo isset($_GET['cart']) ? Configuration::getLocalizations()->get('cart_step2_descr_login', 'To set the order you are required to login or register.' ) : (isset($_GET['cngpwd']) && isset($_GET['cngpwdml']) ? Configuration::getLocalizations()->get('private_area_password_recovery_description', 'Enter new password below.' ) : 'Per poter accedere a questa sezione del Sito è necessario inserire i propri dati di accesso.'); ?></div>
										<div class="imLogin">
											<?php
												if (isset($_GET['loginstatus']) && $pa->messageFromStatusCode($_GET['loginstatus']) != '') {
													echo '<div class="alert alert-' . ($_GET['loginstatus'] >= 0 ? 'green' : 'red') . '">' . $pa->messageFromStatusCode($_GET['loginstatus']) . '</div>';
												}
											?>
						<?php if (isset($_GET['cngpwd']) && isset($_GET['cngpwdml'])): ?>
						<form method="post" action="imlogin.php" id="imCngPwdForm">
							<div class="imLoginBlock">
								<label for="imCngPwd"><span>Password:</span></label><br />
								<input type="password" name="imCngPwd" id="imCngPwd" class="mandatory"><br />
							</div>
							<div class="imLoginBlock">
								<label for="imCngPwdConfirm"><span>Ripeti la password:</span></label><br />
								<input type="password" name="imCngPwdConfirm" id="imCngPwdConfirm" class="mandatory"><br />
							</div>
							<input type="hidden" name="imCngPwdToken" id="imCngPwdToken" value="<?php echo $_GET['cngpwd']; ?>">
							<input type="hidden" name="imCngPwdEmail" id="imCngPwdEmail" value="<?php echo $_GET['cngpwdml']; ?>">
							<div class="imLoginBlock" style="text-align: right;">
								<input type="submit" value="Invia" class="imLoginSubmit">
							</div>
						</form>
						<script>x5engine.boot.push(function() { x5engine.imForm.initForm('#imCngPwdForm', false, { 'jsid': '853201BF3952A7CB60F54B0AFF0B6B18', showAll: true, offlineMessage: 'In modalità Anteprima le Pagine Protette vengono visualizzate senza la richiesta di accesso. L\'Area Riservata viene attivata solo con la pubblicazione del Sito.' }); });</script>
						</div>
						<?php else: ?>
											<h3>Hai già un account?</h3>
											<?php if ($fromCart): ?>
												<div class="imLoginTitleDescription">Effettua il login per velocizzare il processo di acquisto</div>
											<?php endif; ?>
											<form method="post" action="imlogin.php" id="imLoginForm">
												<div class="imLoginBlock">
													<label for="imUnameLogin"><span>E-mail:</span></label><br />
													<input type="email" name="imUname" id="imUnameLogin" class="mandatory" autofocus><br />
												</div>
												<div class="imLoginBlock">
													<label for="imPwdLogin"><span>Password:</span></label><br />
													<input type="password" name="imPwd" id="imPwdLogin" class="mandatory"><br />
												</div>
												<div class="imLoginBlock" style="text-align: right;">
													<a href="#" class="imCssLink" style="margin-right: 3%;" onclick="$('#imLoginForm').slideUp();$('#imLostPassword').slideDown(); return false;">Ho perso la mia password</a>
													<input type="submit" value="Accedi" class="imLoginSubmit">
												</div>
											</form>
											<script>x5engine.boot.push(function() { x5engine.imForm.initForm('#imLoginForm', false, { 'jsid': '853201BF3952A7CB60F54B0AFF0B6B18', showAll: true, offlineMessage: 'In modalità Anteprima le Pagine Protette vengono visualizzate senza la richiesta di accesso. L\'Area Riservata viene attivata solo con la pubblicazione del Sito.' }); });</script>
											<form method="post" id="imLostPassword" action="imlogin.php" style="display: none;">
												<div class="imLoginBlock">
													<label for="lostdata">Inserisci la tua e-mail:*</label>
													<input type="text" id="lostdata" name="lostdata" class="mandatory">
												</div>
												<div class="imLoginBlock" style="text-align: right;">
													<input type="submit" value="Password persa?" class="imLoginSubmit">
												</div>
											</form>
											<script>x5engine.boot.push(function() { x5engine.imForm.initForm('#imLostPassword', false, { 'jsid': '853201BF3952A7CB60F54B0AFF0B6B18', showAll: true, offlineMessage: 'In modalità Anteprima le Pagine Protette vengono visualizzate senza la richiesta di accesso. L\'Area Riservata viene attivata solo con la pubblicazione del Sito.' }); });</script>
										</div>
										<div class="imLogin imRightElement">
											<?php
												if (isset($_GET['registrationstatus']) && $pa->messageFromStatusCode($_GET['registrationstatus']) != '') {
													echo '<div class="alert alert-' . ($_GET['registrationstatus'] > 0 ? 'green' : 'red') . '">' . $pa->messageFromStatusCode($_GET['registrationstatus']) . '</div>';
												}
											?>
											<h3>Registra un nuovo account</h3>
											<?php if ($fromCart): ?>
												<div class="imLoginTitleDescription">Crea un account per salvare i tuoi dati</div>
											<?php endif; ?>
											<form method="post" action="imlogin.php?registernew=1<?php if (@$_GET['redirect_after_registration'] == 'true') echo '&redirect_after_registration=true'; ?>" id="imRegister">
												<span style="display: flex;">
													<div class="imLoginBlock" style="width: 49%;">
														<label for="imFirstname"><span>Nome:*</span></label><br />
														<input type="text" name="imFirstname" id="imFirstname" class="mandatory"><br />
													</div>
													<div class="imLoginBlock" style="width: 49%;">
														<label for="imLastname"><span>Cognome:*</span></label><br />
														<input type="text" name="imLastname" id="imLastname" class="mandatory"><br />
													</div>
												</span>
												<div class="imLoginBlock">
													<label for="imUnameReg"><span>E-mail:*</span></label><br />
													<input type="email" name="imUnameReg" id="imUnameReg" class="mandatory valEmail"><br />
												</div>
												<div class="imLoginBlock">
													<label for="imRegPwd"><span>Password:*</span></label><br />
													<input type="password" name="imRegPwd" id="imRegPwd" class="mandatory valPassword requirePolicy"><br />
												</div>
												<input type="text" value="" name="prt" class="prt_field">
												<div class="imLoginBlock">
								<div class="x5captcha-wrap">
									<label for="k1ppkk7v-imCpt">Parola di controllo:</label><br />
									<input type="text" id="k1ppkk7v-imCpt" class="imCpt" name="imCpt" maxlength="5" />
								</div>
												</div>
												<div class="imLoginBlock" style="text-align: right;">
													<input type="submit" value="Registrati" class="imLoginSubmit">
												</div>
											</form>
											<script>x5engine.boot.push(function() { x5engine.imForm.initForm('#imRegister', false, { 'jsid': '853201BF3952A7CB60F54B0AFF0B6B18', showAll: true, offlineMessage: 'In modalità Anteprima le Pagine Protette vengono visualizzate senza la richiesta di accesso. L\'Area Riservata viene attivata solo con la pubblicazione del Sito.' }); });</script>
										</div>
							<?php endif; ?>
						<?php endif; ?>
						</div>
						
					</main>
					<footer id="imFooter">
						<div id="imFooterObjects"><div id="imFooter_imTextObject_05_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_05">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_05_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div><span class="fs12 cf1">CONTACT US</span></div>
		</div>
	</div>

</div>
</div><div id="imFooter_imTextObject_11_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_11">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_11_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div style="text-align: right;"><span class="fs12 cf1">Created with </span><b class="fs14 cf2">WebSite X5</b></div>
		</div>
	</div>

</div>
</div><div id="imFooter_imTextObject_13_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_13">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_13_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div style="text-align: right;"><span class="fs12 cf1">LOREM IPSUM DOLOR SIT AMET</span></div>
		</div>
	</div>

</div>
</div><div id="imFooter_imTextObject_15_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_15">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_15_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div><span class="fs12 cf1">ABOUT</span></div><div><span class="fs10 cf2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br></span></div><div><span class="fs10 cf2">Phasellus a sagittis massa.</span></div><div><span class="fs10 cf2">Duis non arcu venenatis, cursus ex.</span></div>
		</div>
	</div>

</div>
</div><div id="imFooter_imObjectForm_17_wrapper" class="template-object-wrapper"><div id="imFooter_imObjectForm_17">	<form id="imObjectForm_17_form" action="imemail/imEmailForm.php" method="post" enctype="multipart/form-data">
		<fieldset class="first">
		<div>
			<div id="imObjectForm_17_1_container" class="imObjectFormFieldContainer"><div id="imObjectForm_17_1_field">
<input type="email" class="valEmail" id="imObjectForm_17_1" name="imObjectForm_17_1" placeholder="E-MAIL" /></div>
</div>
			<div id="imObjectForm_17_2_container" class="imObjectFormFieldContainer"><div id="imObjectForm_17_2_field">
<textarea class="" id="imObjectForm_17_2" name="imObjectForm_17_2"  placeholder="message"></textarea></div>
</div>
			</div>
		</fieldset>
		<fieldset>
			<input type="text" id="imObjectForm_17_prot" name="imSpProt" />
		</fieldset>
		<div id="imObjectForm_17_buttonswrap">
			<input type="submit" value="Invia" />
		</div>
	</form>
</div>
<script>x5engine.boot.push('x5engine.imForm.initForm(\'#imObjectForm_17_form\', false, {jsid: \'B971BC9177537C05F14D68B759C1D270\', type: \'tip\', showAll: true, classes: \'validator\', landingPage: \'home.html\', phpAction: \'imemail/imEmailForm.php\', feedbackMode: \'showPage\', messageBackground: \'rgba(131, 144, 158, 1)\', messageBackgroundBlur: false, labelColor: \'rgba(131, 144, 158, 1)\', fieldColor: \'rgba(64, 64, 64, 1)\', selectedFieldColor: \'rgba(131, 144, 158, 1)\'})');</script>
</div><div id="imFooter_imTextObject_18_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_18">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_18_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div><span class="fs12 cf1">POLICY</span></div><div><span class="fs10 cf2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br></span></div><div><span class="fs10 cf2">Phasellus a sagittis massa.</span></div><div><span class="fs10 cf2">Duis non arcu venenatis, cursus ex.</span></div>
		</div>
	</div>

</div>
</div><div id="imFooter_imTextObject_19_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_19">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_19_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div style="text-align: center;" data-line-height="1" class="lh1"><span class="fs18"><b>Design Boutique</b></span></div>
		</div>
	</div>

</div>
</div></div>
					</footer>
				</div>
				<span class="imHidden"><a href="#imGoToCont" title="Rileggi i contenuti della pagina">Torna ai contenuti</a></span>
			</div>
		</div>
		<script src="cart/x5cart.js?2022-2-9-0-638004365842992273"></script>
		<noscript class="imNoScript"><div class="alert alert-red">Per poter utilizzare questo sito è necessario attivare JavaScript.</div></noscript>
	</body>
</html>