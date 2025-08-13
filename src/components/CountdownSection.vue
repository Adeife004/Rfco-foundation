<template>
  <section class="countdown-section section-padding-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="countdown-wrapper">
            <div class="countdown-content">
              <h2>Countdown to Our Next Event</h2>
              <p>Join us for our upcoming community outreach program and make a difference in someone's life.</p>
            </div>
            <div class="countdown-timer">
              <div class="countdown-item">
                <div class="countdown-number">{{ countdown.days }}</div>
                <div class="countdown-label">Days</div>
              </div>
              <div class="countdown-item">
                <div class="countdown-number">{{ countdown.hours }}</div>
                <div class="countdown-label">Hours</div>
              </div>
              <div class="countdown-item">
                <div class="countdown-number">{{ countdown.minutes }}</div>
                <div class="countdown-label">Minutes</div>
              </div>
              <div class="countdown-item">
                <div class="countdown-number">{{ countdown.seconds }}</div>
                <div class="countdown-label">Seconds</div>
              </div>
            </div>
            <div class="countdown-cta">
              <router-link to="/events" class="custom-btn">Register Now</router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const countdown = ref({
  days: 820,
  hours: 6,
  minutes: 33,
  seconds: 33
})

let countdownInterval = null

const startCountdown = () => {
  const countDownDate = new Date("Dec 31, 2025 23:59:59").getTime()
  
  countdownInterval = setInterval(() => {
    const now = new Date().getTime()
    const distance = countDownDate - now

    if (distance < 0) {
      clearInterval(countdownInterval)
      countdown.value = { days: 0, hours: 0, minutes: 0, seconds: 0 }
      return
    }

    countdown.value = {
      days: Math.floor(distance / (1000 * 60 * 60 * 24)),
      hours: Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)),
      minutes: Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)),
      seconds: Math.floor((distance % (1000 * 60)) / 1000)
    }
  }, 1000)
}

onMounted(() => {
  startCountdown()
})

onUnmounted(() => {
  if (countdownInterval) {
    clearInterval(countdownInterval)
  }
})
</script>

<style scoped>
.countdown-section {
  padding: 80px 0;
  background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
  color: white;
  text-align: center;
}

.countdown-wrapper {
  max-width: 800px;
  margin: 0 auto;
}

.countdown-content h2 {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 1rem;
}

.countdown-content p {
  font-size: 1.1rem;
  margin-bottom: 3rem;
  opacity: 0.9;
}

.countdown-timer {
  display: flex;
  justify-content: center;
  gap: 2rem;
  margin-bottom: 3rem;
  flex-wrap: wrap;
}

.countdown-item {
  background: rgba(255, 255, 255, 0.1);
  padding: 2rem 1.5rem;
  border-radius: 15px;
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.2);
  min-width: 120px;
}

.countdown-number {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 0.5rem;
  display: block;
}

.countdown-label {
  font-size: 1rem;
  opacity: 0.8;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.countdown-cta {
  margin-top: 2rem;
}

.custom-btn {
  display: inline-flex;
  align-items: center;
  padding: 15px 35px;
  background: white;
  color: #2563eb;
  text-decoration: none;
  border-radius: 50px;
  font-weight: 600;
  transition: all 0.3s ease;
  border: 2px solid white;
}

.custom-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(255, 255, 255, 0.3);
  color: #2563eb;
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
  width: 100%;
  max-width: 100%;
  margin: 0;
  padding: 0 15px;
}

.row {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -15px;
}

.col-lg-12 {
  flex: 0 0 100%;
  max-width: 100%;
  padding: 0 15px;
}

/* Responsive Design */
@media (max-width: 768px) {
  .countdown-content h2 {
    font-size: 2rem;
  }
  
  .countdown-timer {
    gap: 1rem;
  }
  
  .countdown-item {
    min-width: 100px;
    padding: 1.5rem 1rem;
  }
  
  .countdown-number {
    font-size: 2rem;
  }
}

@media (max-width: 480px) {
  .countdown-timer {
    flex-direction: column;
    align-items: center;
  }
  
  .countdown-item {
    width: 150px;
  }
}
</style>

