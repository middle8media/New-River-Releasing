<!doctype html>
<html>
<head>
<?php include '../head.php'; ?>
</head>

<body>
<!-- navigation -->
<?php include '../nav.php'; ?>
<!-- end navigation -->


<!-- header -->
<?php include '../header.php'; ?>
<!-- end header -->


<!-- page title -->
<!-- <div class="container">
	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
			  <li>
			    <a href="/">Home</a> <span class="divider">/</span>
			  </li>
			  <li class="active">
			    <a href="#">Short Films 2</a>
			  </li>
			</ul>
		</div>
	</div>
</div> -->

<div class="container">
	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
			  <li>
			    <a href="/">Home</a> <span class="divider">/</span>
			  </li>
			  <li>
			    <a href="/short-films">Page 1</a> <span class="divider">/</span>
			  </li>
			  <li class="active">
			    <a href="/short-films-2">Page 2</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>Short Films 2</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- thumbnails -->
<div class="container">
	<div class="row">
		<div class="span12">
			<ul class="thumbnails">
				<li class="span4">
				    <div class="thumbnails2">
				      <a href="forgotten"><img src="/img/forgotten.jpg" alt=""></a>
				      <h1>Forgotten</h1>
				      <p>A man wakes up in an apartment not his own, in a life not his own. He spends the day wandering Paris.</p>
				      <p><a class="btn btn-success" href="forgotten">Read More »</a></p>
				    </div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- end thumbnails -->


<!-- pagination -->
<!-- <div class="container">
	<div class="row">
		<div class="span12">
			<div class="pagination pagination-right">
			  <ul>
			    <li><a href="/short-films">Prev</a></li>
			    <li>
			      	<a href="/short-films">1</a>
			    </li>
			    <li class="active">
			    	<a href="short-films-2">2</a></li>
			  </ul>
			</div>
		</div>
	</div>
</div> -->
<!-- end pagination -->


<!-- footer -->
<?php include '../footer.php'; ?>
<!-- end footer -->


<!-- javascript -->


	<script>
		$('li').click(function(){
			$('li.active').removeClass('active');
				$(this).addClass('active');
	});
	</script>

	<script>
		$('.dropdown-toggle').dropdown()
		$(".collapse").collapse()
	</script>

<!-- end javascript -->

</body>