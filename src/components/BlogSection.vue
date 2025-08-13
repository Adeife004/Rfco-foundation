<template>
  <section class="blog-section section-padding-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title text-center">
            <h2>Latest News & Updates</h2>
            <p>Stay informed about our latest activities, success stories, and upcoming events.</p>
          </div>
        </div>
      </div>
      <div class="news-grid">
        <div 
          v-for="(item, index) in newsItems" 
          :key="index" 
          class="news-card"
        >
          <div class="news-image">
            <img :src="item.image" :alt="item.title">
            <div class="news-overlay">
              <router-link to="/about" class="read-more-btn">Read More</router-link>
            </div>
          </div>
          <div class="news-content">
            <div class="news-meta">
              <span class="meta-item">
                <span class="icon">📅</span>
                {{ item.date }}
              </span>
              <span class="meta-item">
                <span class="icon">👤</span>
                {{ item.author }}
              </span>
              <span class="meta-item">
                <span class="icon">💬</span>
                {{ item.comments }}
              </span>
            </div>
            <h4 class="news-title">
              <router-link to="/about">{{ item.title }}</router-link>
            </h4>
            <p class="news-excerpt">{{ item.excerpt }}</p>
            <router-link to="/about" class="news-link">
              Read Full Story <span class="arrow">→</span>
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

// Import images from latestnews folder
import newsImg1 from '@/assets/latestnews/img1.jpg'
import newsImg2 from '@/assets/latestnews/img2.jpg'
import newsImg3 from '@/assets/latestnews/img3.jpg'

const newsItems = ref([
  {
    image: newsImg1,
    title: 'Empowering Widows Through Skill Acquisition',
    excerpt: 'Our recent skill acquisition program has empowered widows with the skills needed to start their own businesses.',
    date: '2025',
    author: 'Admin',
    comments: 16
  },
  {
    image: newsImg2,
    title: 'Scholarships for Indigent Children',
    excerpt: 'We have awarded scholarships to indigent children, ensuring they have access to quality education.',
    date: '2025',
    author: 'Admin',
    comments: 10
  },
  {
    image: newsImg3,
    title: 'Supporting Physically Challenged Individuals',
    excerpt: 'Our foundation has provided assistive technologies and rehabilitation services to 30 physically challenged individuals.',
    date: '2025',
    author: 'Admin',
    comments: 8
  }
])
</script>

<style scoped>
.blog-section {
  padding: 80px 0;
  background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
}

.section-title {
  margin-bottom: 4rem;
}

.section-title h2 {
  font-size: 2.5rem;
  font-weight: 700;
  color: #333;
  margin-bottom: 1rem;
}

.section-title p {
  font-size: 1.1rem;
  color: #666;
  line-height: 1.6;
}

.section-wrapper {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 2rem;
  margin-top: 3rem;
}

.news-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 2rem;
  margin-top: 3rem;
}

.news-card {
  background: white;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  position: relative;
}

.news-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.news-image {
  position: relative;
  height: 250px;
  overflow: hidden;
}

.news-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.news-card:hover .news-image img {
  transform: scale(1.1);
}

.news-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(75, 85, 99, 0.8);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.news-card:hover .news-overlay {
  opacity: 1;
}

.read-more-btn {
  color: white;
  text-decoration: none;
  font-weight: 600;
  padding: 12px 24px;
  border: 2px solid white;
  border-radius: 25px;
  transition: all 0.3s ease;
}

.read-more-btn:hover {
  background: white;
  color: #2563eb;
}

.news-content {
  padding: 2rem;
}

.news-meta {
  display: flex;
  gap: 1rem;
  margin-bottom: 1rem;
  flex-wrap: wrap;
}

.meta-item {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  font-size: 0.9rem;
  color: #64748b;
}

.meta-item .icon {
  font-size: 1rem;
}

.news-title {
  font-size: 1.4rem;
  font-weight: 700;
  margin-bottom: 1rem;
  line-height: 1.3;
}

.news-title a {
  color: #1e293b;
  text-decoration: none;
  transition: color 0.3s ease;
}

.news-title a:hover {
  color: #2563eb;
}

.news-excerpt {
  color: #64748b;
  line-height: 1.6;
  margin-bottom: 1.5rem;
  font-size: 1rem;
}

.news-link {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  color: #2563eb;
  text-decoration: none;
  font-weight: 600;
  font-size: 0.95rem;
  transition: all 0.3s ease;
}

.news-link:hover {
  color: #1d4ed8;
  gap: 0.8rem;
}

.news-link .arrow {
  transition: transform 0.3s ease;
}

.news-link:hover .arrow {
  transform: translateX(3px);
}

.post-item {
  background: white;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.post-item:hover {
  transform: translateY(-5px);
}

.post-item-inner {
  height: 100%;
  display: flex;
  flex-direction: column;
}

.post-thumb {
  position: relative;
  height: 200px;
  overflow: hidden;
}

.post-thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.post-item:hover .post-thumb img {
  transform: scale(1.05);
}

.post-content {
  padding: 1.5rem;
  flex: 1;
  display: flex;
  flex-direction: column;
}

.entry-header {
  flex: 1;
}

.entry-meta {
  display: flex;
  gap: 1rem;
  margin-bottom: 1rem;
  flex-wrap: wrap;
}

.entry-meta p {
  font-size: 0.9rem;
  color: #666;
  margin: 0;
  display: flex;
  align-items: center;
  gap: 0.3rem;
}

.entry-meta i {
  color: #2563eb;
}

.entry-header h5 {
  font-size: 1.3rem;
  font-weight: 600;
  margin-bottom: 1rem;
  line-height: 1.4;
}

.entry-header h5 a {
  color: #333;
  text-decoration: none;
  transition: color 0.3s ease;
}

.entry-header h5 a:hover {
  color: #2563eb;
}

.entry-content p {
  color: #666;
  line-height: 1.6;
  margin-bottom: 1.5rem;
}

.custom-btn {
  display: inline-flex;
  align-items: center;
  padding: 8px 20px;
  background: linear-gradient(135deg, #2563eb 0%, #60a5fa 100%);
  color: white;
  text-decoration: none;
  border-radius: 25px;
  font-weight: 600;
  font-size: 0.9rem;
  transition: all 0.3s ease;
}

.custom-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 4px 15px rgba(33, 147, 176, 0.3);
  color: white;
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

.col-lg-12 {
  flex: 0 0 100%;
  max-width: 100%;
  padding: 0 15px;
}

/* Responsive Design */
@media (max-width: 768px) {
  .section-title h2 {
    font-size: 2rem;
  }
  
  .section-wrapper {
    grid-template-columns: 1fr;
    gap: 1.5rem;
  }
  
  .entry-meta {
    gap: 0.5rem;
  }
  
  .entry-meta p {
    font-size: 0.8rem;
  }
}
</style>

