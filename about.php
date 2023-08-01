<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EVIFY | About</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
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
      <h1>About Us</h1>
      <img src="img/circle.svg" alt="" class="circel-about circel-main"/>
     <div class="truck-hero">
      <img src="img/truck2.svg" alt="">
     </div>
    </section>

    <section class="aboutus">
      <h1>About Us</h1>
      <div class="about-dec first-dec">
        <div class="about-left">
          <img src="img/about1.svg" alt="" />
        </div>

        <div class="about-right">
          <h1>About Us</h1>
          <h3>Mr. Devrishi Arora</h3>
          <h3>the Founder, CEO & COO of Evify</h3>
          <p>
            Mr. Devrishi Arora, the Founder is the CEO & COO of EVIFY. He comes
            from a family that has more than 60 years of existence and
            experience in the transportation sector, making him a
            third-generation entrepreneur with indepth knowledge and experience
            of this industry operations.
          </p>
          <p>
            He has two Masters degrees- first in International Business &
            Emerging Markets and second in Tech Entrepreneurship from world's
            top universities - The University of Edinburgh and University
            College London respectively. He's also done project management
            programs from London Business School. This makes him a perfect fit
            to direct a Tech based Logistics start-up. He takes care of
            operations, client negotiations and onboarding, industry networking
            and R&D.
          </p>
        </div>
      </div>
      <div class="about-dec bb">
        <div class="about-right">
          <h3>Mr. Devrishi Arora</h3>
          <h3>the Founder, CEO & COO of Evify</h3>
          <p>
            Mr. Devrishi Arora, the Founder is the CEO & COO of EVIFY. He comes
            from a family that has more than 60 years of existence and
            experience in the transportation sector, making him a
            third-generation entrepreneur with indepth knowledge and experience
            of this industry operations.
          </p>
          <p>
            He has two Masters degrees- first in International Business &
            Emerging Markets and second in Tech Entrepreneurship from world's
            top universities - The University of Edinburgh and University
            College London respectively. He's also done project management
            programs from London Business School. This makes him a perfect fit
            to direct a Tech based Logistics start-up. He takes care of
            operations, client negotiations and onboarding, industry networking
            and R&D.
          </p>
          <div class="get-quote abt-btn">
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="about-left">
          <img src="img/about2.svg" alt="" />
        </div>
      </div>
    </section>


    <section class="clients">
      <h1>Our Super Clients</h1>
      <div class="com">
        <img src="img/swiggy.svg" alt="" />
        <img src="img/blue dart.svg" alt="" />
        <img src="img/bigbasket.svg" alt="" />
        <img src="img/flipkart.svg" alt="" />
      </div>
    </section>

    <section class="vision-mission">
      <div class="vision">
        <div class="v-box">
          <img src="img/mission.svg" alt="" />
          <h1>Our Mission</h1>
          <p>
            To deploy our electric fleet to all the E-comm giants and
            decarbonise last mile logistics sector in Tier II and Tier III
            cities of india by 2030
          </p>
        </div>
        <div class="v-box">
          <img src="img/vision.svg" alt="" />
          <h1>Our Vision</h1>
          <p>
            To create a complete ecosystem for the LML sector in all the Tier II
            and III cities of India
          </p>
        </div>
        <div class="v-box">
          <img src="img/values.svg" alt="" />
          <h1>Our Values</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
            sit amet rutrum nisi. Sed ultrices dolor lorem, convallis porta
            sapien ultricies quis
          </p>
        </div>
      </div>
    </section>

    <section class="contact-section">
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

    <?php
    include "footer.php";


    ?>
  </body>
</html>
