
    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="footer-contents" data-aos="fade-down">
                <div class="top-head d-flex align-items-center justify-content-start gx-3">
                    <img src="./assets/img/icon.PNG" alt="" width="30">
                    <h5 class="my-2 mx-2 mb-2">Capita Profits</h5>
                </div>
                <p class="mt-3"><i class="fa fa-copyright"></i> 2021 Capita Profits<br>Grow Your Wealth with Confidence</p>
            </div>
            <div class="footer-contents" data-aos="fade-down">
                <h5 class="mb-3">Packages</h5>
                <p><a href="#" class="footer-link">Basic</a></p>
                <p><a href="#" class="footer-link">Advance</a></p>
                <p><a href="#" class="footer-link">Premium</a></p>
                <p><a href="#" class="footer-link">Platinuim</a></p>
            </div>
            <div class="footer-contents" data-aos="fade-down">
                <h5 class="mb-3">LINK</h5>
                <p><a href="#" class="footer-link">Home</a></p>
                
                <p><a href="#" class="footer-link">Register</a></p>
                <p><a href="#" class="footer-link">Login</a></p>
            </div>
            <div class="footer-contents" data-aos="fade-down">
                <h5 class="mb-3">Learn</h5>
                <p><a href="#" class="footer-link">What is bitcoin</a></p>
                <p><a href="#" class="footer-link">What is Etherum</a></p>
                <p><a href="#" class="footer-link">Getting Started</a></p>
                <p><a href="#" class="footer-link">Blog</a></p>
            </div>
            <div class="footer-contents" data-aos="fade-down">
                <h5 class="mb-3">Company</h5>
                <p><a href="#" class="footer-link">About Us</a></p>
                <p><a href="#" class="footer-link">Contacts</a></p>
                <p><a href="#" class="footer-link">Terms</a></p>
                <p><a href="#" class="footer-link">Legals</a></p>
            </div>
           
        </div>
    </footer>
    <!-- End footer section -->


    <!-- Copyright section -->
    <div class="copyright">
        <div class="container d-flex align-items-center justify-content-between pt-3">
            <div class="socials d-flex align-items-center justify-content-between">
                <p><a href="#"><i class="bi bi-linkedin"></i></a></p>
                <p><a href="#"><i class="bi bi-facebook"></i></a></p>
                <p><a href="#"><i class="bi bi-twitter"></i></a></p>
            </div>

            <div class="copyright-texts d-flex align-items-center justify-content-between">
                <p>Ceaser<sup>@</sup> Inc. </p>
                <p> 2011. </p>
                <p> All Rights Reserved </p>
            </div>
        </div>
    </div>
    <!-- End copyright section -->


    <!-- Scripts Assets -->
    <script src="assets/aos/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/purecounter/purecounter_vanilla.js"></script>
    <!-- Main JS file -->
    <script src="js/app.js"></script>

    <script>
            document.addEventListener('DOMContentLoaded', function() {
  var sendButton = document.getElementById('sendButton');
  var contactForm = document.getElementById('contactForm');

  sendButton.addEventListener('click', function() {
    var formData = new FormData(contactForm);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'send_email.php'); // Replace with the URL of your server-side script

    xhr.onload = function() {
      if (xhr.status === 200) {
        // Handle success response
        alert('Email sent successfully!');
        contactForm.reset();
      } else {
        // Handle error response
        alert('Error sending email. Please try again later.');
        console.log(xhr.responseText);
      }
    };

    xhr.onerror = function() {
      // Handle error
      alert('Error sending email. Please try again later.');
    };

    xhr.send(formData);
  });
});

    </script>
</body>

</html>