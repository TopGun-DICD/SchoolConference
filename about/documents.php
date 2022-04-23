<!doctype html>
<html lang="ru">

<?php
    define('__SITE_BASE__', '../');
    require_once(__SITE_BASE__ . 'php/ui.php');
    require_once(__SITE_BASE__ . 'php/config.php');
    require_once(__SITE_BASE__ . 'php/dialogs.php');
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Normal browsers -->
    <link rel="icon" sizes="16x16"      href="../images/favicons/icon_16x16.png"   type="image/png">
    <link rel="icon" sizes="32x32"      href="../images/favicons/icon_32x32.png"   type="image/png">
    <link rel="icon" sizes="96x96"      href="../images/favicons/icon_96x96.png"   type="image/png">
    <link rel="icon" sizes="120x120"    href="../images/favicons/icon_120x120.png" type="image/png">
    <link rel="icon" sizes="192x192"    href="../images/favicons/icon_192x192.png" type="image/png">
    <link rel="icon" sizes="512x512"    href="../images/favicons/icon_512x512.png" type="image/png">

    <!-- Apple Safari -->
    <link rel="apple-touch-icon" sizes="16x16"   href="../images/favicons/icon_16x16.png"   type="image/png">
    <link rel="apple-touch-icon" sizes="32x32"   href="../images/favicons/icon_32x32.png"   type="image/png">
    <link rel="apple-touch-icon" sizes="96x96"   href="../images/favicons/icon_96x96.png"   type="image/png">
    <link rel="apple-touch-icon" sizes="120x120" href="../images/favicons/icon_120x120.png" type="image/png">
    <link rel="apple-touch-icon" sizes="192x192" href="../images/favicons/icon_192x192.png" type="image/png">
    <link rel="apple-touch-icon" sizes="512x512" href="../images/favicons/icon_512x512.png" type="image/png">

    <!-- Android Chrome -->
    <link rel="manifest" href="img/icons/tu-miet.webmanifest">

    <!-- Windows 8 and 10 -->
    <!--link rel="manifest" href="browserconfig.xml"-->

    <link href="../libs/bootstrap-4.6.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../libs/fontawesome-5.0.9/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">

    <title>Творчество юных-2022 : Документы</title>

    <link href="../main.css" rel="stylesheet" type="text/css">

    <style>
    </style>
</head>

<body>

<?php ui_print_menubar(); ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo __SITE_BASE__;?>index.php">Главная</a></li>
            <li class="breadcrumb-item active">О конференции</li>
            <li class="breadcrumb-item active" aria-current="page">Документы</li>
        </ol>
    </nav>

    <main role="main" class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <h2>Документы конференции "Творчество юных"</h2>
                <hr/>
                <p>Вы можете ознакомиться с <a href="docs/Polozhenie.pdf" target="_blank"><img src="../images/file_icons/pdf.png"> положением</a> и <a href="docs/Reglament.pdf" target="_blank"><img src="../images/file_icons/pdf.png"> регламентом проведения</a> конференции.</p>
                <p>Научно-практическая конференция "Творчество юных" позволяет представить работы по основным направлениям научных исследований и направлений образовательной деятельности, реализуемым в нашем вузе (для того, чтобы посмотреть аннотацию секции, кликните по соответствующему названию):</p>
                <ul>
                    <li><a href="docs/annotations/annotation_math_economics.pdf" target="_blank">       <img src="../images/file_icons/pdf.png"> Математика и экономика</a>
                    <li><a href="docs/annotations/annotation_physics.pdf" target="_blank">              <img src="../images/file_icons/pdf.png"> Физика</a>
                    <li><a href="docs/annotations/annotation_it_and_programming.pdf" target="_blank">   <img src="../images/file_icons/pdf.png"> Информационные технологии и программирование</a>
                    <li><a href="docs/annotations/annotation_electronics.pdf" target="_blank">          <img src="../images/file_icons/pdf.png"> Электроника и микроэлектроника</a>
                    <li><a href="docs/annotations/annotation_future_technologies.pdf" target="_blank">  <img src="../images/file_icons/pdf.png"> Цифровые технологии будущего</a>
                    <li><a href="docs/annotations/annotation_smart_city.pdf" target="_blank">           <img src="../images/file_icons/pdf.png"> Умный город</a>
                    <li><a href="docs/annotations/annotation_medicine.pdf" target="_blank">             <img src="../images/file_icons/pdf.png"> Медицина и здоровьесберегающие технологии</a>
                    <li><a href="docs/annotations/annotation_chemistry.pdf" target="_blank">            <img src="../images/file_icons/pdf.png"> Химия</a>
                    <li><a href="docs/annotations/annotation_ecology.pdf" target="_blank">              <img src="../images/file_icons/pdf.png"> Экология</a>
                    <li><a href="docs/annotations/annotation_design.pdf" target="_blank">               <img src="../images/file_icons/pdf.png"> Компьютерная графика и дизайн</a>
                    <li><a href="docs/annotations/annotation_linguistics.pdf" target="_blank">          <img src="../images/file_icons/pdf.png"> Лингвистика</a>
                    <li><a href="docs/annotations/annotation_construction.pdf" target="_blank">         <img src="../images/file_icons/pdf.png"> Робототехника, конструирование и технология электронных средств</a>
                </ul>
            </div>
        </div>
    </main>

<?php
  print_login_dialog($enable_registration);
?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS and then other libs -->
    <script src="../libs/jquery-3.3.1.min.js"                  type="text/javascript"></script>
    <script src="../libs/popper-1.14.3.min.js"                 type="text/javascript"></script>
    <script src="../libs/bootstrap-4.6.0/js/bootstrap.min.js"  type="text/javascript"></script>
    <script src="../libs/md5.js"                               type="text/javascript"></script>

    <script type="text/javascript">
        $(function() {

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
                            $("#message").html('<p><div class="alert alert-primary">Отправляем данные на сервер.</div></p><p><div class="alert alert-danger">Пользователь с таким логином не найден.</div></p>');
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
            });


        });
    </script>
</body>
</html>

