<script setup>
import HeroSection from '../components/HeroSection.vue'
import WhatWeDoSection from '../components/WhatWeDoSection.vue'
import WhatToDoSlider from '../components/WhatToDoSlider.vue'
import CountdownSection from '../components/CountdownSection.vue'
import VolunteerCTASection from '../components/VolunteerCTASection.vue'

import BlogSection from '../components/BlogSection.vue'
import NewsletterSection from '../components/NewsletterSection.vue'


</script>

<template>
  <div class="home">
    <HeroSection />
    <WhatWeDoSection />
    <WhatToDoSlider />
    <CountdownSection />
    <VolunteerCTASection />
    <BlogSection />
    <NewsletterSection />
  </div>
</template>

<style scoped>
.home {
  min-height: 100vh;
}
</style>

