<template>
  <section class="hero-section">
    <div class="hero-slider" @mouseenter="pauseAuto" @mouseleave="resumeAuto">
      <div
        v-for="(slide, index) in slides"
        :key="index"
        class="hero-slide"
        :class="{ active: index === currentSlide }"
      >
        <div class="hero-background">
          <img class="hero-bg" :src="slide.image" :alt="slide.alt" />
          <div class="overlay"></div>
        </div>
        <div class="hero-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="hero-text">
                  <h1>{{ slide.heading }}</h1>
                  <p>{{ slide.subtext }}</p>
                  <div v-if="slide.bullets?.length" class="hero-features">
                    <ul>
                        <li v-for="(b, i) in slide.bullets" :key="i">
                          <span>▶</span>{{ b }}
                      </li>
                    </ul>
                  </div>
                  <div class="hero-buttons">
              <router-link to="/about" class="custom-btn active">
                <span>ℹ️</span> Learn More
                <span>→</span>
              </router-link>
              <router-link to="/donate" class="custom-btn">
                <span>❤️</span> Donate Now
                <span>→</span>
              </router-link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <button class="nav prev" @click="prevSlide" aria-label="Previous slide">
        <span>‹</span>
      </button>
      <button class="nav next" @click="nextSlide" aria-label="Next slide">
        <span>›</span>
      </button>

      <div class="dots">
        <button
          v-for="(s, i) in slides"
          :key="i"
          class="dot"
          :class="{ active: i === currentSlide }"
          @click="goTo(i)"
          :aria-label="`Go to slide ${i + 1}`"
        />
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

// Carousel images from public folder
const carouselImg1 = '/banner/15.jpg'
const carouselImg2 = '/banner/26.jpg'
const carouselImg3 = '/banner/27.jpg'
const carouselImg4 = '/banner/add6.jpeg'
const carouselImg5 = '/banner/add37.jpg'
const carouselImg6 = '/banner/add20.jpeg'



const slides = ref([
  {
    image: carouselImg1,
    alt: 'Empowering Lives',
    heading: 'Empowering Lives, Building Futures',
    subtext:
      "We are dedicated to providing education, empowering widows, and supporting physically challenged individuals to create a more inclusive and prosperous society.",
    bullets: [
      'Quality Education for All',
      'Empowering Widows',
      'Supporting Physically Challenged',
      'Support Our Mission',
    ],
  },
  {
    image: carouselImg2,
    alt: 'Community Outreach',
    heading: 'Together We Uplift Communities',
    subtext:
      'Your support enables scholarships, skill acquisition, and critical aid to those who need it most.',
    bullets: ['Scholarships', 'Skill Training', 'Mentorship', 'Aid & Relief'],
  },
  {
    image: carouselImg3,
    alt: 'Volunteers In Action',
    heading: 'Be the Reason Someone Smiles Today',
    subtext:
      'Join our volunteers to make an impact through service, care, and compassion.',
    bullets: ['Volunteer Programs', 'Community Events', 'Inclusive Support'],
  },
  {
    image: carouselImg4,
    alt: 'Education Support',
    heading: 'Education Opens Doors',
    subtext:
      'Scholarships and learning materials for underprivileged children and youths.',
    bullets: ['Scholarships', 'STEM Programs', 'Mentorship', 'School Supplies'],
  },
  {
    image: carouselImg5,
    alt: 'Health and Welfare',
    heading: 'Health, Dignity and Care for All',
    subtext:
      'Healthcare outreach, assistive devices and welfare support for vulnerable groups.',
    bullets: ['Medical Outreach', 'Assistive Devices', 'Counseling', 'Food Relief'],
  },
  {
    image: carouselImg6,
    alt: 'Community Development',
    heading: 'Building Stronger Communities Together',
    subtext:
      'Through collaborative efforts, we create sustainable development programs that uplift entire communities.',
    bullets: ['Infrastructure Projects', 'Skills Development', 'Community Leadership', 'Sustainable Growth'],
  },
])



const currentSlide = ref(0)
const intervalMs = 4000
let timerId = null

const nextSlide = () => {
  currentSlide.value = (currentSlide.value + 1) % slides.value.length
}

const prevSlide = () => {
  currentSlide.value =
    (currentSlide.value - 1 + slides.value.length) % slides.value.length
}

const goTo = (i) => {
  currentSlide.value = i
}

const startAuto = () => {
  stopAuto()
  timerId = setInterval(nextSlide, intervalMs)
}

const stopAuto = () => {
  if (timerId) clearInterval(timerId)
  timerId = null
}

const pauseAuto = () => stopAuto()
const resumeAuto = () => startAuto()

onMounted(() => {
  console.log('HeroSection mounted, slides:', slides.value)
  console.log('Slide images:', slides.value.map(s => s.image))
  startAuto()
  // Basic keyboard support
  const onKey = (e) => {
    if (e.key === 'ArrowRight') nextSlide()
    if (e.key === 'ArrowLeft') prevSlide()
  }
  window.addEventListener('keydown', onKey)
  // Cleanup
  onUnmounted(() => {
    window.removeEventListener('keydown', onKey)
  })
})

onUnmounted(() => {
  stopAuto()
})
</script>

<style scoped>
.hero-section {
  position: relative;
  height: 100vh;
  min-height: 700px;
  overflow: hidden;
  width: 100%;
}

.hero-slider {
  height: 100%;
}

.hero-slide {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  opacity: 0;
  visibility: hidden;
  transition: opacity 600ms ease, visibility 600ms ease;
}

.hero-slide.active {
  opacity: 1;
  visibility: visible;
}

.hero-background {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.hero-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  pointer-events: none;
}

.hero-content {
  position: relative;
  z-index: 2;
  color: white;
  padding: 2rem 40px;
}

.hero-text h1 {
  font-size: 3.5rem;
  font-weight: 700;
  margin-bottom: 1.5rem;
  line-height: 1.2;
}

.hero-text p {
  font-size: 1.2rem;
  margin-bottom: 2rem;
  opacity: 0.9;
}

.hero-features {
  margin-bottom: 2rem;
}

.hero-features ul {
  list-style: none;
  padding: 0;
}

.hero-features li {
  margin-bottom: 0.5rem;
  font-size: 1.1rem;
}

.hero-features i {
  color: #2563eb;
  margin-right: 0.5rem;
}

.hero-buttons {
  display: flex;
  gap: 1rem;
  flex-wrap: wrap;
}

.custom-btn {
  display: inline-flex;
  align-items: center;
  padding: 12px 30px;
  background: linear-gradient(135deg, #2563eb 0%, #60a5fa 100%);
  color: white;
  text-decoration: none;
  border-radius: 50px;
  font-weight: 600;
  transition: all 0.3s ease;
  border: 2px solid transparent;
}

.custom-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(33, 147, 176, 0.3);
  color: white;
}

.custom-btn.active {
  background: transparent;
  border-color: white;
  color: white;
}

.custom-btn.active:hover {
  background: white;
  color: #2563eb;
}

.custom-btn span:last-child {
  margin-left: 0.5rem;
  opacity: 0;
  transform: translateX(-10px);
  transition: all 0.3s ease;
}

.custom-btn:hover span:last-child {
  opacity: 1;
  transform: translateX(0);
}

/* Controls */
.nav {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 3;
  background: rgba(255, 255, 255, 0.5);
  border: 1px solid rgba(255, 255, 255, 0.8);
  backdrop-filter: blur(8px) saturate(140%);
  color: #0f172a;
  width: 42px;
  height: 42px;
  border-radius: 50%;
  display: grid;
  place-items: center;
  cursor: pointer;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.nav:hover {
  transform: translateY(-50%) scale(1.05);
  box-shadow: 0 10px 30px rgba(31, 38, 135, 0.25);
}

.nav.prev { left: 18px; }
.nav.next { right: 18px; }

/* Indicators */
.dots {
  position: absolute;
  left: 50%;
  bottom: 22px;
  transform: translateX(-50%);
  display: flex;
  gap: 10px;
  z-index: 3;
}

.dot {
  width: 8px;
  height: 8px;
  border-radius: 999px;
  background: rgba(255, 255, 255, 0.6);
  border: 1px solid rgba(255, 255, 255, 0.9);
  padding: 0;
}

.dot.active {
  width: 22px;
  background: linear-gradient(135deg, #2563eb 0%, #60a5fa 100%);
}
/* Responsive Design */
@media (max-width: 768px) {
  .hero-text h1 {
    font-size: 2.5rem;
  }
  
  .hero-text p {
    font-size: 1rem;
  }
  
  .hero-buttons {
    flex-direction: column;
  }
  
  .custom-btn {
    justify-content: center;
  }
}

/* Grid System Replacement */
.container {
  width: 100%;
  max-width: 100%;
  margin: 0;
  padding: 0 1.5rem;
}

.row {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -15px;
}

.col-lg-8 {
  flex: 0 0 66.666667%;
  max-width: 66.666667%;
  padding: 0 15px;
}

@media (max-width: 991px) {
  .col-lg-8 {
    flex: 0 0 100%;
    max-width: 100%;
  }
}
</style>

