<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>EVIFY | Contact Us </title>
        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
          crossorigin="anonymous"
        />
        <link rel="stylesheet" href="style.css" >
        <script
          src="https://kit.fontawesome.com/663160c747.js"
          crossorigin="anonymous"
        ></script>
      </head>
<body>


    <?php
    include "header.php";
    ?>

    <section class="hero">
        <h1>Contact Us</h1>
        <img src="img/circle.svg" alt="" class="circel-main">
        <!-- <img src="img/circel2.svg" alt="" class="circel-main2"> -->
        <div class="truck-hero">
      <img src="img/truck2.svg" alt="">
     </div>
    </section>




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
              <input
                type="text"
                id="name"
                name="name"
                required
                placeholder="Name"
              />
            </div>
            <div class="form-row">
              <div class="form-group">
                <input
                  type="email"
                  id="email"
                  name="email"
                  required
                  placeholder="Email"
                />
              </div>
              <div class="form-group">
                <input
                  type="tel"
                  id="contact-no"
                  name="contact-no"
                  required
                  placeholder="Contact Us"
                />
              </div>
            </div>
            <div class="form-row">
              <textarea
                id="message"
                name="message"
                rows="4"
                placeholder="Message"
                required
              ></textarea>
            </div>
            <button type="submit">Submit</button>
          </form>
        </div>
        <div class="contact-image">
          <img src="img/contact.svg" alt="Contact Image" />
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