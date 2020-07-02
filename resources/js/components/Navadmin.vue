<template>
  <div>
    <nav class="navbar navbar-dark bg-dark">
      <b-button v-b-toggle.sidebar-backdrop>
        <b-icon-list></b-icon-list>
      </b-button>
      <span>
        <a href="logout" class="text-white btn border">logout</a>
      </span>
    </nav>

    <b-sidebar
      bg-variant="dark"
      text-variant="light"
      id="sidebar-backdrop"
      title="Main menu"
      :backdrop-variant="variant"
      backdrop
      shadow
    >
      <nav class="mb-3">
        <b-nav vertical>
          <b-nav-item href="/" @click="hide">
            <h4 class="text-white">Welcome</h4>
          </b-nav-item>
          <b-nav-item href="/admin_addalumno" @click="hide">
            <h4 class="text-white">Add alumno</h4>
          </b-nav-item>

          <b-nav-item href="/admin_addprof" @click="hide">
            <h4 class="text-white">Add Prof</h4>
          </b-nav-item>
        </b-nav>
      </nav>
    </b-sidebar>
  </div>
</template>

<script>
export default {
  data() {
    return {
      variant: "dark"
    };
  }
};
</script>
