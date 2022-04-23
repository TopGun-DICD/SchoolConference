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

    <title>Творчество юных-2022 : Подготовка статей</title>

    <link href="../main.css" rel="stylesheet" type="text/css">

    <style>
        ul.a {
            list-style-type: none;
            line-height: 2;
        }
        .leftimg {
            float:left;             /* Выравнивание по левому краю  */
            margin: 7px 7px 7px 0;  /* Отступы вокруг картинки      */
        }
        .rightimg  {
            float: right;           /* Выравнивание по правому краю */
            margin: 7px 0 7px 7px;  /* Отступы вокруг картинки      */
        }
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
                <h4>Уважаемые участники и руководители проектов!</h4>
                <p>С 2021 года Национальный исследовательский университет МИЭТ предоставляет вам возможность опубликоваться в сборнике статей участников конференции "Творчество юных".</p>
                <p>По результатам конференции будет выпущен сборник трудов. В него войдут тексты статей работ, принявших участие в конференции. Сборник будет проиндексирован в системе Российского индекса научного цитирования (РИНЦ).</p>
                <p>Публикация в сборнике статей не является обязательной, по желанию участников.</p>
                <h4>Правила оформления статьи</h4>
                <hr/>
                <ol>
                    <li>Объем готовой работы должен быть не менее 5 страниц (включая список литературы).
                    <li>Статьи оформляются в редакторе Microsoft Word для Windows. Параметры оформления:
                    <ul>
                        <li>формат А4, книжная ориентация;</li>
                        <li>поля: верхнее - 2,0 см, нижнее - 11,7 см, левое - 1,9 см, правое - 8,1 см; для колонтитулов: верхний - 2,0 см, нижний - 10,7 см, поле страницы текста должно быть 11x16 см;</li>
                        <li>шрифт Times New Roman, размер – 10;</li>
                        <li>межстрочный интервал – одинарный;</li>
                        <li>выравнивание по ширине;</li>
                        <li>абзацный отступ 0,75 см.</li>
                    </ul>
                    <li>Через строку печатается название статьи строчными буквами с первой прописной, без переносов, жирным шрифтом.</li>
                    <li>Ниже через строку, курсивом, также по центру – фамилия, инициалы участника и руководителя.</li>
                    <li>На следующей строке – полное название организации и адрес электронной почты авторов с первой прописной, курсивом.</li>
                    <li>Оформление заголовка на английском языке: аналогичная русской информация повторяется на английском языке.</li>
                    <li>Аннотация на русском и английском языке не более 600 знаков (считая с пробелами) для аннотации на каждом языке.</li>
                    <li>Ключевые слова (приводятся на русском и английском языках) отделяются друг от друга точкой запятой.</li>
                    <li>Далее через строку – текст статьи.</li>
                    <li>Кегль формул должен соответствовать кеглю основного текста, все формулы выполняются в редакторе MathType 6.0.</li>
                    <li>Все рисунки и таблицы, должны быть пронумерованы и снабжены названиями или подрисуночными подписями. Ссылки на рисунки и таблицы обязательны. Рисунки должны быть хорошего качества. Подрисуночная подпись и текст внутри таблицы должны быть оформлены шрифтом Times New Roman, размер – 9.</li>
                    <li>После текста через одну строку – надпись «Используемые источники». После нее приводится список информационных источников со сквозной нумерацией. Ссылки в тексте на соответствующий источник из списка литературы оформляются в квадратных скобках, например: [7]. Использование автоматических постраничных ссылок не допускается. Полезная ссылка – <a href="http://snoskainfo.ru/" target="_blank">оформитель библиографических сносок.</a></li>
                    <li>Скачать <a href="docs/ArticleTemplate.docx"><img src="../images/file_icons/docx.png"> пример статьи</a>. Форматирование, добавление таблиц, рисунков, формул, списка литературы.</li>
                </ol>
                Ждем ваши статьи до <?php echo $date_article; ?> на адрес оргкомитета olimp@miee.ru с темой письма "Секция. Фамилия И.О."!
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

