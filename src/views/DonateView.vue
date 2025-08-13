<template>
  <div class="donate-page">
    <!-- Hero Section -->
    <section class="donate-hero">
      <div class="hero-overlay"></div>
      <div class="container">
        <div class="hero-content">
          <h1>💝 Support Our Mission</h1>
          <p>Your generous donation helps us transform lives and empower vulnerable communities through education, skill acquisition, and community development.</p>
          <div class="hero-stats">
            <div class="stat">
              <span class="stat-number">1000+</span>
              <span class="stat-label">Lives Impacted</span>
            </div>
            <div class="stat">
              <span class="stat-number">50+</span>
              <span class="stat-label">Communities</span>
            </div>
            <div class="stat">
              <span class="stat-number">100%</span>
              <span class="stat-label">Transparency</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Account Details Section -->
    <section class="account-details-section">
      <div class="container">
        <div class="account-details-card">
          <div class="card-header">
            <div class="header-icon">💳</div>
            <h2>Bank Account Details</h2>
            <p class="subtitle">For those wey wan support Osiaga Foundation, see the account details below 👇👇👇</p>
          </div>
          
          <div class="account-info">
            <div class="account-item">
              <div class="account-icon">🔢</div>
              <div class="account-content">
                <div class="account-label">Account Number</div>
                <div class="account-value">1020806052</div>
              </div>
            </div>
            
            <div class="account-item">
              <div class="account-icon">🏦</div>
              <div class="account-content">
                <div class="account-label">Bank Name</div>
                <div class="account-value">UBA</div>
              </div>
            </div>
            
            <div class="account-item">
              <div class="account-icon">👤</div>
              <div class="account-content">
                <div class="account-label">Account Name</div>
                <div class="account-value">Rev. Fr Callistus Osiaga Foundation</div>
              </div>
            </div>
          </div>
          
          <div class="copy-section">
            <button @click="copyAccountNumber" class="copy-btn">
              <span v-if="!copied">📋 Copy Account Number</span>
              <span v-else>✅ Copied!</span>
            </button>
          </div>
          
          <div class="donation-note">
            <div class="note-icon">💡</div>
            <p>After making your donation, please contact us at <strong>osiagafoundation@gmail.com</strong> or call/WhatsApp <strong>+234 911 574 6028</strong> (Customer Service) with your name and donation amount for proper acknowledgment.</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const copied = ref(false)

const copyAccountNumber = async () => {
  try {
    await navigator.clipboard.writeText('1020806052')
    copied.value = true
    setTimeout(() => {
      copied.value = false
    }, 2000)
  } catch (err) {
    console.error('Failed to copy: ', err)
  }
}
</script>

<style scoped>
.donate-page {
  min-height: 100vh;
}

/* Hero Section */
.donate-hero {
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
  padding: 2rem;
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
  margin-bottom: 2rem;
}

/* Account Details Section */
.account-details-section {
  padding: 80px 0;
  background: #f8fafc;
}

.account-details-card {
  max-width: 600px;
  margin: 0 auto;
  background: white;
  border-radius: 20px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  border: 2px solid #e2e8f0;
}

.card-header {
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  color: white;
  padding: 2.5rem;
  text-align: center;
}

.header-icon {
  font-size: 3rem;
  margin-bottom: 1rem;
}

.card-header h2 {
  font-size: 2rem;
  font-weight: 700;
  margin-bottom: 1rem;
}

.card-header .subtitle {
  font-size: 1.1rem;
  opacity: 0.9;
  line-height: 1.5;
}

.account-info {
  padding: 2.5rem;
}

.account-item {
  display: flex;
  align-items: center;
  gap: 1rem;
  padding: 1.5rem 0;
  border-bottom: 1px solid #e2e8f0;
  transition: all 0.3s ease;
}

.account-item:hover {
  background: #f8fafc;
  border-radius: 10px;
  padding-left: 1rem;
  padding-right: 1rem;
}

.account-item:last-child {
  border-bottom: none;
}

.account-icon {
  font-size: 2rem;
  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  border-radius: 50%;
  color: white;
  flex-shrink: 0;
}

.account-content {
  flex: 1;
}

.account-label {
  font-weight: 600;
  color: #374151;
  font-size: 0.9rem;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  margin-bottom: 0.5rem;
}

.account-value {
  font-weight: 700;
  color: #1e293b;
  font-size: 1.2rem;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.copy-section {
  padding: 0 2.5rem 2rem;
  text-align: center;
}

.copy-btn {
  background: linear-gradient(135deg, #10b981 0%, #059669 100%);
  color: white;
  border: none;
  padding: 14px 28px;
  border-radius: 10px;
  font-weight: 600;
  font-size: 1rem;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
}

.copy-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 25px rgba(16, 185, 129, 0.4);
}

.donation-note {
  background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
  margin: 0 2.5rem 2.5rem;
  padding: 1.5rem;
  border-radius: 12px;
  display: flex;
  align-items: flex-start;
  gap: 1rem;
  border: 1px solid #f59e0b;
}

.note-icon {
  font-size: 1.5rem;
  flex-shrink: 0;
}

.donation-note p {
  margin: 0;
  color: #92400e;
  font-size: 0.95rem;
  line-height: 1.5;
}

.donation-note strong {
  color: #78350f;
}

/* Hero Stats */
.hero-stats {
  display: flex;
  gap: 2rem;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}

.stat {
  text-align: center;
  background: rgba(255, 255, 255, 0.1);
  padding: 1rem 1.5rem;
  border-radius: 12px;
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.2);
  min-width: 120px;
}

.stat-number {
  display: block;
  font-size: 2rem;
  font-weight: 700;
  color: #60a5fa;
  margin-bottom: 0.5rem;
}

.stat-label {
  font-size: 0.9rem;
  color: rgba(255, 255, 255, 0.8);
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

/* Responsive Design */
@media (max-width: 768px) {
  .hero-content h1 {
    font-size: 2.5rem;
  }
  
  .hero-content p {
    font-size: 1.1rem;
  }
  
  .hero-stats {
    flex-direction: column;
    gap: 1rem;
  }
  
  .stat {
    padding: 0.75rem 1rem;
  }
  
  .account-item {
    flex-direction: column;
    align-items: flex-start;
    gap: 1rem;
    text-align: center;
  }
  
  .account-icon {
    align-self: center;
  }
  
  .card-header {
    padding: 2rem;
  }
  
  .account-info {
    padding: 2rem;
  }
  
  .copy-section {
    padding: 0 2rem 2rem;
  }
  
  .donation-note {
    margin: 0 2rem 2rem;
    padding: 1.25rem;
  }
}

@media (max-width: 480px) {
  .hero-content h1 {
    font-size: 2rem;
  }
  
  .hero-content p {
    font-size: 1rem;
  }
  
  .card-header h2 {
    font-size: 1.75rem;
  }
  
  .header-icon {
    font-size: 2.5rem;
  }
  
  .card-header {
    padding: 1.5rem;
  }
  
  .account-info {
    padding: 1.5rem;
  }
  
  .copy-section {
    padding: 0 1.5rem 1.5rem;
  }
  
  .donation-note {
    margin: 0 1.5rem 1.5rem;
    padding: 1rem;
    flex-direction: column;
    text-align: center;
  }
  
  .account-icon {
    width: 50px;
    height: 50px;
    font-size: 1.5rem;
  }
  
  .account-value {
    font-size: 1.1rem;
  }
}
</style>

