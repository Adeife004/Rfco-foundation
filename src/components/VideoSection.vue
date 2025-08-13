<template>
  <section class="video-section section-padding-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title text-center">
            <h2>Watch Our Story</h2>
            <p>See how we're making a difference in the lives of vulnerable individuals and communities.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="section-wrapper">
            <div class="video-top">
                          <div class="video mb-4">
              <div class="video-thumb">
                <img src="/banner/add37.jpg" alt="video">
              </div>
              <a href="#" class="video-play" aria-label="Play video">▶</a>
            </div>
            </div>
                          <div class="video-bottom">
                <div class="video-links">
                  <div class="post-thumb">
                    <img src="/banner/add37.jpg" alt="video">
                    <a href="#" class="video-play" aria-label="Play video">▶</a>
                  </div>
                  <div class="post-content">
                    <a href="#">Empowering Widows</a>
                    <p>2025</p>
                  </div>
                </div>
              </div>
          </div>              
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
// Video section component logic
</script>

<style scoped>
.video-section {
  padding: 80px 0;
  background: #f8f9fa;
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
  background: white;
  border-radius: 15px;
  padding: 2rem;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.video {
  position: relative;
  border-radius: 10px;
  overflow: hidden;
  margin-bottom: 2rem;
}

.video-thumb {
  position: relative;
  width: 100%;
  height: 400px;
  overflow: hidden;
  border-radius: 10px;
}

.video-thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.video-play {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80px;
  height: 80px;
  background: rgba(255, 255, 255, 0.9);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  transition: all 0.3s ease;
}

.video-play:hover {
  background: white;
  transform: translate(-50%, -50%) scale(1.1);
}

.video-play i {
  font-size: 2rem;
  color: #2563eb;
}

.video-links {
  display: flex;
  align-items: center;
  gap: 1.5rem;
  padding: 1.5rem;
  background: #f8f9fa;
  border-radius: 10px;
}

.post-thumb {
  position: relative;
  flex-shrink: 0;
  width: 120px;
  height: 80px;
  border-radius: 8px;
  overflow: hidden;
}

.post-thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.post-thumb .video-play {
  width: 40px;
  height: 40px;
}

.post-thumb .video-play i {
  font-size: 1.2rem;
}

.post-content a {
  color: #333;
  text-decoration: none;
  font-weight: 600;
  font-size: 1.1rem;
  margin-bottom: 0.5rem;
  display: block;
  transition: color 0.3s ease;
}

.post-content a:hover {
  color: #2563eb;
}

.post-content p {
  color: #666;
  margin: 0;
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

.col-lg-8 {
  flex: 0 0 66.666667%;
  max-width: 66.666667%;
  padding: 0 15px;
}

.mx-auto {
  margin-left: auto;
  margin-right: auto;
}

@media (max-width: 991px) {
  .col-lg-8 {
    flex: 0 0 100%;
    max-width: 100%;
  }
}

@media (max-width: 768px) {
  .section-title h2 {
    font-size: 2rem;
  }
  
  .video-thumb {
    height: 300px;
  }
  
  .video-links {
    flex-direction: column;
    text-align: center;
  }
  
  .post-thumb {
    width: 100%;
    height: 120px;
  }
}
</style>

