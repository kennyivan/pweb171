<br>
<br>
<br>
<br>
<br>


<section id="about">
  <div class="container">
    <div class="center">
      <div class="col-md-6 col-md-offset-3">
        <form action="/blog/subedit/<?=$blog_ID?>"method="post">
          <h1>Judul</h1> <input type="text" name="judul" value="<?= $judul?>">
          <h1>Isi blog:</h1>
          <textarea name="isi" rows="8" cols="80"><?= $isi?></textarea>
          <br><br>
          <input type="submit" value="Simpan">

        </form>
      </div>
    </div>
  </div>
