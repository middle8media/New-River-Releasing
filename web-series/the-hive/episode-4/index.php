<!doctype html>
<html>
<head>
<?php include '../../../head.php'; ?>
</head>

<body>
<!-- navigation -->
<?php include '../../../nav.php'; ?>
<!-- end navigation -->


<!-- header -->
<?php include '../../../header.php'; ?>
<!-- end header -->


<!-- page title -->
<div class="container">
	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
			  <li>
			    <a href="/">Home</a> <span class="divider">/</span>
			  </li>
			  <li >
			    <a href="/web-series">Web Series</a> <span class="divider">/</span>
			  </li>
			  <li>
			    <a href="../">The Hive</a> <span class="divider">/</span>
			  </li>
			  <li class="dropdown active">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				    Episodes
				    <b class="caret"></b>
				  </a>
				  <ul class="dropdown-menu">
				    <a href="../episode-1"><i class="icon-film"></i> Ep 1</a>
				    <a href="../episode-2"><i class="icon-film"></i> Ep 2</a>
				    <a href="../episode-3"><i class="icon-film"></i> Ep 3</a>
				    <a href="../episode-4"><i class="icon-film"></i> Ep 4</a>
				    <a href="../episode-5"><i class="icon-film"></i> Ep 5</a>
				    <a href="../episode-6"><i class="icon-film"></i> Ep 6</a>
				    <a href="../episode-7"><i class="icon-film"></i> Ep 7</a>
				    <a href="../episode-8"><i class="icon-film"></i> Ep 8</a>
				    <a href="../episode-9"><i class="icon-film"></i> Ep 9</a>
				    <a href="../episode-10"><i class="icon-film"></i> Ep 10</a>
				  </ul>
			  </li>			  
			</ul>

		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>The Hive - Ep 4</span>
		</div>
	</div>
</div>

<!-- end page title -->


<!-- video & -->
<div class="container">
	<div class="row">
		<div class="span12 video">

		</div>
	</div>
</div>
<!-- end video & -->


<!-- bottom border -->
<div class="container">
	<div class="row">
		<div class="span12 bottom-border">
		</div>
	</div>
</div>
<!-- end bottom border -->






<!-- footer -->
<?php include '../../../footer.php'; ?>
<!-- end footer -->


<!-- javascript -->


	<script src="/js/jquery.fitvids.js"></script>

	<script>
		$('li').click(function(){
			$('li.active').removeClass('active');
				$(this).addClass('active');
	});
	</script>

	<script type="text/javascript">
		$(".video").fitVids();
	</script>

	<script>
		$('.dropdown-toggle').dropdown()
		$(".collapse").collapse()
		$('.carousel').carousel()
	</script>


<!-- end javascript -->


</body>