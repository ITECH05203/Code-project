<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Barracks Gym</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@400;600&display=swap"
    rel="stylesheet"
  />
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    rel="stylesheet"
  />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="styles/index.css"/>
</head>
<body class=" text-white-200">
  <nav
    class="navbar navbar-expand-md fixed-top  bg-white bg-opacity-10 backdrop-blur shadow-sm"
    aria-label="Main navigation"
  >
    <div class="container-fluid px-3 px-md-4 px-lg-5">
      <a
        class="navbar-brand d-flex align-items-center text-orange fw-bold fs-2 font-serif tracking-widest user-select-none"
        href="#"
      >
        <!-- For the logo in the navbar -->
        <img
          alt="Luxury gold letter B logo with elegant serif style"
          src="assets/BB.png"
          width="40"
          height="40"
          class="me-3"
        />
        <span class="text-orange">BARRACKS</span>
      </a>
      <button
        class="navbar-toggler border-0 text-orange"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars fa-lg"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center gap-3 gap-md-4">
          <li class="nav-item">
            <a
              class="nav-link text-white-300 fw-semibold transition"
              href="#"
              >Home</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link text-white-300 fw-semibold transition"
              href="#about-us"
              >About</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link text-white-300 fw-semibold transition"
              href="#Price"
              >Price</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link text-white-300 fw-semibold transition"
              href="#programs"
              >Programs</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link text-white-300 fw-semibold transition"
              href="#Coach"
              >Coach</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link text-white-300 fw-semibold transition"
              href="#gallery"
              >Gallery</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link text-white-300 fw-semibold transition"
              href="#contact"
              >Contact</a
            >
          </li>
          <li class="nav-item d-none d-md-block">
            <button
              type="button"
              class="btn btn-outline-warning rounded-pill fw-semibold px-4 py-2 me-2"
              data-bs-toggle="modal"
              data-bs-target="#loginModal"
            >
              Login
            </button>
            <button
              type="button"
              class="btn btn-gradient rounded-pill fw-semibold px-4 py-2"
              data-bs-toggle="modal"
              data-bs-target="#signupModal"
            >
              Sign Up
            </button>
          </li>
        </ul>
      </div>
      <div class="d-md-none mt-3 w-100 collapse" id="mobileMenuExtra">
        <button
          type="button"
          class="btn btn-outline-warning rounded-pill fw-semibold w-100"
          data-bs-toggle="modal"
          data-bs-target="#loginModal"
        >
          Login
        </button>
        <button
          type="button"
          class="btn btn-gradient rounded-pill fw-semibold w-100"
          data-bs-toggle="modal"
          data-bs-target="#signupModal"
        >
          Sign Up
        </button>
      </div>
    </div>
  </nav>

  <section
  class="position-relative d-flex align-items-center justify-content-center text-center px-3 pt-5"
  style="height: 100vh; padding-top: 5rem;"
>
  <img
    alt="Luxury gym interior with warm ambient lighting, elegant design, and high-end fitness equipment"
    src="assets/babak.jpg"
    width="1920"
    height="1080"
    class="hero-img"
    loading="eager"
  />

  <!-- ✅ Add this gradient overlay div -->
  <div class="hero-overlay"></div>

  <div class="hero-content mx-auto">
    <h1 class="display-1 fw-extrabold font-serif mb-4 lh-1">
      Elevate Your Fitness
    </h1>
    <p class="fs-4 fw-semibold text-gray-200 mb-5 max-w-75 mx-auto">
      Personalized luxury fitness programs tailored just for you.
    </p>
    <a
      href="#programs"
      class="btn btn-gradient px-5 py-3 fw-bold text-uppercase shadow-lg user-select-none"
    >EXPLORE</a>
  </div>
</section>






  <div class="voucher-section">
    <button class="voucher-btn" data-bs-toggle="modal" data-bs-target="#voucherModal">
       GET YOUR MEMBERSHIP NOW!
    </button>
  </div>

  <div class="modal fade" id="voucherModal" tabindex="-1" aria-labelledby="voucherModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content p-4">
        <h3 class="mb-3 text-center">🏋️ Join The Barracks Gym</h3>
        <form id="voucherForm">
          <div class="mb-3">
            <label for="username" class="form-label">👤 Username</label>
            <input type="text" class="form-control" id="username" required placeholder="Enter your username" />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">🔒 Password</label>
            <input type="password" class="form-control" id="password" required placeholder="Enter your password" />
          </div>
          <div class="mb-3">
            <label for="membershipType" class="form-label">📄 Membership Type</label>
            <select class="form-select" id="membershipType" required>
              <option value="">Choose your membership</option>
              <option value="basic">Basic</option>
              <option value="premium">Premium</option>
              <option value="vip">VIP</option>
            </select>
          </div>
          <div class="mb-4">
            <label for="program" class="form-label">💪 Gym Program</label>
            <select class="form-select" id="program" required>
              <option value="">Select a program</option>
              <option value="weight_training">Build Muscle</option>
              <option value="cardio"></option>Power Strenght</option>
              <option value="yoga">Loss Weight</option>
             
            </select>
          </div>
          <button type="submit" class="submit-btn">Sign Up & Go to Dashboard ➤</button>
        </form>
      </div>
    </div>
  </div>
  <section
    class="py-5"
    id="Price"
    style="background: linear-gradient(to bottom, #000000, #1a1a1a, #000000);"
  >
    <h2
      class="text-center text-orange fw-bold font-serif display-4"
    >
      PRICELIST
    </h2>
    <div class="container">
      <div class="row justify-content-center g-4">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="price-card p-4 d-flex flex-column h-100">
            <h3 class="fw-extrabold fs-4 mb-3">NON - MEMBER</h3>
            <hr class="border-black border-2 mb-4" />
            <h4 class="fw-extrabold fs-5 mb-4">MONTHLY RATE</h4>
            <div class="d-flex justify-content-between mb-3">
              <span class="text-white fw-semibold">STANDARD</span>
              <span class="fw-bold">850</span>
            </div>
            <div class="d-flex justify-content-between mb-3">
              <span class="text-white fw-semibold">SENIOR/ STUDENT</span>
              <span class="fw-bold">750</span>
            </div>
            <div class="d-flex justify-content-between">
              <span class="text-white fw-semibold">WALK - IN</span>
              <span class="fw-bold">100</span>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="price-card p-4 d-flex flex-column h-100">
            <h3 class="fw-extrabold fs-4 mb-3">MEMBER</h3>
            <hr class="border-black border-2 mb-4" />
            <h4 class="fw-extrabold fs-5 mb-4">MONTHLY RATE</h4>
            <div class="d-flex justify-content-between mb-3">
              <span class="text-white fw-semibold">STANDARD</span>
              <span class="fw-bold">750</span>
            </div>
            <div class="d-flex justify-content-between mb-3">
              <span class="text-white fw-semibold">STUDENT</span>
              <span class="fw-bold">650</span>
            </div>
            <div class="d-flex justify-content-between">
              <span class="text-white fw-semibold">WALK - IN</span>
              <span class="fw-bold">90</span>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="price-card p-4 d-flex flex-column h-100">
            <h3 class="fw-extrabold fs-4 mb-3">PREMIUM</h3>
            <hr class="border-black border-2 mb-4" />
            <h4 class="fw-extrabold fs-5 mb-4">MONTHLY RATE</h4>
            <div class="d-flex justify-content-between mb-3">
              <span class="text-white fw-semibold">STANDARD</span>
              <span class="fw-bold">950</span>
            </div>
            <div class="d-flex justify-content-between mb-3">
              <span class="text-white fw-semibold">STUDENT</span>
              <span class="fw-bold">850</span>
            </div>
            <div class="d-flex justify-content-between">
              <span class="text-white fw-semibold">WALK - IN</span>
              <span class="fw-bold">120</span>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="price-card p-4 d-flex flex-column h-100">
            <h3 class="fw-extrabold fs-4 mb-3">ELITE</h3>
            <hr class="border-black border-2 mb-4" />
            <h4 class="fw-extrabold fs-5 mb-4">MONTHLY RATE</h4>
            <div class="d-flex justify-content-between mb-3">
              <span class="text-white fw-semibold">STANDARD</span>
              <span class="fw-bold">1200</span>
            </div>
            <div class="d-flex justify-content-between mb-3">
              <span class="text-white fw-semibold">STUDENT</span>
              <span class="fw-bold">1100</span>
            </div>
            <div class="d-flex justify-content-between">
              <span class="text-white fw-semibold">WALK - IN</span>
              <span class="fw-bold">150</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Program ni guico -->
  <section
    class="py-5"
    id="programs"
    style="background: linear-gradient(to bottom, #000000, #1a1a1a, #000000);"
  >
    <div class="container px-3 px-md-4">
      <h2
        class="text-center text-orange fw-bold font-serif display-4 mb-5 tracking-widest drop-shadow-orange"
      >
        OUR PROGRAMS
      </h2>
      <div class="row g-4">
        <div class="col-12 col-md-4">
          <div
            class="bg-dark rounded-4 shadow-lg overflow-hidden h-100 d-flex flex-column"
            style="transition: box-shadow 0.3s ease, transform 0.3s ease; cursor: pointer;"
            onmouseover="this.style.boxShadow='0 0 30px rgba(249,115,22,0.7)'; this.style.transform='scale(1.03)';"
            onmouseout="this.style.boxShadow=''; this.style.transform='';"
          >
            <img
              alt="High intensity cardio training session with athlete running on treadmill in a luxury gym"
              src="assets/building muscle.jpg"
              width="600"
              height="400"
              class="w-100 object-fit-cover"
              style="height: 16rem; object-fit: cover;"
              loading="lazy"
            />
            <div class="p-4 d-flex flex-column flex-grow-1">
              <h3 class="text-orange fw-bold font-serif fs-3 mb-3">Build Muscle</h3>
              <p class="text-gray-300 flex-grow-1">
                High-intensity cardio routines to boost endurance and torch calories.
              </p>
              <a
                href="#"
                class="btn btn-gradient mt-4 align-self-start px-4 py-2 fw-bold user-select-none"
                >Learn More</a
              >
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div
            class="bg-dark rounded-4 shadow-lg overflow-hidden h-100 d-flex flex-column"
            style="transition: box-shadow 0.3s ease, transform 0.3s ease; cursor: pointer;"
            onmouseover="this.style.boxShadow='0 0 30px rgba(249,115,22,0.7)'; this.style.transform='scale(1.03)';"
            onmouseout="this.style.boxShadow=''; this.style.transform='';"
          >
            <img
              alt="Strength training with weights in modern gym setting with luxury ambiance"
              src="assets/power strengh.jpg"
              width="600"
              height="400"
              class="w-100 object-fit-cover"
              style="height: 16rem; object-fit: cover;"
              loading="lazy"
            />
            <div class="p-4 d-flex flex-column flex-grow-1">
              <h3 class="text-orange fw-bold font-serif fs-3 mb-3">Power Strength</h3>
              <p class="text-gray-300 flex-grow-1">
                Customized resistance and weight training for maximal muscle growth.
              </p>
              <a
                href="#"
                class="btn btn-gradient mt-4 align-self-start px-4 py-2 fw-bold user-select-none"
                >Learn More</a
              >
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div
            class="bg-dark rounded-4 shadow-lg overflow-hidden h-100 d-flex flex-column"
            style="transition: box-shadow 0.3s ease, transform 0.3s ease; cursor: pointer;"
            onmouseover="this.style.boxShadow='0 0 30px rgba(249,115,22,0.7)'; this.style.transform='scale(1.03)';"
            onmouseout="this.style.boxShadow=''; this.style.transform='';"
          >
            <img
              alt="Peaceful yoga session in luxury studio with natural light and serene atmosphere"
              src="assets/lost weight.jpg"
              width="600"
              height="400"
              class="w-100 object-fit-cover"
              style="height: 16rem; object-fit: cover;"
              loading="lazy"
            />
            <div class="p-4 d-flex flex-column flex-grow-1">
              <h3 class="text-orange fw-bold font-serif fs-3 mb-3">Loss Weight</h3>
              <p class="text-gray-300 flex-grow-1">
                Mindful yoga sessions for flexibility, balance, and mental clarity.
              </p>
              <a
                href="#"
                class="btn btn-gradient mt-4 align-self-start px-4 py-2 fw-bold user-select-none"
                >Learn More</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Coach grace -->
  <section
    class="py-5"
    id="Coach"
    style="background: linear-gradient(to bottom, #000000, #1a1a1a, #000000);"
  >
    <div class="container px-3 px-md-4">
      <h2
        class="text-center text-orange fw-bold font-serif display-4 mb-5 tracking-widest drop-shadow-orange"
      >
        OUR COACHES
      </h2>
      <div class="row g-5 text-center justify-content-center">
        <div class="col-12 col-md-4 d-flex flex-column align-items-center">
          <img
            alt="Portrait of John Doe smiling confident businessman in luxury fitness testimonial"
            src="assets/coach 1.jpg"
            width="150"
            height="150"
            class="coach-img"
            loading="lazy"
          />
          <p class="fst-italic text-gray-400 mb-3 px-3">
            "Fitnase has completely transformed my fitness journey. The personalized programs are outstanding!"
          </p>
          <h3 class="text-orange fw-bold font-serif fs-4 mb-1">Jaycee Villalba</h3>
          <p class="text-gray-500 text-uppercase fw-semibold small tracking-widest">
            Coach
          </p>
        </div>
        <div class="col-12 col-md-4 d-flex flex-column align-items-center">
          <img
            alt="Portrait of Jane Smith happy fitness enthusiast testimonial in luxury gym"
            src="assets/Coach 2.jpg"
            width="150"
            height="150"
            class="coach-img"
            loading="lazy"
          />
          <p class="fst-italic text-gray-400 mb-3 px-3">
            "The luxury amenities and expert trainers make every workout an unforgettable experience."
          </p>
          <h3 class="text-orange fw-bold font-serif fs-4 mb-1">Junidele Luna</h3>
          <p class="text-gray-500 text-uppercase fw-semibold small tracking-widest">
            Fitness Enthusiast
          </p>
        </div>
        <div class="col-12 col-md-4 d-flex flex-column align-items-center">
          <img
            alt="Portrait of Samuel Lee entrepreneur smiling testimonial luxury fitness"
            src="assets/coach 3.jpg"
            width="150"
            height="150"
            class="coach-img"
            loading="lazy"
          />
          <p class="fst-italic text-gray-400 mb-3 px-3">
            "I love the flexibility of the schedules and how Fitnase tailors everything to my needs."
          </p>
          <h3 class="text-orange fw-bold font-serif fs-4 mb-1">Anthony Junio</h3>
          <p class="text-gray-500 text-uppercase fw-semibold small tracking-widest">
            Coach
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section
    class="py-5"
    id="gallery"
    style="background: linear-gradient(to bottom, #000000, #1a1a1a, #000000);"
  >
    <div class="container px-3 px-md-4">
      <h2
        class="text-center text-orange fw-bold font-serif display-4 mb-5 tracking-widest drop-shadow-orange"
      >
        GALLERY
      </h2>
      <div class="row g-4">
        <div class="col-12 col-md-4">
          <img
            alt="Luxury gym interior with modern equipment and warm ambient lighting, showcasing sleek design"
            src="assets/1 (2).jpg"
            width="600"
            height="400"
            class="gallery-img"
            loading="lazy"
          />
        </div>
        <div class="col-12 col-md-4">
          <img
            alt="Luxury gym interior with modern equipment and warm ambient lighting, showcasing sleek design"
            src="assets/1 (1).jpg"
            width="600"
            height="400"
            class="gallery-img"
            loading="lazy"
          />
        </div>
        <div class="col-12 col-md-4">
          <img
            alt="Luxury gym interior with modern equipment and warm ambient lighting, showcasing sleek design"
            src="assets/1 (3).jpg"
            width="600"
            height="400"
            class="gallery-img"
            loading="lazy"
          />
        </div>
      </div>
    </div>
  </section>

  <section
    class="py-5"
    id="about-us"
    style="background: linear-gradient(to bottom, #000000, #1a1a1a, #000000);"
  >
    <div class="container px-3 px-md-6">
      <div class="row align-items-center g-4">
        <div class="col-12 col-md-6">
          <div
            class="rounded-4 overflow-hidden shadow-lg border border-warning"
            style="max-height: 400px;"
          >
          <video
          class="w-100 h-100 object-fit-cover rounded-4"
          autoplay
          muted
          playsinline
          loop
          poster="https://placehold.co/600x400/png?text=Bracks+Gym+Video+Poster"
        >
          <source
            src="BARACCKS.mp4"
            type="video/mp4"
          />
          Your browser does not support the video tag.
        </video>
        
          </div>
        </div>
        <div class="col-12 col-md-6 text-center text-md-start">
          <h2
            class="text-orange fw-bold font-serif display-4 mb-4 tracking-widest drop-shadow-orange"
          >
            About Barracks Gym
          </h2>
          <p
            class="text-gray-300 fs-5 lh-lg mx-auto mx-md-0 fw-medium"
            style="max-width: 36rem;"
          >
            Welcome to
            <span class="font-serif fw-bold text-orange">Bracks Gym</span>, where
            fitness meets luxury. Whether you're a beginner or a seasoned
            athlete, we provide a state-of-the-art environment designed to help
            you achieve your fitness goals. From strength training to
            high-intensity cardio, we have everything you need to push your
            limits.
          </p>
        </div>
      </div>
    </div>
  </section>


  <section
  class="py-5"
  id="contact"
  style="background: linear-gradient(to bottom, #000000, #1a1a1a, #000000);"
>
  <div class="container px-3 px-md-5" style="max-width: 62rem;">
    <h2
      class="text-center text-warning fw-bold font-serif display-5 mb-0 tracking-wide drop-shadow-orange"
    >
      CONTACT US
    </h2>
    <p class="text-center text-light fs-5 mb-4 fw-medium">
      Get in touch with us to learn more about our luxury fitness programs or schedule a consultation.
    </p>

    <div class="row g-4 align-items-stretch">
      <div class="col-12 col-lg-6">
        <form
          class="d-flex flex-column gap-3 p-4 rounded-4 bg-dark border border-secondary shadow"
          onsubmit="event.preventDefault(); alert('Message sent!'); this.reset();"
        >
          <div>
            <label for="contactName" class="form-label text-light fw-semibold">Your Name</label>
            <input type="text" id="contactName" class="form-control form-control-sm" required />
          </div>
          <div>
            <label for="contactEmail" class="form-label text-light fw-semibold">Your Email</label>
            <input type="email" id="contactEmail" class="form-control form-control-sm" required />
          </div>
          <div>
            <label for="contactMessage" class="form-label text-light fw-semibold">Your Message</label>
            <textarea id="contactMessage" rows="4" class="form-control form-control-sm" required></textarea>
          </div>
          <button type="submit" class="btn btn-warning fw-bold w-100 py-2">
            Send Message
          </button>
        </form>
      </div>

      <div class="col-12 col-lg-6">
        <div class="rounded-4 overflow-hidden shadow-lg border border-warning" style="min-height: 300px;">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12616.506051246962!2d120.61312025639461!3d15.736907109579705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33cbd0155bc2e5bb%3A0xc054222bb9ff98f1!2sThe+Barracks+Fitness+Gym!5e0!3m2!1sen!2sph!4v1682773152072!5m2!1sen!2sph"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="The Barracks Fitness Gym Location"
          ></iframe>
        </div>
        <div class="mt-3">
          <a
            href="https://www.google.com/maps/dir/?api=1&destination=The+Barracks+Fitness+Gym,+Sta.+Maria,+Pangasinan"
            target="_blank"
            class="btn btn-outline-light w-100 fw-semibold"
          >
            Get Directions
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


  <footer
    class="bg-black bg-opacity-90 text-gray-400 text-center py-4 user-select-none border: solid white;"
  >
    <p class="mb-1">© 2025 BARRACKS gym. All rights reserved.</p>
    <div class="d-flex justify-content-center gap-4 fs-3">
      <a href="#" class="footer-icon text-gray-400">
        <i class="fab fa-facebook"></i>
      </a>
      <a href="#" class="footer-icon text-gray-400">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="#" class="footer-icon text-gray-400">
        <i class="fab fa-twitter"></i>
      </a>
    </div>
  </footer>

  


  <!-- Sign Up Modal -->
  <div class="modal fade" tabindex="-1" id="signupModal" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="signupForm">
            <div class="mb-4">
              <label for="signupUsername" class="form-label fw-semibold text-orange-400">Username</label>
              <input type="text" id="signupUsername" name="username" class="form-control form-control-dark rounded-pill border-0 px-4 py-3" placeholder="Enter username" required />
            </div>
         
            <div class="mb-4">
              <label for="signupPassword" class="form-label fw-semibold text-orange-400">Password</label>
              <input type="password" id="signupPassword" name="password" class="form-control form-control-dark rounded-pill border-0 px-4 py-3" placeholder="Enter password" required />
            </div>
            
            <div class="mb-4">
              <label for="signupRole" class="form-label fw-semibold text-orange-400">Role</label>
              <select id="signupRole" name="role" class="form-control form-control-dark rounded-pill border-0 px-4 py-3" required>
                <option value="">Select your role</option>
                <option value="member">Member</option>
                <option value="admin">Admin</option>
              </select>
            </div>
        
            <div class="d-grid">
              <button type="button" id="signupBtn" class="btn btn-gradient py-3">Sign Up</button>
            </div>
            <div class="mt-3 text-center">
              <p class="text-muted">Already have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">Login</a></p>
            </div>
            <div id="signupMessage" class="mt-3 text-center"></div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Login Modal -->
  <div class="modal fade" tabindex="-1" id="loginModal" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="loginForm">
            <div class="mb-4">
              <label for="loginUsername" class="form-label fw-semibold text-orange-400">Username</label>
              <input type="text" id="loginUsername" name="username" class="form-control form-control-dark rounded-pill border-0 px-4 py-3" placeholder="Enter username" required />
            </div>
         
            <div class="mb-4">
              <label for="loginPassword" class="form-label fw-semibold text-orange-400">Password</label>
              <input type="password" id="loginPassword" name="password" class="form-control form-control-dark rounded-pill border-0 px-4 py-3" placeholder="Enter password" required />
            </div>
        
            <div class="d-grid">
              <button type="button" id="loginBtn" class="btn btn-gradient py-3">Login</button>
            </div>
            <div class="mt-3 text-center">
              <p class="text-muted">Don't have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#signupModal" data-bs-dismiss="modal">Sign Up</a></p>
            </div>
            <div id="loginMessage" class="mt-3 text-center"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="scripts/auth.js"></script>
  <script src="scripts/login.js"></script>
  <script src="scripts/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>