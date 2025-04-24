<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>TastyBites - Recipe Hub</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root {
      --primary: #a23e48;
      --accent: #fcbf49;
      --light: #fff8f0;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: var(--light);
      color: #333;
    }

    .navbar {
      background-color: var(--primary);
    }

    .navbar-brand, .navbar-nav .nav-link {
      color: white !important;
      font-weight: 500;
    }

    .hero {
      background: linear-gradient(to right, var(--primary), #6d2234);
      color: white;
      padding: 5rem 1rem;
      text-align: center;
    }

    .hero h1 {
      font-size: 3rem;
    }

    .hero p {
      font-size: 1.2rem;
      margin-top: 1rem;
    }

    .btn-accent {
      background-color: var(--accent);
      border: none;
      color: #000;
    }

    .btn-accent:hover {
      background-color: #ffe298;
      color: #000;
    }

    section h2 {
      color: var(--primary);
      margin-bottom: 2rem;
      font-weight: bold;
    }

    .card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      transition: 0.3s;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }

    .card img {
      height: 220px;
      object-fit: cover;
    }

    footer {
      background-color: var(--primary);
      color: white;
      text-align: center;
      padding: 1.2rem;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#">TastyBites-Atul Adhikari</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="#recipes" class="nav-link">Recipes</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="hero">
  <div class="container">
    <h1>Delicious Recipes for Every Mood</h1>
    <p>Browse our collection of tried and tested recipes, crafted with love from Atul Adhikari</p>
    <a href="#recipes" class="btn btn-accent mt-3 px-4 py-2">Explore Recipes</a>
  </div>
</section>

<section id="recipes" class="container my-5">
  <h2 class="text-center">Featured Recipes</h2>
  <div class="row g-4">
    <?php
    $recipes = [
      ['title' => 'Creamy Alfredo Pasta', 'desc' => 'Rich, creamy, and so easy to make.', 'img' => 'https://th.bing.com/th/id/OIP.vFqMBm6yDup4cLgxW9PEhgHaFj?rs=1&pid=ImgDetMain'],
      ['title' => 'Spicy Thai Curry', 'desc' => 'Aromatic and bold flavors.', 'img' => 'https://bing.com/th?id=OSK.54a022f550f668eee30be1b4c9fa2554'],
      ['title' => 'Classic Veggie Pizza', 'desc' => 'Topped with fresh veggies and love.', 'img' => 'https://bing.com/th?id=OSK.106eb373d437757cc1348629e144336e'],
    ];
    foreach ($recipes as $r): ?>
      <div class="col-md-4">
        <div class="card">
          <img src="<?= $r['img'] ?>" class="card-img-top" alt="<?= $r['title'] ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $r['title'] ?></h5>
            <p class="card-text"><?= $r['desc'] ?></p>
            <a href="#" class="btn btn-accent w-100">View Recipe</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section id="contact" class="container my-5">
  <h2 class="text-center">Contact Us</h2>
  <form method="POST" action="#contact" class="row g-3 mt-4">
    <div class="col-md-6">
      <input type="text" name="name" class="form-control" placeholder="Full Name" required>
    </div>
    <div class="col-md-6">
      <input type="email" name="email" class="form-control" placeholder="Email Address" required>
    </div>
    <div class="col-12">
      <textarea name="message" class="form-control" rows="4" placeholder="Your Message" required></textarea>
    </div>
    <div class="col-12 text-center">
      <button class="btn btn-success px-4">Send Message</button>
    </div>
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<div class='alert alert-success mt-4 text-center'>Thanks for reaching out! We'll get back to you soon 🍽️</div>";
  }
  ?>
</section>

<footer>
  &copy; <?= date('Y') ?> TastyBites-Atul Adhikari | Made with ❤️ for foodies
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
