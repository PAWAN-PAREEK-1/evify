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
         <svg xmlns="http://www.w3.org/2000/svg" width="21" height="16" viewBox="0 0 21 16" fill="none">
  <g clip-path="url(#clip0_73_5026)">
    <path d="M0 1.05C0.0711123 1.01111 0.0601719 0.933333 0.0820526 0.872222C0.273509 0.366667 0.743944 0.0222222 1.28002 0.0111111C1.34566 0.0111111 1.41678 0.0111111 1.48242 0.0111111C7.47773 0.00555556 13.4785 0.0166667 19.4738 0C20.2123 0 20.8085 0.35 20.9781 1.08333C20.9781 1.08889 20.9891 1.08889 20.9945 1.08889C20.9945 1.26667 20.9945 1.45 20.9945 1.62778C20.9289 1.66111 20.9344 1.73333 20.9179 1.78333C20.7265 2.31111 20.2561 2.65556 19.6981 2.66667C19.6325 2.66667 19.5613 2.66667 19.4957 2.66667C13.5059 2.66667 7.51602 2.66667 1.52618 2.66667C0.694712 2.66667 0.355561 2.43333 0.032821 1.64444C0.0273509 1.63333 0.0109403 1.63333 0 1.62222C0 1.43889 0 1.24444 0 1.05Z" fill="#333333"/>
    <path d="M21.0001 14.9615C20.9345 14.9948 20.94 15.067 20.9236 15.117C20.7321 15.6448 20.2617 15.9892 19.7037 16.0003C19.6381 16.0003 19.567 16.0003 19.5013 16.0003C13.5115 16.0003 7.52164 16.0003 1.53179 16.0003C0.700327 16.0003 0.361177 15.767 0.0384363 14.9781C0.0329661 14.967 0.0165556 14.967 0.00561523 14.9559C0.00561523 14.7615 0.00561523 14.567 0.00561523 14.3726C0.0767275 14.3337 0.0657872 14.2559 0.0876679 14.1948C0.279124 13.6892 0.749559 13.3448 1.28017 13.3337C1.34581 13.3337 1.41692 13.3337 1.48256 13.3337C7.47787 13.3337 13.4787 13.3392 19.474 13.3281C20.2124 13.3281 20.8087 13.6781 20.9783 14.4115C20.9783 14.417 20.9892 14.417 20.9947 14.417C21.0001 14.6003 21.0001 14.7837 21.0001 14.9615Z" fill="#333333"/>
    <path d="M21.0001 8.29447C20.9344 8.3278 20.9399 8.40002 20.9235 8.45002C20.732 8.9778 20.2616 9.32224 19.7037 9.33335C19.638 9.33335 19.5669 9.33335 19.5013 9.33335C13.5114 9.33335 7.52157 9.33335 1.53173 9.33335C0.700266 9.33335 0.361116 9.10002 0.0383752 8.31113C0.0329051 8.30002 0.0164945 8.30002 0.0055542 8.28891C0.0055542 8.09447 0.0055542 7.90002 0.0055542 7.70558C0.0766665 7.66669 0.0657261 7.58891 0.0876068 7.5278C0.279063 7.02224 0.749498 6.6778 1.2801 6.66669C1.34575 6.66669 1.41686 6.66669 1.4825 6.66669C7.47781 6.66669 13.4786 6.67224 19.4739 6.66113C20.2124 6.66113 20.8086 7.01113 20.9782 7.74447C20.9782 7.75002 20.9891 7.75002 20.9946 7.75002C21.0001 7.93335 21.0001 8.11669 21.0001 8.29447Z" fill="#333333"/>
  </g>
  <defs>
    <clipPath id="clip0_73_5026">
      <rect width="21" height="16" fill="white"/>
    </clipPath>
  </defs>
</svg>
        </button>

        <div class="nav-phone" onclick="toggleNav()">
            <div>
                <div class="nav-content">
                    <a href="./index.php" class="active">Home</a>
                    <a href="./about.php">About Us</a>
                    <a href="./contact.php">Contact Us</a>
                    <a href="./joinus.php">Join Us</a>

                </div>
                <div class="get-quote get-quote2">
                    <a href="#">Get A Quote</a>
                </div>
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
          <script>
var currentPage = window.location.pathname.split('/').pop();
var links = document.querySelectorAll('.menus a');
links.forEach(function(link) {
    var linkHref = link.getAttribute('href').split('/').pop();

    if (linkHref === currentPage) {
        link.classList.add('current');
    }
});

    </script>
         <div class="get-quote get2">
            <a href="#">Get A Quote</a>
        </div>



    </nav>
</header>