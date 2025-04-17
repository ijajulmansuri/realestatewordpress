<?php
/*
Template Name : Contact
*/
get_header();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Real Estate Contact</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <div class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-white p-6 rounded-2xl shadow-lg">
      
      <!-- Contact Form -->
      <div>
        <h2 class="text-3xl font-semibold mb-6 text-gray-800">Contact Us</h2>
        <form action="#" method="POST" class="space-y-4">
          <div>
            <label class="block text-gray-600 mb-1">Full Name</label>
            <input type="text" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"/>
          </div>
          <div>
            <label class="block text-gray-600 mb-1">Email Address</label>
            <input type="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"/>
          </div>
          <div>
            <label class="block text-gray-600 mb-1">Phone Number</label>
            <input type="tel" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"/>
          </div>
          <div>
            <label class="block text-gray-600 mb-1">Message</label>
            <textarea name="message" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
          </div>
          <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Send Message</button>
        </form>
      </div>

      <!-- Map -->
      <div>
        <h2 class="text-3xl font-semibold mb-6 text-gray-800">Our Location</h2>
        <div class="w-full h-96 rounded-xl overflow-hidden">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.063551697796!2d85.3168792150619!3d27.709031832731207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb197b2d4a0d8f%3A0x2c251d518c3c8c92!2sKathmandu!5e0!3m2!1sen!2snp!4v1616681203720!5m2!1sen!2snp" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

    </div>
  </div>
</body>
</html>



<?php get_footer();?>