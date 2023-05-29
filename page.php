<?php


if (isset($_REQUEST['contact-button'])) {
    // removes backslashes
    $result = save_contact_data();
    if ($result) {
        echo "<div id='messageHide' class='form'>
                  <h3>Thank you.Get in touch successfully.</h3><br/>
                  </div>";

    } else {
        echo "<div id='messageHide' class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  </div>";
    }


}

?>

<main>
    <section class="background-color">
        <div class="container">
            <div class="row p-5">
                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 my-2 pt-5 mt-5">
                    <p class="text-white">It’s not too late to save the world</p>
                    <h1 class="fw-bold text-white">STOP PLASTIC
                        POLLUTION</h1>

                    <!-- //**** Button trigger modal ****// -->
                    <button type="button" class="btn btn-light button-color rounded-3 mt-4 text-success"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                        Get Started
                    </button>
                    <a href="dashboard">
                        <button type="button"
                                class="btn btn-primary button-color rounded-3 mt-4 btn btn-outline-light text-white fw-bold"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Learn More
                        </button>
                    </a>

                    <!-- //****Modal****// -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Click to start</h5>
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
                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 my-5"><img src="images/Main.png" class="img-fluid"
                                                                          alt="">
                </div>

            </div>
        </div>
    </section>


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
                    <a href="dashboard">
                        <button type="button" class="btn btn-success button-color rounded-3 mt-4" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                            Learn More
                        </button>
                    </a>

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
                    <a href="dashboard">
                        <button type="button" class="btn btn-light btn btn-outline-success button-color rounded-3 mt-4"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Donation
                        </button>
                    </a>

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
        </div>
    </section>


    <!-- Blog section -->
    <h4 class="fw-bold text-center mt-5">Our Blog</h4>
    <h1 class="fw-bold text-center mb-5">Recent Articles</h1>
    <div class="container text-center">
        <div class="row row-cols-2">
            <div class="row">
                <div class="card w-100" style="width: 18rem;">
                    <img src="images/Stop Plastic Pollution.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button class="curved-button d-flex align-items-center mb-5">Plastic Pollution</button>
                        <h5 class="card-title header-color mb-4">Stop Plastic Pollution 2021</h5>
                        <p class="card-text txt-color7">Morbi volutpat nisi a ligula vestibulum placerat. Suspendisse
                            venenatis
                            pulvinar nibh
                            sed convallis. Cras elementum nunc a purus sodales tincidunt. Duis fringilla quam at tellus
                            …</p>


                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/Air Pollution.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <button class="curved-button2 d-flex align-items-center mb-5">Air</button>
                                        <h5 class="card-title">Air Pollution </h5>
                                        <p class="card-text">Morbi volutpat nisi a ligula vestibulum placerat.
                                            Suspendisse venenatis
                                            pulvinar nibh sed convallis. Cras elementum nunc a purus sodales tincidunt.
                                            Duis fringilla quam
                                            at
                                            tellus …</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/Water Pollution.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <button class="curved-button2 d-flex align-items-center mb-5">Water</button>
                                        <h5 class="card-title">Water Pollution </h5>
                                        <p class="card-text">Morbi volutpat nisi a ligula vestibulum placerat.
                                            Suspendisse venenatis
                                            pulvinar nibh sed convallis. Cras elementum nunc a purus sodales tincidunt.
                                            Duis fringilla quam
                                            at
                                            tellus …</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/National Geographic Society.png" class="img-fluid rounded-start"
                                         alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <button class="curved-button2 btn-sm d-flex align-items-center mb-5">Society
                                        </button>
                                        <h5 class="card-title">National Geographic Society </h5>
                                        <p class="card-text">Morbi volutpat nisi a ligula vestibulum placerat.
                                            Suspendisse venenatis
                                            pulvinar nibh sed convallis. Cras elementum nunc a purus sodales tincidunt.
                                            Duis fringilla quam
                                            at
                                            tellus …</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Event cards -->
        <section class="my-5">
            <h2 class="text-center fw-bold">Event</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4 w-75 mx-auto p-2" style="width: 200px;">
                <div class="col">
                    <div class="card h-100">
                        <img src="images/Green Campus.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title txt-color6">Clean Campus-Green Campus</h5>
                            <p class="card-text">December 9,2022</p>
                            <a href="#" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/DIU Clean Campus.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title txt-color6">Daffodil International University declared the clean
                                campus</h5>
                            <p class="card-text">December 9,2022</p>
                            <a href="#" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/Symbolic Road Clean Dhaka.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title txt-color6">Symbolic road-show aimed at building a clean Dhaka</h5>
                            <p class="card-text">December 9,2022</p>
                            <a href="#" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>


        </section>
        <!-- people says section -->
        <section class="my-5">
            <div class="text-center">
                <h4 class="fw-bold txt-color4">Testimonials</h4>
                <h2 class="fw-bold txt-color5">What People Says</h2>
            </div>
            <div class="w-75 d-flex flex-row mb-3 mx-auto p-2" style="width: 200px;">
                <div class="p-2">
                    <img src="images/People say.png" alt="">
                </div>
                <div class="p-2">
                    <div class="d-flex flex-column mb-3">
                        <div class="d-inline-flex p-2 fw-bold fs-4">
                            <p>Jane Cooper</p><i class="fa-sharp fa-solid fa-star fa-xs m-1 mt-3"
                                                 style="color: #ffff06;"></i><i
                                    class="fa-sharp fa-solid fa-star fa-xs m-1 mt-3" style="color: #ffff06;"></i><i
                                    class="fa-sharp fa-solid fa-star fa-xs m-1 mt-3" style="color: #ffff06;"></i><i
                                    class="fa-sharp fa-solid fa-star fa-xs m-1 mt-3" style="color: #ffff06;"></i><i
                                    class="fa-sharp fa-solid fa-star fa-xs m-1 mt-3" style="color: #ffff06;"></i>
                        </div>
                        <div class="p-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem volutpat orci
                            nibh
                            dignissim
                            nisl ipsum et nisl. Sit purus nisl vulputate est, bibendum pretium, libero magna. Velit,
                            phasellus
                            lectus
                            nec risus.
                        </div>
                        <div class="p-2">
                            <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50"
                                 aria-valuemin="0"
                                 aria-valuemax="100">
                                <div class="progress-bar bg-info" style="width: 50%"></div>
                            </div>
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MAP -->
        <section class="mb-5">
            <img class="w-100" src="images/Map.png" alt="">
        </section>

        <!-- Social Media -->
        <section>
            <div class="container text-center my-5">
                <div class="row">
                    <div class="col">

                        <h6 class="header-color2">Facebook Page & Facebook Group</h6>

                        <iframe
                                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100093169444470&tabs=messages&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                width="340" height="500" style="border:none;overflow:hidden" scrolling="no"
                                frameborder="0"
                                allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        <!-- <div class="row form-group form-container2">
                          <label for="message"></label>
                          <textarea class="form-control form-control-lg" id="message" name="message" rows="3" placeholder="Type a message to BD Clean"></textarea>
                          <div class="d-inline-flex">
                              <p id="txt-size">Messages sent to BD Clean and their replies will be available in Meddenger </p>
                              <button type="submit" class="btn btn-success btn-size">Send</button>
                          </div>
                          <!-- <div class="row">
                              <div class="col">
                                  <p>Messages sent to BD Clean and their replies will be available in Meddenger </p>
                              </div>
                              <div class="col">
                                  <button type="submit" class="btn btn-succes form-button">Send</button>
                              </div>
                          </div> -->

                        <!-- </div> -->
                    </div>

                    <div class="col">

                        <h3 class="header-color3">Contact Info</h3>
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

        <!-- Form -->
        <div class="container my-5">
            <div class="form-container">

                <form>
                    <div class="row form-group">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-lg" name="name" required placeholder="Name"
                                   aria-label="Name">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control form-control-lg" name="email" required id="colFormLabelLg"
                                   placeholder="Email">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-lg" name="subject" required placeholder="Subject"
                                   aria-label="Subject">
                        </div>
                    </div>

                    <div class="row form-group form-container2">
                        <label for="message"></label>
                        <textarea class="form-control form-control-lg" id="message" name="message" required rows="8"
                                  placeholder="Message"></textarea>
                    </div>

                    <button type="submit" class="btn btn-succes form-button" name="contact-button">Send</button>

                </form>
            </div>
        </div>
</main>
