<template>
  <div class="loan-application-page">
    <!-- Hero Section -->
    <section class="loan-hero">
      <div class="hero-overlay"></div>
      <div class="container">
        <div class="hero-content">
          <h1>OSIAGA FOUNDATION MICRO CREDIT SCHEME</h1>
          <p class="subtitle">Interest-Free Loan Application</p>
          <p class="description">Empowering communities through interest-free micro-credit support for sustainable business growth and development.</p>
        </div>
      </div>
    </section>

    <!-- Application Form Section -->
    <section class="application-form-section">
      <div class="container">
        <div class="form-container">
          <div class="form-header">
            <h2>Loan Application Form</h2>
            <p>Please complete each section to proceed to the next. All fields marked with * are required.</p>
          </div>

          <!-- Progress Indicator -->
          <div class="progress-indicator">
            <div class="progress-step" :class="{ active: currentSection >= 1, completed: currentSection > 1 }">
              <div class="step-number">1</div>
              <span class="step-label">Personal Information</span>
            </div>
            <div class="progress-line" :class="{ completed: currentSection > 1 }"></div>
            <div class="progress-step" :class="{ active: currentSection >= 2, completed: currentSection > 2 }">
              <div class="step-number">2</div>
              <span class="step-label">Business Information</span>
            </div>
            <div class="progress-line" :class="{ completed: currentSection > 2 }"></div>
            <div class="progress-step" :class="{ active: currentSection >= 3 }">
              <div class="step-number">3</div>
              <span class="step-label">Guarantor & Declaration</span>
            </div>
          </div>

          <form @submit.prevent="submitApplication" class="loan-form">
            <!-- Section A: Personal Information -->
            <div class="form-section" v-show="currentSection === 1">
              <div class="section-header">
                <h3>Section A: Personal Information</h3>
                <p>Please provide your personal details</p>
              </div>

              <div class="form-group">
                <label for="fullName">1. Full Name *</label>
                <input 
                  type="text" 
                  id="fullName"
                  v-model="loanForm.fullName" 
                  placeholder="Enter your full name"
                  required
                >
              </div>

              <div class="form-group">
                <label>2. Gender *</label>
                <div class="radio-group">
                  <label class="radio-label">
                    <input type="radio" v-model="loanForm.gender" value="Male" required>
                    <span class="radio-custom"></span>
                    Male
                  </label>
                  <label class="radio-label">
                    <input type="radio" v-model="loanForm.gender" value="Female" required>
                    <span class="radio-custom"></span>
                    Female
                  </label>
                </div>
              </div>

              <div class="form-group">
                <label for="dateOfBirth">3. Date of Birth *</label>
                <input 
                  type="date" 
                  id="dateOfBirth"
                  v-model="loanForm.dateOfBirth" 
                  required
                >
              </div>

              <div class="form-group">
                <label for="phoneNumber">4. Phone Number *</label>
                <input 
                  type="tel" 
                  id="phoneNumber"
                  v-model="loanForm.phoneNumber" 
                  placeholder="Enter your phone number"
                  required
                >
              </div>

              <div class="form-group">
                <label for="email">5. Email Address (if any)</label>
                <input 
                  type="email" 
                  id="email"
                  v-model="loanForm.email" 
                  placeholder="Enter your email address"
                >
              </div>

              <div class="form-group">
                <label for="homeAddress">6. Home Address *</label>
                <textarea 
                  id="homeAddress"
                  v-model="loanForm.homeAddress" 
                  placeholder="Enter your complete home address"
                  rows="3"
                  required
                ></textarea>
              </div>

              <div class="form-group">
                <label for="stateOfOrigin">7. State of Origin *</label>
                <input 
                  type="text" 
                  id="stateOfOrigin"
                  v-model="loanForm.stateOfOrigin" 
                  placeholder="Enter your state of origin"
                  required
                >
              </div>

              <div class="form-group">
                <label>8. Marital Status *</label>
                <div class="radio-group">
                  <label class="radio-label">
                    <input type="radio" v-model="loanForm.maritalStatus" value="Single" required>
                    <span class="radio-custom"></span>
                    Single
                  </label>
                  <label class="radio-label">
                    <input type="radio" v-model="loanForm.maritalStatus" value="Married" required>
                    <span class="radio-custom"></span>
                    Married
                  </label>
                  <label class="radio-label">
                    <input type="radio" v-model="loanForm.maritalStatus" value="Widow" required>
                    <span class="radio-custom"></span>
                    Widow
                  </label>
                  <label class="radio-label">
                    <input type="radio" v-model="loanForm.maritalStatus" value="Divorced" required>
                    <span class="radio-custom"></span>
                    Divorced
                  </label>
                </div>
              </div>

              <div class="section-actions">
                <button type="button" @click="nextSection" class="btn-next" :disabled="!isSectionAComplete">
                  Next Section →
                </button>
              </div>
            </div>

            <!-- Section B: Business Information -->
            <div class="form-section" v-show="currentSection === 2">
              <div class="section-header">
                <h3>Section B: Business Information</h3>
                <p>Please provide details about your business</p>
              </div>

              <div class="form-group">
                <label for="businessName">9. Business Name (if any)</label>
                <input 
                  type="text" 
                  id="businessName"
                  v-model="loanForm.businessName" 
                  placeholder="Enter your business name"
                >
              </div>

              <div class="form-group">
                <label for="businessType">10. Type of Business *</label>
                <input 
                  type="text" 
                  id="businessType"
                  v-model="loanForm.businessType" 
                  placeholder="What type of business do you run?"
                  required
                >
              </div>

              <div class="form-group">
                <label for="businessAddress">11. Business Address (if different from home)</label>
                <textarea 
                  id="businessAddress"
                  v-model="loanForm.businessAddress" 
                  placeholder="Enter your business address"
                  rows="3"
                ></textarea>
              </div>

              <div class="form-group">
                <label for="businessDuration">12. How long have you been in business? *</label>
                <input 
                  type="text" 
                  id="businessDuration"
                  v-model="loanForm.businessDuration" 
                  placeholder="e.g., 2 years, 6 months"
                  required
                >
              </div>

              <div class="form-group">
                <label for="loanPurpose">13. What do you need the loan for? *</label>
                <textarea 
                  id="loanPurpose"
                  v-model="loanForm.loanPurpose" 
                  placeholder="Briefly describe what you need the loan for..."
                  rows="3"
                  required
                ></textarea>
              </div>

              <div class="form-group">
                <label for="loanAmount">14. How much are you requesting? (NGN) *</label>
                <input 
                  type="number" 
                  id="loanAmount"
                  v-model="loanForm.loanAmount" 
                  placeholder="Enter amount in Naira"
                  min="1000"
                  required
                >
              </div>

              <div class="form-group">
                <label for="repaymentPlan">15. How do you intend to repay? *</label>
                <select id="repaymentPlan" v-model="loanForm.repaymentPlan" required>
                  <option value="">Select repayment plan</option>
                  <option value="Weekly">Weekly</option>
                  <option value="Monthly">Monthly</option>
                  <option value="Bi-weekly">Bi-weekly</option>
                  <option value="Quarterly">Quarterly</option>
                </select>
              </div>

              <div class="form-group">
                <label>16. Do you have any previous loan experience? *</label>
                <div class="radio-group">
                  <label class="radio-label">
                    <input type="radio" v-model="loanForm.previousLoan" value="Yes" required>
                    <span class="radio-custom"></span>
                    Yes
                  </label>
                  <label class="radio-label">
                    <input type="radio" v-model="loanForm.previousLoan" value="No" required>
                    <span class="radio-custom"></span>
                    No
                  </label>
                </div>
              </div>

              <div class="form-group" v-if="loanForm.previousLoan === 'Yes'">
                <label for="previousLoanSource">If yes, from where?</label>
                <input 
                  type="text" 
                  id="previousLoanSource"
                  v-model="loanForm.previousLoanSource" 
                  placeholder="Where did you get the previous loan from?"
                >
              </div>

              <div class="section-actions">
                <button type="button" @click="prevSection" class="btn-prev">
                  ← Previous Section
                </button>
                <button type="button" @click="nextSection" class="btn-next" :disabled="!isSectionBComplete">
                  Next Section →
                </button>
              </div>
            </div>

            <!-- Section C: Guarantor & Declaration -->
            <div class="form-section" v-show="currentSection === 3">
              <div class="section-header">
                <h3>Section C: Guarantor Information & Declaration</h3>
                <p>Please provide guarantor details and complete the declaration</p>
              </div>

              <div class="form-group">
                <label for="guarantorName">17. Guarantor's Name *</label>
                <input 
                  type="text" 
                  id="guarantorName"
                  v-model="loanForm.guarantorName" 
                  placeholder="Enter guarantor's full name"
                  required
                >
              </div>

              <div class="form-group">
                <label for="guarantorRelationship">18. Relationship to Applicant *</label>
                <input 
                  type="text" 
                  id="guarantorRelationship"
                  v-model="loanForm.guarantorRelationship" 
                  placeholder="e.g., Brother, Sister, Friend, etc."
                  required
                >
              </div>

              <div class="form-group">
                <label for="guarantorPhone">19. Guarantor's Phone Number *</label>
                <input 
                  type="tel" 
                  id="guarantorPhone"
                  v-model="loanForm.guarantorPhone" 
                  placeholder="Enter guarantor's phone number"
                  required
                >
              </div>

              <div class="form-group">
                <label for="guarantorAddress">20. Guarantor's Address *</label>
                <textarea 
                  id="guarantorAddress"
                  v-model="loanForm.guarantorAddress" 
                  placeholder="Enter guarantor's complete address"
                  rows="3"
                  required
                ></textarea>
              </div>

              <div class="form-group">
                <label for="guarantorOccupation">21. Guarantor's Occupation *</label>
                <input 
                  type="text" 
                  id="guarantorOccupation"
                  v-model="loanForm.guarantorOccupation" 
                  placeholder="What does the guarantor do for a living?"
                  required
                >
              </div>

              <div class="declaration-section">
                <h4>Declaration</h4>
                <p class="declaration-text">
                  I, <strong>{{ loanForm.fullName }}</strong>, hereby declare that the information provided above is true and accurate to the best of my knowledge. I understand that this is an interest-free loan and I commit to repaying as agreed with OSIAGA Foundation.
                </p>
                
                <div class="form-group">
                  <label for="applicantSignature">Signature of Applicant *</label>
                  <input 
                    type="text" 
                    id="applicantSignature"
                    v-model="loanForm.applicantSignature" 
                    placeholder="Type your full name as signature"
                    required
                  >
                </div>

                <div class="form-group">
                  <label for="guarantorSignature">Signature of Guarantor *</label>
                  <input 
                    type="text" 
                    id="guarantorSignature"
                    v-model="loanForm.guarantorSignature" 
                    placeholder="Type guarantor's full name as signature"
                    required
                  >
                </div>
              </div>

              <div class="section-actions">
                <button type="button" @click="prevSection" class="btn-prev">
                  ← Previous Section
                </button>
                <button type="submit" class="btn-submit" :disabled="!isSectionCComplete || isSubmitting">
                  <span v-if="!isSubmitting">📋 Submit Application</span>
                  <span v-else>⏳ Submitting...</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'

const currentSection = ref(1)
const isSubmitting = ref(false)

const loanForm = ref({
  // Section A: Personal Information
  fullName: '',
  gender: '',
  dateOfBirth: '',
  phoneNumber: '',
  email: '',
  homeAddress: '',
  stateOfOrigin: '',
  maritalStatus: '',

  // Section B: Business Information
  businessName: '',
  businessType: '',
  businessAddress: '',
  businessDuration: '',
  loanPurpose: '',
  loanAmount: '',
  repaymentPlan: '',
  previousLoan: '',
  previousLoanSource: '',

  // Section C: Guarantor & Declaration
  guarantorName: '',
  guarantorRelationship: '',
  guarantorPhone: '',
  guarantorAddress: '',
  guarantorOccupation: '',
  applicantSignature: '',
  guarantorSignature: ''
})

// Validation for each section
const isSectionAComplete = computed(() => {
  return loanForm.value.fullName && 
         loanForm.value.gender && 
         loanForm.value.dateOfBirth && 
         loanForm.value.phoneNumber && 
         loanForm.value.homeAddress && 
         loanForm.value.stateOfOrigin && 
         loanForm.value.maritalStatus
})

const isSectionBComplete = computed(() => {
  return loanForm.value.businessType && 
         loanForm.value.businessDuration && 
         loanForm.value.loanPurpose && 
         loanForm.value.loanAmount && 
         loanForm.value.repaymentPlan && 
         loanForm.value.previousLoan
})

const isSectionCComplete = computed(() => {
  return loanForm.value.guarantorName && 
         loanForm.value.guarantorRelationship && 
         loanForm.value.guarantorPhone && 
         loanForm.value.guarantorAddress && 
         loanForm.value.guarantorOccupation && 
         loanForm.value.applicantSignature && 
         loanForm.value.guarantorSignature
})

const nextSection = () => {
  if (currentSection.value < 3) {
    currentSection.value++
  }
}

const prevSection = () => {
  if (currentSection.value > 1) {
    currentSection.value--
  }
}

const submitApplication = async () => {
  isSubmitting.value = true
  
  try {
    // Create email content
    const emailContent = `
New Loan Application - OSIAGA Foundation Micro Credit Scheme

SECTION A: PERSONAL INFORMATION
1. Full Name: ${loanForm.value.fullName}
2. Gender: ${loanForm.value.gender}
3. Date of Birth: ${loanForm.value.dateOfBirth}
4. Phone Number: ${loanForm.value.phoneNumber}
5. Email Address: ${loanForm.value.email || 'Not provided'}
6. Home Address: ${loanForm.value.homeAddress}
7. State of Origin: ${loanForm.value.stateOfOrigin}
8. Marital Status: ${loanForm.value.maritalStatus}

SECTION B: BUSINESS INFORMATION
9. Business Name: ${loanForm.value.businessName || 'Not provided'}
10. Type of Business: ${loanForm.value.businessType}
11. Business Address: ${loanForm.value.businessAddress || 'Same as home address'}
12. Business Duration: ${loanForm.value.businessDuration}
13. Loan Purpose: ${loanForm.value.loanPurpose}
14. Loan Amount: NGN ${loanForm.value.loanAmount}
15. Repayment Plan: ${loanForm.value.repaymentPlan}
16. Previous Loan Experience: ${loanForm.value.previousLoan}
   ${loanForm.value.previousLoan === 'Yes' ? `Source: ${loanForm.value.previousLoanSource}` : ''}

SECTION C: GUARANTOR INFORMATION
17. Guarantor's Name: ${loanForm.value.guarantorName}
18. Relationship: ${loanForm.value.guarantorRelationship}
19. Guarantor's Phone: ${loanForm.value.guarantorPhone}
20. Guarantor's Address: ${loanForm.value.guarantorAddress}
21. Guarantor's Occupation: ${loanForm.value.guarantorOccupation}

DECLARATION
Applicant Signature: ${loanForm.value.applicantSignature}
Guarantor Signature: ${loanForm.value.guarantorSignature}

Submitted on: ${new Date().toLocaleString()}
    `

    // Send email (you'll need to implement this with your backend)
    console.log('Sending loan application to osiagafoundation@gmail.com')
    console.log('Email content:', emailContent)
    
    // For now, we'll just log the data
    console.log('Loan application submitted:', loanForm.value)
    
    // Show success message
    alert('Thank you for your loan application! We will review it and contact you within 5-7 business days.')
    
    // Reset form
    loanForm.value = {
      fullName: '', gender: '', dateOfBirth: '', phoneNumber: '', email: '', homeAddress: '', stateOfOrigin: '', maritalStatus: '',
      businessName: '', businessType: '', businessAddress: '', businessDuration: '', loanPurpose: '', loanAmount: '', repaymentPlan: '', previousLoan: '', previousLoanSource: '',
      guarantorName: '', guarantorRelationship: '', guarantorPhone: '', guarantorAddress: '', guarantorOccupation: '', applicantSignature: '', guarantorSignature: ''
    }
    
    // Reset to first section
    currentSection.value = 1
    
  } catch (error) {
    console.error('Error submitting application:', error)
    alert('There was an error submitting your application. Please try again.')
  } finally {
    isSubmitting.value = false
  }
}
</script>

<style scoped>
.loan-application-page {
  min-height: 100vh;
}

/* Hero Section */
.loan-hero {
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
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 0.5rem;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.hero-content .subtitle {
  font-size: 1.3rem;
  font-weight: 600;
  color: #60a5fa;
  margin-bottom: 1rem;
}

.hero-content .description {
  font-size: 1.1rem;
  line-height: 1.6;
  color: rgba(255, 255, 255, 0.9);
}

/* Form Section */
.application-form-section {
  padding: 80px 0;
  background: #f8fafc;
}

.form-container {
  max-width: 900px;
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

/* Progress Indicator */
.progress-indicator {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 2rem 3rem;
  background: #f8fafc;
  border-bottom: 1px solid #e2e8f0;
}

.progress-step {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.5rem;
}

.step-number {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #e2e8f0;
  color: #64748b;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
  transition: all 0.3s ease;
}

.progress-step.active .step-number {
  background: #60a5fa;
  color: white;
}

.progress-step.completed .step-number {
  background: #10b981;
  color: white;
}

.step-label {
  font-size: 0.9rem;
  font-weight: 500;
  color: #64748b;
  text-align: center;
}

.progress-step.active .step-label,
.progress-step.completed .step-label {
  color: #1e293b;
}

.progress-line {
  width: 60px;
  height: 2px;
  background: #e2e8f0;
  margin: 0 1rem;
  transition: all 0.3s ease;
}

.progress-line.completed {
  background: #10b981;
}

/* Form Sections */
.loan-form {
  padding: 3rem;
}

.form-section {
  animation: fadeIn 0.5s ease;
}

.section-header {
  margin-bottom: 2rem;
  padding-bottom: 1rem;
  border-bottom: 2px solid #e2e8f0;
}

.section-header h3 {
  font-size: 1.8rem;
  font-weight: 600;
  color: #1e293b;
  margin-bottom: 0.5rem;
}

.section-header p {
  color: #64748b;
  font-size: 1rem;
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

/* Radio Buttons */
.radio-group {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
  gap: 1rem;
  margin-top: 0.5rem;
}

.radio-label {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  cursor: pointer;
  font-size: 1rem;
  color: #374151;
  padding: 0.75rem;
  border: 2px solid #e5e7eb;
  border-radius: 8px;
  transition: all 0.3s ease;
  background: white;
}

.radio-label:hover {
  border-color: #60a5fa;
  background: #f8fafc;
}

.radio-label input[type="radio"] {
  display: none;
}

.radio-custom {
  width: 20px;
  height: 20px;
  border: 2px solid #d1d5db;
  border-radius: 50%;
  position: relative;
  transition: all 0.3s ease;
  flex-shrink: 0;
}

.radio-label input[type="radio"]:checked + .radio-custom {
  border-color: #60a5fa;
  background: #60a5fa;
}

.radio-label input[type="radio"]:checked + .radio-custom::after {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 8px;
  height: 8px;
  background: white;
  border-radius: 50%;
}

.radio-label input[type="radio"]:checked ~ span {
  color: #1e293b;
  font-weight: 600;
}

/* Declaration Section */
.declaration-section {
  background: #f8fafc;
  padding: 2rem;
  border-radius: 15px;
  margin: 2rem 0;
  border: 2px solid #e2e8f0;
}

.declaration-section h4 {
  font-size: 1.3rem;
  font-weight: 600;
  color: #1e293b;
  margin-bottom: 1rem;
}

.declaration-text {
  font-size: 1rem;
  line-height: 1.6;
  color: #374151;
  margin-bottom: 1.5rem;
}

/* Section Actions */
.section-actions {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 3rem;
  padding-top: 2rem;
  border-top: 1px solid #e2e8f0;
}

.btn-prev,
.btn-next,
.btn-submit {
  padding: 12px 24px;
  border: none;
  border-radius: 8px;
  font-weight: 600;
  font-size: 1rem;
  cursor: pointer;
  transition: all 0.3s ease;
}

.btn-prev {
  background: #f3f4f6;
  color: #374151;
}

.btn-prev:hover {
  background: #e5e7eb;
}

.btn-next {
  background: #60a5fa;
  color: white;
}

.btn-next:hover:not(:disabled) {
  background: #3b82f6;
  transform: translateY(-1px);
}

.btn-next:disabled {
  background: #d1d5db;
  cursor: not-allowed;
}

.btn-submit {
  background: linear-gradient(135deg, #10b981 0%, #059669 100%);
  color: white;
}

.btn-submit:hover:not(:disabled) {
  transform: translateY(-1px);
  box-shadow: 0 10px 25px rgba(16, 185, 129, 0.3);
}

.btn-submit:disabled {
  opacity: 0.7;
  cursor: not-allowed;
}

/* Animations */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Responsive Design */
@media (max-width: 768px) {
  .hero-content h1 {
    font-size: 2rem;
  }
  
  .hero-content .subtitle {
    font-size: 1.1rem;
  }
  
  .hero-content .description {
    font-size: 1rem;
  }
  
  .progress-indicator {
    padding: 1.5rem;
    flex-direction: column;
    gap: 1rem;
  }
  
  .progress-line {
    width: 2px;
    height: 30px;
    margin: 0;
  }
  
  .radio-group {
    grid-template-columns: 1fr;
    gap: 0.75rem;
  }
  
  .radio-label {
    padding: 0.5rem;
    font-size: 0.95rem;
  }
  
  .section-actions {
    flex-direction: column;
    gap: 1rem;
  }
  
  .loan-form {
    padding: 2rem;
  }
  
  .form-header {
    padding: 2rem;
  }
  
  .form-header h2 {
    font-size: 2rem;
  }
  
  .form-container {
    margin: 0 1rem;
  }
}

@media (max-width: 480px) {
  .hero-content h1 {
    font-size: 1.75rem;
  }
  
  .hero-content .subtitle {
    font-size: 1rem;
  }
  
  .hero-content .description {
    font-size: 0.9rem;
  }
  
  .form-header h2 {
    font-size: 1.75rem;
  }
  
  .section-header h3 {
    font-size: 1.5rem;
  }
  
  .loan-form {
    padding: 1.5rem;
  }
  
  .form-header {
    padding: 1.5rem;
  }
}
</style>
