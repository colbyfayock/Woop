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