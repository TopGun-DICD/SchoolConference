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
    <link rel="icon" sizes="16x16"      href="img/icons/icon_16x16.png"   type="image/png">
    <link rel="icon" sizes="32x32"      href="img/icons/icon_32x32.png"   type="image/png">
    <link rel="icon" sizes="96x96"      href="img/icons/icon_96x96.png"   type="image/png">
    <link rel="icon" sizes="120x120"    href="img/icons/icon_120x120.png" type="image/png">
    <link rel="icon" sizes="192x192"    href="img/icons/icon_192x192.png" type="image/png">
    <link rel="icon" sizes="512x512"    href="img/icons/icon_512x512.png" type="image/png">

    <!-- Apple Safari -->
    <link rel="apple-touch-icon" sizes="16x16"   href="img/icons/icon_16x16.png"   type="image/png">
    <link rel="apple-touch-icon" sizes="32x32"   href="img/icons/icon_32x32.png"   type="image/png">
    <link rel="apple-touch-icon" sizes="96x96"   href="img/icons/icon_96x96.png"   type="image/png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/icons/icon_120x120.png" type="image/png">
    <link rel="apple-touch-icon" sizes="192x192" href="img/icons/icon_192x192.png" type="image/png">
    <link rel="apple-touch-icon" sizes="512x512" href="img/icons/icon_512x512.png" type="image/png">

    <!-- Android Chrome -->
    <link rel="manifest" href="img/icons/tu-miet.webmanifest">

    <!-- Windows 8 and 10 -->
    <link rel="manifest" href="img/icons/browserconfig.xml">

    <link href="libs/bootstrap-4.6.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="libs/fontawesome-5.0.9/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">

    <link href="main.css" rel="stylesheet" type="text/css">

    <title>Творчество юных-2022 : Наши участники</title>

    <style>
        main {
            padding-top: 0px;
        }
        ul.a {
            list-style-type: none;
            line-height: 2;
        }
        html, body, #map {
            margin: 0;
            padding-top: 0px;
            height: 100%;
        }
        #map {
            height: 100%;
            width: 100%;
            margin: 0px;
            padding: 0px;
            left: 0px;
            position: absolute;
            background-color: aquamarine;
            top: -16px;
        }
    </style>
</head>
<body>

<?php ui_print_menubar(); ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">Карта участников</li>
        </ol>
    </nav>

    <main role="main" class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="map"></div>
            </div>

        </div>
    </main>

<?php
    print_login_dialog($enable_registration);
?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="libs/jquery-3.3.1.min.js"                  type="text/javascript"></script>
    <script src="libs/popper-1.14.3.min.js"                 type="text/javascript"></script>
    <script src="libs/bootstrap-4.6.0/js/bootstrap.min.js"  type="text/javascript"></script>
    <script src="libs/md5.js"                               type="text/javascript"></script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDorsY4MN9mghj05nSFtSGSgew74muMSeM&callback=initMap" async defer></script>

    <script type="text/javascript">

        var map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 55.9892001, lng: 37.1972206},
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true,
                zoomControl: true
            });

            var miet_marker = new google.maps.Marker({
                position: {lat: 55.9834794, lng: 37.2089046},
                icon: 'images/markers/miet_logo_32.png',
                title: "НИУ МИЭТ",
                info: new google.maps.InfoWindow({
                    content: 'Организатор конференции'
                }),
                map: map
            });

            let locations = [
<?php
/*    try {
        $stmt = $db_con->prepare("SELECT CITY_LAT, CITY_LON FROM USERS WHERE CITY_LAT<>''");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        //echo '                  ["Participant' . $stmt->rowCount() . '", ' . $row['city_lat'] . ', ' . $row['city_lon'] . '],';
        if(0 != $stmt->rowCount()) {
            $counter = 0;
            do {
                $counter = $counter + 1;
                echo '                  ["Participant' . $counter . '", ' . $row['CITY_LAT'] . ', ' . $row['CITY_LON'] . '],';
            } while ($row = $stmt->fetch(PDO::FETCH_ASSOC));
        }
    } catch(PDOException $e) {
        echo $e->getMessage();
    }*/
?>
            ];

            if(locations.length > 0)
            {
                let bounds = new google.maps.LatLngBounds();

                var markers = [];

                for (i = 0; i < locations.length; i++) {
                    let latlng = new google.maps.LatLng(locations[i][1], locations[i][2]);
                    bounds.extend(latlng);
                    marker = new google.maps.Marker({
                        position: latlng,
                        map: map
                    });
                      markers.push(marker);
                }

                var markerCluster = new MarkerClusterer(map, markers, {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});


                if (bounds.getNorthEast().equals(bounds.getSouthWest())) {
                    let extendPoint1 = new google.maps.LatLng(bounds.getNorthEast().lat() + 0.05, bounds.getNorthEast().lng() + 0.05);
                    let extendPoint2 = new google.maps.LatLng(bounds.getNorthEast().lat() - 0.05, bounds.getNorthEast().lng() - 0.05);
                    bounds.extend(extendPoint1);
                    bounds.extend(extendPoint2);
                }
                map.fitBounds(bounds);
            }
        }

        $(function() {

            var h = $(window).height();
            $("#map").css('height', h - 105);

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
            });


        });

        $(window).resize( function() {
            var h = $( window ).height();
            $("#map").css('height', h - 105);
        });


    </script>

</body>
</html>
