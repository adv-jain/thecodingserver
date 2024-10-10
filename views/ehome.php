<?php

require_once "Inc/head.php";
require_once "Inc/nav.php";

?>



<header class="bg-light py-5 text-white" id="home-header">
    <div class="container">
        <div class="row">
            <div class="col  d-flex align-items-center flex-column justify-content-center ">
            <h1>
            Interested in FREE Travel Enquiries?
            </h1>
            <h2 class="mt-4">
                FREE LIST & grow your business quickly !
                Call Us : 1800-121-4252
            </h2>
            </div>
            <div class="col justify-content-center d-flex">

            <div id="home-form">
                <h1 class="h3 mb-3 fw-normal fs-4">Fill the form to start now</h1>
                <form  class="text-dark">
    
                    <div class="form-floating">
                        <input type="tel" class="form-control" id="floatingMobile" placeholder="Mobile">
                        <label for="floatingMobile">Mobile</label>
                    </div>
                    
                    <div class="form-floating my-2">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                    </div>
    
                    <div class="form-floating">
                    <input type="email" class="form-control" id="floatingCompany" placeholder="name@example.com">
                    <label for="floatingCompany">Company Name</label>
                    </div>
    
                    <div class="d-flex gap-3 text-start my-3">
                    <input class="form-check" type="radio" name="youare" value="TravelAgency" id="TravelAgency">
                    <label for="TravelAgency">Travel Agency</label>
                    
                    <input class="form-check" type="radio" name="youare" value="dmc" id="dmc">
                    <label for="dmc">DMC</label>
                    
                    <input class="form-check" type="radio" name="youare" value="hotel" id="hotel">
                    <label for="hotel">Hotel</label>
                    </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Free Sign Up</button>
               <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="agreet&c" />
                <label class="form-check-label small" for="agreet&c"> I agree to get all Email/SMS from you
                </label>
               </div>
             
               
                </form>
            </div>
                
            </div>
        </div>
    </div>
</header>





<?php

require_once 'Inc/footer.php';

?>
