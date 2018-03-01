<br>
<br>
<br>
<br>


<div class="container">
  <div class="center">
    <div class="col-md-6 col-md-offset-3">
      <h3>Login</h3>
      <br>
      <?php
      	if( isset( $this->session->nama ) ){
      		echo $this->session->nama .
      					" (<a href='/signout'>signout</a>) | " ;
      	}
      ?>

      <hr>
      <form action="/signin" method="post">
      	Email: <br> <input type="email" name="email" placeholder="Alamat Email Anda"><br>
      	Password: <br> <input type="password" name="password" placeholder="Password Anda"><br><br>
      	<input type="submit" value="Sign In">
      </form>
      <hr>
      <a href="/user/reg">Register</a><br>
    </div>
  </div>
</div>
