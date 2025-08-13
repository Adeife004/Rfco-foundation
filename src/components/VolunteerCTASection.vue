<template>
  <section class="volunteer-cta-section section-padding-2">
    <div class="container">
      <div class="cta-content">
        <div class="cta-text">
          <h2>Become A Volunteer</h2>
          <p>
            Join us in making a tangible difference in the lives of those in need. Your time and skills can help us provide education, empowerment, and support to vulnerable communities. Together, we can create a brighter future for all.
          </p>
          <div class="cta-features">
            <div class="feature">
              <span class="feature-icon">🎓</span>
              <span>Education Support</span>
            </div>
            <div class="feature">
              <span class="feature-icon">❤️</span>
              <span>Community Care</span>
            </div>
            <div class="feature">
              <span class="feature-icon">🤝</span>
              <span>Skill Development</span>
            </div>
          </div>
          <router-link to="/volunteer" class="cta-button">
            <span>👥</span> Join Us Now
            <span class="arrow">→</span>
          </router-link>
        </div>
        <div class="cta-image">
          <img src="/banner/add37.jpg" alt="Volunteer with us">
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
// Simple volunteer call-to-action component
</script>

<style scoped>
.volunteer-cta-section {
  padding: 80px 0;
  background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
  color: white;
  position: relative;
  overflow: hidden;
}

.volunteer-cta-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.03)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.03)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.02)"/><circle cx="10" cy="60" r="0.5" fill="rgba(255,255,255,0.02)"/><circle cx="90" cy="40" r="0.5" fill="rgba(255,255,255,0.02)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
  opacity: 0.5;
  z-index: 1;
}

.cta-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 4rem;
  align-items: center;
  position: relative;
  z-index: 2;
}

.cta-text h2 {
  font-size: 2.5rem;
  font-weight: 700;
  color: white;
  margin-bottom: 1rem;
  position: relative;
}

.cta-text h2::after {
  content: '';
  position: absolute;
  bottom: -10px;
  left: 0;
  width: 60px;
  height: 4px;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  border-radius: 2px;
}

.cta-text p {
  font-size: 1.1rem;
  line-height: 1.6;
  color: rgba(255, 255, 255, 0.9);
  margin-bottom: 2rem;
}

.cta-features {
  display: flex;
  gap: 2rem;
  margin-bottom: 2rem;
  flex-wrap: wrap;
}

.feature {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  font-size: 1rem;
  color: rgba(255, 255, 255, 0.9);
}

.feature-icon {
  font-size: 1.2rem;
}

.cta-button {
  display: inline-flex;
  align-items: center;
  gap: 0.75rem;
  padding: 15px 30px;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  color: white;
  text-decoration: none;
  border-radius: 50px;
  font-weight: 600;
  font-size: 1.1rem;
  transition: all 0.3s ease;
  border: 2px solid transparent;
}

.cta-button:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 25px rgba(96, 165, 250, 0.3);
  color: white;
}

.cta-button .arrow {
  opacity: 0;
  transform: translateX(-10px);
  transition: all 0.3s ease;
}

.cta-button:hover .arrow {
  opacity: 1;
  transform: translateX(0);
}

.cta-image {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

.cta-image img {
  width: 100%;
  height: 400px;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.cta-image:hover img {
  transform: scale(1.05);
}

@media (max-width: 768px) {
  .cta-content {
    grid-template-columns: 1fr;
    gap: 2rem;
    text-align: center;
  }
  
  .cta-text h2 {
    font-size: 2rem;
  }
  
  .cta-features {
    justify-content: center;
  }
  
  .cta-image img {
    height: 300px;
  }
}
</style>
