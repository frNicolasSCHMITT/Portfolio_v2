<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Portfolio Developpeur Web Front-End Back-End Fullstack SCHMITT Nicolas"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Portfolio - SCHMITT Nicolas</title>
  </head>
  <body>
    <header>
      <nav id="nav">
        <div class="hamburg">
          <button
            class="hamenu"
            onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))"
            aria-label="Main Menu"
          >
            <svg width="100" height="50" viewBox="0 0 100 100">
              <path
                class="line line1"
                d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"
              />
              <path class="line line2" d="M 20,50 H 80" />
              <path
                class="line line3"
                d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"
              />
            </svg>
          </button>
        </div>
        <div class="symbole">logo</div>
        <div class="menu">
          <ul>
            <li><a href="#" data-target="about_fr">A Propos</a></li>
            <li><a href="#" data-target="skills_fr">Compétences</a></li>
            <li><a href="#" data-target="work_fr">Réalisations</a></li>
            <li><a href="#" data-target="contact_fr">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="animBg">
      <div class="light x1"></div>
      <div class="light x2"></div>
      <div class="light x3"></div>
      <div class="light x4"></div>
      <div class="light x5"></div>
      <div class="light x6"></div>
      <div class="light x7"></div>
      <div class="light x8"></div>
      <div class="light x9"></div>
    </div>
    <section id="phpSection">
      <div class="thanksDiv">
        <div class="thxFR">
          <img src="./img/FR_flag.png" alt="">
          <div class="thxFRtxt">
            <h2>Votre message a bien été envoyé !</h2>
            <p>Merci pour votre visite.</p>
          </div>
        </div>
        <div class="thxEN">
          <img src="./img/ENUS_flag.png" alt="">
          <div class="thxENtxt">
            <h2>Your message has been successfully sent !</h2>
            <p>Thanks for your visit</p>
          </div>
        </div>
      </div>
    </section>
    <footer></footer>
    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/menu.js"></script>
  </body>
</html>
