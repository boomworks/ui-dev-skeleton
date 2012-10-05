<?php include 'includes/header.php'; ?>

		<div id="page-wrapper">

			<ul id="skipnav">
				<li><a href="#content">Skip to content</a></li>
				<li><a href="#primary-navigation">Skip to primary navigation</a></li>
				<li><a href="#secondary-navigation">Skip to secondary navigation</a></li>
			</ul>

			<div id="header-wrapper">
				<header role="banner" class="container_24">

					<div id="logo">
						<a href="#">
							<img src="images/logo.png" width="32" height="32" alt="@PROJECT-NAME@">
							@SUBHEADING@
						</a>
					</div>

					<nav role="navigation" id="primary-navigation">
						<ul>
							<li><a href="#">nav_item</a></li>
							<li><a href="#">nav_item</a></li>
							<li><a href="#">nav_item</a></li>
						</ul>
					</nav>

					<form role="search" action="#" method="get">
					</form>

				</header>
			</div>

			<div id="content-wrapper">
				<section role="main" id="main" class="container_24">

					<nav role="navigation" id="secondary-navigation" class="grid_4 alpha">
						<ul>
							<li><a href="#">nav_item</a></li>
							<li><a href="#">nav_item</a></li>
							<li><a href="#">nav_item</a></li>
						</ul>
					</nav>

					<article role="document" id="content" class="grid_14">

						<h1>@PROJECT-NAME@</h1>
						<div class="grid_10 alpha intro">
							<?php include 'modules/test.php'; ?>
						</div>
						<aside class="grid_4 omega">
							<?php include 'modules/test.php'; ?>
						</aside>


						<div class="grid_10 alpha">
							<?php include 'modules/test.php'; ?>
						</div>
						<aside class="grid_4 omega">
							<?php include 'modules/test.php'; ?>
						</aside>


					</article>

					<aside role="complementary" class="grid_6 omega">
						<?php include 'modules/test.php'; ?>
					</aside>

				</section>

			</div>

			<div id="footer-wrapper">
				<footer class="container_24">

					<nav role="navigation" id="footer-navigation">
						<ul>
							<li><a href="#">nav_item</a></li>
							<li><a href="#">nav_item</a></li>
							<li><a href="#">nav_item</a></li>
						</ul>
					</nav>

					<p role="contentinfo">&copy; 2012</p>

				</footer>
			</div>

		</div>

<?php include 'includes/footer.php'; ?>
