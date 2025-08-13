<template>
  <section class="values-section">
    <div class="container">
              <div class="section-header">
        <h2>Our Core Values</h2>
        <p>The principles that guide everything we do</p>
      </div>
      <div class="values-grid">
        <div class="value-card">
                      <div class="value-icon">
              <span>❤️</span>
            </div>
          <h3>Compassion</h3>
          <p>We approach every individual with empathy, understanding, and genuine care for their well-being.</p>
        </div>
                  <div class="value-card">
                      <div class="value-icon">
              <span>🤝</span>
            </div>
          <h3>Integrity</h3>
          <p>We maintain the highest standards of honesty, transparency, and ethical conduct in all our operations.</p>
        </div>
                  <div class="value-card">
                      <div class="value-icon">
              <span>👥</span>
            </div>
          <h3>Community</h3>
          <p>We believe in the power of collective action and building strong, supportive communities.</p>
        </div>
                  <div class="value-card">
                      <div class="value-icon">
              <span>💡</span>
            </div>
          <h3>Innovation</h3>
          <p>We continuously seek creative and effective solutions to address the challenges faced by our communities.</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
// Core Values Section Component
</script>

<style scoped>
.values-section {
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

.values-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 30px;
  max-width: 1000px;
  margin: 0 auto;
}

.value-card {
  text-align: center;
  padding: 30px 20px;
  background: white;
  border-radius: 15px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease;
}

.value-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
}

.value-icon {
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 20px;
  box-shadow: 0 8px 25px rgba(96, 165, 250, 0.3);
}

.value-icon i {
  font-size: 2rem;
  color: white;
}

.value-card h3 {
  font-size: 1.3rem;
  font-weight: 600;
  color: #1e293b;
  margin-bottom: 10px;
}

.value-card p {
  font-size: 0.95rem;
  color: #64748b;
  line-height: 1.6;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 40px;
}

@media (max-width: 768px) {
  .values-grid {
    grid-template-columns: 1fr;
    gap: 25px;
  }
}
</style>
