<template>
  <section class="impact-section">
    <div class="container">
              <div class="section-header">
        <h2>Our Impact</h2>
        <p>Making a difference in communities across Nigeria</p>
      </div>
      <div class="impact-stats">
                  <div class="stat-item">
          <div class="stat-number">500+</div>
          <div class="stat-label">Lives Impacted</div>
        </div>
                  <div class="stat-item">
          <div class="stat-number">50+</div>
          <div class="stat-label">Widows Empowered</div>
        </div>
                  <div class="stat-item">
          <div class="stat-number">100+</div>
          <div class="stat-label">Children Educated</div>
        </div>
                  <div class="stat-item">
          <div class="stat-number">30+</div>
          <div class="stat-label">Physically Challenged Supported</div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
// Impact Statistics Section Component
</script>

<style scoped>
.impact-section {
  padding: 100px 0;
  background: white;
}

.section-header {
  text-align: center;
  margin-bottom: 60px;
}

.section-header h2 {
  font-size: 2.5rem;
  font-weight: 700;
  color: #1e293b;
  margin-bottom: 1rem;
}

.section-header p {
  font-size: 1.1rem;
  color: #64748b;
  line-height: 1.6;
}

.impact-stats {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 40px;
  max-width: 800px;
  margin: 0 auto;
}

.stat-item {
  text-align: center;
  padding: 30px 20px;
}

.stat-number {
  font-size: 3rem;
  font-weight: 800;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: 10px;
}

.stat-label {
  font-size: 1.1rem;
  color: #64748b;
  font-weight: 500;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 40px;
}

@media (max-width: 768px) {
  .impact-stats {
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
  }
  
  .stat-number {
    font-size: 2.5rem;
  }
}

@media (max-width: 480px) {
  .impact-stats {
    grid-template-columns: 1fr;
  }
}
</style>
