<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="./assets/mdl/material.css">
	<link rel="stylesheet" href="./assets/mdl/materialicons.css">
	<script src="./assets/mdl/material.js"></script>
	<script src="./assets/mdl/jquery-2.1.4.min.js"></script>
</head>
<body>
			<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
			  	<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<div class="mdl-layout-spacer"></div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
			    		<label class="mdl-button mdl-js-button mdl-button--icon" for="fixed-header-drawer-exp">
			      			<i class="material-icons">search</i>
			    		</label>
			        <div class="mdl-textfield__expandable-holder">
			          <input class="mdl-textfield__input" type="text" name="sample" id="fixed-header-drawer-exp">
			        </div>
				</div>
			</div>
			  </header>
			  <div class="mdl-layout__drawer">
			    <span class="mdl-layout-title">Title</span>
			    <nav class="mdl-navigation">
			      <a class="mdl-navigation__link" href="">Link</a>
			      <a class="mdl-navigation__link" href="">Link</a>
			      <a class="mdl-navigation__link" href="">Link</a>
			      <a class="mdl-navigation__link" href="">Link</a>
			    </nav>
			  </div>
			  <main class="mdl-layout__content">
			    <div class="page-content">test</div>
			  </main>
			</div>
</body>
</html>