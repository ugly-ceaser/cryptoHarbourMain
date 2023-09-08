<?php

include 'header.php';

?>

    <section class="hero" id="hero" data-aos="fade-down">
    <div class="container d-flex justify-content-center bg-light">
        <form method="post" action="./scripts/funct.php" >
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" name="username">
              <small id="emailHelp" class="form-text text-muted">We'll never share your details with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Submit</button>
            <small id="emailHelp" class="form-text text-muted">Don't Have An Account? <a href="./Register.php">Register</a>.</small>
          </form>
    </div>

    </section>


<?php

include 'footer.php';

?>





