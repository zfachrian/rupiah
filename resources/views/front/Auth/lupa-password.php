<?php include("./templates/header.php") ?>

<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm pb-5 slider-search">
  <div class="container mb-3">

<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mb-4 green-rujuk-no-hover text-center">Lupa Password ?</h4>
	<form action="./ganti-password-before-login.php" onsubmit="lupapassword()">
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Email" type="email" required>
    </div> <!-- form-group// -->
    <div class="form-group">
        <button type="submit" class="btn btn-fill"> Lupa Password  </button>
        <script>
        function lupapassword(){
				alert('Silahkan cek email anda untuk mereset password anda');
        window.location = './ganti-password-before-login.php';
			}
      </script>
    </div> <!-- form-group// -->
    <p class="text-center"> <a href="./index.php" style:="text-decoration:none;" class="green-rujuk">Masuk</a></p>
</form>
</article>

  </div> <!-- container .//  -->
</section>

<!-- ========================= SECTION CONTENT END// ========================= -->

<?php include("./templates/footer.php") ?>

</body>
</html>