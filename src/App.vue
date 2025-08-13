<script>
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'
import { setupScrollAnimations } from './utils/scrollAnimations'

export default {
  name: 'App',
  components: { Header, Footer },
  data() {
    return {
      showScrollTop: false,
    }
  },
  created() {
    // Always set dark theme
    if (typeof document !== 'undefined') {
      document.documentElement.classList.add('theme-dark')
    }
    if (typeof window !== 'undefined') {
      window.addEventListener('scroll', this.onScroll, { passive: true })
    }
  },
  mounted() {
    // setupScrollAnimations();
  },
  beforeUnmount() {
    if (typeof window !== 'undefined') {
      window.removeEventListener('scroll', this.onScroll)
    }
  },
  methods: {
    onScroll() {
      const y = window.scrollY || document.documentElement.scrollTop || 0
      this.showScrollTop = y > 200
    },
    scrollToTop() {
      window.scrollTo({ top: 0, behavior: 'smooth' })
    }
  }
}
</script>

<template>
  <div id="app">
    <Header />
    <main>
      <button
        v-show="showScrollTop"
        class="scroll-top-btn"
        @click="scrollToTop"
        aria-label="Scroll to top"
        type="button"
      >
        ↑
      </button>
      <router-view />
    </main>
    <Footer />
  </div>
</template>

<style>


/* Global styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  line-height: 1.6;
  color: var(--text-primary);
  background: var(--bg-primary);
}

#app {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

main {
  flex: 1;
  margin-top: 80px; /* Account for fixed header */
}

/* Custom scrollbar */
::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-track {
  background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
  background: #2563eb;
  border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
  background: #60a5fa;
}

/* Utility classes */
.text-gradient {
  background: linear-gradient(135deg, #2563eb 0%, #60a5fa 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.btn-gradient {
  background: linear-gradient(135deg, #2563eb 0%, #60a5fa 100%);
  border: none;
  color: white;
  transition: all 0.3s ease;
}

.btn-gradient:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(33, 147, 176, 0.3);
  color: white;
}
</style>



<style scoped>
.scroll-top-btn {
  position: fixed;
  right: 16px;
  bottom: 16px;
  width: 44px;
  height: 44px;
  border-radius: 50%;
  border: 1px solid var(--border-secondary, rgba(0,0,0,0.12));
  background: linear-gradient(135deg, #2563eb 0%, #60a5fa 100%);
  color: #fff;
  box-shadow: 0 10px 28px rgba(33,147,176,0.35);
  cursor: pointer;
  z-index: 1001;
}
</style>

