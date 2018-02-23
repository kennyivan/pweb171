<br>
<br>
<br>
<section id="about">
  <div class="container">
    <div class="center">
      <div class="col-md-6 col-md-offset-3">
        <h1><?= $blog['judul'] ?></h1>

        <p id="isi">
           <?= $blog['isi']  ?>
        </p>
        <br>
        <br>
        <div class="edit">
        <a href="/blog/edit/<?= $blog['blog_ID']?>">Edit</a>
        </div>
        <br>
        <div class="hapus">
        <a href="/blog/delete/<?= $blog['blog_ID']?>">Hapus</a>
        </div>
      </div>
    </div>
  </div>
