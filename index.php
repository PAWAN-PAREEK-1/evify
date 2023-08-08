<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EVIFY</title>
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

    <section class="index-hero">
      <div class="hero-left">
        <img src="img/herocircel.svg" alt="" id="circel" />
        <h3>India's First <img src="img/heropin.svg" alt="" /></h3>
        <h1>CARBON OFF <span>NATURE</span> ON</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisi ng elit. Mauris
          lacinia
        </p>
        <div class="get-quote">
          <a href="#">Get A Quote</a>
        </div>
      </div>
      <div class="hero-right">
        <img src="img/heroimg.svg" alt="" />
        <img src="img/heroshape.svg" alt="" id="heroshape" />
      </div>
    </section>

    <section class="why-choose-us">
      <h3>Why Choose Us</h3>
      <p id="reason">
        A few reasons why we might be the<span> right choice</span>
      </p>
      <img src="img/thunder2.svg" alt="" id="thunder" />
      <div class="why-1">
        <div class="main-why" style="padding-bottom: 11.4rem">
          <div class="why-box-1">
            <div class="choose-box">
              <h3>Carbon Conscious</h3>
              <p>
                orem ipsum dolor sit amet, consectetur adipiscing elit.
                Suspendisse sit amet
              </p>
            </div>
          </div>
          <div class="why-box-1 boxright">
            <div class="choose-box">
              <h3>Carbon Conscious</h3>
              <p>
                orem ipsum dolor sit amet, consectetur adipiscing elit.
                Suspendisse sit amet
              </p>
            </div>
          </div>
        </div>
        <div class="main-why">
          <div class="why-box-1">
            <div class="choose-box">
              <h3>Carbon Conscious</h3>
              <p>
                orem ipsum dolor sit amet, consectetur adipiscing elit.
                Suspendisse sit amet
              </p>
            </div>
          </div>
          <div class="why-box-1 boxright">
            <div class="choose-box">
              <h3>Carbon Conscious</h3>
              <p>
                orem ipsum dolor sit amet, consectetur adipiscing elit.
                Suspendisse sit amet
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="wwd">
      <div class="wwd-img">
        <img src="img/wwdimg.svg" alt="" />
      </div>

      <div class="wwd-detail">
        <h1>What We Do?</h1>
        <div class="fq">
          <h2>
            Last mile delivery through 2W
              <img src="img/plus.svg" alt=""
            />
          </h2>
          <div class="f2">
            <img src="img/greennext.svg" alt="" />
            <h4>Reduce Cost By 30%</h4>
          </div>
          <div class="f2">
            <img src="img/greennext.svg" alt="" />
            <h4>Bulk Payment</h4>
          </div>
          <div class="f2">
            <img src="img/greennext.svg" alt="" />
            <h4>100% EV Trained Ridersk Payment</h4>
          </div>
          <div class="f2">
            <img src="img/greennext.svg" alt="" />
            <h4>No Surge Pricing</h4>
          </div>
          <div class="f2">
            <img src="img/greennext.svg" alt="" />
            <h4>Carbon Offset</h4>
          </div>
          <div class="f2">
            <img src="img/greennext.svg" alt="" />
            <h4>Downtime / Churn</h4>
          </div>
        </div>
        <hr />
        <div class="fq">
          <h2>
            First mile delivery through 3W
              <img src="img/plus.svg" alt=""
            />
          </h2>
          <div class="f2">
            <img src="img/greennext.svg" alt="" />
            <h4>Home</h4>
          </div>
          <div class="f2">
            <img src="img/greennext.svg" alt="" />
            <h4>Home</h4>
          </div>
          <div class="f2">
            <img src="img/greennext.svg" alt="" />
            <h4>Home</h4>
          </div>
          <div class="f2">
            <img src="img/greennext.svg" alt="" />
            <h4>Home</h4>
          </div>
        </div>
        <hr />
        <div class="fq">
          <h2>
            First mile delivery through 3W
               <img src="img/plus.svg" alt="" />
          </h2>
          <div class="f2">
            <img src="img/greennext.svg" alt="" />
            <h4>Home</h4>
          </div>
          <div class="f2">
            <img src="img/greennext.svg" alt="" />
            <h4>Home</h4>
          </div>
          <div class="f2">
            <img src="img/greennext.svg" alt="" />
            <h4>Home</h4>
          </div>
          <div class="f2">
            <img src="img/greennext.svg" alt="" />
            <h4>Home</h4>
          </div>
        </div>
      </div>
    </section>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const faqs = document.querySelectorAll(".fq");
        let activeFq = null;

        // Function to open and close .fq elements
        function toggleFq(fq) {
          fq.classList.toggle("active");
          const f2Elements = fq.querySelectorAll(".f2");
          f2Elements.forEach((f2) => {
            f2.style.maxHeight = fq.classList.contains("active")
              ? "1000px"
              : "0";
          });

          // Toggle plus and minus images
          const img = fq.querySelector("img");
          if (img) {
            const imgSrc = img.getAttribute("src");
            if (imgSrc.includes("plus.svg")) {
              img.setAttribute("src", "img/minus.svg");
            } else {
              img.setAttribute("src", "img/plus.svg");
            }
          }
        }

        // Open the first .fq element by default
        const firstFq = faqs[0];
        if (firstFq) {
          toggleFq(firstFq);
          activeFq = firstFq;
        }

        // Event listener for .fq elements
        faqs.forEach((fq) => {
          fq.addEventListener("click", () => {
            if (activeFq !== fq) {
              if (activeFq) {
                toggleFq(activeFq);
              }
              toggleFq(fq);
              activeFq = fq;
            } else {
              toggleFq(fq);
              activeFq = null;
            }
          });
        });
      });
    </script>

    <section class="info">
      <div class="arrows">
        <img src="img/nextarrows.svg" alt="" id="nextarrow" />
        <img src="img/previousarrows.svg" alt="" id="prevarrow" />
      </div>

      <div class="info1">
        <img src="img/truck.svg" alt="" />
      </div>

      <div class="info-con">
        <h4>Focused On Quality</h4>
        <h2>
          We Provide Full <span>Assistance</span> in Freight and Warehousing.
        </h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
          sit amet rutrum nisi. Sed ultrices dolor lorem, convallis porta sapien
          ultricies quis.Lorem ipsum dolor sit amet, consectetur adipiscing
          elit. Suspendisse sit amet rutrum nisi. Sed ultrices dolor lorem,
          convallis porta sapien ultricies quis.
        </p>
        <div class="footer-last info2">
          <!-- <h1> &copy; 2023 All Rights Reserve</h1> -->
          <div class="last-1 info3">
            <div class="info001">
              <h1>30,36,000+</h1>
              <h3>Green Kms</h3>
            </div>
            <hr />
            <div class="info001">
              <h1>5,18,000+</h1>
              <h3>Delivers</h3>
            </div>
            <hr />
            <div class="info001">
              <h1>4,00,000+</h1>
              <h3>KGs of Carbon Emissions Saved</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="vision-mission" id="vision-mission">
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
            To deploy our electric fleet to all the E-comm giants and
            decarbonise last mile logistics sector in Tier II and Tier III
            cities of india by 2030
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
    <!-- Add this script to the end of your HTML body -->
    <script>
      // JavaScript to handle sliding v-boxes
      const sliderContainer = document.querySelector(".vision");
      const prevButton = document.getElementById("prevButton");
      const nextButton = document.getElementById("nextButton");

      prevButton.addEventListener("click", () => {
        sliderContainer.scrollBy({
          left: -sliderContainer.clientWidth,
          behavior: "smooth",
        });
      });

      nextButton.addEventListener("click", () => {
        sliderContainer.scrollBy({
          left: sliderContainer.clientWidth,
          behavior: "smooth",
        });
      });
    </script>

    <section class="aboutus">
      <h1 id="about-desk">About Us</h1>
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
      <div class="comp">
        <div class="com">
          <img src="img/swiggy.svg" alt="" />
          <img src="img/blue dart.svg" alt="" />
          <img src="img/bigbasket.svg" alt="" />
          <img src="img/flipkart.svg" alt="" />
        </div>
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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
