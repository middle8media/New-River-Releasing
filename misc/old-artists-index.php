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
<div class="container">
	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
			  <li>
			    <a href="/">Home</a> <span class="divider">/</span>
			  </li>
			  <li class="active">
			    <a href="#">Artists</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>Artists</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- artist -->
<div class="container">
	<div class="row">
		<div class="span12">
		<ul class="thumbnails">
		  <li class="span4">
		    <div class="thumbnail">
		      <a href="david-stanley" title=""><img src="/img/stanley-big.jpg" alt=""></a>
		      <h1>David Stanley</h1>
		      <p>David Stanley is an illustrator and painter with an impeccable eye for design and beauty, topped off with a careful attention to the technical craft. But his greatest skill has to be....</p>
		      <p><a class="btn btn-success" href="david-stanley">Read More »</a></p>
		    </div>
		  </li>
		  <li class="span4">
		    <div class="thumbnail">
		      <a href="joh-harp" title=""><img src="/img/joh-big.jpg" alt=""></a>
		      <h1>Joh Harp</h1>
		      <p>Joh Harp is a hybrid of an illusionist and a mad scientist. Whether created chemically or through illusion, he brings to life every prop, set, character or creature you could imagine.</p>
		      <p><a class="btn btn-success" href="joh-harp">Read More »</a></p>
		    </div>
		  </li>
		  <li class="span4">
		    <div class="thumbnail">
		      <a href="david-gaadt" title=""><img src="/img/gaadt-big.jpg" alt=""></a>
		      <h1>David Gaadt</h1>
		      <p>David Gaadt is an illustrator and painter extraordinaire. His work in advertising and publishing across the globe have helped bring some of the finest campaigns and books to life.</p>
		      <p><a class="btn btn-success" href="david-gaadt">Read More »</a></p>
		    </div>
		  </li>	  		  		  
		</ul>
		</div>
	</div>
</div>
<!-- end artist -->


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