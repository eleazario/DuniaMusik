<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'head.html'?>
    <link rel="stylesheet" href="css/stylecontact.css">

    <title>Dunia Musik</title>
</head>
<body>
    <!-- Nav -->
    <?php include_once 'nav.html'?>
    
      <!-- Contact -->
      <div class="contact">
        <h1 class="font-weight-bold bold">CONTACT</h1>
        <hr class="garis">
      </div>
      <br>
      <div class="container">
        <p class="size">Kami selalu berusaha meningkatkan pengalaman kamu.Ikuti dan kirim feedback kamu untuk mendukung DUNIAMUSIK.
            <br>
            <span>Kami menghargai saran dan komentar kamu.</span>
        </p>
        <p class="size">Kamu bisa menghubungi kami melalui</p>
        <br><br>
        <form class="needs-validation" novalidate>
            <div class="row">
                <div class="col-md-4">
                    <p class="font-weight-bold font-1"><i class="fas fa-envelope"></i> HUBUNGI KAMI</p>
                </div>
                <div class="col-md-4">
                    <input required class="form-control rounded-pill border-0 form-name" id="myname" type="text" placeholder="Your name">
                    <div class="invalid-tooltip">
                        Silahkan masukkan nama anda.
                      </div>
                </div>
                <div class="col-md-4">
                    <input required class="form-control rounded-pill border-0 form-email" id="myemail" type="email" placeholder="Your email">
                    <div class="invalid-tooltip">
                        Silahkan masukkan email.
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p class="font-2"><i class="fas fa-circle circle"></i> +62 xxxx-xxxx-xxxx</p>
                </div>
                <div class="col-md-6">
                    <input required class="form-control rounded-pill border-0 form-subject" id="subject" type="text" placeholder="Subject">
                    <div class="invalid-tooltip">
                        Silahkan isi subject.
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p class="font-3"><i class="fas fa-circle circle"></i> contact@duniamusik.com</p>
                </div>
                <div class="col-md-6">
                    <textarea id="message" rows="6" cols="100" class="rounded form-control border-0 form-message" placeholder="Message"></textarea>
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary rounded-pill">Send Message</button>
                </div>
            </div>
        </form>
      </div>

      <!-- Java Script -->
    <script>
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>

      <?php include_once 'script.html'?>
</body>
</html>