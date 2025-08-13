<template>
  <section class="mission-vision-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
                      <div class="mission-card">
                          <div class="card-icon">
                <span>🎯</span>
              </div>
            <h2>Our Mission</h2>
            <p>To provide comprehensive support and empowerment to vulnerable communities, including widows, indigent children, and physically challenged individuals, through education, skill acquisition, and sustainable development programs.</p>
          </div>
        </div>
        <div class="col-lg-6">
                      <div class="vision-card">
                          <div class="card-icon">
                <span>👁️</span>
              </div>
            <h2>Our Vision</h2>
            <p>To create a world where every individual has access to quality education, economic opportunities, and the support they need to lead dignified and fulfilling lives, regardless of their circumstances.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
// Mission & Vision Section Component
</script>

<style scoped>
.mission-vision-section {
  padding: 100px 0;
  background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
}

.mission-card, .vision-card {
  background: white;
  padding: 40px 30px;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  height: 100%;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.mission-card::before, .vision-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
}

.mission-card:hover, .vision-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.card-icon {
  width: 70px;
  height: 70px;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  border-radius: 15px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 25px;
  box-shadow: 0 8px 25px rgba(96, 165, 250, 0.3);
}

.card-icon i {
  font-size: 1.8rem;
  color: white;
}

.mission-card h2, .vision-card h2 {
  font-size: 2rem;
  font-weight: 700;
  color: #1e293b;
  margin-bottom: 15px;
}

.mission-card p, .vision-card p {
  font-size: 1.05rem;
  color: #64748b;
  line-height: 1.7;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 40px;
}

.row {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -15px;
}

.col-lg-6 {
  flex: 0 0 50%;
  max-width: 50%;
  padding: 0 15px;
}

@media (max-width: 991px) {
  .col-lg-6 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  
  .mission-card, .vision-card {
    padding: 30px 25px;
    margin-bottom: 30px;
  }
}
</style>
