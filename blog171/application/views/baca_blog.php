<br>
<br>
<br>
<section id="about">
  <div class="container">
    <div class="center">
      <div class="col-md-6 col-md-offset-3">
        <h1>Title: <?= $blog['judul'] ?></h1>
        <hr>
        <br>

        <p id="isi">
              <?= $blog['isi']  ?>
        </p>
        <br><br><br>
        <hr>
        <h3>Creator: <?= $blog['nama']?> </h3>
        <h3>Email: <?= $blog['email']?> </h3>
        <h3>Last Update: <?= $blog['tanggal']?> </h3>

        <br><br><br>
        <?php if($this->session->uid == $blog['user_ID']){?>
        <div class="edit">
        <a id="edit" href="/blog/edit/<?= $blog['blog_ID']?>">Edit</a>
        </div>
        <br>
        <div class="hapus">
        <a id="erase" href="/blog/delete/<?= $blog['blog_ID']?>">Delete</a>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>
