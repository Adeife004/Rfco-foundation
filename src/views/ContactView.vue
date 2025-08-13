<template>
  <div class="contact-page">
    <!-- Hero Section -->
    <section class="contact-hero">
      <div class="hero-overlay"></div>
      <div class="container">
        <div class="hero-content">
          <h1>Get In Touch</h1>
          <p>We'd love to hear from you. Reach out to us for any questions, support, or to learn more about our initiatives.</p>
        </div>
      </div>
    </section>

    <!-- Contact Information Section -->
    <section class="contact-info-section">
      <div class="container">
        <div class="contact-grid">
          <!-- Contact Form -->
          <div class="contact-form-container">
            <div class="form-header">
              <h2>Send Us a Message</h2>
              <p>Fill out the form below and we'll get back to you as soon as possible.</p>
            </div>
            <form @submit.prevent="submitContactForm" class="contact-form">
              <div class="form-row">
                <div class="form-group">
                  <label for="firstName">First Name *</label>
                  <input 
                    type="text" 
                    id="firstName"
                    v-model="contactForm.firstName" 
                    placeholder="Enter your first name"
                    required
                  >
                </div>
                <div class="form-group">
                  <label for="lastName">Last Name *</label>
                  <input 
                    type="text" 
                    id="lastName"
                    v-model="contactForm.lastName" 
                    placeholder="Enter your last name"
                    required
                  >
                </div>
              </div>
              
              <div class="form-row">
                <div class="form-group">
                  <label for="email">Email Address *</label>
                  <input 
                    type="email" 
                    id="email"
                    v-model="contactForm.email" 
                    placeholder="Enter your email address"
                    required
                  >
                </div>
                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input 
                    type="tel" 
                    id="phone"
                    v-model="contactForm.phone" 
                    placeholder="Enter your phone number"
                  >
                </div>
              </div>
              
              <div class="form-group">
                <label for="subject">Subject *</label>
                <select id="subject" v-model="contactForm.subject" required>
                  <option value="">Select a subject</option>
                  <option value="general">General Inquiry</option>
                  <option value="donation">Donation Information</option>
                  <option value="volunteer">Volunteer Opportunities</option>
                  <option value="support">Support Request</option>
                  <option value="partnership">Partnership</option>
                  <option value="other">Other</option>
                </select>
              </div>
              
              <div class="form-group">
                <label for="message">Message *</label>
                <textarea 
                  id="message"
                  v-model="contactForm.message" 
                  placeholder="Tell us how we can help you..."
                  rows="6"
                  required
                ></textarea>
              </div>
              
              <button type="submit" class="submit-btn">
                <span>📤</span> Send Message
              </button>
            </form>
          </div>

          <!-- Contact Information -->
          <div class="contact-info-container">
            <div class="info-header">
              <h2>Contact Information</h2>
              <p>Here's how you can reach us directly.</p>
            </div>
            
            <div class="contact-methods">
              <div class="contact-method">
                <div class="method-icon">
                  <span>📍</span>
                </div>
                <div class="method-content">
                  <h3>Address</h3>
                  <p>Nigeria, Africa</p>
                </div>
              </div>
              
              <div class="contact-method">
                <div class="method-icon">
                  <span>📞</span>
                </div>
                <div class="method-content">
                  <h3>Phone Numbers</h3>
                  <p>+234 816 022 6089</p>
                  <p>+234 911 574 6028</p>
                  <p class="service-note">(Customer Service)</p>
                </div>
              </div>
              
              <div class="contact-method">
                <div class="method-icon">
                  <span>📧</span>
                </div>
                <div class="method-content">
                  <h3>Email</h3>
                  <p>osiagafoundation@gmail.com</p>
                </div>
              </div>
              

            </div>
            
            <div class="social-links">
              <h3>Follow Us</h3>
              <div class="social-icons">
                <a href="https://www.facebook.com/profile.php?id=61572308974739" target="_blank" class="social-icon">
                  <span>📘</span>
                </a>
                <a href="#" class="social-icon">
                  <span>📷</span>
                </a>
                <a href="#" class="social-icon">
                  <span>🐦</span>
                </a>
                <a href="#" class="social-icon">
                  <span>💼</span>
                </a>
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

const contactForm = ref({
  firstName: '',
  lastName: '',
  email: '',
  phone: '',
  subject: '',
  message: ''
})

const submitContactForm = () => {
  // Create email content
  const emailContent = `
New Contact Message - OSIAGA Foundation

Name: ${contactForm.value.firstName} ${contactForm.value.lastName}
Email: ${contactForm.value.email}
Phone: ${contactForm.value.phone}
Subject: ${contactForm.value.subject}

Message:
${contactForm.value.message}

Submitted on: ${new Date().toLocaleString()}
  `

  // Send to email and admin page
  console.log('Sending contact message to osiagafoundation@gmail.com')
  console.log('Email content:', emailContent)
  console.log('Contact form submitted:', contactForm.value)
  
  // Reset form
  contactForm.value = {
    firstName: '',
    lastName: '',
    email: '',
    phone: '',
    subject: '',
    message: ''
  }
  alert('Thank you for your message! We will get back to you soon.')
}
</script>

<style scoped>
.contact-page {
  min-height: 100vh;
}

/* Hero Section */
.contact-hero {
  position: relative;
  height: 400px;
  background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  overflow: hidden;
}

.contact-hero::before {
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

.hero-content {
  position: relative;
  z-index: 2;
  max-width: 600px;
  margin: 0 auto;
  padding: 0 20px;
}

.hero-content h1 {
  font-size: 3.5rem;
  font-weight: 800;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 50%, #2563eb 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: 1rem;
  letter-spacing: -0.02em;
}

.hero-content p {
  font-size: 1.25rem;
  color: rgba(255, 255, 255, 0.9);
  line-height: 1.7;
}

/* Contact Information Section */
.contact-info-section {
  padding: 100px 0;
  background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 40px;
}

.contact-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: start;
}

/* Contact Form */
.contact-form-container {
  background: white;
  border-radius: 24px;
  padding: 40px;
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
  border: 1px solid rgba(0, 0, 0, 0.05);
}

.form-header {
  text-align: center;
  margin-bottom: 40px;
}

.form-header h2 {
  font-size: 2rem;
  font-weight: 700;
  color: #1e293b;
  margin-bottom: 0.5rem;
}

.form-header p {
  color: #64748b;
  font-size: 1.1rem;
}

.contact-form {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.form-group {
  display: flex;
  flex-direction: column;
}

.form-group label {
  font-weight: 600;
  color: #374151;
  margin-bottom: 8px;
  font-size: 0.95rem;
}

.form-group input,
.form-group select,
.form-group textarea {
  padding: 12px 16px;
  border: 2px solid #e5e7eb;
  border-radius: 12px;
  font-size: 1rem;
  transition: all 0.3s ease;
  background: white;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  outline: none;
  border-color: #3b82f6;
  box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.form-group textarea {
  resize: vertical;
  min-height: 120px;
}

.submit-btn {
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  color: white;
  border: none;
  padding: 16px 32px;
  border-radius: 12px;
  font-size: 1.1rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  margin-top: 10px;
}

.submit-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 30px rgba(59, 130, 246, 0.3);
}

/* Contact Information */
.contact-info-container {
  background: rgba(255, 255, 255, 0.8);
  border-radius: 24px;
  padding: 40px;
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.info-header {
  text-align: center;
  margin-bottom: 40px;
}

.info-header h2 {
  font-size: 2rem;
  font-weight: 700;
  color: #1e293b;
  margin-bottom: 0.5rem;
}

.info-header p {
  color: #64748b;
  font-size: 1.1rem;
}

.contact-methods {
  display: flex;
  flex-direction: column;
  gap: 30px;
  margin-bottom: 40px;
}

.contact-method {
  display: flex;
  align-items: flex-start;
  gap: 20px;
  padding: 20px;
  background: white;
  border-radius: 16px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s ease;
}

.contact-method:hover {
  transform: translateY(-2px);
}

.method-icon {
  width: 60px;
  height: 60px;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  border-radius: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.method-icon span {
  font-size: 1.5rem;
}

.method-content h3 {
  font-size: 1.2rem;
  font-weight: 600;
  color: #1e293b;
  margin-bottom: 8px;
}

.method-content p {
  color: #64748b;
  line-height: 1.6;
  margin-bottom: 4px;
}

.service-note {
  font-size: 0.9rem;
  color: #60a5fa;
  font-weight: 500;
}

/* Social Links */
.social-links {
  text-align: center;
  padding-top: 30px;
  border-top: 1px solid #e5e7eb;
}

.social-links h3 {
  font-size: 1.3rem;
  font-weight: 600;
  color: #1e293b;
  margin-bottom: 20px;
}

.social-icons {
  display: flex;
  justify-content: center;
  gap: 15px;
}

.social-icon {
  width: 50px;
  height: 50px;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  transition: all 0.3s ease;
}

.social-icon:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3);
}

.social-icon span {
  font-size: 1.2rem;
}

/* Responsive Design */
@media (max-width: 1024px) {
  .contact-grid {
    grid-template-columns: 1fr;
    gap: 40px;
  }
}

@media (max-width: 768px) {
  .hero-content h1 {
    font-size: 2.5rem;
  }
  
  .hero-content p {
    font-size: 1.1rem;
  }
  
  .contact-info-section {
    padding: 60px 0;
  }
  
  .container {
    padding: 0 20px;
  }
  
  .contact-form-container,
  .contact-info-container {
    padding: 30px 25px;
  }
  
  .form-row {
    grid-template-columns: 1fr;
    gap: 15px;
  }
  
  .contact-method {
    flex-direction: column;
    text-align: center;
  }
  
  .method-icon {
    align-self: center;
  }
}

@media (max-width: 480px) {
  .hero-content h1 {
    font-size: 2rem;
  }
  
  .contact-form-container,
  .contact-info-container {
    padding: 25px 20px;
  }
  
  .form-header h2,
  .info-header h2 {
    font-size: 1.5rem;
  }
}
</style>

