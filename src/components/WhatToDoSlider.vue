<template>
  <section class="what-to-do-section">
    <div class="container">
      <!-- Section Header -->
      <div class="section-header">
        <div class="header-content">
          <h2 class="section-title">What To Do</h2>
          <p class="section-subtitle">Discover how you can make a difference and get involved with our various programs and initiatives.</p>
        </div>
      </div>

            <!-- Cards Grid -->
      <div class="cards-container">
        <div class="card">
          <div class="card-icon">
            <span>🎓</span>
          </div>
          <div class="card-content">
            <h3>Education Programs</h3>
            <p>Support our educational initiatives by volunteering as a tutor, donating educational materials, or sponsoring a child's education. Every contribution helps build a brighter future.</p>
            <router-link to="/volunteer" class="card-button">
              <span>Get Involved</span>
              <span>→</span>
            </router-link>
          </div>
        </div>

        <div class="card">
          <div class="card-icon">
            <span>❤️</span>
          </div>
          <div class="card-content">
            <h3>Widow Empowerment</h3>
            <p>Help empower widows by supporting our skill acquisition programs, providing mentorship, or donating to our microfinance initiatives. Together we can create sustainable change.</p>
            <router-link to="/donate" class="card-button">
              <span>Support Us</span>
              <span>→</span>
            </router-link>
          </div>
        </div>

        <div class="card">
          <div class="card-icon">
            <span>♿</span>
          </div>
          <div class="card-content">
            <h3>Disability Support</h3>
            <p>Support physically challenged individuals by volunteering your time, donating assistive devices, or contributing to our rehabilitation programs. Every act of kindness matters.</p>
            <router-link to="/contact" class="card-button">
              <span>Contact Us</span>
              <span>→</span>
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
// Professional What To Do section
</script>

<style scoped>
.what-to-do-section {
  padding: 100px 0;
  background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
  position: relative;
  overflow: hidden;
}

.what-to-do-section::before {
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

/* Cards Container */
.cards-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
  max-width: 1200px;
  margin: 0 auto;
}

/* Card Styling */
.card {
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: 24px;
  padding: 40px 30px;
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  position: relative;
  overflow: hidden;
}

.card::before {
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

.card:hover {
  transform: translateY(-8px);
  box-shadow: 0 35px 70px rgba(0, 0, 0, 0.25);
  border-color: rgba(96, 165, 250, 0.3);
}

.card:hover::before {
  transform: scaleX(1);
}

/* Card Icon */
.card-icon {
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

.card:hover .card-icon {
  transform: scale(1.1) rotate(5deg);
  box-shadow: 0 18px 40px rgba(96, 165, 250, 0.4);
}

.card-icon i {
  font-size: 2.2rem;
  color: white;
}

/* Card Content */
.card-content h3 {
  font-size: 1.75rem;
  font-weight: 700;
  color: white;
  margin-bottom: 15px;
  line-height: 1.3;
}

.card-content p {
  font-size: 1.05rem;
  color: rgba(255, 255, 255, 0.85);
  line-height: 1.7;
  margin-bottom: 30px;
  font-weight: 400;
}

/* Card Button */
.card-button {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  padding: 14px 28px;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  color: white;
  text-decoration: none;
  border-radius: 12px;
  font-weight: 600;
  font-size: 1rem;
  transition: all 0.3s ease;
  box-shadow: 0 8px 25px rgba(96, 165, 250, 0.3);
  position: relative;
  overflow: hidden;
}

.card-button::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
  transition: left 0.5s ease;
}

.card-button:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 35px rgba(96, 165, 250, 0.4);
  color: white;
}

.card-button:hover::before {
  left: 100%;
}

.card-button i {
  font-size: 0.9rem;
  transition: transform 0.3s ease;
}

.card-button:hover i {
  transform: translateX(4px);
}

/* Responsive Design */
@media (max-width: 768px) {
  .what-to-do-section {
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
  
  .cards-container {
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
  }
  
  .card {
    padding: 30px 25px;
  }
  
  .card-content h3 {
    font-size: 1.5rem;
  }
  
  .card-content p {
    font-size: 1rem;
  }
}

@media (max-width: 480px) {
  .section-title {
    font-size: 2rem;
  }
  
  .cards-container {
    grid-template-columns: 1fr;
    gap: 20px;
  }
  
  .card {
    padding: 25px 20px;
  }
  
  .card-icon {
    width: 70px;
    height: 70px;
  }
  
  .card-icon span {
    font-size: 1.8rem;
  }
}
</style>

