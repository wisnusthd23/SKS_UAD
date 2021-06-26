<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" /> -->
  <link rel="stylesheet" href="<?= base_url() ?>assetss/fontawesome-free-5.15.3-web/css/all.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assetss/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />

  <link rel="shortcut icon" href="<?= base_url() ?>assetss/img/uad.png" type="image/x-icon" />

  <title><?= $judul; ?></title>
</head>

<body id="body-pd">
  <header class="header" id="header">
    <div class="header__toggle">
      <i class="bx bx-menu" id="header-toggle"></i>
    </div>

    <div class="header__img">
      <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"><img src="<?= base_url('assetss/img/') . $user['image']; ?>" alt=""></a>
      <p style="margin-top: 9px;"><?= $user['name']; ?></p>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= base_url('home/editprofile'); ?>">Edit Profile</a>
        <a class="dropdown-item" href="#">Ubah Password</a>
      </div>
    </div>
  </header>

  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div>
        <a href="<?= base_url('home/dashboard') ?>" class="nav__logo <?php if ($this->uri->segment(1) == "home/dashboard") {
                                                                echo "active";
                                                              } ?>">
          <i class='bx bxs-data'></i>
          <span class="nav__logo-name">SKS UAD</span>
        </a>

        <div class="nav__list">
          <a href="<?= base_url('home') ?>" class="nav__link <?php if ($this->uri->segment(1) == "home") {
                                                                echo "active";
                                                              } ?>">
            <i class="bx bx-grid-alt nav__icon"></i>
            <span class="nav__name">Data SKS</span>
          </a>

          <a href="<?= base_url('matkul') ?>" class="nav__link <?php if ($this->uri->segment(1) == "matkul") {
                                                                  echo "active";
                                                                } ?>">
            <i class="bx bx-user nav__icon"></i>
            <span class="nav__name">Matkul</span>
          </a>

          <a href="#" class="nav__link">
            <i class="bx bx-message-square-detail nav__icon"></i>
            <span class="nav__name">Messages</span>
          </a>

          <a href="#" class="nav__link">
            <i class="bx bx-bookmark nav__icon"></i>
            <span class="nav__name">Favorites</span>
          </a>

          <a href="#" class="nav__link">
            <i class="bx bx-folder nav__icon"></i>
            <span class="nav__name">Data</span>
          </a>

          <a href="#" class="nav__link">
            <i class="bx bx-bar-chart-alt-2 nav__icon"></i>
            <span class="nav__name">Analytics</span>
          </a>
        </div>
      </div>

      <a href="<?= base_url('auth/logout'); ?>" class="nav__link">
        <i class="bx bx-log-out nav__icon"></i>
        <span class="nav__name">Log Out</span>
      </a>
    </nav>
  </div>