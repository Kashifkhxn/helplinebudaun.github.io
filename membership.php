<?php
include('top.php');
require('connection.inc.php');
require('functions.inc.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $m_name = get_safe_value($con, $_POST['m_name']);
  $mobile = get_safe_value($con, $_POST['mobile']);
  $email = get_safe_value($con, $_POST['email']);
  mysqli_query($con, "INSERT INTO membership (m_name, mobile, email) VALUES ('$m_name', '$mobile', '$email')");
  echo "Thank you";
}
?>

<!-- Header -->
<header class="ex-header" style="background-image: url(./assets/images/home.jpg); ">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <h1>Helpway Charity</h1>
            </div>
        </div>
    </div>
</header>

<section class="abt-us-home">
    <div class="w-100 pt-100 pb-100 position-relative">
        <img class="img-fluid sec-top-mckp position-absolute" src="./assets/images/sec-top-mckp.webp" alt="">
        <div class="container">
            <div class="about-wrap4 w-100">
                <div class="row align-items-center">
                    <div class="col-md-12 col-sm-12 col-lg-7 order-lg-1">
                        <div class="about-video position-relative w-100">
                            <img class="img-fluid w-100" src="./assets/images/dnate.jpg" alt="">
                            <a class="position-absolute spinner bg-color1"
                                href="https://www.youtube.com/embed/WxuHBTES2-s" data-fancybox="" title=""><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-5">
                        <div class="about-inner4 w-100">
                            <span class="d-block thm-clr">Membership</span>
                            <h2 class="mb-0">Membership Form for Budaun Helpline &amp; Charitable Trust</h2>

                            <form action="#" method="post">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="m_name" id="name" placeholder="Member name">
                                    <label for="name">Name</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number">
                                    <label for="mobile">Mobile Number</label>
                                </div>
                                <div class="form-floating my-4">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                                    <label for="email">Email</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Membership</button>
                            </form>

                            <p class="mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('form').submit(function (e) {
            e.preventDefault();
            var name = $('#name').val();
            var mobile = $('#mobile').val();
            var email = $('#email').val();

            if (name === "") {
                alert('Please enter name');
            } else if (mobile === "") {
                alert('Please enter mobile');
            } else if (email === "") {
                alert('Please enter email');
            } else {
                $.ajax({
                    url: 'membership_am.php',
                    type: 'post',
                    data: { m_name: name, mobile: mobile, email: email },
                    success: function (result) {
                        alert(result);
                    }
                });
            }
        });
    });
</script>

<?php include('footer.php'); ?>
