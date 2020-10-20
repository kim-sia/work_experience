<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Required meta tags always come first  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap Template</title>
    <!--  Font Awesome  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../../../css/bootstrap.min.css?after" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../../../css/mdb.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Custom styles -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,600,800');
        html,
        body,
        header,
        .jarallax {
            height: 91px;
        }

        @media (max-width: 740px) {
            html,
            body,
            header,
            .jarallax {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .jarallax {
                height: 100vh;
            }
        }

        @media (min-width: 560px) and (max-width: 650px) {
            header .jarallax h1 {
                margin-bottom: 1.5rem !important;
            }
            header .jarallax h5 {
                margin-bottom: 1.5rem !important;
            }
        }

        .top-nav-collapse {
            background-color: #ffffff!important;
        }
        .top-nav-collapse #navbarSupportedContent-7 li a{
            color:#190d47 !important;
        }
        .navbar:not(.top-nav-collapse) {
            background: #5165ff!important;
            height: 91px;
        }
        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5!important;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5!important;
            }
        }
        h5 {
            letter-spacing: 3px;
        }
        .navbar{
            -webkit-box-shadow: none;
        }
        .sothecodeHome{
            width: 1140px!important;
            margin: auto;
        }

        .home_title{
            font-family: Montserrat;
            font-size: 38px;
            font-weight: 600;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.21;
            letter-spacing: normal;
            text-align: left;
            color: #ffffff;
            margin-top: 17.7px;
            margin-left: 141px;
            float: left;
            clear: both;
        }
        .home_hashtag{
            width: 74.2px;
            height: 31.1px;
            box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.2);
            background-color: #00d5a1;
            font-family: Montserrat;
            font-size: 16px;
            font-weight: 600;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.19;
            letter-spacing: normal;
            text-align: center;
            color: #ffffff;
            float: left;
            border-radius: 16px;
            padding-top: 6px;
            margin-right: 6.8px;
            margin-bottom: 6.9px;
        }
        .home_hashtag.medium{
            width: 95.3px;
        }
        .home_hashtag.large{
            width: 113.4px;
        }
        .img_front{
            width: 609px;
            height: 609px;
            left: 80px;
            top: 185px;
            z-index: 5;
            margin-bottom: 93.5px;
        }
        .img_back{
            width: 433px;
            height: 760px;
            left: -285px;
            top: 10px;
            z-index: 4;
            margin-bottom: 79px;
        }
        .view, .view .mask, .waves-effect{
            overflow: visible !important;
        }
        /*.mask{*/
        /*background-attachment:unset !important;*/
        /*}*/
        #About_big_Title{
            height: 42px;
            font-family: Montserrat;
            font-size: 35px;
            font-weight: 600;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.2;
            letter-spacing: normal;
            text-align: left;
            color: #282b43;
            margin-top: 18px;
            margin-left: 143px
        }
        .About_Title{
            height: 24px;
            object-fit: contain;
            font-family: Montserrat;
            font-size: 20px;
            font-weight: 300;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.2;
            letter-spacing: -1px;
            color: #190d47;
            margin-bottom: 31px;
        }
        .About_Contents{
            height: 85px;
            object-fit: contain;
            font-family: NotoSans;
            font-size: 14px;
            font-weight: 300;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.57;
            letter-spacing: -0.7px;
            color: #8994ae;
            padding-top: 31px;
        }
        .About_Table{
            width: 200px;
            height: 290px;
            margin-top: 94px;
            text-align: center;
            margin-right: 40px;
        }
        #Company_big_Title{
            height: 42px;
            object-fit: contain;
            font-family: Montserrat;
            font-size: 35px;
            font-weight: 600;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.2;
            letter-spacing: normal;
            text-align: left;
            margin-left: 139px;
            float: left;
            clear: both
        }
        .company_num{
            height: 48px;
            object-fit: contain;
            font-family: Montserrat;
            font-size: 40px;
            font-weight: 600;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.2;
            letter-spacing: normal;
            text-align: left;
            color: #5b5d6e;
            float: left;
        }
        .company_title{
            height: 27px;
            object-fit: contain;
            font-family: Montserrat;
            font-size: 23px;
            font-weight: 600;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.17;
            letter-spacing: normal;
            text-align: left;
            color: #5b5d6e;
            padding-top: 3px;
            float: left;
        }
        #project_title{
            height: 48px;
            width: 146px;
            color: #282b43;
            margin-top: 17px;
            float: left;
            margin-left: 137px;
            object-fit: contain;
            font-family: Montserrat;
            font-size: 40px;
            font-weight: bold;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.2;
            letter-spacing: normal;
            text-align: left;
        }
        button.tab{
            width: 118.4px;
            height: 39.1px;
            border-radius: 20px;
            background-color: #ffffff;
            font-family: Montserrat;
            font-size: 20px;
            font-weight: normal;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.2;
            letter-spacing: normal;
            color: #d8dde9;
            margin-right: 29.3px;
            float: left;
            text-align: center;
            border-width: 1px;
            border-style: solid;
            border-color: #d8dde9;
            margin-top: 13.5px;
        }
        button.margin{
            margin-bottom: 23.9px
        }
        button.margin2{
            margin-bottom: 69.4px;
        }
        #objContent{
            width:100%; height:850px;
        }
        .card{
            width: 266px;
            height: 475px;
            background-color: #e7eaf2;
        }
        .card-img-top{
            height: 276px;
            background-color: white;
        }
        .modal-body{
            width: 856px;
            height: 569.1px;
            background-color: white;
            background-image: url("../../../pass_205.png");
            background-repeat: no-repeat;
            border-radius: 5px;
            box-shadow: 0 3px 20px 0 rgba(0, 0, 0, 0.24);
            margin-left: -175px;
        }
        #modal-year{
            width: 32px;
            height: 19px;
            font-family: NotoSans;
            font-size: 14px;
            font-weight: bold;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.36;
            letter-spacing: normal;
            text-align: center;
            margin-top: 46px;
            margin-left: 40.2px;
            float: left;
            color: white;
        }
        #modal-title{
            height: 34px;
            font-family: NotoSans;
            font-size: 25px;
            font-weight: bold;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.36;
            letter-spacing: normal;
            clear: both;
            margin-top: 6.9px;
            margin-left: 34.5px;
            float: left;
            color: white;
        }
        #modal-contents{
            width: 251.9px;
            height: 77.9px;
            object-fit: contain;
            font-family: NotoSansCJKkr;
            font-size: 14px;
            font-weight: 300;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.57;
            letter-spacing: -1.1px;
            text-align: left;
            color: #8994ae;
            clear: both;
            margin-left: 40.6px;
            margin-top: 90.9px;
            float: left;
        }
        .modal-small-img {
            width: 119.1px;
            height: 89.3px;
            background-color: #f1f9ff;
            float: left;
            margin-top: 11.9px;
            margin-right: 11.9px;
        }
        .carousel-multi-item .carousel-indicators li{
            background-color: #d8dde9;
            width: 13.7px;
            height: 13.7px;
        }
        .carousel-multi-item .carousel-indicators .active{
            background-color: #190d47;
            width: 13.7px;
            height: 13.7px;
        }
        #welcome{
            height: 48px;
            object-fit: contain;
            font-family: Montserrat;
            font-size: 40px;
            font-weight: bold;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.2;
            letter-spacing: normal;
            text-align: left;
            color: #282b43;
            margin-top: 9px;
            margin-left: 139px;
        }
        #welcome_contents{
            height: 45px;
            object-fit: contain;
            font-family: NotoSansCJKkr;
            font-size: 15px;
            font-weight: 300;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.53;
            letter-spacing: normal;
            text-align: left;
            color: #282b43;
            margin-top: 8px;
            margin-left: 139px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('.selectPage').click(function(){
                var idx = $(this).index();
                switch(idx){
                    case 0:
                        $('#objContent').attr('data','../../../stcH_company/company_rm.html')
                        break;
                    case 1:
                        $('#objContent').attr('data','../../../stcH_company/company_ci.html')
                        break;
                    case 2:
                        $('#objContent').attr('data','../../../stcH_company/company_pt.html')
                        break;
                    default:
                }

            })

            $.ajax({
                url : '/sothecodeHome/index.php/sothecodeHome/project',
                success:function(data){
                    console.log(data);
                    var json = jQuery.parseJSON(data);

                    //console.log(json[0].PROJECT_IMG)
                    for(var i=0; i<json.length; i++)
                    {
                        $('.col-md-4').eq(i).find('img').attr('src', '../../../' + json[i].PROJECT_IMG)
                        //data[i].PROJECT_TITLE
                    }
                },
                fail : function(err){

                }
            })

            $.ajax({
                url : '/sothecodeHome/index.php/sothecodeHome/contact',
                success:function(data){
                    console.log(data);
                },
                fail : function(err){

                }
            })

            $.ajax({
                url : '/sothecodeHome/index.php/sothecodeHome/youtube',
                success:function(data){
                    console.log(data);
                },
                fail : function(err){

                }
            })
        })
    </script>
</head>
<body>

<!-- Main Navigation -->
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container smooth-scroll">
            <a class="navbar-brand" href="#"><strong>MDB</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" data-offset="60">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#company" data-offset="60">Company</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pr" data-offset="60">PR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project" data-offset="60">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" data-offset="60">Contact</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
        </div>
    </nav>
</header>
<!-- Intro Section -->
<div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-color: #5165ff; height: 528px; ">
    <div class = "mask sothecodeHome">
            <img class = "wow fadeInLeft" src="../../../landing_symbol.png" style="margin-top: 127px; margin-left: 141px; float: left">
            <div class = "wow fadeInLeft home_title">We offer a new<br>experience design</div>
            <div class = "wow fadeInLeft home_hashtag" style="clear: both; margin-top: 34px; margin-left: 142px">#ICT</div>
            <div class = "wow fadeInLeft home_hashtag" style="margin-top: 34px;">#IoT</div>
            <div class = "wow fadeInLeft home_hashtag" style="margin-top: 34px;">#APP</div>
            <div class = "wow fadeInLeft home_hashtag" style="margin-top: 34px;">#WEB</div>
            <div class = "wow fadeInLeft home_hashtag medium" style="clear:both; margin-left: 142px">#Design</div>
            <div class = "wow fadeInLeft home_hashtag medium">#UX/UI</div>
            <div class = "wow fadeInLeft home_hashtag large">#Platform</div>
            <div class = "wow fadeInLeft home_hashtag large" style="clear: both; margin-left: 142px">#Contents</div>
            <div class = "wow fadeInLeft home_hashtag">#VR</div>
            <div class = "wow fadeInLeft home_hashtag">#HW</div>

        <div class="wow fadeInRight d-flex justify-content-center animated" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInRight; animation-delay: 0.3s">
            <img src="../../../landing_img_B.png" alt="" class="img-responsive img_front">
            <img src="../../../landing_img_A.png" alt="" class="img-responsive img_back">
        </div>
    </div>
    </div>
</div>

<div style="position: relative; background-image: url(../../../about_bk_wave.png); background-repeat: repeat-x; background-position: center; width: 100%; height: 240px; margin-top:-192px; z-index: 2"></div>

<div id = "about" class = "wow fadeIn" data-wow-delay="0.3s" style="background-color: #f7f9fc; height: 900px; margin-top: -197px">
    <div class = "sothecodeHome" style="padding-top: 280px">
        <div style="width: 55px; height: 7px; border-radius: 20px; background-color: #00d5a1; margin-left: 141px;"></div>
        <div class="text-left" id = "About_big_Title">About SOTHECODE</div>

        <!-- Grid row -->
        <div class = "row">
            <div class = About_Table style="margin-left: 145px">
                <img style="width: 98.5px; height: 99.3px;" src="../../../about_IoT_img.png" alt="IoT">
                <div class = About_Title style="padding-top: 45.7px">IoT</div>
                <div class = About_Contents>IoT Device HW/SW 개발</br>무선프로토콜(WiFi, BT, LPWA) 개발</br>영상 기술(VR, 3D 영상 인식) 개발</div>
            </div>

            <div class = About_Table>
                <img  style="width: 99.5px; height: 76.2px; margin-top: 12px" src="../../../about_app_img.png" alt="App & web">
                <div class = About_Title style="padding-top: 56.8px;">App & web</div>
                <div class = About_Contents>OS/AOS App 개발</br>O2O 플랫폼 개발 및 운영</br>Web 개발</div>
            </div>

            <div class= About_Table>
                <img style="width: 98.7px; height: 92.5px; margin-top: 3px" src="../../../about_contents_img.png" alt="Contents Design">
                <div class = About_Title style="padding-top: 49.5px">Contents Design</div>
                <div class = About_Contents>UX/UI 디자인, 퍼블리싱</br>캐릭터 및 콘텐츠 디자인</br>영상편집</div>
            </div>
            <div class = About_Table>
                <img style="width: 84.8px; height: 100.5px; margin-top: 1px" src="../../../about_global_img.png" alt="Global Marketing">
                <div class = About_Title style="padding-top: 45.6px;">Global Marketing</div>
                <div class = About_Contents>제품 마케팅,</br>수입/유통/판매</br>제품 기획, 시장조사</div>
            </div>
        </div>
    </div>
</div>

<div id = "company" class = "wow fadeIn" data-wow-delay="0.3s">
    <div style="background-image: url(../../../bk_company_img.png); width: 100%; background-size: cover; height: 345px;">
        <div class = rgba-stylish-light style="height: 345px; background-color: #282b43; opacity: 0.8">

        <div class = "sothecodeHome" style="height: 345px">
        <div style="width: 55px; height: 7px; background-color: #00d5a1; border-radius: 20px; margin-top: 178px; margin-left: 139px; margin-bottom: 21px; float: left"></div>
        <div class="text-left white-text" id = "Company_big_Title">Company</div>

            <ul style="list-style: none">
                <li class="selectPage" style="margin-left: 263px; height: 100px; width: 130px; float: left">
                    <div class = company_num style="color: #ffffff;">01</div>
                    <div class = company_title style="color: #ffffff; clear: both;">Road Map</div></li>
                <li class="selectPage" style="margin-left: 53px; height: 100px; width: 130px; float: left">
                    <div class = company_num>02</div>
                    <div class = company_title style="clear: both">CI&Symbol</div>
                </li>
                <li class="selectPage" style="margin-left: 53px; height: 100px; width: 130px; float: left">
                    <div class = company_num style="margin-right: 0">03</div>
                    <div class = company_title style="clear:both; margin-right: 0">Partner</div>
                </li>
            </ul>
        </div>
    </div>
    </div>


    <div style="background-color: #f7f9fc; width: 100%; height: 1300px;">
        <div class = "sothecodeHome">
            <object id="objContent" data="../../../stcH_company/company_rm.html" type=""></object>
        </div>
    </div>
</div>



<div id = "pr" class = "wow fadeIn" data-wow-delay="0.3s">
    <div style="background-color: #eff1f8; width: 100%; height: 664px;">
        <div class = "sothecodeHome">
            <img src="../../../pr_img_1@3x.png" style="width: 858px; height: 453px; margin-top: -247px; margin-left: 141px">
            <img src = "../../../pr_img_1_btn_play.png" style="width: 70px; height: 70px;margin-left: -464px; margin-top: -250px">
            <img src="../../../pr_img_2.png" style="width: 414px; height: 241px; margin-top: 34px; margin-left: 141px; margin-right: 29px; border: #d8dde9 2px solid">
            <img src = "../../../pr_img_2_btn_play.png" style="width: 63px; height: 63px; margin-left: -273px; margin-top: 35px">
            <img src="../../../pr_img_3.png" style="width: 414px; height: 241px; margin-top: 34px;margin-left: 204px; border: #d8dde9 2px solid">
            <img src = "../../../pr_img_2_btn_play.png" style="width: 63px; height: 63px; margin-top: 33px; margin-left: -243px">
        </div>
    </div>
</div>




<div id = "project" class = "wow fadeIn" data-wow-delay="0.3s">
    <div style="background-color: #f7f9fc; width: 100%; height: 1500px;">
        <div class = "sothecodeHome" style="padding-top: 117px">
            <div style="width: 55px; height: 7px; border-radius: 20px; background-color: #00d5a1;  margin-left: 140px"></div>
            <div class="text-left" id = project_title>Project</div>

            <button class = "tab margin" style="margin-left: 153.6px;">IoT</button>
            <button class = "tab margin">APP</button>
            <button class = "tab margin">WEB</button>
            <button class = "tab margin">Platform</button>
            <button class = "tab margin2" style="clear: both; margin-left: 436.6px;">Design</button>
            <button class = "tab margin2">Contents</button>
            <button class = "tab margin2">H/W</button>
            <button class = "tab margin2">Etc</button>

            <!-- Modal -->
            <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"; style="margin-left: 190px; background-color: transparent!important; margin-top: 100px">X</button>
                    <div class="modal-content">
                        <div class="modal-body">
                            <div id = "modal-year"></div>
                            <div id = "modal-title"></div>
                            <div style="width: 68px; height: 3px; background-color: white; margin-left: 40px; margin-top: 30px; clear:both; float: left"></div>
                            <div id = "modal-contents"></div>
                            <img id = "modal-small-img" class = "modal-small-img" style="clear: both; margin-left: 7.1px; margin-top: 31.3px" src="">
                            <div class = "modal-small-img" style="margin-top: 31.3px"></div>
                            <div class = "modal-small-img" style="margin-top: 31.3px"></div>
                            <div class = "modal-small-img" style="clear: both; margin-left: 7.1px"></div>
                            <div class = "modal-small-img"></div>
                            <div class = "modal-small-img"></div>
                            <img id="modal-img" style="width: 404.8px; height: 488.2px; margin-top: 41.4px; margin-left: 11.9px" src="">
                        </div>
                    </div>
                </div>
            </div>

            <!--
            <script>
                $(document).ready(function(){
                    $('.big-img').click(function () {
                        var year = $(this).children('.card-body').children('.card-footer').text();
                        console.log(year);
                        document.getElementById('modal-year').innerHTML = year;

                        var title = $(this).children('.card-body').children('.card-title').text();
                        console.log(title);
                        document.getElementById('modal-title').innerHTML = title;

                        var contents = $(this).children('.card-body').children('.card-text').text();
                        console.log(contents);
                        document.getElementById('modal-contents').innerHTML = contents;
                    })
                });

            </script>
            -->

            <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel" style="clear: both;" data-interval="false">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-multi" data-slide-to="1"></li>
                    <li data-target="#carousel-example-multi" data-slide-to="2"></li>
                    <li data-target="#carousel-example-multi" data-slide-to="3"></li>
                    <li data-target="#carousel-example-multi" data-slide-to="4"></li>
                    <li data-target="#carousel-example-multi" data-slide-to="5"></li>
                </ol>
                <!--/.Indicators-->

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="" alt="">
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold"></h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card mb-2 big-img" data-toggle="modal" data-target="#basicExampleModal">
                                <img class="card-img-top" src="" alt="">
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold"></h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="" alt="">
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold"></h4>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (29).jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (30).jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (27).jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Controls-->
                <div class="controls-top">
                    <a class="btn-floating" href="#carousel-example-multi" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                    <a class="btn-floating" href="#carousel-example-multi" data-slide="next"><i class="fas fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

            </div>


            <!-- Map Section -->
            <iframe src="https://snazzymaps.com/embed/133598" width="1140px" height="559px" style="border:none; position: relative; z-index: 1"></iframe>
            <div style="width: 55px; height: 7px; background-color: #00d5a1; border-radius: 20px; margin-left: 139px; position: relative; z-index: 2; margin-top: -416px"></div>
            <div id = "welcome" style="position: relative; z-index: 2">Welcome!</div>
            <div id = "welcome_contents" style="position: relative; z-index: 2">소더코드는 소통과 신뢰를 바탕으로<br>성장해가는 기업입니다.</div>
            <!-- Map Section -->
        </div>
    </div>
</div>




<div id = "contact" class = "wow fadeIn" data-wow-delay="0.3s">
    <div style="background-color: #282b43; width: 100%; height: 621px;">
        <div class = "sothecodeHome">

        </div>
    </div>
</div>



<!-- JQuery -->
<script type="text/javascript" src="../../../js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../../../js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../../../js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../../../js/mdb.min.js"></script>
<script>
    $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i=0;i<1;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
        }
    });
</script>
<script>
    new WOW().init();

    // MDB Lightbox Init
    $(function () {
        $("#mdb-lightbox-ui").load("../mdb-addons/mdb-lightbox-ui.html");
    });
</script>
</body>
</html>
