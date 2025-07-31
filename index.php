<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>The Realms International Academy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>The Realms International Academy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      scroll-behavior: smooth;
    }
    .navbar {
      background: linear-gradient(90deg, #ff6f00, #ffa000);
    }
    .navbar-brand img {
      height: 50px;
      object-fit: contain;
    }
    header {
      background: url('https://images.unsplash.com/photo-1588072432836-e10032774350?fit=crop&w=1600&q=80') no-repeat center center/cover;
      height: 100vh;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      text-align: center;
    }
    header::after {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0,0,0,0.55);
    }
    header .content {
      position: relative;
      z-index: 1;
      animation: fadeInDown 1s ease;
    }
    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-40px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .section-title {
      color: #ff6f00;
      font-weight: bold;
      position: relative;
      display: inline-block;
    }
    .section-title::after {
      content: '';
      display: block;
      width: 60px;
      height: 4px;
      background: #0d6efd;
      margin: 10px auto 0;
    }
    .counter-box {
      background: linear-gradient(135deg, #0d6efd, #1e88e5);
      color: white;
      padding: 30px;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 0 12px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, background 0.3s ease;
    }
    .counter-box:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #1976d2, #42a5f5);
    }
    .testimonial {
      background: #fffdf6;
      border-left: 5px solid #0d6efd;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    .gallery img {
      width: 100%;
      border-radius: 10px;
      transition: 0.3s;
      box-shadow: 0 4px 8px rgba(0,0,0,0.08);
    }
    .gallery img:hover {
      transform: scale(1.03);
    }
    .btn-orange {
      background: #ff6f00;
      color: #fff;
      border: none;
    }
    .btn-orange:hover {
      background: #e65c00;
    }
    .whatsapp-float {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background: #25d366;
      color: white;
      border-radius: 50%;
      padding: 15px;
      font-size: 24px;
      z-index: 999;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
    .filter-btn {
      margin: 0 5px 15px;
      padding: 8px 15px;
      border: none;
      background-color: #0d6efd;
      color: white;
      border-radius: 4px;
      cursor: pointer;
    }
    .filter-btn.active {
      background-color: #ff6f00;
    }
    .gallery-item {
      display: none;
    }
    .show {
      display: block;
    }
    @media (max-width: 767px) {
      header {
        padding: 60px 20px;
        height: 80vh;
      }
      .display-4 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="assets/logo.jpg" alt="TRIA Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#why">Why TRIA</a></li>
        <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
        <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="admissions.php">Admissions</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Result Portal</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Header -->
<header>
  <div class="content">
    <h1 class="display-4 fw-bold">Welcome to <br><span class="text-warning">The Realms International Academy</span></h1>
    <p class="lead">Raising Champions, Building Legacy</p>
    <a href="admissions.php" class="btn btn-orange mt-3">Apply for Admission</a>
  </div>
</header>

<!-- Why TRIA Section -->
<section id="why" class="py-5 text-center">
  <div class="container">
    <h2 class="section-title mb-4" data-aos="fade-up">Why Choose TRIA?</h2>
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-right">
        <div class="counter-box shadow">
          <h2 class="counter" data-target="500">0</h2>
          <p>Happy Students</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="zoom-in">
        <div class="counter-box shadow">
          <h2 class="counter" data-target="30">0</h2>
          <p>Experienced Teachers</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-left">
        <div class="counter-box shadow">
          <h2 class="counter" data-target="15">0</h2>
          <p>Years of Excellence</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section id="testimonials" class="py-5 bg-light">
  <div class="container">
    <h2 class="section-title text-center mb-4" data-aos="fade-up">Testimonials</h2>
    <div class="row">
      <div class="col-md-6" data-aos="fade-right">
        <div class="testimonial">
          <p>"My child has greatly improved since joining TRIA. Great staff and excellent academics!"</p>
          <small>- Mrs. Adebayo</small>
        </div>
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <div class="testimonial">
          <p>"TRIA gives every child equal opportunity to shine. We love the environment and culture."</p>
          <small>- Mr. Ogunleye</small>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Gallery Section -->
<div id="gallery" class="section bg-light py-5">
  <h2 class="animate__animated animate__fadeInUp text-center mb-4">Gallery</h2>

  <!-- Filter Buttons -->
  <div class="container text-center mb-4">
    <div class="btn-group" role="group">
      <button type="button" class="btn btn-primary" onclick="showGallery('all')">View All Images</button>
      <button type="button" class="btn btn-warning text-white" onclick="showGallery('recent')">Recent Uploads</button>
      <button type="button" class="btn btn-outline-danger" onclick="hideGallery()">Hide Gallery</button>
    </div>
  </div>

  <!-- Gallery Images -->
  <div class="container">
    <div class="row g-3 justify-content-center" id="galleryContainer" style="display: none;">
      <?php
      require_once 'includes/config.php';
      $gallery_images = $pdo->query("SELECT * FROM gallery ORDER BY uploaded_at DESC")->fetchAll(PDO::FETCH_ASSOC);
      foreach ($gallery_images as $img): ?>
        <div class="col-6 col-md-4 col-lg-3">
          <img src="uploads/gallery/<?= htmlspecialchars($img['filename']) ?>" alt="Gallery Image" class="img-fluid gallery-img rounded shadow-sm">
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- Script -->
<script>
  function showGallery(type) {
    const gallery = document.getElementById('galleryContainer');
    gallery.style.display = 'flex';
    // Optional: filter by type later
  }

  function hideGallery() {
    const gallery = document.getElementById('galleryContainer');
    gallery.style.display = 'none';
  }
</script>


<!-- Result Portal CTA -->
<section class="py-5 bg-light text-center">
  <div class="container" data-aos="fade-up">
    <h2 class="section-title mb-4">Need Your Child’s Result?</h2>
    <a href="login.php" class="btn btn-success btn-lg">Check Student Result</a>
  </div>
</section>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/2347067157460" target="_blank" class="whatsapp-float" title="Chat with us">
  <i class="bi bi-whatsapp"></i>
</a>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();

  // Counter animation
  const counters = document.querySelectorAll('.counter');
  const speed = 100;

  const runCounters = () => {
    counters.forEach(counter => {
      const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const inc = Math.ceil(target / speed);
        if (count < target) {
          counter.innerText = count + inc;
          setTimeout(updateCount, 30);
        } else {
          counter.innerText = target;
        }
      };
      updateCount();
    });
  };

  let counterTriggered = false;
  window.addEventListener('scroll', () => {
    const triggerHeight = document.getElementById('why').offsetTop - window.innerHeight + 200;
    if (window.scrollY > triggerHeight && !counterTriggered) {
      runCounters();
      counterTriggered = true;
    }
  });

  // Gallery filter
  function filterGallery(category) {
    const items = document.querySelectorAll('.gallery-item');
    document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
    event.target.classList.add('active');

    items.forEach(item => {
      if (category === 'all' || item.classList.contains(category)) {
        item.classList.add('show');
      } else {
        item.classList.remove('show');
      }
    });
  }
</script>

<!-- Contact Section -->
<section id="contact" class="section bg-light">
  <div class="container">
    <h2 class="text-center text-primary mb-4 animate__animated animate__fadeInUp">Contact Us</h2>
    <div class="row g-4">

      <!-- Contact Form -->
      <div class="col-md-7">
        <form action="submit_message.php" method="POST">
          <div class="row g-3">
            <div class="col-md-6">
              <input type="text" name="full_name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-md-6">
              <input type="email" name="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="col-12">
              <input type="text" name="subject" class="form-control" placeholder="Subject" required>
            </div>
            <div class="col-12">
              <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
            </div>
            <div class="col-12 text-start">
              <button type="submit" class="btn btn-primary px-4">Send Message</button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</section>



<!-- Final JS additions for accordion -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const accordionItems = document.querySelectorAll('.accordion-button');
    accordionItems.forEach(btn => {
        btn.addEventListener('click', () => {
            const parent = btn.closest('.accordion-item');
            const collapse = parent.querySelector('.accordion-collapse');
            collapse.classList.toggle('show');
        });
    });
});
</script>
<!-- Modal for image preview -->
<div class="modal fade" id="imageModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <img src="" id="modalImage" class="img-fluid rounded shadow">
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.gallery-img').forEach(img => {
        img.addEventListener('click', function () {
            document.getElementById('modalImage').src = this.src;
            let modal = new bootstrap.Modal(document.getElementById('imageModal'));
            modal.show();
        });
    });
</script>
<!-- Contact Footer Section -->
<section id="footer-contact" class="bg-dark text-light py-5">
  <div class="container">
    <div class="row g-4">
      <!-- Contact Info -->
      <div class="col-md-6">
        <h5 class="text-uppercase mb-3">Contact Info</h5>
        <p><i class="bi bi-geo-alt-fill text-danger me-2"></i>Opposite St. Paul’s Church, Odo-Ona, Ibadan, Nigeria</p>
        <p><i class="bi bi-telephone-fill text-success me-2"></i> +234 803 123 4567, +234 701 234 5678</p>
        <p><i class="bi bi-envelope-fill text-info me-2"></i> info@realmsacademy.sch.ng</p>
        <a href="https://wa.me/2348031234567" class="btn btn-success btn-sm mt-2">
          <i class="bi bi-whatsapp"></i> Message us on WhatsApp
        </a>
      </div>


      <!-- Google Map -->
      <div class="col-md-6">
        <h5 class="text-uppercase mb-3">Locate Us</h5>
        <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
          <iframe
            src="https://www.google.com/maps/embed?pb=..."
            style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
        </div>
      </div>
    </div>
  <!-- Footer -->
<div class="footer mt-5">
    <p>Designed and powered by <strong>HAO-TECH SOLUTIONS</strong> – “Empowering schools with technology.”</p>
    <p>&copy; 2025 HAO-TECH SOLUTIONS. All Rights Reserved.</p>
</div>
  </div>
</section>
<!-- Floating WhatsApp Button -->
<a href="https://wa.me/2348031234567?text=Hello%20TRIA%2C%20I%20would%20like%20to%20make%20an%20enquiry."
   class="whatsapp-float"
   target="_blank"
   aria-label="Chat with us on WhatsApp">
  <i class="bi bi-whatsapp"></i>
</a>

</body>
</html>
