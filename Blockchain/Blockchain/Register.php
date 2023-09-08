<?php

include 'header.php';

?>

    <section class="hero" id="hero" data-aos="fade-down">
    <div class="container">
        <form action="scripts/funct.php" method="post">
            <div class="form-row row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Full Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Your Fullname" name="fname">
                </div><div class="form-group col-md-6">
                    <label for="inputEmail4">User Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Your Unique Username" name="username">
                  </div>
              <div class="form-group col-md-12">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Confirm Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password" name="confirmPassword">
              </div>
            </div>
            <div class="form-group col-md-4">
              <label for="inputAddress">Phone Number</label>
              <input type="tel" class="form-control" id="inputAddress" placeholder="Enter Your Phone Number" name="terms">
            </div>
            
            <div class="form-row ">

              <div class="form-group col-md-4">
                <label for="inputCity">Referee</label>
                <input type="text" class="form-control" id="inputCity" placeholder="Enter Your Referee Code" name="referalCode">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Package</label>
                <select id="inputState" class="form-control" name="package">
                  <option selected>Choose...</option>
                  <option value="basic">Basic</option>
                  <option value="advance">Advance</option>
                  <option value="premium">Premium</option>
                  <option value="platinium">Platinium</option>
                </select>
              </div>
             
            </div>

            <div class="form-check mt-3 mb-3">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">i agree to the <a href="#">Terms and Conditions</a> of the investment</label>
              </div>
            
            <button type="submit" class="btn btn-primary" name="register">Sign in</button>
            <small id="emailHelp" class="form-text text-muted">Already Have An Account? <a href="./login.html">Login</a>.</small>
        </form>
    </div>

    </section>



<?php

include 'footer.php';

?>



