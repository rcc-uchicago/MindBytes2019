<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Mind Bytes 2018 - Research Computing Expo and Symposium" />
    <meta name="keywords" content="mindbytes, mind bytes, research expo, rcc, uchi, uchicago, computation center, computation, hpc, hpcmatters, research, research computation center, research center, uchicago research, research uchicago" />
    <meta name="author" content="RCC" />
    <!-- Page Title -->
    <title>Poster Gallery 2017 | Mind Bytes 2018 - Research Computing Expo and Symposium</title>
    <!-- Favicon and Touch Icons -->
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />

    <!--
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png" />
	 -->
    <!-- Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/css-plugin-collections.css" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Theme Color -->
    <link href="css/theme/template.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script type="text/javascript" src="js/jquery-plugin-collection.js"></script>

    <!-- Social Sharing Plugin -->
    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=58ee69fa62683e0012c461fe&product=inline-share-buttons"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        function initialize_owl(el) {
            el.owlCarousel({
                autoplay: true,
                autoplayTimeout: 6000,
                loop: true,
                margin: 3,
                dots: true,
                nav: true,
                navText: [
                    '<i class="fa fa-chevron-left fa-2x"></i>',
                    '<i class="fa fa-chevron-right fa-2x"></i>'
                ],
                responsive: {
                    0: {
                        items: 1,
                        center: false
                    },
                    600: {
                        items: 2,
                        center: false
                    },
                    960: {
                        items: 2
                    },
                    1170: {
                        items: 3
                    },
                    1300: {
                        items: 3
                    }
                }
            });
        }

        function destroy_owl(el) {
            el.data('owlCarousel').destroy();
        }

        var bindPosters = function(sel) {
            $.ajax({
                type: "POST",
                url: "lib/getposters.php",
                data: {
                    "awardCategory": sel,
                    "year": "2017"
                },
                dataType: "json",
                async: false,
                cache: false
            }).done(function(data) {
                if ($('#divPosters').data('owlCarousel')) {
                    destroy_owl($('#divPosters'));
                }

                $("#divPosters").empty();
                if (data.length > 0) {
                    $.each(data, function(index, element) {
                        var htmlText = "";
                        var fileName = element.files_upload;
                        var isWinner = element.is_winner;
                        var award = element.award_winner_category;
                        var year = element.year;

                        htmlText += "<div class=\"item col-xs-12 col-sm-12 col-md-14\">";
                        htmlText += "<div class=\"thumbnail\">";

                        if (isWinner == "1") {
                            htmlText += "<span class=\"winner\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> " + award + "</span>";
                        }

                        htmlText += "<div class=\"poster-thumb\">";
                        htmlText += "<a rel=\"prettyPhoto[Posters]\" href='/" + year + "/posters/images/fullscreen/" + fileName.substring(0, fileName.length - 3) +
                            "jpg' class=\"thumbnail\" title='" + element.title_of_poster + "'><img class=\"img-fullwidth\" src='/" + year + "/posters/images/" + fileName.substring(0, fileName.length - 3) +
                            "jpg' alt='" + element.title_of_poster + "'></a></div>";

                        htmlText += "<div class=\"caption\">";
                        htmlText += "<p><b>#" + eval(index + 1) + "</b> " + element.title_of_poster + "</p>";

                        htmlText += '<p><a href=\"#\" class=\"btn btn-default popuplink\" data-toggle=\"modal\" data-target=\"#myModal0\" data-title="' + element.title_of_poster + '" data-body= "' + element.project_abstract + '" role=\"button\">Abstract</a>&nbsp;<a href="/' + year + '/posters/' + fileName + '" target=\"_blank\" class=\"btn btn-primary\" role=\"button\">View PDF</a></p>';
                        htmlText += "</div>";
                        htmlText += "</div>";
                        htmlText += "</div>";

                        $("#divPosters").append(htmlText);
                    });

                    $(".popuplink").on("click", function() {
                        //alert($(this).data("body"));
                        $("#modalTitle").html($(this).data("title"));
                        $("#modalBody").html($(this).data("body"));
                    });                    

                    initialize_owl($('#divPosters'));

                } else {
                    //destroy_owl($('#divPosters'));

                    $("#divPosters").append('<div class="row"><div class="col-sm-10 col-sm-offset-1 alert alert-warning"><strong>Info!</strong> There is no poster in this award category.</div></div>');
                }

            }).fail(function(jqXHR, textStatus, errorThrown) {
                alert(jqXHR.responseText.message + ': ' + errorThrown);
            }).always(function() {
                //alert("Complete!");                
            });
        };

        $(document).ready(function() {

            bindPosters("All");

            $("#ddlAwardCriteria").on('change', function() {
                var sel = this.value;
                bindPosters(sel);
            });

        });
    </script>
</head>

<body class="">
    <?php include_once("lib/analyticstracking.php") ?>
    <div id="wrapper">

        <!--HEADER-->
        <?php include('pageHeader.php'); ?>
        <!--HEADER END-->

        <!-- Start main-content -->
        <div class="main-content">
            <!-- Section: inner-header -->
            <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.5" data-bg-img="images/bg/bg11.jpg" style="background-image: url(" images/bg/bg11.jpg "); background-position: 50% 0px;">
                <div class="container pt-90 pb-0">
                </div>
            </section>

            <div class="container-fluid p-0">
                <!-- Section: home -->

                <section id="postergallery" class="divider bg-lighter">
                    <div class="divider parallax layer-overlay overlay-darkblue" data-stellar-background-ratio="0.5">
                        <div class="container pt-50 pb-50">
                            <div class="section-title">
                                <div class="row">
                                    <div class="col-md-9 col-md-offset-1 text-center">
                                        <h2 class="title text-white mb-0">MindBytes Poster Gallery 2017</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white-light">
                        <div class="container pt-30 pb-0">
                            <div class="section-content">
                                <form id="gallery_form" class="gallery_form" name="gallery_form" novalidate="novalidate">
                                    <div class="form-group">
                                        <label for="form_award_criteria">Award Criteria</label>
                                        <select id="ddlAwardCriteria" name="form_award_criteria" class="form_award_criteria">
                                                <option value="All">--- ALL ---</option>
                                                <option value="Visualization">Visualization</option>
                                                <option value="Scalability and Performance">Scalability and Performance</option>
                                                <option value="Big Data">Big Data</option>
                                                <option value="None">None</option>
                                            </select>
                                    </div>
                                </form>
                                <div class="row" id="divPosters">

                                </div>
                            </div>

                            <div class="modal fade" id="myModal0" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            <h4 class="modal-title" id="modalTitle"></h4>
                                        </div>
                                        <div class="modal-body">
                                            <p id="modalBody"></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- end main-content -->

        <!--FOOTER-->
        <?php include('pageFooter.php'); ?>
        <!--FOOTER END-->

        <a class="scrollToTop " href="# "><i class="fa fa-angle-up "></i></a>
    </div>
    <!-- end wrapper -->
    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="js/custom.js "></script>
    <!-- PAGE SCRIPT  -->
    <script type="text/javascript">

        $("ul.menuzord-menu li:nth-child(4)").addClass("active");

        $(document).ready(function () {
            $("a[rel^='prettyPhoto' ] ").prettyPhoto({
                show_title: false,
                social_tools: ''
                //allow_resize: false
            }); //, theme: 'facebook'
        });
    </script>
</body>

</html>