<template>
  <section class="newsletter-section">
    <div class="container">
      <div class="section-wrapper add-gutters d-flex flex-wrap align-items-center justify-content-between">
        <div class="news-item">
          <h4><span>📧</span> Subscribe to Our Newsletter</h4>
        </div>
        <div class="news-item">
          <form @submit.prevent="subscribeNewsletter" class="newsletter-form">
            <div class="form-group merged">
              <input type="email" v-model="newsletterEmail" placeholder="Enter your email" required>
                              <button type="submit" class="custom-btn" aria-label="Subscribe">
                  <span>📤</span> Subscribe
                </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

const newsletterEmail = ref('')

const subscribeNewsletter = () => {
  // Handle newsletter subscription
  console.log('Newsletter subscription:', newsletterEmail.value)
  newsletterEmail.value = ''
}
</script>

<style scoped>
.newsletter-section {
  padding: 60px 0;
  background: linear-gradient(135deg, #0b1220 0%, #0f172a 35%, #1e3a8a 70%, #2563eb 100%);
  color: white;
  position: relative;
  overflow: hidden;
}

.newsletter-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(135deg, rgba(11, 18, 32, 0.9) 0%, rgba(15, 23, 42, 0.9) 35%, rgba(30, 58, 138, 0.9) 70%, rgba(37, 99, 235, 0.9) 100%);
  z-index: 1;
}

.newsletter-section .container {
  position: relative;
  z-index: 2;
}

.section-wrapper {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 2rem;
}

.news-item h4 {
  font-size: 1.8rem;
  font-weight: 600;
  margin: 0;
  color: white;
}

.newsletter-form {
  flex-shrink: 0;
}

.form-group { display: flex; gap: 1rem; align-items: center; }

.form-group.merged {
  position: relative;
  gap: 0;
}

.form-group input {
  padding: 12px 130px 12px 20px; /* reserve space for button */
  border: 2px solid rgba(255, 255, 255, 0.3);
  border-radius: 50px;
  font-size: 1rem;
  background: rgba(255, 255, 255, 0.9);
  color: #333;
  min-width: 300px;
  transition: all 0.3s ease;
}

.form-group input:focus {
  outline: none;
  border-color: white;
  background: white;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.2);
}

.form-group input::placeholder {
  color: #666;
}

.custom-btn {
  display: inline-flex;
  align-items: center;
  padding: 12px 22px;
  background: white;
  color: #2563eb;
  text-decoration: none;
  border: none;
  border-radius: 50px;
  font-weight: 600;
  font-size: 1rem;
  cursor: pointer;
  transition: all 0.3s ease;
  white-space: nowrap;
}

.form-group.merged .custom-btn {
  position: absolute;
  right: 4px;
  top: 50%;
  transform: translateY(-50%);
  height: 44px;
  padding: 0 18px;
  border-radius: 50px;
}

.custom-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(255, 255, 255, 0.3);
}

.custom-btn i {
  margin-left: 0.5rem;
  transition: transform 0.3s ease;
}

.custom-btn:hover i {
  transform: translateX(3px);
}

/* Grid System */
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 15px;
}

/* Responsive Design */
@media (max-width: 768px) {
  .section-wrapper {
    flex-direction: column;
    text-align: center;
    gap: 1.5rem;
  }
  
  .news-item h4 {
    font-size: 1.5rem;
  }
  
  .form-group { flex-direction: column; width: 100%; }
  .form-group input { min-width: auto; width: 100%; padding-right: 20px; }
  .form-group.merged .custom-btn { position: static; transform: none; height: auto; width: 100%; margin-top: 10px; }
}

@media (max-width: 480px) {
  .newsletter-section {
    padding: 40px 0;
  }
  
  .news-item h4 {
    font-size: 1.3rem;
  }
}
</style>

