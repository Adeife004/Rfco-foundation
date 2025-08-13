<template>
  <div class="events-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-header text-center">
            <h1>Our Events</h1>
            <p>Join us in our upcoming events to support and uplift vulnerable communities.</p>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-12">
          <div class="events-grid">
            <div class="event-card" v-for="event in events" :key="event.id">
              <div class="event-image">
                <img :src="event.image" :alt="event.title">
                <div class="event-date">
                  <span class="day">{{ event.day }}</span>
                  <span class="month">{{ event.month }}</span>
                </div>
              </div>
              <div class="event-content">
                <h3 class="event-title">{{ event.title }}</h3>
                <p class="event-description">{{ event.description }}</p>
                <div class="event-meta">
                  <span class="event-location">
                    <span class="icon-dot" aria-hidden="true">📍</span>
                    {{ event.location }}
                  </span>
                  <span class="event-time">
                    <i class="fa-regular fa-clock"></i>
                    {{ event.time }}
                  </span>
                </div>
                <router-link :to="event.link" class="event-link">Learn More</router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
// use public assets paths instead of bundling imports
const imgAdd6 = '/banner/add6.jpeg'
const imgAdd20 = '/banner/add20.jpeg'
const imgAdd37 = '/banner/add37.jpg'
const img26 = '/banner/26.jpg'

const events = ref([
  {
    id: 1,
    title: "Skill Acquisition Program for Widows",
    description: "Join us for a comprehensive skill acquisition program designed to empower widows with practical skills for sustainable income generation.",
    image: imgAdd6,
    day: "01",
    month: "Nov",
    location: "Nigeria",
    time: "9:00 AM",
    link: "/about"
  },
  {
    id: 2,
    title: "Scholarship Award Ceremony",
    description: "Celebrate the achievements of our scholarship recipients and witness the impact of education on young lives.",
    image: imgAdd20,
    day: "15",
    month: "Nov",
    location: "Nigeria",
    time: "2:00 PM",
    link: "/about"
  },
  {
    id: 3,
    title: "Community Health Outreach",
    description: "Free health screening and medical consultation for vulnerable community members.",
    image: imgAdd37,
    day: "20",
    month: "Nov",
    location: "Nigeria",
    time: "10:00 AM",
    link: "/about"
  },
  {
    id: 4,
    title: "Youth Empowerment Workshop",
    description: "Interactive workshop focused on leadership development and career guidance for young people.",
    image: img26,
    day: "25",
    month: "Nov",
    location: "Nigeria",
    time: "1:00 PM",
    link: "/about"
  }
])
</script>

<style scoped>
.events-page {
  padding: 80px 0;
}

.page-header {
  margin-bottom: 60px;
}

.page-header h1 {
  font-size: 3rem;
  font-weight: 700;
  margin-bottom: 1rem;
  color: #333;
}

.page-header p {
  font-size: 1.2rem;
  color: #666;
}

.events-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 2rem;
}

.event-card {
  background: white;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

.event-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.event-image {
  position: relative;
  height: 200px;
  overflow: hidden;
}

.event-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.event-date {
  position: absolute;
  top: 1rem;
  left: 1rem;
  background: linear-gradient(135deg, #2563eb 0%, #60a5fa 100%);
  color: white;
  padding: 0.5rem;
  border-radius: 8px;
  text-align: center;
  min-width: 60px;
}

.event-date .day {
  display: block;
  font-size: 1.2rem;
  font-weight: 700;
}

.event-date .month {
  display: block;
  font-size: 0.8rem;
  text-transform: uppercase;
}

.event-content {
  padding: 2rem;
}

.event-title {
  font-size: 1.3rem;
  font-weight: 600;
  margin-bottom: 1rem;
  color: #333;
}

.event-description {
  color: #666;
  line-height: 1.6;
  margin-bottom: 1.5rem;
}

.event-meta {
  display: flex;
  gap: 1rem;
  margin-bottom: 1.5rem;
  font-size: 0.9rem;
  color: #666;
}

.event-meta span {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.event-meta i {
  color: #2563eb;
}

.event-link {
  display: inline-block;
  background: linear-gradient(135deg, #2563eb 0%, #60a5fa 100%);
  color: white;
  padding: 0.75rem 1.5rem;
  border-radius: 8px;
  text-decoration: none;
  font-weight: 600;
  transition: all 0.3s ease;
}

.event-link:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(33, 147, 176, 0.3);
  color: white;
  text-decoration: none;
}

@media (max-width: 768px) {
  .events-grid {
    grid-template-columns: 1fr;
  }
}
</style>

