<?php

function ui_print_jumbotron() {
  echo '
  <div class="jumbotron">
    <div class="container text-center text-lg-left">
      <div class="row">
        <div class="col-lg-8">
          <img src="images/MIET_header.png" class="img-fluid">
          <p>
            <b style="color: #0f45c7; font-size: 170%;">
              Региональная научно-практическая конференция учащихся "ТВОРЧЕСТВО ЮНЫХ"
            </b>
          </p>
        </div>
        <div class="col-lg-4 align-items-center d-flex">
          <img src="images/tu-bg.jpg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
  ';
}

function ui_print_menubar() {
  echo '
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="' . __SITE_BASE__ . 'index.php">Творчество юных</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-data" aria-controls="navbar-data" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-data">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="' . __SITE_BASE__ . 'index.php">Главная</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown-about" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">О конкурсе</a>
          <div class="dropdown-menu" aria-labelledby="dropdown-about">
            <a class="dropdown-item" href="' . __SITE_BASE__ . 'about/about.php">О конкурсе "Творчество юных"</a>
            <hr/>
            <a class="dropdown-item" href="' . __SITE_BASE__ . 'about/jury.php">Наше жюри</a>
            <hr/>
            <a class="dropdown-item" href="' . __SITE_BASE__ . 'about/documents.php">Документы</a>
            <a class="dropdown-item" href="' . __SITE_BASE__ . 'about/papers.php">Оформление статей</a>
          </div>
        </li>
        <li class="nav-item"> <a class="nav-link" href="./projects.php"> Проекты</a> </li>
        <li class="nav-item"> <a class="nav-link" href="./participants.php"> Участники</a> </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle"><i class="far fa-question-circle"></i> Помощь</a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="./about.php">Контакты Оргкомитета Конференции:</a>
            <hr/>
            <p style="padding-left: 40px;"><i class="fas fa-phone"></i> <b>Телефоны</b></p>
            <p  class="dropdown-item">+7 (499) 710-22-13</p>
            <p  class="dropdown-item">+7 (499) 729-75-04</p>
            <hr/>
            <p style="padding-left: 40px;"><i class="fab fa-vk"></i> <b>Группа "ВКонтакте"</b></p>
            <a class="dropdown-item" href="https://vk.com/mietconference" target="_blank">https://vk.com/mietconference</a>
            <hr/>
            <p style="padding-left: 40px;"><i class="fas fa-envelope"></i> <b>Почта</b></p>
            <a class="dropdown-item" href="mailto:olimp@miee.ru">olimp@miee.ru</a>
          </div>
        </li>
        &nbsp;
        &nbsp;
        <li class="nav-item">
          <a href="#" data-toggle="modal" data-target="#loginModal" class="btn btn-success"><i class="fas fa-user"></i> Регистрация и вход</a>
        </li>
      </ul>
    </div>
  </nav>

  ';
}

?>
