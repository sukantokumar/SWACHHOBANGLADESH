<?php
include_once("header.php");

if (isset($_REQUEST['contact-button'])) {
    // removes backslashes
    $result = save_contact_data();
    if ($result) {
        echo "<div id='messageHide' class='form'>
                  <h3>Thank you.Get in touch successfully.</h3><br/>
                  </div>";

    } else {
        echo "<div id='messageHide'  class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  </div>";
    }


}


?>

    <main>

        <!-- Form -->
        <div class="container my-5">
            <h3 class="header-color3">Contact Info</h3>
        </div>


        <!-- Social Media -->
        <section class="contact-section">
            <div class="container text-center my-5">
                <div class="row">
                    <div class="col">

                        <h6 class="header-color2">Get in touch</h6>

                        <div class="form-container">

                            <form action="" method="post">
                                <div class="row form-group">
                                    <label for="colFormLabelLg"
                                           class="col-sm-2 col-form-label col-form-label-lg"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg" name="name"
                                               placeholder="Name" required aria-label="Name">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="colFormLabelLg"
                                           class="col-sm-2 col-form-label col-form-label-lg"></label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control form-control-lg" name="email"
                                               id="colFormLabelLg" required placeholder="Email">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="colFormLabelLg"
                                           class="col-sm-2 col-form-label col-form-label-lg"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg" name="subject"
                                               placeholder="Subject" required aria-label="Subject">
                                    </div>
                                </div>

                                <div class="row form-group form-container2">
                                    <label for="message"></label>
                                    <textarea class="form-control form-control-lg" id="message" name="message" required
                                              rows="8"
                                              placeholder="Message"></textarea>
                                </div>

                                <button type="submit" class="btn btn-succes form-button" name="contact-button" >Send
                                </button>

                            </form>
                        </div>

                    </div>

                    <div class="col">


                        <p><span class="fw-bold">Address:</span>14 Dhanmondi,Dhaka</p>
                        <p><span class="fw-bold">We are Open:</span> Open 9 AM to 5 PM</p>
                        <p><span class="fw-bold">Call:</span> +88(0) 1776268597</p>
                        <p><span class="fw-bold">Email:</span> info@bdclean.com</p>

                        <h3 class="header-color4">Stay Social </h3>

                        <a href="https://www.facebook.com/profile.php?id=100093169444470&mibextid=ZbWKwL"
                           target="blank">
                            <i class="fa-brands fa-square-facebook fa-2xl icon-size" style="color: #004020;"></i>
                        </a>

                        <a href="" target="blank">
                            <i class="fa-brands fa-instagram fa-2xl icon-size" style="color: #004020;"></i>
                        </a>

                        <a href="" target="">
                            <i class="fa-brands fa-youtube fa-2xl icon-size" style="color: #004f27;"></i>
                        </a>

                    </div>
                </div>
            </div>
        </section>
        <!-- MAP -->
        <section class="mb-5 container">
            <img class="w-100" src="images/Map.png" alt="">
        </section>


    </main>


<?php
include_once("footer.php");
?>