<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>GLOBALIS - Veille techno et méthodo: Avancées 2016 et objectifs 2017</title>

    <link rel="stylesheet" href="css/reveal.css">
    <link rel="stylesheet" href="css/theme/globalis.css">

    <!-- Theme used for syntax highlighting of code -->
    <link rel="stylesheet" href="lib/css/zenburn.css">

    <!-- Printing and PDF exports -->
    <script>
        var link = document.createElement( 'link' );
        link.rel = 'stylesheet';
        link.type = 'text/css';
        link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
        document.getElementsByTagName( 'head' )[0].appendChild( link );
    </script>
</head>
<body>
<div class="reveal">
    <div class="slides">
<?php include __DIR__ . '/slides/intro.php'; ?>
<?php include __DIR__ . '/slides/sylvain.php'; ?>
<?php include __DIR__ . '/slides/pierre.php'; ?>
<?php include __DIR__ . '/slides/esteban.php'; ?>
<?php include __DIR__ . '/slides/alex.php'; ?>
<?php include __DIR__ . '/slides/julien.php'; ?>
<?php include __DIR__ . '/slides/conclusion.php'; ?>
    </div>
</div>

<script src="lib/js/head.min.js"></script>
<script src="js/reveal.js"></script>

<script>
    // More info https://github.com/hakimel/reveal.js#configuration
    Reveal.initialize({
        controls: true,
        progress: true,
        history: true,
        center: true,
        width: "80%",
    	height: "100%",
        transition: 'slide',

        // More info https://github.com/hakimel/reveal.js#dependencies
        dependencies: [
            { src: 'plugin/notes/notes.js', async: true },
            { src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } }
        ]
    });
</script>
</body>
</html>
