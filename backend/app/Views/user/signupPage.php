<?php
// register.php - User Signup Page for Kirkie's Fruit Shop
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - Kirkie's Fruit Shop</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-50 text-gray-800">

  <!-- Header -->
  <header class="bg-green-600 text-white shadow-lg">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold">Kirkie's Fruit Shop</h1>
      <nav>
        <ul class="flex space-x-6">
          <li><a href="index.php#home" class="hover:text-yellow-300">Home</a></li>
          <li><a href="index.php#about" class="hover:text-yellow-300">About</a></li>
          <li><a href="index.php#products" class="hover:text-yellow-300">Products</a></li>
          <li><a href="index.php#contact" class="hover:text-yellow-300">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Signup Section -->
  <section class="flex items-center justify-center min-h-[80vh] px-4">
    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-md">
      <h2 class="text-3xl font-bold text-center text-green-700">Create Account</h2>
      <p class="mt-2 text-center text-gray-600">Join Kirkie’s Fruit Shop and start shopping fresh today.</p>
      
      <form action="signup-process.php" method="POST" class="mt-8 space-y-4">
        <input type="text" name="name" placeholder="Full Name" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
        <input type="email" name="email" placeholder="Email Address" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
        <input type="password" name="password" placeholder="Password" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
        <input type="password" name="confirm_password" placeholder="Confirm Password" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
        
        <button type="submit" class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition">
          Sign Up
        </button>
      </form>

      <div class="mt-6 text-center text-sm text-gray-600">
        <p>Already have an account? <a href="login.php" class="text-green-700 font-semibold hover:underline">Log In</a></p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-green-700 text-white text-center py-6">
    <p>&copy; <?php echo date("Y"); ?> Kirkie's Fruit Shop. All rights reserved.</p>
  </footer>

</body>
</html>
