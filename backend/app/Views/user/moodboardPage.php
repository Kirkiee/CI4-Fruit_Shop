<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mood Board - Kirkie's Fruit Shop</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Lato&display=swap" rel="stylesheet">
  <style>
    .heading-font { font-family: 'Playfair Display', serif; }
    .body-font { font-family: 'Lato', sans-serif; }
  </style>
</head>
<body class="body-font bg-gray-50 text-gray-800">

  <div class="max-w-6xl mx-auto px-6 py-12 space-y-12">
    <!-- Title -->
    <h1 class="text-4xl font-bold heading-font text-green-700">Mood Board</h1>
    <p class="text-lg text-gray-600">Visual identity samples for Kirkie's Fruit Shop (fresh fruit e-commerce)</p>

    <!-- Color System -->
    <section>
      <h2 class="text-2xl font-bold heading-font text-green-700">Color system</h2>
      <p class="text-gray-600 mt-2">Three main colors with three vibrance levels (dark → light).</p>

      <div class="grid grid-cols-3 gap-6 mt-6">
        <!-- Sage Green -->
        <div>
          <div class="h-12 rounded-t bg-[#166534]"></div>
          <div class="h-12 bg-[#22C55E]"></div>
          <div class="h-12 rounded-b bg-[#BBF7D0]"></div>
          <p class="mt-2 font-semibold">Sage Green (Main brand)</p>
          <p class="text-sm">#166534 — #22C55E — #BBF7D0</p>
        </div>
        <!-- Golden Yellow -->
        <div>
          <div class="h-12 rounded-t bg-[#CA8A04]"></div>
          <div class="h-12 bg-[#FACC15]"></div>
          <div class="h-12 rounded-b bg-[#FEF08A]"></div>
          <p class="mt-2 font-semibold">Golden Yellow (Accent)</p>
          <p class="text-sm">#CA8A04 — #FACC15 — #FEF08A</p>
        </div>
        <!-- Neutral Gray -->
        <div>
          <div class="h-12 rounded-t bg-[#374151]"></div>
          <div class="h-12 bg-[#9CA3AF]"></div>
          <div class="h-12 rounded-b bg-[#F3F4F6]"></div>
          <p class="mt-2 font-semibold">Neutral Gray (Background)</p>
          <p class="text-sm">#374151 — #9CA3AF — #F3F4F6</p>
        </div>
      </div>
    </section>

    <!-- Typography -->
    <section>
      <h2 class="text-2xl font-bold heading-font text-green-700">Typography</h2>
      <div class="grid md:grid-cols-2 gap-6 mt-4">
        <div>
          <p class="heading-font text-xl">Playfair Display — Heading example</p>
        </div>
        <div>
          <p class="body-font text-gray-700">Lato — Body text example that demonstrates readable copy for longer paragraphs.</p>
        </div>
      </div>
    </section>

    <!-- Buttons -->
    <section>
      <h2 class="text-2xl font-bold heading-font text-green-700">Buttons</h2>
      <p class="text-gray-600 mt-2">Primary for main CTAs, secondary for supportive actions, border for subtle actions, disabled for unavailable states.</p>

      <!-- Light Mode -->
      <div class="mt-4">
        <p class="font-semibold">Light Mode</p>
        <div class="flex space-x-4 mt-2">
          <button class="px-4 py-2 rounded bg-green-600 text-white">Primary</button>
          <button class="px-4 py-2 rounded bg-yellow-400 text-black">Secondary</button>
          <button class="px-4 py-2 rounded border border-gray-400 text-gray-700">Border</button>
          <button class="px-4 py-2 rounded bg-gray-200 text-gray-400" disabled>Disabled</button>
        </div>
      </div>

      <!-- Dark Mode -->
      <div class="mt-6 bg-gray-800 p-4 rounded-lg">
        <p class="font-semibold text-white">Dark Mode</p>
        <div class="flex space-x-4 mt-2">
          <button class="px-4 py-2 rounded bg-green-600 text-white">Primary</button>
          <button class="px-4 py-2 rounded bg-yellow-500 text-black">Secondary</button>
          <button class="px-4 py-2 rounded border border-white text-white">Border</button>
          <button class="px-4 py-2 rounded bg-gray-600 text-gray-400" disabled>Disabled</button>
        </div>
      </div>
    </section>

    <!-- Card Samples -->
    <section>
      <h2 class="text-2xl font-bold heading-font text-green-700">Card sample</h2>
      <div class="grid md:grid-cols-3 gap-6 mt-6">
        <div class="p-4 border rounded-lg bg-white shadow-sm">
          <h3 class="font-bold text-lg">🍎 Fresh Apples</h3>
          <p class="text-gray-600 mt-1">$3.50/kg — Crisp, sweet, and hand-picked daily.</p>
          <a href="#" class="text-green-700 font-semibold mt-2 inline-block">Read more</a>
        </div>
        <div class="p-4 border rounded-lg bg-white shadow-sm">
          <h3 class="font-bold text-lg">🍌 Sweet Bananas</h3>
          <p class="text-gray-600 mt-1">$2.20/kg — Naturally ripened with a creamy texture.</p>
          <a href="#" class="text-green-700 font-semibold mt-2 inline-block">Read more</a>
        </div>
        <div class="p-4 border rounded-lg bg-white shadow-sm">
          <h3 class="font-bold text-lg">🍊 Juicy Oranges</h3>
          <p class="text-gray-600 mt-1">$4.00/kg — Packed with vitamin C for a healthy boost.</p>
          <a href="#" class="text-green-700 font-semibold mt-2 inline-block">Read more</a>
        </div>
      </div>
    </section>

    <!-- Logos -->
    <section>
      <h2 class="text-2xl font-bold heading-font text-green-700">Logos</h2>
      <div class="grid md:grid-cols-2 gap-6 mt-6">
        <div class="p-6 bg-white border rounded-lg flex items-center justify-center">
          <div class="w-24 h-24 rounded-full bg-gradient-to-tr from-green-600 to-yellow-400"></div>
        </div>
        <div class="p-6 bg-white border rounded-lg flex items-center justify-center">
          <div class="w-24 h-24 bg-gradient-to-tr from-green-600 to-yellow-400"></div>
        </div>
      </div>
    </section>
  </div>

</body>
</html>
