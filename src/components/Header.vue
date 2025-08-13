<template>
  <header class="glass-navbar">
    <div class="container">
      <!-- Logo -->
      <router-link to="/" class="logo">
        <img src="@/assets/logo.png" alt="Osiaga Foundation Logo">
      </router-link>

      <!-- Hamburger Menu -->
      <button class="hamburger" :class="{ active: isMenuOpen }" @click="toggleMenu" type="button"
        aria-label="Toggle navigation" :aria-expanded="isMenuOpen.toString()" aria-controls="mainNav">
        <div class="hamburger-inner">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>

      <!-- Main Navigation -->
      <nav id="mainNav" :class="{ open: isMenuOpen }" role="navigation" aria-label="Main" @keydown.esc.stop="closeMenu">
        <ul>
          <li :class="{ active: $route.path === '/' }">
            <router-link to="/">Home</router-link>
          </li>
          <li :class="{ active: $route.path === '/about' }">
            <router-link to="/about">About Us</router-link>
          </li>
          <li :class="{ active: $route.path === '/contact' }">
            <router-link to="/contact">Contact</router-link>
          </li>

          <!-- Pages Dropdown -->
          <li tabindex="0" :class="{ active: isPagesActive }" @keydown.enter.prevent="toggleDropdown('pages')"
            @keydown.space.prevent="toggleDropdown('pages')">
            <a href="#" @click.prevent="toggleDropdown('pages')" aria-haspopup="true"
              :aria-expanded="(openDropdown === 'pages').toString()" aria-controls="pagesMenu">
              Pages <span>&#9662;</span>
            </a>
            <ul id="pagesMenu" class="dropdown" :class="{ open: openDropdown === 'pages' }">
              <li :class="{ active: $route.path === '/gallery' }">
                <router-link to="/gallery">Gallery</router-link>
              </li>
              <li :class="{ active: $route.path === '/blog' }">
                <router-link to="/blog">Blog</router-link>
              </li>
              <li :class="{ active: $route.path === '/get-loan' }">
                <router-link to="/get-loan">Get Loan</router-link>
              </li>
              <li :class="{ active: $route.path === '/volunteer' }">
                <router-link to="/volunteer">Volunteer</router-link>
              </li>
              <li :class="{ active: $route.path === '/testimonials' }">
                <router-link to="/testimonials">Testimonials</router-link>
              </li>
            </ul>
          </li>
        </ul>

        <!-- Mobile Donate Button -->
        <div class="mobile-donate">
          <router-link to="/donate" class="donate-link">DONATE NOW</router-link>
        </div>
      </nav>

      <!-- Desktop Donate Button -->
      <div class="donate">
        <router-link to="/donate" class="donate-link">DONATE NOW</router-link>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: 'Header',
  data() {
    return {
      isMenuOpen: false,
      openDropdown: null
    }
  },
  computed: {
    isPagesActive() {
      return ['/gallery', '/blog', '/get-loan', '/volunteer', '/testimonials'].includes(this.$route.path)
    }
  },
  methods: {
    toggleMenu() {
      this.isMenuOpen = !this.isMenuOpen
      if (this.isMenuOpen) {
        document.body.style.overflow = 'hidden'
      } else {
        document.body.style.overflow = ''
      }
    },
    toggleDropdown(dropdown) {
      if (this.openDropdown === dropdown) {
        this.openDropdown = null
      } else {
        this.openDropdown = dropdown
      }
    },
    closeMenu() {
      this.isMenuOpen = false
      this.openDropdown = null
      document.body.style.overflow = ''
    }
  },
  mounted() {
    // Close menu on route change
    this.$router.afterEach(() => {
      this.closeMenu()
    })

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
      if (window.innerWidth <= 991 &&
        !e.target.closest('.hamburger') &&
        !e.target.closest('#mainNav')) {
        this.closeMenu()
      }
    })

    // Close menu on resize
    window.addEventListener('resize', () => {
      if (window.innerWidth > 991) {
        this.closeMenu()
      }
    })
  }
}
</script>

<style scoped>
/* Glassmorphism Responsive Navbar */
.glass-navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000;
  background: rgba(255, 255, 255, 0.22);
  box-shadow: 0 8px 32px rgba(31, 38, 135, 0.15);
  backdrop-filter: blur(14px) saturate(140%);
  -webkit-backdrop-filter: blur(14px) saturate(140%);
  border-bottom: 1px solid rgba(255, 255, 255, 0.25);
  padding: 8px 40px;
}

.glass-navbar .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0.3rem 1.5rem;
  width: 100%;
  max-width: 100%;
  margin: 0;
  position: relative;
}

.glass-navbar .logo img {
  height: 58px;
  width: 58px;
  border-radius: 8px;
}

.glass-navbar nav {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  align-items: center;
}

.glass-navbar ul {
  list-style: none;
  display: flex;
  align-items: center;
  margin: 0;
  padding: 0;
  gap: 0.2rem;
}

.glass-navbar ul li {
  position: relative;
}

.glass-navbar ul li a {
  display: inline-block;
  padding: 0.4rem 0.8rem;
  color: #0f172a !important;
  font-weight: 600;
  text-decoration: none;
  border-radius: 8px;
  transition: all 0.3s ease;
  font-size: 0.95rem;
}

.glass-navbar ul li a span {
  font-size: 0.8em;
  color: #0f172a !important;
}

.glass-navbar ul li a:hover,
.glass-navbar ul li.active>a {
  color: #0f172a !important;
  transform: translateY(-2px);
  box-shadow: 0 6px 22px rgba(33, 147, 176, 0.25);
}

.glass-navbar ul li .dropdown {
  display: none;
  position: absolute;
  left: 0;
  top: 100%;
  min-width: 200px;
  background: rgba(255, 255, 255, 0.65);
  box-shadow: 0 10px 40px rgba(31, 38, 135, 0.25);
  border-radius: 12px;
  overflow: hidden;
  border: 1px solid rgba(255, 255, 255, 0.3);
  backdrop-filter: blur(12px) saturate(140%);
}

.glass-navbar ul li:hover>.dropdown,
.glass-navbar ul li:focus-within>.dropdown,
.glass-navbar ul li .dropdown.open {
  display: block;
}

.glass-navbar ul li .dropdown li a {
  padding: 0.75rem 1.1rem;
  color: #0f172a !important;
  background: none;
  border-radius: 0;
  transition: all 0.25s ease;
}

.glass-navbar ul li .dropdown li a:hover {
  background: linear-gradient(135deg, #2563eb 0%, #60a5fa 100%);
  color: #ffffff !important;
}

.glass-navbar .donate {
  margin-left: auto;
  display: flex;
  align-items: center;
}

.glass-navbar .donate-link {
  background: rgba(255, 255, 255, 0.45) !important;
  color: #0f172a !important;
  padding: 0.5rem 1.1rem;
  border-radius: 10px;
  font-weight: 700;
  border: 1.5px solid rgba(33, 147, 176, 0.7);
  transition: all 0.25s ease;
  box-shadow: 0 6px 18px rgba(33, 147, 176, 0.2);
  font-size: 0.95rem;
  white-space: nowrap;
  margin-left: 1.5rem;
  text-decoration: none !important;
}

.glass-navbar .donate-link:hover {
  background: linear-gradient(135deg, #2563eb 0%, #60a5fa 100%) !important;
  color: #ffffff !important;
  transform: translateY(-2px);
  box-shadow: 0 8px 26px rgba(33, 147, 176, 0.35);
  text-decoration: none !important;
}

.glass-navbar .hamburger {
  display: none;
  cursor: pointer;
  margin-left: 1.5rem;
  width: 40px;
  height: 40px;
  position: relative;
  z-index: 1001;
  background: linear-gradient(135deg, #2563eb 0%, #60a5fa 100%);
  border: none;
  border-radius: 8px;
  padding: 8px;
  box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
  transition: all 0.3s ease;
}

.glass-navbar .hamburger:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4);
}

.glass-navbar .hamburger-inner {
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 3px;
}

.glass-navbar .hamburger span {
  height: 2px;
  width: 20px;
  background: white;
  border-radius: 1px;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  transform-origin: center;
}

/* Hamburger to X animation */
.glass-navbar .hamburger.active span:nth-child(1) {
  transform: rotate(45deg) translate(2px, 2px);
}

.glass-navbar .hamburger.active span:nth-child(2) {
  opacity: 0;
  transform: scale(0);
}

.glass-navbar .hamburger.active span:nth-child(3) {
  transform: rotate(-45deg) translate(2px, -2px);
}

.mobile-donate {
  display: none;
}

/* Responsive styles */
@media (max-width: 991px) {
  .glass-navbar .container {
    flex-direction: row;
    padding: 0.3rem 0.5rem;
  }

  .glass-navbar .hamburger {
    display: flex !important;
    visibility: visible !important;
    opacity: 1 !important;
  }

  .glass-navbar .donate {
    display: none;
  }

  .glass-navbar nav {
    position: fixed;
    left: 0;
    top: 0;
    width: 100vw;
    height: 100vh;
    background: rgba(255, 255, 255, 0.9);
    box-shadow: 0 8px 32px rgba(31, 38, 135, 0.2);
    backdrop-filter: blur(12px) saturate(140%);
    transform: translateY(-100%);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .glass-navbar nav.open {
    transform: translateY(0);
  }

  .glass-navbar nav ul {
    flex-direction: column;
    gap: 1rem;
    text-align: center;
  }

  .glass-navbar nav ul li {
    width: 100%;
  }

  .glass-navbar nav ul li a {
    padding: 1rem 2rem;
    font-size: 1.1rem;
    width: 100%;
    display: block;
  }

  .glass-navbar nav ul li .dropdown {
    position: static;
    background: rgba(255, 255, 255, 0.05);
    margin-top: 0.5rem;
    border-radius: 8px;
  }

  .mobile-donate {
    display: block;
    margin-top: 2rem;
  }

  .mobile-donate .donate-link {
    margin-left: 0;
  }
}

@media (max-width: 480px) {
  .glass-navbar .container {
    padding: 0.2rem 0.3rem;
  }
  
  .glass-navbar .hamburger {
    margin-left: 1rem;
    width: 36px;
    height: 36px;
  }
  
  .glass-navbar .hamburger span {
    width: 18px;
  }
}
</style>
