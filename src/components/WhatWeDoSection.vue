<template>
  <section class="what-we-do-section">
    <div class="container">
      <!-- Section Header -->
      <div class="section-header">
        <div class="header-content">
          <h2 class="section-title">What We Do</h2>
          <p class="section-subtitle">Our foundation is committed to making a positive impact in the lives of vulnerable individuals and communities through comprehensive support programs and initiatives.</p>
        </div>
      </div>

      <!-- Content Grid -->
      <div class="content-grid">
        <!-- Left Column - Services -->
        <div class="services-column">
          <div class="services-list">
            <div class="service-card">
              <div class="service-icon">
                <span>🎓</span>
              </div>
              <div class="service-content">
                <h3>Education Support</h3>
                <p>We provide scholarships and educational resources to indigent children, ensuring they have access to quality education and opportunities for a better future.</p>
                <div class="service-features">
                  <span class="feature">📚 Scholarships</span>
                  <span class="feature">📖 Learning Materials</span>
                  <span class="feature">🎯 Mentorship</span>
                </div>
              </div>
            </div>

            <div class="service-card">
              <div class="service-icon">
                <span>💪</span>
              </div>
              <div class="service-content">
                <h3>Widow Empowerment</h3>
                <p>We empower widows through skill acquisition programs, helping them develop marketable skills and become financially independent.</p>
                <div class="service-features">
                  <span class="feature">🛠️ Skill Training</span>
                  <span class="feature">💰 Microfinance</span>
                  <span class="feature">🤝 Support Groups</span>
                </div>
              </div>
            </div>

            <div class="service-card">
              <div class="service-icon">
                <span>♿</span>
              </div>
              <div class="service-content">
                <h3>Physically Challenged Support</h3>
                <p>We provide assistive technologies, rehabilitation services, and support to physically challenged individuals, helping them lead more independent lives.</p>
                <div class="service-features">
                  <span class="feature">🦽 Assistive Devices</span>
                  <span class="feature">🏥 Rehabilitation</span>
                  <span class="feature">❤️ Care Support</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column - Image -->
        <div class="image-column">
          <div class="image-container">
            <img :src="heroImage" alt="What We Do" class="hero-image">
            <div class="image-overlay">
              <div class="overlay-content">
                <h3>Making a Difference</h3>
                <p>Every day, we work to create positive change in communities across Nigeria</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import heroImage from '../assets/herosection/carouselImg1.jpeg'
</script>

<style scoped>
.what-we-do-section {
  padding: 120px 0;
  background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
  position: relative;
  overflow: hidden;
}

.what-we-do-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="rgba(255,255,255,0.03)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
  opacity: 0.6;
  z-index: 1;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 40px;
  position: relative;
  z-index: 2;
}

/* Section Header */
.section-header {
  text-align: center;
  margin-bottom: 80px;
}

.header-content {
  max-width: 700px;
  margin: 0 auto;
}

.section-title {
  font-size: 3.5rem;
  font-weight: 800;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 50%, #2563eb 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: 1.5rem;
  letter-spacing: -0.02em;
}

.section-subtitle {
  font-size: 1.25rem;
  color: rgba(255, 255, 255, 0.9);
  line-height: 1.7;
  font-weight: 400;
}

/* Content Grid */
.content-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: start;
}

/* Services Column */
.services-list {
  display: flex;
  flex-direction: column;
  gap: 30px;
}

.service-card {
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: 24px;
  padding: 30px;
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  position: relative;
  overflow: hidden;
}

.service-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  transform: scaleX(0);
  transition: transform 0.4s ease;
}

.service-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 35px 70px rgba(0, 0, 0, 0.25);
  border-color: rgba(96, 165, 250, 0.3);
}

.service-card:hover::before {
  transform: scaleX(1);
}

/* Service Icon */
.service-icon {
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  border-radius: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 25px;
  box-shadow: 0 12px 30px rgba(96, 165, 250, 0.3);
  transition: all 0.4s ease;
}

.service-card:hover .service-icon {
  transform: scale(1.1) rotate(5deg);
  box-shadow: 0 18px 40px rgba(96, 165, 250, 0.4);
}

.service-icon span {
  font-size: 2.5rem;
}

/* Service Content */
.service-content h3 {
  font-size: 1.75rem;
  font-weight: 700;
  color: white;
  margin-bottom: 15px;
  line-height: 1.3;
}

.service-content p {
  font-size: 1.05rem;
  color: rgba(255, 255, 255, 0.85);
  line-height: 1.7;
  margin-bottom: 20px;
  font-weight: 400;
}

/* Service Features */
.service-features {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.feature {
  background: rgba(96, 165, 250, 0.15);
  color: #60a5fa;
  padding: 6px 12px;
  border-radius: 20px;
  font-size: 0.9rem;
  font-weight: 500;
  border: 1px solid rgba(96, 165, 250, 0.2);
  transition: all 0.3s ease;
}

.feature:hover {
  background: rgba(96, 165, 250, 0.25);
  transform: translateY(-2px);
}

/* Image Column */
.image-container {
  position: relative;
  border-radius: 24px;
  overflow: hidden;
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
}

.hero-image {
  width: 100%;
  height: 500px;
  object-fit: cover;
  display: block;
  transition: transform 0.4s ease;
}

.image-container:hover .hero-image {
  transform: scale(1.05);
}

.image-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
  padding: 40px 30px 30px;
  color: white;
}

.overlay-content h3 {
  font-size: 1.5rem;
  font-weight: 700;
  margin-bottom: 10px;
}

.overlay-content p {
  font-size: 1rem;
  opacity: 0.9;
  line-height: 1.6;
}

/* Responsive Design */
@media (max-width: 1024px) {
  .content-grid {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  
  .image-column {
    order: -1;
  }
  
  .hero-image {
    height: 400px;
  }
}

@media (max-width: 768px) {
  .what-we-do-section {
    padding: 80px 0;
  }
  
  .container {
    padding: 0 20px;
  }
  
  .section-title {
    font-size: 2.5rem;
  }
  
  .section-subtitle {
    font-size: 1.1rem;
  }
  
  .service-card {
    padding: 25px 20px;
  }
  
  .service-content h3 {
    font-size: 1.5rem;
  }
  
  .service-content p {
    font-size: 1rem;
  }
  
  .hero-image {
    height: 300px;
  }
  
  .image-overlay {
    padding: 30px 20px 20px;
  }
}

@media (max-width: 480px) {
  .section-title {
    font-size: 2rem;
  }
  
  .service-icon {
    width: 70px;
    height: 70px;
  }
  
  .service-icon span {
    font-size: 2rem;
  }
  
  .service-features {
    flex-direction: column;
  }
  
  .feature {
    text-align: center;
  }
}
</style>

