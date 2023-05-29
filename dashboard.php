<?php
//include auth_session.php file on all user panel pages

?>

<?php
include_once("header.php");

if (isset($_REQUEST['donation-button'])) {
    // removes backslashes
    $result = save_donation_data();
    if ($result) {
        echo "<div id='messageHide' class='form'>
                  <h3>Thank you for giving donation for Swachho BD successfully.</h3><br/>
                  </div>";

    } else {
        echo "<div id='messageHide' class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  </div>";
    }


}
?>
<main>
    <!-- Content-1 -->
    <section id="bg-color">
        <div class="container">
            <h4 class="fw-bold text-center pt-5">Our Mission</h4>
            <h1 class="fw-bold text-center">Build a Clean Bangladesh</h1>
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 my-2 pt-5 mt-5">
                    <img src="images/dustbin.png" alt="">
                    <p class=".text-dark">We create a mass awareness on clean environment and its impacts. To change the
                        culture
                        and mind setup about waste management.We create a mass awareness on clean environment and its
                        impacts. To
                        change the culture and mind setup about waste management.</p>


                    <!-- //**** Button trigger modal ****// -->
                    <!--                <button type="button" class="btn btn-success button-color rounded-3 mt-4" data-bs-toggle="modal"-->
                    <!--                        data-bs-target="#exampleModal">-->
                    <!--                    Learn More-->
                    <!--                </button>-->

                    <!-- //****Modal****// -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirm Purchase</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to start?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success">Yes,confirm!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 my-2 pt-5 mt-5">
                    <img src="images/BD.png" alt="">
                    <p class=".text-dark">Swachho BD a youth based platform covered with red green
                        spirit is working relentlessly to name Bangladesh
                        as the cleanest country on the world.</p>


                    <!-- //**** Button trigger modal ****// -->
                    <!--                <button type="button" class="btn btn-light btn btn-outline-success button-color rounded-3 mt-4"-->
                    <!--                        data-bs-toggle="modal" data-bs-target="#exampleModal">-->
                    <!--                    Donation-->
                    <!--                </button>-->

                    <!-- //****Modal****// -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirm Purchase</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to start?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success">Yes,confirm!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class=" text-center">Please donate for Swachho BD </h1>

            <div class="form-container" style=" margin: 0 auto;">

                <form action="" method="post">
                    <div class="row form-group">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-lg" placeholder="First Name" required
                                   name="first_name" aria-label="Name">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-lg" id="colFormLabelLg" required
                                   name="last_name" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control form-control-lg" placeholder="Email" required
                                   name="email" aria-label="Subject">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-lg" placeholder="Phone" required
                                   name="phone" aria-label="Subject">
                        </div>
                    </div>

                    <div class="row form-group ">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Donation</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-lg" placeholder="Amount" required
                                   name="donation" aria-label="Subject">
                        </div>
                    </div>
                    <div class="row form-group ">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
                        <div class="col-sm-10">
                            <button type="submit"  class="btn btn-succes form-button " name="donation-button"
                                    style="margin-left:0px;">Donation Now
                            </button>
                        </div>
                    </div>


                </form>
            </div>
        </div>


    </section>
</main>
<?php
include_once("footer.php");
?>
