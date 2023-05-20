<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to gwsc</title>
    <link rel="stylesheet" href="CSS/signup.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    
  </head>
  <body>
    <header>
      <nav
        class="navbar flex-container px-5 py-1 fixed flex-justify-between flex-align-center overflow-hidden"
      >
        <a href="#"><img src="Images/LOGO.png" class="w-3 nav-logo" alt="LOGO" /></a>
        <ul class="flex-container gap navlist" role="list">
          <li><a href="home.php" class="navlink">Home</a></li>
          <li><a href="information.php" class="navlink">Information</a></li>
          <li><a href="pitch_types.php" class="navlink">Pitch Types</a></li>
          <li><a href="reviews.php" class="navlink">Reviews</a></li>
          <li><a href="features.php" class="navlink">Features</a></li>
          <li><a href="local_attractions.php
          " class="navlink">Local Attractions</a></li>
          <li>
            <a href="contact.php" class="navlink">Contact Us</a>
          </li>
          <li>
          <a href="signup.php" class="navlink">Sign Up</a>       
           </li>
        </ul>
        <div class="p-1 searchbar flex-container flex-align-center gap-1">
          <input type="text" class="search-input" placeholder="Search" />
          <button>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="p-1 pointer"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
              />
            </svg>
          </button>
        </div>
        <button class="toggle-button">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
            />
          </svg>
        </button>
      </nav>
    </header>

    <section class="px-19 py-10 signup">
      <h1>Sign Up</h1>
        <div class="signup-container flex-container flex-column">
            <form action="signup_action.php" method="post">
                <div class="">
                <label for="Fnamesu">First Name</label>
                <input type="text" name="fnamesu" id="fnamesu">
                </div>
                <div class="">
                <label for="Lnamesu">Last Name</label>
                <input type="text" name="lnamesu" id="lnamesu">
                </div>
                <div class="">
                <label for="Emailsu">Email</label>
                <input type="text" name="emailsu" id="emailsu">
                </div>
                <div class="flex-column flex-container">
                <label for="passwordsu">Password</label>
                <input type="password" class="py-2" name="passwordsu" id="passwordsu">
                <label for="confpasswordsu">Confirm Password</label>
                <input type="password" class="py-2" name="confpasswordsu" id="passwordsu">    
            </div>
            <br>
            <br>
            <button class="py-2" type="submit">Signup</button>
            <button class="py-2"><a href="login.php">Login Instead</a></button>
            </form>
        </div>
    </section>
  </body>
  <!--Footer Start-->
  <hr>
  <footer class="px-19 grid-container grid-cols-5 py-10 footer">
    <div class="footer-column flex-column flex-container col-span-1 flex-align-center flex-justify-start">
      <img src="Images/LOGO.png" class="w-13" alt="Logo">
      <div class="flex-container gap-1 p-2">
        <a href="# " class="w-2 social"><img  src="Images/email__1__Bau1uzNm_.png" alt=""></a>
        <a href="# " class="w-2 social"><img  src="Images/instagram_PNG10-1377336154_bbsKbNxLb.png" alt=""></a>
        <a href="# " class="w-2 social"><img  src="Images/youtube__1__44CB7CNwh.png" alt=""></a>
      </div>
      <p class="copyright">Copyright GWSC 2023.</p>
    </div>
      <div class="footer-column flex-column flex-container col-span-1 flex-align-center flex-justify-start">
      <div class="heading">
      <p class="text-center w-full large-text">Useful Links</p>  
      </div>
      <ul
        class="flex-container flex-column useful-links flex-justify-center"
        role="list"
      >
        <li class="footer-link w-full">
          <a href="#">Privacy Policy</a>
        </li>
        <li class="footer-link w-full">
          <a href="#">Terms of Service</a>
        </li>
        <li class="footer-link w-full">
          <a href="#">FAQs</a>
        </li>
        <li class="footer-link w-full">
          <a href="#">About Us</a>
        </li>
        <li class="footer-link w-full">
          <a href="#">Blog</a>
        </li>
        <li class="footer-link w-full">
          <a href="#">Careers</a>
        </li>
        <li class="footer-link w-full">
          <a href="#">Contact Us</a>
        </li>
      </ul>
    </div>
    <div class="footer-column flex-column flex-container col-span-1 flex-align-center flex-justify-start">
      <div class="heading">
      <p class="text-center w-full large-text">Sitemap</p>  
      </div>
      <ul
        class="flex-container flex-column flex-align-center flex-justify-center"
        role="list"
      >
        <li class="footer-link w-full">
          <a href="#">Home</a>
        </li>
        <li class="footer-link w-full">
          <a href="#">Information</a>
        </li>
        <li class="footer-link w-full">
          <a href="#">Pitch Types</a>
        </li>
        <li class="footer-link w-full">
          <a href="#">Reviews</a>
        </li>
        <li class="footer-link w-full">
          <a href="#">Features</a>
        </li>
        <li class="footer-link w-full">
          <a href="#">Local Attractions</a>
        </li>
        <li class="footer-link w-full">
          <a href="#">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
  
  <div class="footer-column flex-column flex-container col-span-1 flex-align-center flex-justify-start">
    <div class="heading">
      <p class="text-center w-full large-text">Our Apps</p>
      <div class="flex-container flex-column px-11 gap-1 p-1">
        <a href="#" class="apps w-10"><img src="Images/Get-it-on-apple-store-400x118-76240649_qGr5AY-zv.png" alt=""></a>
        <a href="#" class="apps w-10"><img src="Images/get-it-on-google-play-badge-4168770264_Xhu080KTY.png" alt=""></a>
      </div>  
    </div>  
  </div>
  <div class="footer-column flex-column flex-container col-span-1 flex-align-center flex-justify-start">
    <div class="heading">
    <p class="text-center w-full large-text">Visit Us</p>  
    </div>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5906.901344539087!2d-84.25126337009455!3d33.8087981134004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5a844fa00a2bf%3A0x33403e32402d1c64!2sClarkston%2C%20GA%2030021%2C%20USA!5e0!3m2!1sen!2sqa!4v1684364305838!5m2!1sen!2sqa"
        width="450"
        height="300"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        class="map"
      ></iframe>
  </div>
</footer>
<!--Footer Start-->
</html>
