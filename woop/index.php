<!DOCTYPE html>
<!--[if lte IE 8]><html class="ieold"><![endif]-->
<!--[if IE 9 ]><html class="ie"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->
    <head>

        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Planet Z</title>

		<meta name="description" content="description">
		<meta name="robots" content="index,follow">
		<meta name="viewport" content="width=device-width">
		<meta name="author" content="">

		<meta property="og:title" content="title" />
		<meta property="og:description" content="description" />
		<meta property="og:url" content="url" />
		<meta property="og:site_name" content="ShowClix Ticketing" />
		<meta property="fb:page_id" content="10893981495" />

		<link rel="apple-touch-icon-precomposed" href="touchicon.png" />
		<link rel="icon" href="favicon.png">
		<!--[if IE]><link rel="shortcut icon" href="favicon.ico"><![endif]-->
		<meta name="msapplication-TileColor" content="#393e5c">
		<meta name="msapplication-TileImage" content="win8icon.png">

        <link rel="stylesheet" href="assets/css/main.css">

        <!-- https://github.com/aFarkas/html5shiv -->
        <!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script><![endif]-->

    </head>
    <body>

        <div id="fb-root"></div>

		<div class="container content">
			<?include 'partials/body.php';?>
		</div>

        <?include 'partials/footer.php';?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/lib/jquery-1.9.1.min.js"><\/script>')</script>

        <script data-main="assets/js/main" src="assets/js/require.js"></script>


		<script type="text/javascript">

		// Google Analytics
	    var _gaq=[['_setAccount', 'UA-XXXXX-X'],['_trackPageview']];
	    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	    g.src='//www.google-analytics.com/ga.js';
	    s.parentNode.insertBefore(g,s)}(document,'script'));

        (function(doc, script) {
            var js,
            fjs = doc.getElementsByTagName(script)[0],
            add = function(url, id) {
                if (doc.getElementById(id)) {return;}
                js = doc.createElement(script);
                js.src = url;
                id && (js.id = id);
                fjs.parentNode.insertBefore(js, fjs);
            };
            // Google+ button
            // add('//apis.google.com/js/plusone.js');
            // Facebook SDK
            add('//connect.facebook.net/en_US/all.js#xfbml=1', 'facebook-jssdk');
            // Twitter SDK
            add('//platform.twitter.com/widgets.js', 'twitter-wjs');
        }(document, 'script'));
        </script>
    </body>
</html>
