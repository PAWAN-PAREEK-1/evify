<header>
    <div class="head">
        <a href="#"   id="email1">Loremipsum5869@gmail.com</a>
        <div class="head-right">
            <div class="email">
            <a href="#" id="email">+36-544-455-4547</a>
            </div>
            <hr>
            <div class="social">
            <a href=""  ><i id="social" class="fa-brands fa-facebook-f fa-lg" style="color: #fff;"></i></a>
            <a href="" ><i id="social" class="fa-brands fa-twitter fa-lg" style="color: #fff;"></i></a>
            <a href="" ><i id="social" class="fa-brands fa-instagram fa-lg" style="color: #fff;"></i></a>
        </div>
        </div>
    </div>

    <nav>
        <div class="logo">
            <a href="index.php"><img src="img/logo.svg" alt="" style="mix-blend-mode: darken;"></a>
        </div>
        <div class="menus">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./about.php">About Us</a></li>
                <li><a href="./contact.php">Contact Us</a></li>
                <li><a href="./joinus.php">Join Us</a></li>
            </ul>
        </div>
        <button onclick="toggleNav()" class="nav-button">
            <svg width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 6a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1ZM2 18a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1ZM3 11a1 1 0 1 0 0 2h18a1 1 0 1 0 0-2H3Z" />
            </svg>
        </button>

        <div class="nav-phone" onclick="toggleNav()">
            <div>
                <div class="nav-content">
                    <a href="/" class="active">PROJECTS</a>
                    <a href="./about.html">ABOUT US</a>
                    <a href="./email-calculator.html">EMAIL CALCULATOR</a>
                    <a href="./investment-relation.html">INVESTMENT RELATION</a>
                    <a href="#">CHANNEL PARTNER</a>
                </div>
                <a href="./contact.html"><button class="primary">CONTACT US</button></a>
            </div>
        </div>

        <script>
            const navButton = document.querySelector('.nav-button');
            const navPhone = document.querySelector('.nav-phone');
            let isNavVisible = true;

            function toggleNav() {
                isNavVisible = !isNavVisible;

                if (isNavVisible) {
                    navPhone.classList.add('nav-show');
                } else {
                    navPhone.classList.remove('nav-show');
                }
            }
        </script>


        <div class="get-quote">
            <a href="#">Get A Quote</a>
        </div>
    </nav>
</header>