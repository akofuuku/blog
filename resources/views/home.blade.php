<!DOCTYPE html>
<!-- Coding by Sahrul Ferdiansyah -->
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SahrulF</title>
    <link rel="stylesheet" href="css/style.css" />
    <script src="../custom-scripts.js" defer></script>
  </head>
  <body>
    <main>
      <!-- Header Start -->
      <header>
        <nav class="nav container">
          <h2 class="nav_logo"><a href="#">Sahrul Ferdiansyah</a></h2>

          <ul class="menu_items">
            <img src="images/times.svg" alt="timesicon" id="menu_toggle" />
            <li><a href="#" class="nav_link">Home</a></li>
            <li><a href="#" class="nav_link">Project</a></li>
            <li><a href="#" class="nav_link">Contact</a></li>
            <li><a href="#" class="nav_link">About</a></li>
          </ul>
          <img src="images/bars.svg" alt="timesicon" id="menu_toggle" />
        </nav>
      </header>
      <!-- Header End -->

      <!-- Hero Start -->
      <section class="hero">
        <div class="row container">
          <div class="column">
            <h2>Fullstack Developer <br />You can contact me if need build a website.</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis, architecto? Consectetur enim obcaecati velit quibusdam iure, perspiciatis accusantium, voluptatibus possimus cum voluptates dolorum optio ab vitae. Praesentium voluptas quia voluptates at aperiam aliquid vitae autem!</p>
            <div class="buttons">
              <button class="btn">Read More</button>
              <button class="btn">Contact Me</button>
            </div>
          </div>
          <div class="column">
            <img src="images/hero.png" alt="heroImg" class="hero_img" />
          </div>
        </div>
        <img src="images/bg-bottom-hero.png" alt="" class="curveImg" />
      </section>
      <!-- Hero End-->
    </main>

    <script>
      const header = document.querySelector("header");
      const menuToggler = document.querySelectorAll("#menu_toggle");

      menuToggler.forEach(toggler => {
        toggler.addEventListener("click", () => header.classList.toggle("showMenu"));
      });
    </script>
  </body>
</html>
