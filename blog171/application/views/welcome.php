<div id="home">
  <div class="slider">
    <div class="">
      <div id="about-slider">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators visible-xs">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1" ></li>
            <li data-target="#carousel-slider" data-slide-to="2" ></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active">
              <img src="assets/img/03.jpg" class="img-responsive" alt="">
            </div>
            <div class="item">
              <img src="assets/img/03.jpg" class="img-responsive" alt="">
            </div>
            <div class="item">
              <img src="assets/img/03.jpg" class="img-responsive" alt="">
            </div>
          </div>


        </div>
        <!--/#carousel-slider-->
      </div>
      <!--/#about-slider-->
    </div>
  </div>
</div>

<section id="about">
  <div class="container">
    <div class="center">
      <div class="col-md-6 col-md-offset-3">
        <h2>Blog Novel Xianxia</h2>
        <hr>
        <p class="lead">A Collection of Fantasy Xianxia Novel</p>
      </div>
    </div>
  </div>


<br><br>
<h3>Blogs</h3>
<br><br>
<hr>
<?php
	foreach( $blogs as $blog ){
		echo "<a id='cblog' href='/blog/" . $blog['blog_ID'] ."'>" . $blog['judul']."<a><br><br>";
	}

 ?>
<hr>
