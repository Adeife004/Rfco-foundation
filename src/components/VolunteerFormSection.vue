<template>
  <section class="volunteer-form-section section-padding-2 bg-color">
    <div class="container">	
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="volunteer-form-thumb">
            <img :src="volunteerImage" alt="volunteer">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="volunteer-content">
            <div class="section-title">
              <h3>Become A Volunteer</h3>
              <p>
                Join us in making a tangible difference in the lives of those in need. Your time and skills can help us provide education, empowerment, and support to vulnerable communities. Together, we can create a brighter future for all.
              </p>
            </div>
            <form @submit.prevent="submitVolunteerForm" class="volunteer-form glass-form">
              <div class="form-row">
                <div class="form-group">
                  <input type="text" v-model="volunteerForm.first_name" placeholder="First Name *" required>
                </div>
                <div class="form-group">
                  <input type="text" v-model="volunteerForm.last_name" placeholder="Last Name *" required>
                </div>
              </div>
              
              <div class="form-row">
                <div class="form-group">
                  <input type="email" v-model="volunteerForm.email" placeholder="Email Address *" required>
                </div>
                <div class="form-group">
                  <input type="tel" v-model="volunteerForm.phone" placeholder="Phone Number *" required>
                </div>
              </div>
              
              <div class="form-group">
                <input type="text" v-model="volunteerForm.address" placeholder="Full Address *" required>
              </div>
              
              <div class="form-group">
                <select v-model="volunteerForm.volunteer_area" required>
                  <option value="" disabled selected>Preferred Volunteer Area *</option>
                  <option value="Education Programs">Education Programs</option>
                  <option value="Widow Empowerment">Widow Empowerment</option>
                  <option value="Physically Challenged Support">Physically Challenged Support</option>
                  <option value="Community Development">Community Development</option>
                  <option value="Healthcare Outreach">Healthcare Outreach</option>
                  <option value="Administrative Support">Administrative Support</option>
                  <option value="Event Planning">Event Planning</option>
                  <option value="Fundraising">Fundraising</option>
                </select>
              </div>
              
              <div class="form-group">
                <select v-model="volunteerForm.availability" required>
                  <option value="" disabled selected>Availability *</option>
                  <option value="Weekdays">Weekdays</option>
                  <option value="Weekends">Weekends</option>
                  <option value="Both">Both Weekdays & Weekends</option>
                  <option value="Flexible">Flexible</option>
                </select>
              </div>
              
              <div class="form-group">
                <textarea v-model="volunteerForm.motivation" placeholder="Why do you want to volunteer with us? *" rows="3" required></textarea>
              </div>
              
              <div class="form-group checkbox-group">
                <label class="checkbox-label">
                  <input type="checkbox" v-model="volunteerForm.terms_agreement" required>
                  <span class="checkmark"></span>
                  I agree to the terms and conditions of volunteering
                </label>
              </div>
              
              <div class="group-btn">
                <button type="submit" class="custom-btn active" :disabled="isSubmitting">
                  <span v-if="!isSubmitting">👥 JOIN US NOW</span>
                  <span v-else>⏳ Submitting...</span>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'
import volunteerImage from '@/assets/latestnews/img3.jpg'

const volunteerForm = ref({
  first_name: '',
  last_name: '',
  email: '',
  phone: '',
  address: '',
  volunteer_area: '',
  availability: '',
  motivation: '',
  terms_agreement: false
})

const isSubmitting = ref(false)

const submitVolunteerForm = async () => {
  isSubmitting.value = true
  
  try {
    // Create email content
    const emailContent = `
New Volunteer Application

Personal Information:
- Name: ${volunteerForm.value.first_name} ${volunteerForm.value.last_name}
- Email: ${volunteerForm.value.email}
- Phone: ${volunteerForm.value.phone}
- Address: ${volunteerForm.value.address}

Volunteer Preferences:
- Preferred Area: ${volunteerForm.value.volunteer_area}
- Availability: ${volunteerForm.value.availability}

Motivation:
${volunteerForm.value.motivation}

Agreements:
- Terms Agreement: ${volunteerForm.value.terms_agreement ? 'Yes' : 'No'}

Submitted on: ${new Date().toLocaleString()}
    `

    // Send email (you'll need to implement this with your backend)
    console.log('Sending volunteer application to osiagafoundation@gmail.com')
    console.log('Email content:', emailContent)
    
    // For now, we'll just log the data
    // In a real implementation, you'd send this to your backend API
    console.log('Volunteer form submitted:', volunteerForm.value)
    
    // Show success message
    alert('Thank you for your application! We will contact you soon.')
    
    // Reset form
    volunteerForm.value = {
      first_name: '',
      last_name: '',
      email: '',
      phone: '',
      address: '',
      volunteer_area: '',
      availability: '',
      motivation: '',
      terms_agreement: false
    }
    
  } catch (error) {
    console.error('Error submitting form:', error)
    alert('There was an error submitting your application. Please try again.')
  } finally {
    isSubmitting.value = false
  }
}
</script>

<style scoped>
.volunteer-form-section {
  padding: 80px 0;
  background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
  color: white;
  position: relative;
  overflow: hidden;
}

.volunteer-form-section::before {
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

.section-title {
  margin-bottom: 2rem;
  position: relative;
  z-index: 2;
}

.section-title h3 {
  font-size: 2.5rem;
  font-weight: 700;
  color: white;
  margin-bottom: 1rem;
  position: relative;
  z-index: 2;
}

.section-title h3::after {
  content: '';
  position: absolute;
  bottom: -10px;
  left: 0;
  width: 60px;
  height: 4px;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  border-radius: 2px;
}

.form-row {
  display: flex;
  gap: 1rem;
  margin-bottom: 1rem;
}

.form-row .form-group {
  flex: 1;
}

.checkbox-group {
  margin-top: 1rem;
}

.checkbox-label {
  display: flex;
  align-items: flex-start;
  gap: 0.75rem;
  cursor: pointer;
  font-size: 0.9rem;
  line-height: 1.4;
}

.checkbox-label input[type="checkbox"] {
  margin: 0;
  width: 18px;
  height: 18px;
  accent-color: #60a5fa;
}

.checkbox-label span {
  flex: 1;
}

.custom-btn:disabled {
  opacity: 0.7;
  cursor: not-allowed;
}

.custom-btn:disabled:hover {
  transform: none;
  box-shadow: none;
}

.section-title p {
  font-size: 1.1rem;
  color: rgba(255, 255, 255, 0.9);
  line-height: 1.6;
  margin-top: 1.5rem;
}

.volunteer-form-thumb {
  text-align: center;
  margin-bottom: 2rem;
  display: flex;
  justify-content: center;
  align-items: center;
}

.volunteer-form-thumb img {
  max-width: 100%;
  height: auto;
  border-radius: 15px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease;
}

.volunteer-form-thumb img:hover {
  transform: scale(1.02);
}

.volunteer-content {
  width: 100%;
}

.volunteer-form {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(15px);
  -webkit-backdrop-filter: blur(15px);
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 20px;
  padding: 2rem;
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
  margin-top: 1.5rem;
}

.form-group {
  margin-bottom: 1.5rem;
}

.form-group input,
.form-group select,
.form-group textarea {
  width: 100%;
  padding: 15px 20px;
  border: 2px solid rgba(255, 255, 255, 0.2);
  border-radius: 12px;
  font-size: 1rem;
  transition: all 0.3s ease;
  background: rgba(255, 255, 255, 0.1);
  color: white;
  backdrop-filter: blur(10px);
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  outline: none;
  border-color: #60a5fa;
  box-shadow: 0 0 0 3px rgba(96, 165, 250, 0.2);
  background: rgba(255, 255, 255, 0.15);
}

.form-group textarea {
  min-height: 120px;
  resize: vertical;
}

.form-group select {
  cursor: pointer;
}

.form-group input::placeholder,
.form-group textarea::placeholder {
  color: rgba(255, 255, 255, 0.7);
}

.form-group select option {
  background: #1e293b;
  color: white;
}

.w-100 {
  width: 100%;
}

.group-btn {
  margin-top: 2rem;
}

.custom-btn {
  display: inline-flex;
  align-items: center;
  padding: 12px 30px;
  background: linear-gradient(135deg, #2563eb 0%, #60a5fa 100%);
  color: white;
  text-decoration: none;
  border: none;
  border-radius: 50px;
  font-weight: 600;
  font-size: 1rem;
  cursor: pointer;
  transition: all 0.3s ease;
}

.custom-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(33, 147, 176, 0.3);
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

.row {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -15px;
  align-items: center;
}

.col-lg-6 {
  flex: 0 0 50%;
  max-width: 50%;
  padding: 0 15px;
  display: flex;
  align-items: center;
}

@media (max-width: 991px) {
  .col-lg-6 {
    flex: 0 0 100%;
    max-width: 100%;
    margin-bottom: 2rem;
  }
}

@media (max-width: 768px) {
  .section-title h3 {
    font-size: 1.8rem;
  }
  
  .volunteer-form {
    padding: 1.5rem;
  }
}
</style>

