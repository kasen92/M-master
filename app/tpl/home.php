<body>
<header>
	<div class="header-tit">
		<div id="wrapper">
			<a href="<?= APP_W; ?>"><img class="logo" alt="logo" src="<?= '../'.APP_W.'/pub/theme/images/'.$logo;?>"/></a>
			<h1><?= $titol;?></h1>
		</div>
	</div>
</header>
<section>
	<div class="regist">
		<form class="reg" name="formlog" method="post" action="{app_w}index/login">
			<div id="hello"></div>
			<label for="email">Email: <input type="text" name="email" value="" placeholder="gerard@mail" required></label><br/><br/>
			<label for="password">Password: <input type="password" name="password" required></label><br/><br/>
			<input type="submit" value="Login" id="logsend">
		</form>
	</div>
</section>