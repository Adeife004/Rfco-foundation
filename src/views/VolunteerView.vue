<template>
  <div class="volunteer-page">
    <!-- Hero Section -->
    <section class="volunteer-hero">
      <div class="hero-overlay"></div>
      <div class="container">
        <div class="hero-content">
          <h1>Join Our Volunteer Team</h1>
          <p>Make a meaningful impact in the lives of vulnerable communities through education, empowerment, and support programs.</p>
          <div class="hero-stats">
            <div class="stat">
              <span class="stat-number">500+</span>
              <span class="stat-label">Volunteers</span>
            </div>
            <div class="stat">
              <span class="stat-number">50+</span>
              <span class="stat-label">Communities</span>
            </div>
            <div class="stat">
              <span class="stat-number">10K+</span>
              <span class="stat-label">Lives Impacted</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Volunteer Form Section -->
    <section class="volunteer-form-section">
      <div class="container">
        <div class="form-container">
          <div class="form-header">
            <h2>Volunteer Application Form</h2>
            <p>Please fill out the form below to join our foundation. We'll review your application and contact you within 48 hours.</p>
          </div>
          
          <form @submit.prevent="submitVolunteerForm" class="volunteer-form">
            <!-- Personal Information -->
            <div class="form-section">
              <h3>Personal Information</h3>
              <div class="form-row">
                <div class="form-group">
                  <label for="firstName">First Name *</label>
                  <input 
                    type="text" 
                    id="firstName"
                    v-model="volunteerForm.first_name" 
                    placeholder="Enter your first name"
                    required
                  >
                </div>
                <div class="form-group">
                  <label for="lastName">Last Name *</label>
                  <input 
                    type="text" 
                    id="lastName"
                    v-model="volunteerForm.last_name" 
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
                    v-model="volunteerForm.email" 
                    placeholder="Enter your email address"
                    required
                  >
                </div>
                <div class="form-group">
                  <label for="phone">Phone Number *</label>
                  <input 
                    type="tel" 
                    id="phone"
                    v-model="volunteerForm.phone" 
                    placeholder="Enter your phone number"
                    required
                  >
                </div>
              </div>
              
              <div class="form-group">
                <label for="address">Full Address *</label>
                <input 
                  type="text" 
                  id="address"
                  v-model="volunteerForm.address" 
                  placeholder="Enter your complete address"
                  required
                >
              </div>
            </div>

            <!-- Volunteer Preferences -->
            <div class="form-section">
              <h3>Volunteer Preferences</h3>
              <div class="form-row">
                <div class="form-group">
                  <label for="volunteerArea">Preferred Volunteer Area *</label>
                  <select id="volunteerArea" v-model="volunteerForm.volunteer_area" required>
                    <option value="">Select your preferred area</option>
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
                  <label for="availability">Availability *</label>
                  <select id="availability" v-model="volunteerForm.availability" required>
                    <option value="">Select your availability</option>
                    <option value="Weekdays">Weekdays</option>
                    <option value="Weekends">Weekends</option>
                    <option value="Both">Both Weekdays & Weekends</option>
                    <option value="Flexible">Flexible</option>
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <label for="hoursPerWeek">Hours Available Per Week *</label>
                <select id="hoursPerWeek" v-model="volunteerForm.hours_per_week" required>
                  <option value="">Select hours per week</option>
                  <option value="1-5 hours">1-5 hours</option>
                  <option value="6-10 hours">6-10 hours</option>
                  <option value="11-15 hours">11-15 hours</option>
                  <option value="16-20 hours">16-20 hours</option>
                  <option value="20+ hours">20+ hours</option>
                </select>
              </div>
            </div>

            <!-- Skills and Experience -->
            <div class="form-section">
              <h3>Skills and Experience</h3>
              <div class="form-group">
                <label for="occupation">Occupation/Profession</label>
                <input 
                  type="text" 
                  id="occupation"
                  v-model="volunteerForm.occupation" 
                  placeholder="What do you do for a living?"
                >
              </div>
              
              <div class="form-group">
                <label for="skills">Skills, Experience, or Special Qualifications</label>
                <textarea 
                  id="skills"
                  v-model="volunteerForm.skills" 
                  placeholder="Tell us about your skills, experience, or any special qualifications you have..."
                  rows="3"
                ></textarea>
              </div>
            </div>

            <!-- Motivation -->
            <div class="form-section">
              <h3>Motivation</h3>
              <div class="form-group">
                <label for="motivation">Why do you want to volunteer with us? *</label>
                <textarea 
                  id="motivation"
                  v-model="volunteerForm.motivation" 
                  placeholder="Please tell us why you want to join our foundation and what motivates you to help others..."
                  rows="4"
                  required
                ></textarea>
              </div>
            </div>

            <!-- Additional Information -->
            <div class="form-section">
              <h3>Additional Information</h3>
              <div class="form-group">
                <label for="additionalInfo">Any additional information you'd like to share</label>
                <textarea 
                  id="additionalInfo"
                  v-model="volunteerForm.additional_info" 
                  placeholder="Is there anything else you'd like us to know about you?"
                  rows="3"
                ></textarea>
              </div>
            </div>

            <!-- Agreements -->
            <div class="form-section">
              <h3>Agreements</h3>
              <div class="form-group checkbox-group">
                <label class="checkbox-label">
                  <input type="checkbox" v-model="volunteerForm.emergency_contact" required>
                  <span class="checkmark"></span>
                  I agree to provide emergency contact information if needed
                </label>
              </div>
              
              <div class="form-group checkbox-group">
                <label class="checkbox-label">
                  <input type="checkbox" v-model="volunteerForm.terms_agreement" required>
                  <span class="checkmark"></span>
                  I agree to the terms and conditions of volunteering
                </label>
              </div>
            </div>

            <!-- Submit Button -->
            <div class="form-submit">
              <button type="submit" class="submit-btn" :disabled="isSubmitting">
                <span v-if="!isSubmitting">👥 Submit Application</span>
                <span v-else>⏳ Submitting...</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const volunteerForm = ref({
  first_name: '',
  last_name: '',
  email: '',
  phone: '',
  address: '',
  volunteer_area: '',
  availability: '',
  hours_per_week: '',
  occupation: '',
  skills: '',
  motivation: '',
  additional_info: '',
  emergency_contact: false,
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
- Hours Per Week: ${volunteerForm.value.hours_per_week}

Skills and Experience:
- Occupation: ${volunteerForm.value.occupation}
- Skills/Experience: ${volunteerForm.value.skills}

Motivation:
${volunteerForm.value.motivation}

Additional Information:
${volunteerForm.value.additional_info}

Agreements:
- Emergency Contact Agreement: ${volunteerForm.value.emergency_contact ? 'Yes' : 'No'}
- Terms Agreement: ${volunteerForm.value.terms_agreement ? 'Yes' : 'No'}

Submitted on: ${new Date().toLocaleString()}
    `

    // Send email (you'll need to implement this with your backend)
    console.log('Sending volunteer application to osiagafoundation@gmail.com')
    console.log('Email content:', emailContent)
    
    // For now, we'll just log the data
    console.log('Volunteer form submitted:', volunteerForm.value)
    
    // Show success message
    alert('Thank you for your application! We will review it and contact you within 48 hours.')
    
    // Reset form
    volunteerForm.value = {
      first_name: '',
      last_name: '',
      email: '',
      phone: '',
      address: '',
      volunteer_area: '',
      availability: '',
      hours_per_week: '',
      occupation: '',
      skills: '',
      motivation: '',
      additional_info: '',
      emergency_contact: false,
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
.volunteer-page {
  min-height: 100vh;
}

/* Hero Section */
.volunteer-hero {
  position: relative;
  height: 60vh;
  min-height: 500px;
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
  font-size: 3.5rem;
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
  margin-bottom: 3rem;
  color: rgba(255, 255, 255, 0.9);
}

.hero-stats {
  display: flex;
  justify-content: center;
  gap: 3rem;
  flex-wrap: wrap;
}

.stat {
  text-align: center;
}

.stat-number {
  display: block;
  font-size: 2.5rem;
  font-weight: 700;
  color: #60a5fa;
}

.stat-label {
  font-size: 1rem;
  color: rgba(255, 255, 255, 0.8);
}

/* Form Section */
.volunteer-form-section {
  padding: 80px 0;
  background: #f8fafc;
}

.form-container {
  max-width: 800px;
  margin: 0 auto;
  background: white;
  border-radius: 20px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.form-header {
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  color: white;
  padding: 3rem;
  text-align: center;
}

.form-header h2 {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 1rem;
}

.form-header p {
  font-size: 1.1rem;
  opacity: 0.9;
}

.volunteer-form {
  padding: 3rem;
}

.form-section {
  margin-bottom: 3rem;
  padding-bottom: 2rem;
  border-bottom: 1px solid #e2e8f0;
}

.form-section:last-of-type {
  border-bottom: none;
  margin-bottom: 2rem;
}

.form-section h3 {
  font-size: 1.5rem;
  font-weight: 600;
  color: #1e293b;
  margin-bottom: 1.5rem;
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.form-section h3::before {
  content: '';
  width: 4px;
  height: 24px;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  border-radius: 2px;
}

.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1.5rem;
  margin-bottom: 1.5rem;
}

.form-group {
  margin-bottom: 1.5rem;
}

.form-group label {
  display: block;
  font-weight: 600;
  color: #374151;
  margin-bottom: 0.5rem;
}

.form-group input,
.form-group select,
.form-group textarea {
  width: 100%;
  padding: 12px 16px;
  border: 2px solid #e5e7eb;
  border-radius: 10px;
  font-size: 1rem;
  transition: all 0.3s ease;
  background: white;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  outline: none;
  border-color: #60a5fa;
  box-shadow: 0 0 0 3px rgba(96, 165, 250, 0.1);
}

.checkbox-group {
  margin-top: 1rem;
}

.checkbox-label {
  display: flex;
  align-items: flex-start;
  gap: 0.75rem;
  cursor: pointer;
  font-size: 0.95rem;
  line-height: 1.4;
  color: #374151;
}

.checkbox-label input[type="checkbox"] {
  margin: 0;
  width: 18px;
  height: 18px;
  accent-color: #60a5fa;
}

.form-submit {
  text-align: center;
  margin-top: 2rem;
}

.submit-btn {
  display: inline-flex;
  align-items: center;
  gap: 0.75rem;
  padding: 15px 40px;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  color: white;
  border: none;
  border-radius: 50px;
  font-size: 1.1rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
}

.submit-btn:hover:not(:disabled) {
  transform: translateY(-2px);
  box-shadow: 0 10px 25px rgba(96, 165, 250, 0.3);
}

.submit-btn:disabled {
  opacity: 0.7;
  cursor: not-allowed;
}

/* Responsive Design */
@media (max-width: 768px) {
  .hero-content h1 {
    font-size: 2.5rem;
  }
  
  .hero-stats {
    gap: 2rem;
  }
  
  .form-row {
    grid-template-columns: 1fr;
  }
  
  .volunteer-form {
    padding: 2rem;
  }
  
  .form-header {
    padding: 2rem;
  }
  
  .form-header h2 {
    font-size: 2rem;
  }
}
</style>

