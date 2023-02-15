<?php

/*

// Template Name: Contact

*/ 



get_header() ?>

    <!-- Start Contact Me  -->
    <div class="contact">
        <div class="container">
            <h3>Contact Me</h3>

            <form action="mailto:gabertarikgaber27@gmail.com" method="post" class="needs-validation" novalidate>
                <div class="mb-3 mt-3 " >
                    <label for="uname" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="uname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please Entre Your Name.</div>
                    </div>
                <div class="mb-3 mt-3">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="text" class="form-control" id="uphone" placeholder="Enter phone" name="phone" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please Entre Your Number .</div>
                    </div>
                <div class="mb-3 mt-3">
                    <label for="umail" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="uemail" placeholder="Enter email" name="email" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please Entre Your Email .</div>
                    </div>
                    <div class="mb-3">
                    <label for="subject" class="form-label">Subject:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Enter Subject" name="sub" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please Entre The Subject .</div>
                    </div>
                    <div class="mb-3">
                    <label for="mes" class="form-label">Message:</label>
                    <textarea  class="form-control" placeholder="Entre Message" name="message" id="msg" cols="30" rows="10" required></textarea>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please Entre Your Message .</div>
                    </div>
                    <button type="submit" class=" was-validated btn btn-primary">Submit</button>
            </form>
            
            <!-- <div class="col-md-6 col-lg-6 col-sm-12 text-sm-center text-end mt-5 text-end float-end"> -->

                <!-- </div> -->

        </div>
    </div>
        <!-- End Contact Me  -->

<?php get_footer() ?>