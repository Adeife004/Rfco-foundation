<template>
  <div class="admin-page">
    <div class="container">
      <div class="page-header text-center">
        <h1>Admin Dashboard</h1>
        <p>Manage content: posts, events, gallery, and volunteers.</p>
      </div>

      <div class="admin-grid">
        <router-link to="/admin/posts" class="admin-card">
          <i class="fa-solid fa-newspaper"></i>
          <h3>Posts</h3>
          <p>Create and manage blog posts.</p>
        </router-link>
        <router-link to="/admin/events" class="admin-card">
          <i class="fa-solid fa-calendar-days"></i>
          <h3>Events</h3>
          <p>Manage upcoming events.</p>
        </router-link>
        <router-link to="/admin/gallery" class="admin-card">
          <i class="fa-solid fa-images"></i>
          <h3>Gallery</h3>
          <p>Upload and sort images.</p>
        </router-link>
        <router-link to="/admin/volunteers" class="admin-card">
          <i class="fa-solid fa-people-group"></i>
          <h3>Volunteers</h3>
          <p>Review and manage volunteers.</p>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script setup>
// placeholder admin shell; sub-pages can be added later
</script>

<style scoped>
.admin-page {
  padding: 90px 0;
  background: var(--bg-primary);
  color: var(--text-primary);
}

.page-header h1 {
  font-size: 2rem;
  font-weight: 800;
  margin-bottom: 0.5rem;
}

.page-header p {
  color: var(--text-secondary);
}

.admin-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 16px;
  margin-top: 24px;
}

.admin-card {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 10px;
  text-decoration: none;
  padding: 18px;
  border-radius: 14px;
  background: var(--bg-secondary);
  border: 1px solid var(--border-primary);
  color: var(--text-primary);
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.admin-card:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 28px rgba(0,0,0,0.15);
}

.admin-card i {
  font-size: 28px;
  color: #2563eb;
}

.admin-card h3 {
  margin: 0;
  font-size: 1.1rem;
  font-weight: 700;
}

.admin-card p {
  margin: 0;
  color: var(--text-secondary);
}
</style>

