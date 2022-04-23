<!DOCTYPE html>
<html lang="ru">

<?php
    define('__SITE_BASE__', './');
    require_once(__SITE_BASE__ . 'php/ui.php');
    require_once(__SITE_BASE__ . 'php/config.php');
    require_once(__SITE_BASE__ . 'php/dialogs.php');
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Normal browsers -->
    <link rel="icon" sizes="16x16"      href="images/favicons/icon_16x16.png"   type="image/png">
    <link rel="icon" sizes="32x32"      href="images/favicons/icon_32x32.png"   type="image/png">
    <link rel="icon" sizes="96x96"      href="images/favicons/icon_96x96.png"   type="image/png">
    <link rel="icon" sizes="120x120"    href="images/favicons/icon_120x120.png" type="image/png">
    <link rel="icon" sizes="192x192"    href="images/favicons/icon_192x192.png" type="image/png">
    <link rel="icon" sizes="512x512"    href="images/favicons/icon_512x512.png" type="image/png">

    <!-- Apple Safari -->
    <link rel="apple-touch-icon" sizes="16x16"   href="images/favicons/icon_16x16.png"   type="image/png">
    <link rel="apple-touch-icon" sizes="32x32"   href="images/favicons/icon_32x32.png"   type="image/png">
    <link rel="apple-touch-icon" sizes="96x96"   href="images/favicons/icon_96x96.png"   type="image/png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/icon_120x120.png" type="image/png">
    <link rel="apple-touch-icon" sizes="192x192" href="images/favicons/icon_192x192.png" type="image/png">
    <link rel="apple-touch-icon" sizes="512x512" href="images/favicons/icon_512x512.png" type="image/png">

    <!-- Android Chrome -->
    <link rel="manifest" href="img/icons/tu-miet.webmanifest">

    <!-- Windows 8 and 10 -->
    <!--link rel="manifest" href="browserconfig.xml"-->

    <link href="libs/bootstrap-4.6.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="libs/fontawesome-5.0.9/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">

    <title>Творчество юных-2022 : Главная</title>

    <link href="main.css" rel="stylesheet" type="text/css">

    <style type="text/css">
        main {
            padding-top: 0px;
        }
        .jumbotron {
            margin-top: 0px;
            padding-top:10px;
            padding-bottom:10px;
        }
        .btn-secondary, .btn-secondary:hover, .btn-secondary:active, .btn-secondary:visited {
            background-color: #0F45C7 !important;
        }
        .padding-lr20 {
            padding-left:20px;
            padding-right:20px;
        }
        .padding-v0 {
            padding-top:0px;
            padding-bottom:0px;
        }
        .datepadding {
            padding: 10px !important;
            margin: 5px !important;
        }
    </style>



    <style>
        .card-box {
            position: relative;
            color: #fff;
            padding: 20px 10px 40px;
            margin: 20px 0px;
        }
        .card-box:hover {
            text-decoration: none;
            color: #f1f1f1;
        }
        .card-box .icon {
            position: absolute;
            top: auto;
            bottom: 5px;
            right: 5px;
            z-index: 0;
            font-size: 72px;
            color: rgba(0, 0, 0, 0.15);
        }
        /*.card-box:hover .icon i {
            font-size: 100px;
            transition: 1s;
            -webkit-transition: 1s;
        }*/
        .card-box .inner {
            padding: 5px 5px 5px 5px;
        }
        .card-box h3 {
            font-size: 27px;
            font-weight: bold;
            margin: 0 0 8px 0;
            white-space: nowrap;
            padding: 0;
            text-align: left;
          text-transform: uppercase;
        }
        .bg-blue {
            background-color: #00c0ef !important;
            border-left: 4px #0F45C7 solid;
        }
        .bg-green {
            background-color: #00a65a !important;
            border-left: 4px #254636 solid;
        }
        .bg-orange {
            background-color: #f39c12 !important;
            border-left: 4px #ff5e13 solid;
        }
    </style>

</head>

<body>

<?php ui_print_menubar(); ?>
<?php ui_print_jumbotron(); ?>

    <main role="main" class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h3>Важные даты</h3>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box bg-blue rounded datepadding">
                            <div class="inner">
                                <h3> <?php echo $date_registration; ?> </h3>
                                <p>Крайний срок регистрации и загрузки проекта и сопровождающих документов для проведения членами жюри заочной экспертизы </p>
                            </div>
                            <div class="icon"><i class="fa fa-file-word" aria-hidden="true"></i></div>
                            <!--a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i>&nbsp;</a-->
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card-box bg-green rounded datepadding">
                            <div class="inner">
                                <h3> <?php echo $date_information; ?> </h3>
                                <p>Объявление результатов заочной экспертизы, формирование списка допущенных к очному выступлению проектов и участников </p>
                            </div>
                            <div class="icon"><i class="fa fa-list-ol" aria-hidden="true"></i></div>
                            <!--a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a-->
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card-box bg-orange rounded datepadding">
                            <div class="inner">
                                <h3> <?php echo $date_conference; ?> </h3>
                                <p> Дата проведения очного этапа конференции </p>
                            </div>
                            <div class="icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                            <!--a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a-->
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-8">

                <div class="row" style="padding-top: 0px;">
                    <div class="col-lg-4 text-center">
                        <img class="rounded-circle" src="images/img_ritm01_small.jpg" alt="Generic placeholder image" width="140" height="140">
                        <h2>Кто?</h2>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img class="rounded-circle" src="images/img_ritm03_small.jpg" alt="Generic placeholder image" width="140" height="140">
                        <h2>Зачем?</h2>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img class="rounded-circle" src="images/img_ritm02_small.jpg" alt="Generic placeholder image" width="140" height="140">
                        <h2>Этапы</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <p style="text-align: justify; text-indent: 20px;">Конференция направлена на привлечение молодёжи, заинтересованной в проведении научных исследований в различных областях науки и техники, желающих поделиться своими исследованиями.</p>
                    </div>
                    <div class="col-lg-4">
                        <p style="text-align: justify; text-indent: 20px;">Ты создал изобретательский или научно-исследовательский проект, сформулировал научную идею?</p>
                        <p style="text-align: justify; text-indent: 20px;">Представь результаты своего творчества и получи до 8 дополнительных баллов при поступлении в университеты России за победу в конференции!</p>
                    </div>
                    <div class="col-lg-4">
                        <p style="text-align: justify; text-indent: 20px;">Все работы проходят две стадии проверки: заочная экспертиза и защита.</p>
                        <p style="text-align: justify; text-indent: 20px;">Проекты участников оценивают ведущие преподаватели нашего вуза, а также представители предприятий города.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <p><a class="btn btn-secondary btn-block" href="#participants" role="button">Подробнее &raquo;</a></p>
                    </div>
                    <div class="col-lg-4">
                        <p><a class="btn btn-secondary btn-block" href="#profit" role="button">Подробнее &raquo;</a></p>
                    </div>
                    <div class="col-lg-4">
                        <p><a class="btn btn-secondary btn-block" href="#jury" role="button">Подробнее &raquo;</a></p>
                    </div>
                </div>

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row padding-lr20">

            <a name="participants"> </a>
            <div class="row">
                <div class="col-md-9">
                    <h2 class="featurette-heading">Наши участники</h2>
                    <p class="lead" style="text-align: justify; text-indent: 20px;">С 2020 года принять участие в мероприятии могут не только школьники, но и студенты средних специальных учебных заведений.</p>
                    <p class="lead" style="text-align: justify; text-indent: 20px;">В рамках конференции принимаются как индивидуальные, так и командные работы. Каждый участник имеет право представить на Конференцию не более двух работ, в которых он является автором или соавтором.</p>
                </div>
                <div class="col-md-3">
                    <img class="featurette-image img-fluid mx-auto" src="./images/img_ritm01.jpg" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <a name="profit"> </a>
            <div class="row">
                <div class="col-md-3">
                    <img class="featurette-image img-fluid mx-auto" src="images/img_ritm03.jpg" alt="Generic placeholder image">
                </div>
                <div class="col-md-9">
                    <h2 class="featurette-heading">Зачем участвовать?</h2>
                    <p class="lead" style="text-align: justify; text-indent: 20px;">Конференция - возможность продемонстрировать свой проект широкому кругу слушателей и получить оценку и рекомендации экспертов в выбранной области.</p>
                    <p class="lead" style="text-align: justify; text-indent: 20px;">Для старшеклассников и студентов ссузов - отличный способ заработать дополнительные баллы при поступлении в вузы России.</p>
                </div>
            </div>

            <a name="jury"> </a>
            <div class="row">
                <div class="col-md-9">
                    <h2 class="featurette-heading">Этапы участия</h2>
                    <p class="lead" style="text-align: justify; text-indent: 20px;">Конференция проходит в два этапа.</p>
                    <p class="lead" style="text-align: justify; text-indent: 20px;"><b>На первом этапе</b> жюри отбирает среди присланных в электронном виде проектов лучшие работы для представления на Конференции.</p>
                    <p class="lead" style="text-align: justify; text-indent: 20px;"><b>На втором этапе</b> проходит защита проектов по критериям, указанным в аннотациях соответствующих секций.</p>
                </div>
                <div class="col-md-3">
                    <img class="featurette-image img-fluid mx-auto" src="images/img_ritm02.jpg" alt="Generic placeholder image">
                </div>
            </div>

        </div>
    </main>

<?php
  print_login_dialog($enable_registration);
?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS and then other libs -->
    <script src="libs/jquery-3.3.1.min.js"                  type="text/javascript"></script>
    <script src="libs/popper-1.14.3.min.js"                 type="text/javascript"></script>
    <script src="libs/bootstrap-4.6.0/js/bootstrap.min.js"  type="text/javascript"></script>
    <script src="libs/md5.js"                               type="text/javascript"></script>

    <script type="text/javascript">
        $(function() {

            $(document).keypress(function(e) {
                if ($("#myModal").hasClass('in') && (e.keycode == 13 || e.which == 13)) {
                  $('#btn-login-user').click();
                }
            });

            $("#btn-login-user").click(function(event) {
                $.ajax({
                    type : 'POST',
                    url  : 'ajax/login.php',
                    data : {
                        login           : $('#login').val(),
                        password        : md5($('#password').val()),
                    },
                    beforeSend: function() {
                        $("#message").html('<div class="alert alert-primary">Отправляем данные на сервер.</div>');
                    },
                    success : function(data) {
                        if(data == "ok") {
                            $("#message").html('<p><div class="alert alert-primary">Отправляем данные на сервер.</div></p> <p><div class="alert alert-success">Пользователь найден. Заходим.</div></p>');
                            setTimeout(function(){
                                window.location.replace("./home.php");
                            }, 3000);
                        } else {
                            $("#message").html('<p><div class="alert alert-primary">Отправляем данные на сервер.</div></p><p><div class="alert alert-danger">Пользователь с таким логином или паролем не найден.</div></p>');
                            setTimeout(function(){
                                window.location.replace("#");
                            }, 3000);
                        }
                    },
                    error : function(data) {
                        $("#message").html('<p><div class="alert alert-primary">Отправляем данные на сервер.</div></p><p><div class="alert alert-warning">От сервера пришло сообщение об ошибке: [' + data + '].</div></p>');
                        setTimeout(function(){
                            window.location.replace("#");
                        }, 5000);
                    }
                });
            });     //$("#btn-login-user").click

        });
    </script>


</body>

</html>
