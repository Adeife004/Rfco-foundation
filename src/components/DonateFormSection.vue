<template>
  <section class="donate-now-section section-padding-2">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="donate-now">
          <h3>Make a Donation Now</h3>
          <form @submit.prevent="submitDonateForm">
            <div class="form-group">
              <input type="text" v-model="donateForm.first_name" placeholder="First Name" required>
            </div>
            <div class="form-group">
              <input type="text" v-model="donateForm.last_name" placeholder="Last Name" required>
            </div>
            <div class="form-group">
              <input type="email" v-model="donateForm.email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="text" v-model="donateForm.phone" placeholder="Phone" required>
            </div>
            <div class="form-group">
              <select v-model="donateForm.category" required>
                <option value="" disabled selected>Select Donation Category</option>
                <option value="Education">Education Support</option>
                <option value="Widow Empowerment">Widow Empowerment</option>
                <option value="Physically Challenged">Physically Challenged Support</option>
                <option value="General">General Donation</option>
              </select>
            </div>
            <div class="form-group">
              <textarea v-model="donateForm.message" placeholder="Message (Optional)"></textarea>
            </div>
            <div class="group-btn">
              <button type="submit" class="custom-btn">DONATE NOW<i class="fas fa-angle-double-right"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

const donateForm = ref({
  first_name: '',
  last_name: '',
  email: '',
  phone: '',
  category: '',
  message: ''
})

const submitDonateForm = () => {
  // Handle donation form submission
  console.log('Donation form submitted:', donateForm.value)
  // Reset form
  donateForm.value = {
    first_name: '',
    last_name: '',
    email: '',
    phone: '',
    category: '',
    message: ''
  }
}
</script>

<style scoped>
.donate-now-section {
  padding: 80px 0;
  background: linear-gradient(135deg, #2563eb 0%, #60a5fa 100%);
  position: relative;
  color: white;
  text-align: center;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.3);
}

.donate-now {
  position: relative;
  z-index: 2;
  max-width: 600px;
  margin: 0 auto;
}

.donate-now h3 {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 2rem;
  color: white;
}

.donate-now form {
  background: rgba(255, 255, 255, 0.1);
  padding: 2.5rem;
  border-radius: 15px;
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.form-group {
  margin-bottom: 1.5rem;
}

.form-group input,
.form-group select,
.form-group textarea {
  width: 100%;
  padding: 12px 15px;
  border: 2px solid rgba(255, 255, 255, 0.3);
  border-radius: 8px;
  font-size: 1rem;
  transition: all 0.3s ease;
  background: rgba(255, 255, 255, 0.9);
  color: #333;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  outline: none;
  border-color: white;
  background: white;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.2);
}

.form-group input::placeholder,
.form-group textarea::placeholder {
  color: #666;
}

.form-group textarea {
  min-height: 120px;
  resize: vertical;
}

.form-group select {
  cursor: pointer;
}

.form-group select option {
  background: white;
  color: #333;
}

.group-btn {
  margin-top: 2rem;
}

.custom-btn {
  display: inline-flex;
  align-items: center;
  padding: 15px 35px;
  background: white;
  color: #2563eb;
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

.row {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -15px;
}

/* Responsive Design */
@media (max-width: 768px) {
  .donate-now h3 {
    font-size: 2rem;
  }
  
  .donate-now form {
    padding: 2rem;
  }
}

@media (max-width: 480px) {
  .donate-now form {
    padding: 1.5rem;
  }
}
</style>

