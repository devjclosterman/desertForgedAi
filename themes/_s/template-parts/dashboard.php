<section class="bg-zinc-950 text-white p-10 rounded-lg shadow-lg">
  <h2 class="text-3xl font-bold mb-6">Live Site Intelligence</h2>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Bot Engagement -->
    <div class="bg-zinc-800 p-6 rounded-xl relative overflow-hidden">
      <h3 class="text-xl font-semibold mb-2">Bot Engagement</h3>
      <p class="text-green-400 text-4xl font-bold live-metric" id="botMetric">--</p>
      <p class="text-gray-400 text-sm mt-2">Avg. messages per user</p>
    </div>

    <!-- SEO Visibility -->
    <div class="bg-zinc-800 p-6 rounded-xl relative overflow-hidden">
      <h3 class="text-xl font-semibold mb-2">SEO Visibility</h3>
      <p class="text-yellow-400 text-4xl font-bold live-metric" id="seoMetric">--</p>
      <p class="text-gray-400 text-sm mt-2">Indexed keywords this week</p>
    </div>

    <!-- Conversion Rate -->
    <div class="bg-zinc-800 p-6 rounded-xl relative overflow-hidden">
      <h3 class="text-xl font-semibold mb-2">Conversion Rate</h3>
      <p class="text-blue-400 text-4xl font-bold live-metric" id="conversionMetric">--%</p>
      <p class="text-gray-400 text-sm mt-2">From bot to CTA click</p>
    </div>
  </div>
</section>

<script>
  function randomFloat(min, max, decimals = 1) {
    return (Math.random() * (max - min) + min).toFixed(decimals);
  }

  function updateMetrics() {
    document.getElementById("botMetric").textContent = randomFloat(3, 12);
    document.getElementById("seoMetric").textContent = Math.floor(Math.random() * 1000 + 400);
    document.getElementById("conversionMetric").textContent = randomFloat(1, 10) + "%";
  }

  setInterval(updateMetrics, 1500); // Simulate real-time
  updateMetrics(); // Initial load
</script>
