<?php
// index.php - Landing Page for Kirkie's Fruit Shop
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kirkie's Fruit Shop</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-50 text-gray-800">

  <!-- Header -->
  <header class="bg-green-600 text-white shadow-lg">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold">Kirkie's Fruit Shop</h1>
      <nav>
        <ul class="flex space-x-6">
          <li><a href="#home" class="hover:text-yellow-300">Home</a></li>
          <li><a href="#about" class="hover:text-yellow-300">About</a></li>
          <li><a href="#products" class="hover:text-yellow-300">Products</a></li>
          <li><a href="#contact" class="hover:text-yellow-300">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section id="home" class="relative bg-cover bg-center h-[500px]" style="background-image: url('https://images.unsplash.com/photo-1615484477762-194a8ff37f09?auto=format&fit=crop&w=1600&q=80');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
      <div class="text-center text-white px-4">
        <h2 class="text-4xl md:text-6xl font-extrabold">Fresh Fruits, Everyday!</h2>
        <p class="mt-4 text-lg md:text-xl">Hand-picked and delivered straight to your table.</p>
        <a href="#products" class="mt-6 inline-block px-6 py-3 bg-yellow-400 text-black font-semibold rounded-lg shadow-lg hover:bg-yellow-300 transition">
          Shop Now
        </a>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
      <img src="https://images.unsplash.com/photo-1611078489935-d7a1a6d2a2b8?auto=format&fit=crop&w=800&q=80" alt="Fresh Fruits" class="rounded-2xl shadow-md">
      <div>
        <h3 class="text-3xl font-bold text-green-700">Why Choose Kirkie's Fruit Shop?</h3>
        <p class="mt-4 text-gray-600 leading-relaxed">
          At Kirkie’s Fruit Shop, we believe in providing only the freshest and healthiest fruits.
          We source directly from local farmers and ensure every fruit is hand-picked for quality.
        </p>
        <ul class="mt-6 space-y-2 text-gray-700">
          <li>✅ 100% Fresh and Organic</li>
          <li>✅ Sourced from Local Farmers</li>
          <li>✅ Affordable and Accessible</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Products Section -->
  <section id="products" class="py-16 bg-gray-100">
    <div class="max-w-6xl mx-auto px-6">
      <h3 class="text-3xl font-bold text-center text-green-700 mb-12">Our Best Sellers</h3>
      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
        <?php
        // Sample product data
        $products = [
          ["name" => "Fresh Apples", "price" => "$3.50/kg", "img" => "https://images.unsplash.com/photo-1567306226416-28f0efdc88ce?auto=format&fit=crop&w=600&q=80"],
          ["name" => "Sweet Bananas", "price" => "$2.20/kg", "img" => "https://images.unsplash.com/photo-1574226516831-e1dff420e12c?auto=format&fit=crop&w=600&q=80"],
          ["name" => "Juicy Oranges", "price" => "$4.00/kg", "img" => "https://images.unsplash.com/photo-1601004890684-d8cbf643f5f2?auto=format&fit=crop&w=600&q=80"],
        ];

        foreach ($products as $product) {
          echo "
            <div class='bg-white rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition'>
              <img src='{$product['img']}' alt='{$product['name']}' class='h-48 w-full object-cover'>
              <div class='p-4'>
                <h4 class='text-xl font-semibold text-green-700'>{$product['name']}</h4>
                <p class='text-gray-600 mt-2'>{$product['price']}</p>
                <button class='mt-4 w-full bg-yellow-400 text-black font-semibold py-2 rounded-lg hover:bg-yellow-300'>Add to Cart</button>
              </div>
            </div>
          ";
        }
        ?>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <h3 class="text-3xl font-bold text-green-700">Get in Touch</h3>
      <p class="mt-4 text-gray-600">We’d love to hear from you! Drop us a message below.</p>
      <form action="contact.php" method="POST" class="mt-8 grid gap-4">
        <input type="text" name="name" placeholder="Your Name" required class="p-3 border border-gray-300 rounded-lg">
        <input type="email" name="email" placeholder="Your Email" required class="p-3 border border-gray-300 rounded-lg">
        <textarea name="message" rows="5" placeholder="Your Message" required class="p-3 border border-gray-300 rounded-lg"></textarea>
        <button type="submit" class="bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700">Send Message</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-green-700 text-white text-center py-6 mt-10">
    <p>&copy; <?php echo date("Y"); ?> Kirkie's Fruit Shop. All rights reserved.</p>
  </footer>

</body>
</html>
