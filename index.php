<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVIFY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/663160c747.js" crossorigin="anonymous"></script>

</head>

<body>
    <?php
        include "header.php";


        ?>


    <section class="index-hero">
        <div class="hero-left">
            <img src="img/herocircel.svg" alt="" id="circel">
            <h3>India's First <img src="img/heropin.svg" alt=""></h3>
            <h1>CARBON OFF</h1>
            <h1><span>NATURE</span> ON</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisi ng elit. Mauris lacinia</p>
            <div class="get-quote">
                <a href="#">Get A Quote</a>
            </div>

        </div>
        <div class="hero-right">
            <img src="img/heroimg.svg" alt="">
            <img src="img/heroshape.svg" alt="" id="heroshape">

        </div>
    </section>


    <section class="why-choose-us">
        <h3>Why Choose Us</h3>
        <p id="reason">A few reasons why we might be the<span> right choice</span></p>
        <div class="why-1">
            <div class="main-why" style="padding-bottom: 11.4rem;">
                <div class="why-box-1 ">
                    <div class="choose-box">
                        <h3>Carbon Conscious</h3>
                        <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet </p>
                    </div>
                </div>
                <div class="why-box-1 boxright">
                    <div class="choose-box ">
                        <h3>Carbon Conscious</h3>
                        <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet </p>
                    </div>
                </div>


            </div>
            <div class="main-why">
                <div class="why-box-1 ">
                    <div class="choose-box">
                        <h3>Carbon Conscious</h3>
                        <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet </p>
                    </div>
                </div>
                <div class="why-box-1 boxright">
                    <div class="choose-box ">
                        <h3>Carbon Conscious</h3>
                        <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet </p>
                    </div>
                </div>


            </div>
        </div>


    </section>




    <section class="wwd">

        <div class="wwd-img">

            <img src="img/wwdimg.svg" alt="">

        </div>

        <div class="wwd-detail">
            <h1>What We Do?</h1>
            <div class="fq">
                <h2>First mile delivery through 3W <a href=""> <img src="img/plus.svg" alt=""></a>
                </h2>
                <div class="f2">
                    <img src="img/greennext.svg" alt="">
                    <h4>Home</h4>
                </div>
                <div class="f2">
                    <img src="img/greennext.svg" alt="">
                    <h4>Home</h4>
                </div>
                <div class="f2">
                    <img src="img/greennext.svg" alt="">
                    <h4>Home</h4>
                </div>
                <div class="f2">
                    <img src="img/greennext.svg" alt="">
                    <h4>Home</h4>
                </div>
            </div>
            <hr>
            <div class="fq">
                <h2>First mile delivery through 3W <a href=""> <img src="img/plus.svg" alt=""></a>
                </h2>
                <div class="f2">
                    <img src="img/greennext.svg" alt="">
                    <h4>Home</h4>
                </div>
                <div class="f2">
                    <img src="img/greennext.svg" alt="">
                    <h4>Home</h4>
                </div>
                <div class="f2">
                    <img src="img/greennext.svg" alt="">
                    <h4>Home</h4>
                </div>
                <div class="f2">
                    <img src="img/greennext.svg" alt="">
                    <h4>Home</h4>
                </div>
            </div>
            <hr>
            <div class="fq">
                <h2>First mile delivery through 3W <a href=""> <img src="img/plus.svg" alt=""></a>
                </h2>
                <div class="f2">
                    <img src="img/greennext.svg" alt="">
                    <h4>Home</h4>
                </div>
                <div class="f2">
                    <img src="img/greennext.svg" alt="">
                    <h4>Home</h4>
                </div>
                <div class="f2">
                    <img src="img/greennext.svg" alt="">
                    <h4>Home</h4>
                </div>
                <div class="f2">
                    <img src="img/greennext.svg" alt="">
                    <h4>Home</h4>
                </div>
            </div>

        </div>



    </section>
    <script>
        const faqs = document.querySelectorAll(".fq");
        faqs.forEach((fq) => {
            fq.addEventListener("click", () => {
                fq.classList.toggle("active");
                const f2Elements = fq.querySelectorAll(".f2");
                f2Elements.forEach((f2) => {
                    f2.style.maxHeight = fq.classList.contains("active") ? "1000px" : "0";
                });
            });
        });
    </script>




























    <?php
        include "footer.php";


        ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>