<template>
  <div class="blog-page">
    <!-- Hero Section -->
    <section class="blog-hero">
      <div class="hero-overlay"></div>
      <div class="container">
        <div class="hero-content">
          <h1>Our Blog & News</h1>
          <p>Stay updated with our latest stories, success cases, and insights into our community development initiatives.</p>
        </div>
      </div>
    </section>

    <!-- Blog Content Section -->
    <section class="blog-content-section">
      <div class="container">
        <!-- Categories Filter -->
        <div class="categories-filter">
          <button 
            v-for="category in categories" 
            :key="category.id"
            @click="selectedCategory = category.id"
            :class="['category-btn', { active: selectedCategory === category.id }]"
          >
            {{ category.name }}
          </button>
        </div>

        <!-- Blog Posts Grid -->
        <div class="blog-grid">
          <article 
            v-for="post in filteredPosts" 
            :key="post.id" 
            class="blog-card"
          >
            <div class="blog-image">
              <img :src="post.image" :alt="post.title">
              <div class="blog-category">{{ post.category }}</div>
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <span class="blog-date">{{ post.date }}</span>
                <span class="blog-author">{{ post.author }}</span>
              </div>
              <h3 class="blog-title">{{ post.title }}</h3>
              <p class="blog-excerpt">{{ post.excerpt }}</p>
              <div class="blog-footer">
                <router-link :to="`/blog/${post.id}`" class="read-more-btn">
                  Read More <span>→</span>
                </router-link>
                <div class="blog-stats">
                  <span class="stat">👁️ {{ post.views }}</span>
                  <span class="stat">💬 {{ post.comments }}</span>
                </div>
              </div>
            </div>
          </article>
        </div>

        <!-- Load More Button -->
        <div class="load-more-container">
          <button class="load-more-btn" @click="loadMorePosts">
            <span>📄</span> Load More Posts
          </button>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'

// Sample blog data
const blogPosts = ref([
  {
    id: 1,
    title: "Empowering Widows Through Skill Acquisition Programs",
    excerpt: "Our latest initiative focuses on providing vocational training and skill development opportunities for widows in rural communities, helping them achieve financial independence.",
    image: "/banner/add6.jpeg",
    category: "Community Development",
    date: "March 15, 2025",
    author: "Rev. Fr. Callistus Osiaga",
    views: 1247,
    comments: 23
  },
  {
    id: 2,
    title: "Education Support: Transforming Lives Through Learning",
    excerpt: "Discover how our scholarship programs are making a difference in the lives of underprivileged children, providing them with access to quality education.",
    image: "/banner/add20.jpeg",
    category: "Education",
    date: "March 12, 2025",
    author: "Foundation Team",
    views: 892,
    comments: 15
  },
  {
    id: 3,
    title: "Supporting Physically Challenged Individuals",
    excerpt: "Learn about our comprehensive support programs for physically challenged individuals, including assistive technologies and rehabilitation services.",
    image: "/banner/add37.jpg",
    category: "Health & Support",
    date: "March 10, 2025",
    author: "Medical Team",
    views: 756,
    comments: 18
  },
  {
    id: 4,
    title: "Volunteer Spotlight: Stories of Impact",
    excerpt: "Meet our dedicated volunteers and learn about their inspiring stories of making a difference in communities across Nigeria.",
    image: "/banner/26.jpg",
    category: "Volunteer Stories",
    date: "March 8, 2025",
    author: "Volunteer Coordinator",
    views: 634,
    comments: 12
  },
  {
    id: 5,
    title: "Community Outreach: Building Stronger Neighborhoods",
    excerpt: "Explore our community outreach programs that focus on building stronger, more resilient neighborhoods through collaborative initiatives.",
    image: "/banner/27.jpg",
    category: "Community Development",
    date: "March 5, 2025",
    author: "Community Team",
    views: 445,
    comments: 9
  },
  {
    id: 6,
    title: "Foundation Milestones: Celebrating Our Achievements",
    excerpt: "A look back at our foundation's key milestones and achievements over the past year, highlighting the impact we've made together.",
    image: "/banner/add6.jpeg",
    category: "Foundation News",
    date: "March 3, 2025",
    author: "Foundation Team",
    views: 1123,
    comments: 31
  }
])

const categories = ref([
  { id: 'all', name: 'All Posts' },
  { id: 'community-development', name: 'Community Development' },
  { id: 'education', name: 'Education' },
  { id: 'health-support', name: 'Health & Support' },
  { id: 'volunteer-stories', name: 'Volunteer Stories' },
  { id: 'foundation-news', name: 'Foundation News' }
])

const selectedCategory = ref('all')

const filteredPosts = computed(() => {
  if (selectedCategory.value === 'all') {
    return blogPosts.value
  }
  return blogPosts.value.filter(post => {
    const categoryMap = {
      'community-development': 'Community Development',
      'education': 'Education',
      'health-support': 'Health & Support',
      'volunteer-stories': 'Volunteer Stories',
      'foundation-news': 'Foundation News'
    }
    return post.category === categoryMap[selectedCategory.value]
  })
})

const loadMorePosts = () => {
  // Add more posts functionality
  console.log('Loading more posts...')
}
</script>

<style scoped>
.blog-page {
  min-height: 100vh;
}

/* Hero Section */
.blog-hero {
  position: relative;
  height: 400px;
  background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  overflow: hidden;
}

.blog-hero::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="rgba(255,255,255,0.03)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
  opacity: 0.6;
  z-index: 1;
}

.hero-content {
  position: relative;
  z-index: 2;
  max-width: 600px;
  margin: 0 auto;
  padding: 0 20px;
}

.hero-content h1 {
  font-size: 3.5rem;
  font-weight: 800;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 50%, #2563eb 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: 1rem;
  letter-spacing: -0.02em;
}

.hero-content p {
  font-size: 1.25rem;
  color: rgba(255, 255, 255, 0.9);
  line-height: 1.7;
}

/* Blog Content Section */
.blog-content-section {
  padding: 100px 0;
  background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 40px;
}

/* Categories Filter */
.categories-filter {
  display: flex;
  justify-content: center;
  gap: 15px;
  margin-bottom: 60px;
  flex-wrap: wrap;
}

.category-btn {
  padding: 12px 24px;
  border: 2px solid #e5e7eb;
  background: white;
  color: #64748b;
  border-radius: 25px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  font-size: 0.95rem;
}

.category-btn:hover {
  border-color: #3b82f6;
  color: #3b82f6;
  transform: translateY(-2px);
}

.category-btn.active {
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  border-color: #3b82f6;
  color: white;
  box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3);
}

/* Blog Grid */
.blog-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 40px;
  margin-bottom: 60px;
}

/* Blog Card */
.blog-card {
  background: white;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  border: 1px solid rgba(0, 0, 0, 0.05);
}

.blog-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.blog-image {
  position: relative;
  height: 220px;
  overflow: hidden;
}

.blog-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.blog-card:hover .blog-image img {
  transform: scale(1.05);
}

.blog-category {
  position: absolute;
  top: 15px;
  left: 15px;
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  color: white;
  padding: 6px 12px;
  border-radius: 15px;
  font-size: 0.8rem;
  font-weight: 600;
}

.blog-content {
  padding: 25px;
}

.blog-meta {
  display: flex;
  gap: 15px;
  margin-bottom: 15px;
  font-size: 0.85rem;
  color: #64748b;
}

.blog-date,
.blog-author {
  display: flex;
  align-items: center;
  gap: 5px;
}

.blog-title {
  font-size: 1.4rem;
  font-weight: 700;
  color: #1e293b;
  margin-bottom: 15px;
  line-height: 1.4;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.blog-excerpt {
  color: #64748b;
  line-height: 1.6;
  margin-bottom: 20px;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.blog-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 20px;
  border-top: 1px solid #e5e7eb;
}

.read-more-btn {
  color: #3b82f6;
  text-decoration: none;
  font-weight: 600;
  display: flex;
  align-items: center;
  gap: 5px;
  transition: all 0.3s ease;
}

.read-more-btn:hover {
  color: #2563eb;
  transform: translateX(5px);
}

.blog-stats {
  display: flex;
  gap: 15px;
}

.stat {
  font-size: 0.85rem;
  color: #64748b;
  display: flex;
  align-items: center;
  gap: 3px;
}

/* Load More Button */
.load-more-container {
  text-align: center;
}

.load-more-btn {
  background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
  color: white;
  border: none;
  padding: 16px 32px;
  border-radius: 12px;
  font-size: 1.1rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  display: inline-flex;
  align-items: center;
  gap: 10px;
}

.load-more-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 30px rgba(59, 130, 246, 0.3);
}

/* Responsive Design */
@media (max-width: 1024px) {
  .blog-grid {
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
  }
}

@media (max-width: 768px) {
  .hero-content h1 {
    font-size: 2.5rem;
  }
  
  .hero-content p {
    font-size: 1.1rem;
  }
  
  .blog-content-section {
    padding: 60px 0;
  }
  
  .container {
    padding: 0 20px;
  }
  
  .categories-filter {
    gap: 10px;
    margin-bottom: 40px;
  }
  
  .category-btn {
    padding: 10px 20px;
    font-size: 0.9rem;
  }
  
  .blog-grid {
    grid-template-columns: 1fr;
    gap: 25px;
  }
  
  .blog-content {
    padding: 20px;
  }
  
  .blog-title {
    font-size: 1.2rem;
  }
}

@media (max-width: 480px) {
  .hero-content h1 {
    font-size: 2rem;
  }
  
  .blog-content {
    padding: 15px;
  }
  
  .blog-footer {
    flex-direction: column;
    gap: 15px;
    align-items: flex-start;
  }
  
  .blog-stats {
    gap: 10px;
  }
}
</style>

