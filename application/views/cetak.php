<!DOCTYPE html>
<head>

<!-- Meta Tags -->
<title>Tugas FOSS</title>   

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="../../asset/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="../../asset/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="../../asset/css/supersized.css" rel="stylesheet">
<link href="../../asset/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="../../asset/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="../../asset/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="../../asset/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="../../asset/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="../../asset/css/responsive.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="../../asset/js/modernizr.js"></script>

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Analytics -->

</head>
<body>
<center>
	<h2><font size='15' face='Tahoma' color='white'>List Film </font></h2>
	<?php echo $table; ?>
</center>
</body>
<br>
<center>
<a href="javascript:window.print()"><input id="tombol" type="submit" value="   Print   " name="print"></a>
</center>