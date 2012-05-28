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
			    <a href="#">Page 1</a> <span class="divider">/</span>
			  </li>
			  <li>
			    <a href="/short-films-2">Page 2</a>
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
			  <li class="active">
			    <a href="#">Short Films</a>
			  </li>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12 page-title">
			<span>Short Films</span>
		</div>
	</div>
</div>
<!-- end page title -->


<!-- short films -->
<div class="container">
	<div class="row">
		<div class="span12">
			<ul class="thumbnails">
				<li class="span4">
				    <div class="thumbnails2">
				      <a href="l'apartment-406"><img src="/img/l'apartment-406.jpg" alt=""></a>
				      <h1>l'apartment 406</h1>
				      <p><em>48 Hour Film Festival Winner:</em> Best Use of Character, Best Costumes, Best Musical Score, Best Cinematography, Best Writing, Best Film & Audience Award Winner.</p>
				      <p><a class="btn btn-success" href="l'apartment-406">Read More »</a></p>
				    </div>
				</li>
				<li class="span4">
				    <div class="thumbnails2">
				      <a href="horse"><img src="/img/horse.jpg" alt=""></a>
				      <h1>HORSE</h1>
				      <p>HORSE is the redemptive story of a down and out father who must face his greatest fear by entering a neighborhood father/son HORSE tournament.</p>
				      <p><a class="btn btn-success" href="horse">Read More »</a></p>
				    </div>
				</li>
				<li class="span4">
				    <div class="thumbnails2">
				      <a href="power-of-hands"><img src="/img/power-of-hands.jpg" alt=""></a>
				      <h1>Power Of Hands</h1>
				      <p>A short film by Matt Nunn</p>
				      <p><a class="btn btn-success" href="power-of-hands">Read More »</a></p>
				    </div>
				</li>		  
			</ul>
		</div>
	</div>
</div>
<!-- end short films -->


<!-- thumbnails -->
<div class="container">
	<div class="row">
		<div class="span12">
			<ul class="thumbnails">
				<li class="span4">
				    <div class="thumbnails2">
				      <a href="snapshot"><img src="/img/snapshot.jpg" alt=""></a>
				      <h1>Snapshot</h1>
				      <p>A young woman discovers a lost heirloom that brings her mystery and terror.</p>
				      <p><a class="btn btn-success" href="snapshot">Read More »</a></p>
				    </div>
				</li>
<!-- 				<li class="span4">
				    <div class="thumbnails2">
				      <a href="oaks-motel"><img src="/img/oaks-motel.jpg" alt=""></a>
				      <h1>Oaks Motel</h1>
				      <p></p>
				      <p><a class="btn btn-success" href="oaks-motel">Read More »</a></p>
				    </div>
				</li> -->
				<li class="span4">
				    <div class="thumbnails2">
				      <a href="trapped"><img src="/img/trapped.jpg" alt=""></a>
				      <h1>Trapped</h1>
				      <p>A young woman receives a VHS tape from her recently abducted husband and turns to a local Paranormal Expert for help. A failed attempt to locate him reveals that things are not what they seem, or are they?</p>
				      <p><a class="btn btn-success" href="trapped">Read More »</a></p>
				    </div>
				</li>
				<li class="span4">
				    <div class="thumbnails2">
				      <a href="/short-films-2/forgotten"><img src="/img/forgotten.jpg" alt=""></a>
				      <h1>Forgotten</h1>
				      <p>A man wakes up in an apartment not his own, in a life not his own. He spends the day wandering Paris.</p>
				      <p><a class="btn btn-success" href="/short-films-2/forgotten">Read More »</a></p>
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
			    <li class="active">
			      <a href="short-films">1</a>
			    </li>
			    <li><a href="/short-films-2">2</a></li>
			    <li><a href="/short-films-2">Next</a></li>
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
		$('.dropdown-toggle').dropdown()
		$(".collapse").collapse()
	</script>

	<script>
		$('li').click(function(){
			$('li.active').removeClass('active');
				$(this).addClass('active');
	});
	</script>

<!-- end javascript -->

</body>