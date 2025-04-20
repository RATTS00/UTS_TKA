<?php
include "../install.php";
?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="https://mdbgo.com/">
      <img
        src="../img/logosmall.jpg"
        height="16"
        alt="MDB Logo"
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Toggle button -->
    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="menampilkan.php">siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../voter/menampilkan.php">kandidat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="grafik.php">graph</a>
        </li>
      </ul>
      <!-- Left links -->

      <div class="d-flex align-items-center">
        <!-- <button data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2">
          Login
        </button> -->
        <button data-mdb-ripple-init type="button" class="btn btn-primary me-3">
            <a class="text-light"href="../index.php">

              LOGOUT
            </a>
        </button>
        <!-- <a
          data-mdb-ripple-init
          class="btn btn-dark px-3"
          href="https://github.com/mdbootstrap/mdb-ui-kit"
          role="button"
          ><i class="fab fa-github"></i
        ></a> -->
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->