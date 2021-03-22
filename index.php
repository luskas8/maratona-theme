<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package maratona
 */

get_header();
?>

	<main id="primary" class="site-main">
		
	<div class="container-content">
			<div class="content-wrapper">
				<div class="phase">
					<h1>1ª FASE</h1>
					<h3>SEDE REGIONAL: SANTOS</h3>
					<p>
						Campus Dom Idílio José Soares<br />
						Av. Conselheiro Nébias, 300<br />
						Santos - SP
					</p>
				</div> <!-- phase -->
				<div class="line"></div>
				<div class="date">
					<h1>15/09/18</h1>
					<h3>CONTATO</h3>
					<p>
						Diretor Local:<br />
						Ciro Cirne Trindade<br />
						maratona@unisantos.br
					</p>
				</div> <!-- date-->
			</div> <!-- content-wrapper -->
		</div> <!-- container-content -->

		<div class="orgs">
			<div>
				<h1>REALIZAÇÃO</h1>
				<div class="orgs-logos">
					<div class="org-logo" id="">
						<img
							src="./wp-content/themes/maratona-theme/images/icpc-logo.jpg"
							alt="Logo ICPC"
						>
					</div>
					<div class="org-logo" id="">
						<img
							src="./wp-content/themes/maratona-theme/images/sbp-logo.jpg"
							alt="Logo SBP"
						>
					</div>
				</div>
			</div>
		</div>
		
	</main><!-- #main -->

<?php
get_footer();
