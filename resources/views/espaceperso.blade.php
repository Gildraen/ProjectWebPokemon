<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link href="{{ asset('css/mainperso.css') }}" rel="stylesheet">
	</head>
	<body class="is-preload">
		<!-- Header -->
			<div id="header">
				<div class="top">
					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
							<h1 id="title">{{ Auth::user()->name }}</h1>
							<p>Compte classique</p>
						</div>
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link"><span class="icon fa-dot-circle-o">Cartes Pokemon</span></a></li>
								<li><a href="#portfolio" id="portfolio-link"><span class="icon fa-superpowers">Cartes  YuGiOh</span></a></li>
								<li><a href="#about" id="about-link"><span class="icon fa-snowflake-o ">Cartes Magic</span></a></li>
								<li><a href="#contact" id="contact-link"><span class="icon fa-spinner ">Cartes Final Fantasy</span></a></li>
							</ul>
						</nav>
				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
<!-- 							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li> -->
                            <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
                            <li><a href="#" class="icon fa-credit-card "><span class="label">Portefeuille</span></a></li>
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<!-- <section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt">Hi! I'm <strong>Prologue</strong>, a <a href="http://html5up.net/license">free</a> responsive<br />
								site template designed by <a href="http://html5up.net">HTML5 UP</a>.</h2>
								<p>Ligula scelerisque justo sem accumsan diam quis<br />
								vitae natoque dictum sollicitudin elementum.</p>
							</header>

							<footer>
								<a href="#portfolio" class="button scrolly">Magna Aliquam</a>
							</footer>

						</div>
					</section> -->

				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2>Ma collection</h2>
							</header>

							<h3>Cartes Pokemon</h3>

							<div class="row">
								<div class="col-4 col-12-mobile">
									<article class="item">
										<a href="#" class="image fit"><img src="images/soleiletlune.jpg" alt="" /></a>
										<header>
											<h3>Soleil et Lune</h3>
										</header>
									</article>
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/heartgoldetsoulsilver.jpg" alt="" /></a>
										<header>
											<h3>Heartgold et Soulsilver</h3>
										</header>
									</article>
								</div>
								<div class="col-4 col-12-mobile">
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/xety.jpg" alt="" /></a>
                                    
										<header>
											<h3>X et Y</h3>
										</header>
									</article>
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/platine.jpg" alt="" /></a>
										<header>
											<h3>Platine</h3>
										</header>
									</article>
								</div>
								<div class="col-4 col-12-mobile">
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/noiretblanc.jpg" alt="" /></a>
										<header>
											<h3>Noir et Blanc</h3>
										</header>
									</article>
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/diamantetperle.jpg" alt="" /></a>
										<header>
											<h3>Diamant et Perle</h3>
										</header>
									</article>
								</div>
                            </div>
                            <h3>Cartes YuGiOh</h3>

							<div class="row">
								<div class="col-4 col-12-mobile">
									<article class="item">
										<a href="#" class="image fit"><img src="images/soleiletlune.jpg" alt="" /></a>
										<header>
											<h3>Soleil et Lune</h3>
										</header>
									</article>
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/heartgoldetsoulsilver.jpg" alt="" /></a>
										<header>
											<h3>Heartgold et Soulsilver</h3>
										</header>
									</article>
								</div>
								<div class="col-4 col-12-mobile">
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/xety.jpg" alt="" /></a>
                                    
										<header>
											<h3>X et Y</h3>
										</header>
									</article>
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/platine.jpg" alt="" /></a>
										<header>
											<h3>Platine</h3>
										</header>
									</article>
								</div>
								<div class="col-4 col-12-mobile">
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/noiretblanc.jpg" alt="" /></a>
										<header>
											<h3>Noir et Blanc</h3>
										</header>
									</article>
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/diamantetperle.jpg" alt="" /></a>
										<header>
											<h3>Diamant et Perle</h3>
										</header>
									</article>
								</div>
                            </div>
                            <h3>Cartes Magic</h3>

							<div class="row">
								<div class="col-4 col-12-mobile">
									<article class="item">
										<a href="#" class="image fit"><img src="images/soleiletlune.jpg" alt="" /></a>
										<header>
											<h3>Soleil et Lune</h3>
										</header>
									</article>
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/heartgoldetsoulsilver.jpg" alt="" /></a>
										<header>
											<h3>Heartgold et Soulsilver</h3>
										</header>
									</article>
								</div>
								<div class="col-4 col-12-mobile">
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/xety.jpg" alt="" /></a>
                                    
										<header>
											<h3>X et Y</h3>
										</header>
									</article>
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/platine.jpg" alt="" /></a>
										<header>
											<h3>Platine</h3>
										</header>
									</article>
								</div>
								<div class="col-4 col-12-mobile">
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/noiretblanc.jpg" alt="" /></a>
										<header>
											<h3>Noir et Blanc</h3>
										</header>
									</article>
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/diamantetperle.jpg" alt="" /></a>
										<header>
											<h3>Diamant et Perle</h3>
										</header>
									</article>
								</div>
                            </div>
                            <h3>Cartes Final Fantasy</h3>

							<div class="row">
								<div class="col-4 col-12-mobile">
									<article class="item">
										<a href="#" class="image fit"><img src="images/soleiletlune.jpg" alt="" /></a>
										<header>
											<h3>Soleil et Lune</h3>
										</header>
									</article>
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/heartgoldetsoulsilver.jpg" alt="" /></a>
										<header>
											<h3>Heartgold et Soulsilver</h3>
										</header>
									</article>
								</div>
								<div class="col-4 col-12-mobile">
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/xety.jpg" alt="" /></a>
                                    
										<header>
											<h3>X et Y</h3>
										</header>
									</article>
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/platine.jpg" alt="" /></a>
										<header>
											<h3>Platine</h3>
										</header>
									</article>
								</div>
								<div class="col-4 col-12-mobile">
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/noiretblanc.jpg" alt="" /></a>
										<header>
											<h3>Noir et Blanc</h3>
										</header>
									</article>
									<article class="item">
                                    <a href="#" class="image fit"><img src="images/diamantetperle.jpg" alt="" /></a>
										<header>
											<h3>Diamant et Perle</h3>
										</header>
									</article>
								</div>
							</div>

						</div>
					</section>

				<!-- About Me -->
<!-- 					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>About Me</h2>
							</header>

							<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>

							<p>Tincidunt eu elit diam magnis pretium accumsan etiam id urna. Ridiculus
							ultricies curae quis et rhoncus velit. Lobortis elementum aliquet nec vitae
							laoreet eget cubilia quam non etiam odio tincidunt montes. Elementum sem
							parturient nulla quam placerat viverra mauris non cum elit tempus ullamcorper
							dolor. Libero rutrum ut lacinia donec curae mus vel quisque sociis nec
							ornare iaculis.</p>

						</div>
					</section> -->

				<!-- Contact -->
					<!-- <section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Contact</h2>
							</header>

							<p>Elementum sem parturient nulla quam placerat viverra
							mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia
							donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc
							orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>

							<form method="post" action="#">
								<div class="row">
									<div class="col-6 col-12-mobile"><input type="text" name="name" placeholder="Name" /></div>
									<div class="col-6 col-12-mobile"><input type="text" name="email" placeholder="Email" /></div>
									<div class="col-12">
										<textarea name="message" placeholder="Message"></textarea>
									</div>
									<div class="col-12">
										<input type="submit" value="Send Message" />
									</div>
								</div>
							</form>

						</div>
					</section> -->

			</div>

		<!-- Footer -->
<!-- 			<div id="footer">
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

			</div> -->

		<!-- Scripts -->
            <script src="{{asset('js/jquery.scrollex.min.js') }}"></script>
            <script src="{{asset('js/jquery.min.js') }}"></script>
			<script src="{{asset('js/jquery.scrolly.min.js') }}"></script>
			<script src="{{asset('js/browser.min.js') }}"></script>
			<script src="{{asset('js/breakpoints.min.js') }}"></script>
			<script src="{{asset('js/util.js') }}"></script>
			<script src="{{asset('js/main.js') }}"></script>

	</body>
</html>