<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EVIFY | Join Us </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/663160c747.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>


    <?php
    include "header.php";
    ?>

    <section class="hero">
        <h1>Join Us</h1>
        <img src="img/circle.svg" alt="">
    </section>



    <section class="partner">

        <div class="center-links ">
            <a href="#" class="toggle-link active" data-target="div1">Become A Partner</a>
            <a href="#" class="toggle-link" data-target="div2">Become A Rider</a>
        </div>

        <div class="toggle-container">
            <div id="div1" class="toggle-item">
                <div class="main-container">
                    <div class="left-side">
                        <h2>Rider Benefits</h2>
                        <h1>Bike Part</h1>
                        <div class="main-icon">
                            <div class="icon">
                                <img src="img/petrol.svg" alt="Small Image">
                                <h3>No Petrol Cost</h3>
                            </div>
                            <div class="icon">
                                <img src="img/emi.svg" alt="Small Image">
                                <h3>No Emi Cost</h3>
                            </div>
                            <div class="icon">
                                <img src="img/main.svg" alt="Small Image">
                                <h3>No Maintenance cost</h3>
                            </div>
                            <div class="icon">
                                <img src="img/ins.svg" alt="Small Image">
                                <h3>No Insurance cost</h3>
                            </div>

                        <div class="icon">
                            <img src="img/time.svg" alt="Small Image">
                            <h3>No Down Time </h3>
                        </div>
                        </div>
                    </div>


                <div class="right-side">
                    <img src="img/joinhero.svg" alt="Right Image">
                </div>
                </div>
            </div>

        </div>
        <div id="div2" class="toggle-item">
            <div class="rider">
                    <h2>Rider Benefits</h2>
                    <h1>Job Part</h1>
                    <div class="benefits">
                        <div class="left-side">
                            <div class="icon">
                                <img src="img/emi.svg" alt="Small Image">
                                <h3>Job guarantees</h3>
                            </div>
                            <div class="icon">
                                <img src="img/emi.svg" alt="Small Image">
                                <h3>Multiple income</h3>
                            </div>
                            <div class="icon">
                                <img src="img/emi.svg" alt="Small Image">
                                <h3>Support to Increase Your Earning</h3>
                            </div>
                            <div class="icon">
                                <img src="img/emi.svg" alt="Small Image">
                                <h3>Weekly incetive and gift</h3>
                            </div>
                            <div class="icon">
                                <img src="img/emi.svg" alt="Small Image">
                                <h3>Fun Game</h3>
                            </div>

                        </div>
                        <div class="right-side">
                            <div class="icon">
                                <img src="img/emi.svg" alt="Small Image">
                                <h3>No Fees</h3>
                            </div>
                            <div class="icon">
                                <img src="img/emi.svg" alt="Small Image">
                                <h3>Joining Bonus</h3>
                            </div>
                            <div class="icon">
                                <img src="img/emi.svg" alt="Small Image">
                                <h3>Free T-shirt, Powerbank, Bag</h3>
                            </div>
                            <div class="icon">
                                <img src="img/emi.svg" alt="Small Image">
                                <h3>Advace Salary vai Fatak Pay</h3>
                            </div>



                        </div>
                    </div>
            </div>

        </div>
        </div>
    </section>





    <!-- Add jQuery library -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <script>
        $(document).ready(function () {
            $(".toggle-link").on("click", function (e) {
                e.preventDefault();
                const targetDiv = $(this).data("target");
                $(".toggle-item").hide();
                $("#" + targetDiv).show();

                // Apply active class to the clicked link and remove it from other links
                $(".toggle-link").removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>














    <section class="contact-section con">
        <div class="contact-content">
            <h2>Contact</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                sit amet rutrum nisi. Sed ultrices dolor lorem, convallis porta sapien
                ultricies quis. Phasellus consectetur faucibus est
            </p>
            <form>
                <div class="form-row">
                    <input type="text" id="name" name="name" required placeholder="Name" />
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="email" id="email" name="email" required placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <input type="tel" id="contact-no" name="contact-no" required placeholder="Contact Us" />
                    </div>
                </div>
                <div class="form-row">
                    <textarea id="message" name="message" rows="4" placeholder="Message" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="contact-image">
            <img src="img/contact.svg" alt="Contact Image" />
        </div>
    </section>

    <section class="clients join">
        <h1>Our Super Clients</h1>
        <div class="com">
            <img src="img/swiggy.svg" alt="" />
            <img src="img/blue dart.svg" alt="" />
            <img src="img/bigbasket.svg" alt="" />
            <img src="img/flipkart.svg" alt="" />
        </div>
    </section>

    <section class="feature-section">
      <h2>Featured In</h2>
      <div class="fe01">
        <div class="feature-boxes">
          <div class="box">
            <div class="box-img">
              <img src="img/fe1.svg" alt="Image 1" />
              <h4>Aug 01, 2022</h4>
            </div>
            <div class="fe-detail">
              <h2>
                EVIFY Raises $100,000 Through We Founder Circle
                <hr />
              </h2>
              <p>
                Evify an EV logistics startup, raised $100,000 in a Seed funding
                round led by We Founder Circle. The round also witnessed
                participation from angel investors like Gaurav Singhvi,
              </p>
              <a href="">READ MORE <img src="img/nextarrow2.svg" alt="" /></a>
            </div>
          </div>
          <div class="box">
            <div class="box-img">
              <img src="img/fe2.svg" alt="Image 1" />
              <h4>Aug 01, 2022</h4>
            </div>
            <div class="fe-detail">
              <h2>
                EVIFY Raises $100,000 Through We Founder Circle
                <hr />
              </h2>
              <p>
                Evify an EV logistics startup, raised $100,000 in a Seed funding
                round led by We Founder Circle. The round also witnessed
                participation from angel investors like Gaurav Singhvi,
              </p>
              <a href="">READ MORE <img src="img/nextarrow2.svg" alt="" /></a>
            </div>
          </div>
          <div class="box">
            <div class="box-img">
              <img src="img/fe3.svg" alt="Image 1" />
              <h4>Aug 01, 2022</h4>
            </div>
            <div class="fe-detail">
              <h2>
                EVIFY Raises $100,000 Through We Founder Circle
                <hr />
              </h2>
              <p>
                Evify an EV logistics startup, raised $100,000 in a Seed funding
                round led by We Founder Circle. The round also witnessed
                participation from angel investors like Gaurav Singhvi,
              </p>
              <a href="">READ MORE <img src="img/nextarrow2.svg" alt="" /></a>
            </div>
          </div>
        </div>
      </div>

      <hr id="page-hr" />
    </section>









    <?php
    include "footer.php";


    ?>



</body>

</html>