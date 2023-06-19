<?php include('top.php'); 



?>





<!-- Header -->
<header class="ex-header" style="background-image: url(./assets/images/home.jpg); ">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <h1>Helpway Charity</h1>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->


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
                            <span class="d-block thm-clr">Account Details :</span>
                            <h2 class="mb-0">Budaun Helpline &amp; Charitable Trust</h2>

                                <form action="#" method="post">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="d_name" id="d_name" placeholder="Donar name">
                                    <label for="floatingInput">Name</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="d_mobile" id="d_mobile" placeholder="Mobile Number">
                                    <label for="floatingnumber">Mobile Number</label>
                                </div>
                                <div class="form-floating my-4">
                                    <input type="number" class="form-control" name="d_amount" id="d_amount" placeholder="Donation Amount">
                                    <label for="floatingamount">Donation Amount</label>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary" onclick="donation()" ><a href="https://rzp.io/l/qAGZMPgav"> Donate now</a></button>

                                </form>


                            <p class="mb-0"> </p>
                            <a class="thm-btn thm-bg mt-30" href="#" title="">Learn
                                More<span></span><span></span><span></span><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cards -->

<script>
    function donation(){
	var d_name=jQuery("#d_name").val();
	var d_mobile=jQuery("#d_mobile").val();
	var d_amount=jQuery("#d_amount").val();
	
	if(d_name==""){
		alert('Please enter name');
	}
	else if(d_mobile==""){
		alert('Please enter mobile');
	}else if(d_amount==""){
		alert('Please enter amount');
	}else{
		jQuery.ajax({
			url:'donation_amount.php',
			type:'post',
			data:'d_name='+d_name+'&d_mobile='+d_mobile+'&d_amount='+d_amount,
			success:function(result){
				alert(result);
			}	
		});
	}
}
</script>

<!-- Basic -->



<?php include('footer.php'); ?>