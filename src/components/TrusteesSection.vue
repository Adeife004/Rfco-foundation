<template>
  <section class="trustees-section">
    <div class="container">
              <div class="section-header">
        <h2>Board of Trustees</h2>
        <p>Meet the dedicated leaders who guide our foundation's mission</p>
      </div>
      <div class="trustees-grid">
                  <div class="trustee-card">
          <div class="trustee-image">
            <img :src="presidentImage" alt="President">
          </div>
          <div class="trustee-info">
            <h3>Rev. Fr. Callistus Osiaga</h3>
            <p class="position">President & Founder</p>
            <p class="description">Leading our foundation with vision and dedication to serve the most vulnerable in our society.</p>
          </div>
        </div>
                  <div class="trustee-card">
          <div class="trustee-image">
            <img :src="honRobertImage" alt="Hon. Robert Ikazoboh">
          </div>
          <div class="trustee-info">
            <h3>Hon. Robert Ikazoboh</h3>
            <p class="position">Trustee</p>
            <p class="description">Bringing extensive experience in governance and community development to our foundation.</p>
          </div>
        </div>
                  <div class="trustee-card">
          <div class="trustee-image">
            <img :src="engrNsisukImage" alt="Engr. Nsisuk Ekanem">
          </div>
          <div class="trustee-info">
            <h3>Engr. Nsisuk Ekanem</h3>
            <p class="position">Trustee</p>
            <p class="description">Contributing technical expertise and strategic planning to advance our mission.</p>
          </div>
        </div>
                  <div class="trustee-card">
          <div class="trustee-image">
            <img :src="dumImage" alt="Trustee">
          </div>
          <div class="trustee-info">
            <h3>Trustee Member</h3>
            <p class="position">Trustee</p>
            <p class="description">Dedicated to supporting our foundation's initiatives and community outreach programs.</p>
          </div>
        </div>
        

      </div>
    </div>
  </section>
</template>

<script setup>
// Import trustee images
import presidentImage from '@/assets/trustees/president.jpg'
import honRobertImage from '@/assets/trustees/Hon-Robert-Ikazoboh.jpg'
import engrNsisukImage from '@/assets/trustees/Engr-Nsisuk-Ekanem.jpg'
import dumImage from '@/assets/trustees/dum.jpg'
// import sunnyUlokoImage from '@/assets/trustees/sunny-uloko.jpg'
// import honGeorgeIzoboImage from '@/assets/trustees/hon-george-izobo.jpg'
</script>

<style scoped>
.trustees-section {
  padding: 100px 0;
  background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
  color: white;
}

.section-header {
  text-align: center;
  margin-bottom: 60px;
}

.section-header h2 {
  font-size: 2.5rem;
  font-weight: 700;
  color: white;
  margin-bottom: 1rem;
}

.section-header p {
  font-size: 1.1rem;
  color: rgba(255, 255, 255, 0.8);
  line-height: 1.6;
}

.trustees-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
  max-width: 1400px;
  margin: 0 auto;
}

.trustee-card {
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: 20px;
  padding: 30px;
  text-align: center;
  backdrop-filter: blur(10px);
  transition: all 0.3s ease;
}

.trustee-card:hover {
  transform: translateY(-5px);
  border-color: rgba(96, 165, 250, 0.3);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
}

.trustee-image {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  overflow: hidden;
  margin: 0 auto 20px;
  border: 3px solid rgba(96, 165, 250, 0.3);
}

.trustee-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.trustee-info h3 {
  font-size: 1.3rem;
  font-weight: 600;
  color: white;
  margin-bottom: 5px;
}

.position {
  font-size: 0.9rem;
  color: #60a5fa;
  font-weight: 500;
  margin-bottom: 10px;
}

.description {
  font-size: 0.9rem;
  color: rgba(255, 255, 255, 0.8);
  line-height: 1.6;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 40px;
}

@media (max-width: 768px) {
  .trustees-grid {
    grid-template-columns: 1fr;
    gap: 25px;
  }
  
  .trustee-image {
    width: 100px;
    height: 100px;
  }
}
</style>
