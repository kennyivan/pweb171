  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand">
            <a href="index.html"><h1></h1></a>
          </div>
        </div>

        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="/" class="active">Home</a></li>
              <?php if($this->session->uid){?>
              <li role="presentation"><a href="/blog/post">Tulis Blog</a></li>
              <li role="presentation"><a href="/bloguser/<?= $this->session->uid ?>">Blog User</a></li>
              <?php } ?>
              <li role="presentation"><a href="/user/<?= $this->session->uid ?>">Profile</a></li>
              <li role="presentation"><a href="/log">Login</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
