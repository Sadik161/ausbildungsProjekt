<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<a href="/home">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	</a>
	<title>
		<?= $cakeDescription ?>:
		<?= $this->fetch('title') ?>
	</title>
	<?= $this->Html->meta('icon') ?>

	<!-- <?= $this->Html->css('base.css') ?> -->
	<?= $this->Html->css('style.css') ?>

	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?> 
	<?= $this->fetch('script') ?>	
</head>

<body>
	<!-- <img src="/img/Download.png" alt="" style="background-size: cover;"> -->
	<nav class="navbar" style="background-color: #fd7e14;">
		<a href="/users/home">
			<img class="mx-3" src="/img/logo.svg" alt="TSG" height="70px" width="auto">
		</a>
		<?php echo $this->Html->link(__('TSG Harsewinkel'), ['controller' => 'users', 'action' => 'home'], [
			'class' => 'logo d-flex justify-content-center text-center', 
			'style' => 'text-decoration: none; color: black; font-size: 1.5rem;
						font-weight: bold;
						letter-spacing: 2px;
						text-transform: uppercase;
						positon: absolute;
						margin-left: 200px;
						display: flex'
		]); ?>
		<div class="justify-content-md-end">
			<ul class="nav nav-pills">
				<?= $this->Html->link('Home', '/users/home', [
					'class' => 'nav-link',
					'style' => 'text-decoration: none; color: black',
					'aria-current' => 'page'
				]); ?>
				<?= $this->Html->link('Clubs', '/clubs/index', [
					'class' => 'nav-link',
					'style' => 'text-decoration: none; color: black',
					'aria-current' => 'page'
				]); ?>
				<div class="dropdown">	
					<button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
						<?= __('Abteilung') ?>
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="/Players/index"><?=__('Spieler')?></a></li>
						<li><a class="dropdown-item" href="/teams/index">Mannschaft</a></li>
						<li><a class="dropdown-item" href="/coaches/index">Trainer</a></li>
						<li><a class="dropdown-item" href="/clubs/index">Clubs</a></li>
					</ul>
				</div>
				<?php if ($this->request->session()->read('Auth.User')): ?>
					<li class="nav-item"><a href="/users/logout" class="nav-link" aria-current="page" style="color: black;">Logout</a></li>
				<?php else : ?>
					<li class="nav-item"><a href="/users/login" class="nav-link" aria-current="page" style="color: black;">Login</a></li>
				<?php endif; ?>
			</ul>
		</div>
	</nav>
		<?= $this->Flash->render() ?>
		<div class="container clearfix">
			<?= $this->fetch('content') ?>
		</div>
	<footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</footer>
</body>
</html> 
