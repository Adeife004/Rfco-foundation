<template>
  <div class="testimonials-page">
    <!-- Hero Section -->
    <section class="testimonials-hero">
      <div class="hero-overlay"></div>
      <div class="container">
        <div class="hero-content">
          <h1>Testimonials</h1>
          <p>Hear from the people whose lives have been transformed through our foundation's initiatives.</p>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
      <div class="container">
        <div class="testimonials-grid">
          <div class="testimonial-card" v-for="testimonial in testimonials" :key="testimonial.id">
            <div class="testimonial-content">
              <div class="quote-icon">
                <span>"</span>
              </div>
              <p class="testimonial-text">{{ testimonial.text }}</p>
              <div class="testimonial-author">
                <div class="author-avatar">
                  <span>{{ testimonial.name.charAt(0) }}</span>
                </div>
                <div class="author-info">
                  <h4>{{ testimonial.name }}</h4>
                  <p>{{ testimonial.title }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const testimonials = ref([
  {
    id: 1,
    text: "The foundation's scholarship program gave my children the opportunity to attend school. I am forever grateful for this life-changing support.",
    name: "Sarah Johnson",
    title: "Parent of Scholarship Recipients"
  },
  {
    id: 2,
    text: "Through the skill acquisition program, I learned tailoring and now run my own business. The foundation truly empowered me to be self-sufficient.",
    name: "Maria Okechukwu",
    title: "Widow & Business Owner"
  },
  {
    id: 3,
    text: "The foundation provided me with assistive devices that have greatly improved my mobility and independence. Their support is invaluable.",
    name: "David Okonkwo",
    title: "Physically Challenged Beneficiary"
  },
  {
    id: 4,
    text: "As a volunteer, I've seen firsthand the positive impact this foundation has on communities. It's an honor to be part of such meaningful work.",
    name: "Grace Adebayo",
    title: "Foundation Volunteer"
  },
  {
    id: 5,
    text: "The foundation's commitment to education has opened doors for many children in our community. Their work is truly transformative.",
    name: "Michael Chukwudi",
    title: "Community Leader"
  },
  {
    id: 6,
    text: "I received a loan to start my small business, and now I can provide for my family. The foundation's support changed my life completely.",
    name: "Aisha Bello",
    title: "Loan Beneficiary"
  }
])
</script>

<style scoped>
.testimonials-page {
  min-height: 100vh;
}

/* Hero Section */
.testimonials-hero {
  position: relative;
  height: 50vh;
  min-height: 400px;
  background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
  display: flex;
  align-items: center;
  color: white;
  overflow: hidden;
}

.hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.03)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.03)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.02)"/><circle cx="10" cy="60" r="0.5" fill="rgba(255,255,255,0.02)"/><circle cx="90" cy="40" r="0.5" fill="rgba(255,255,255,0.02)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
  opacity: 0.5;
}

.hero-content {
  position: relative;
  z-index: 2;
  text-align: center;
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100%;
}

.hero-content h1 {
  font-size: 3rem;
  font-weight: 700;
  margin-bottom: 1rem;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.hero-content p {
  font-size: 1.2rem;
  line-height: 1.6;
  color: rgba(255, 255, 255, 0.9);
  max-width: 600px;
}

/* Testimonials Section */
.testimonials-section {
  padding: 80px 0;
  background: #f8fafc;
}

.testimonials-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
  gap: 2rem;
  max-width: 1200px;
  margin: 0 auto;
}

.testimonial-card {
  background: white;
  padding: 2.5rem;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  border: 1px solid #e2e8f0;
  position: relative;
  overflow: hidden;
}

.testimonial-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
}

.testimonial-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.testimonial-content {
  position: relative;
}

.quote-icon {
  font-size: 3rem;
  color: #60a5fa;
  margin-bottom: 1.5rem;
  opacity: 0.3;
  font-weight: 300;
}

.testimonial-text {
  font-size: 1.1rem;
  line-height: 1.7;
  color: #374151;
  margin-bottom: 2rem;
  font-style: italic;
  position: relative;
}

.testimonial-author {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.author-avatar {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-weight: 600;
  font-size: 1.5rem;
  flex-shrink: 0;
}

.author-info h4 {
  font-size: 1.1rem;
  font-weight: 600;
  margin-bottom: 0.25rem;
  color: #1e293b;
}

.author-info p {
  font-size: 0.9rem;
  color: #64748b;
  margin: 0;
}

/* Responsive Design */
@media (max-width: 768px) {
  .hero-content h1 {
    font-size: 2.5rem;
  }
  
  .hero-content p {
    font-size: 1.1rem;
  }
  
  .testimonials-grid {
    grid-template-columns: 1fr;
    gap: 1.5rem;
  }
  
  .testimonial-card {
    padding: 2rem;
  }
  
  .testimonials-section {
    padding: 60px 0;
  }
}

@media (max-width: 480px) {
  .hero-content h1 {
    font-size: 2rem;
  }
  
  .hero-content p {
    font-size: 1rem;
  }
  
  .testimonial-card {
    padding: 1.5rem;
  }
  
  .quote-icon {
    font-size: 2.5rem;
  }
  
  .testimonial-text {
    font-size: 1rem;
  }
}
</style>

