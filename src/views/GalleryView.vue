<template>
  <div class="gallery-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-header text-center">
            <h1>Our Gallery</h1>
            <p>Explore our photo gallery to see the impact of our initiatives and the lives we've touched.</p>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-12">
          <div class="gallery-grid">
            <div class="gallery-item" v-for="(image, index) in galleryImages" :key="index">
              <img :src="image.src" :alt="image.alt" @click="openLightbox(index)">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const galleryImages = ref([
              { src: '/banner/add6.jpeg', alt: 'Foundation Activities' },
        { src: '/banner/add20.jpeg', alt: 'Community Outreach' },
        { src: '/banner/add37.jpg', alt: 'Volunteer Work' },
        { src: '/banner/26.jpg', alt: 'Education Programs' },
        { src: '/banner/27.jpg', alt: 'Scholarship Awards' },
        { src: '/banner/15.jpg', alt: 'Support Programs' }
])

const openLightbox = (index) => {
  console.log('Opening lightbox for image:', index)
  // Implement lightbox functionality here
}
</script>

<style scoped>
.gallery-page {
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

.gallery-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
}

.gallery-item {
  position: relative;
  overflow: hidden;
  border-radius: 15px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: all 0.3s ease;
}

.gallery-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.gallery-item img {
  width: 100%;
  height: 250px;
  object-fit: cover;
  transition: all 0.3s ease;
}

.gallery-item:hover img {
  transform: scale(1.05);
}
</style>

