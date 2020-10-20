<!doctype html>
<html>
<head>
    <!-- JQuery -->
    <script type="text/javascript" src="../../../js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../../../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../../../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../../../js/mdb.min.js"></script>
    <style>
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
        }
        #modal-contents{
            width: 251.9px;
            height: 61.9px;
            font-family: NotoSans;
            font-size: 15px;
            font-weight: 300;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.33;
            letter-spacing: normal;
            text-align: left;
            color: #2699fb;
            clear: both;
            margin-left: 40.6px;
            margin-top: 106px;
            float: left;
        }
        .modal-small-img{
            width: 119.1px;
            height: 89.3px;
            background-color: #f1f9ff;
            float: left;
            margin-top: 11.9px;
            margin-right: 11.9px;
    </style>
    <?php
    try{
        $pdo = new PDO("mysql:"."host=localhost;"."dbname=sothecodehome",'root', '123456', array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $pdo->prepare("SELECT * FROM project_info WHERE PROJECT_NO=:project_no");

        $query->bindValue(":project_no", "1");
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);

        $title1 = $row['PROJECT_TITLE'];
        $contents1 = $row['PROJECT_CONTENTS'];
        $year1 = $row['PROJECT_YEAR'];
        $img1 = $row['PROJECT_IMG'];

        $query->bindValue(":project_no", "2");
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);

        $title2 = $row['PROJECT_TITLE'];
        $contents2 = $row['PROJECT_CONTENTS'];
        $year2 = $row['PROJECT_YEAR'];
        $img2 = $row['PROJECT_IMG'];
    }
    catch(Exception $e){
        echo $e->getMessage(); //에러 출력
    }?>
</head>
<body>
<div style="width: 55px; height: 7px; border-radius: 20px; background-color: #00d5a1; margin-left: 140px"></div>
<h1 class="font-weight-bold text-left h1" style="height: 48px; width: 146px;color: #282b43; padding-top: 17px; float: left; margin-left: 137px">Project</h1>

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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <div class="modal-content">
            <div class="modal-body">
                <div id = "modal-year"></div>
                <div id = "modal-title"></div>
                <div id = "modal-contents"></div>
                <img id = "modal-small-img" class = "modal-small-img" style="clear: both; margin-left: 7.1px; margin-top: 31.3px" src="">
                <div class = "modal-small-img" style="margin-top: 31.3px"></div>
                <div class = "modal-small-img" style="margin-top: 31.3px"></div>
                <div class = "modal-small-img" style="clear: both; margin-left: 7.1px"></div>
                <div class = "modal-small-img"></div>
                <div class = "modal-small-img"></div>
                <img id="modal-img" style="width: 404.8px; height: 488.2px; margin-top: 40.4px; margin-left: 11.9px" src="">
            </div>
        </div>
    </div>
</div>
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

<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false">

    <!--Indicators-->
    <ol class="carousel-indicators">
        <li class="primary-color" data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
        <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>
    </ol>
    <!--Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox" style="height: 596px">

            <!--First slide-->
            <div class="carousel-item active">

                <div class="col-md-4">


                    <!--Card-->
                    <div class="card card-cascade narrower card-ecommerce big-img" data-toggle="modal" data-target="#basicExampleModal">

                        <!--Card image-->
                            <img src="../../../<?php echo $img1; ?>" class="card-img-top " alt="">
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body card-body-cascade text-center no-padding">
                            <!--Title-->
                            <h4 class="card-title">
                                    <?php echo $title1;?>
                            </h4>

                            <!--Description-->
                            <p class="card-text"><?php echo $contents1;?>
                            </p>

                            <!--Card footer-->
                            <div class="card-footer">
                                <span class="float-left"><?php echo $year1; ?></span>
                            </div>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>

                <div class="col-md-4 clearfix d-none d-sm-block">

                    <!--Card-->
                    <div class="card card-cascade narrower card-ecommerce big-img"data-toggle="modal" data-target="#basicExampleModal">

                        <!--Card image-->
                        <div class="view view-cascade overlay">
                            <img src="../../../<?php echo $img2; ?>" class="card-img-top" alt="">
                        </div>

                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body card-body-cascade text-center no-padding">
                            <!--Category & Title-->
                            <a href="" class="text-muted">
                                <h5></h5>
                            </a>
                            <h4 class="card-title">
                                <strong>
                                    <a href=""><?php echo $title2; ?></a>
                                </strong>
                            </h4>

                            <!--Description-->
                            <p class="card-text"><?php echo $contents2; ?>
                            </p>

                            <!--Card footer-->
                            <div class="card-footer">
                                <span class="float-left"><?php echo $year2; ?></span>
                                <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                            </div>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>

                <div class="col-md-4 clearfix d-none d-sm-block">

                    <!--Card-->
                    <div class="card card-cascade narrower card-ecommerce big-img" data-toggle="modal" data-target="#basicExampleModal">

                        <!--Card image-->
                        <div class="view view-cascade overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Others/img%20(31).jpg" class="card-img-top" alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body card-body-cascade text-center no-padding">
                            <!--Category & Title-->
                            <a href="" class="text-muted">
                                <h5>Shorts</h5>
                            </a>
                            <h4 class="card-title">
                                <strong>
                                    <a href="">Denim shorts</a>
                                </strong>
                            </h4>

                            <!--Description-->
                            <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                                non.
                            </p>

                            <!--Card footer-->
                            <div class="card-footer">
                                <span class="float-left">49$</span>
                                <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                            </div>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>

            </div>
            <!--First slide-->

            <!--Second slide-->
            <div class="carousel-item">

                <div class="col-md-4">

                    <!--Card-->
                    <div class="card card-cascade narrower card-ecommerce big-img" data-toggle="modal" data-target="#basicExampleModal">

                        <!--Card image-->
                        <div class="view view-cascade overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(30).jpg" class="card-img-top" alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body card-body-cascade text-center no-padding">
                            <!--Category & Title-->
                            <a href="" class="text-muted">
                                <h5>Accessories</h5>
                            </a>
                            <h4 class="card-title">
                                <strong>
                                    <a href="">Summer hat</a>
                                </strong>
                            </h4>

                            <!--Description-->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit. Nam incidunt eius est voluptatibus.
                            </p>

                            <!--Card footer-->
                            <div class="card-footer">
                                <span class="float-left">39$</span>
                                <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                            </div>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>

                <div class="col-md-4 clearfix d-none d-sm-block">

                    <!--Card-->
                    <div class="card card-cascade narrower card-ecommerce">

                        <!--Card image-->
                        <div class="view view-cascade overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(37).jpg" class="card-img-top" alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body card-body-cascade text-center no-padding">
                            <!--Category & Title-->
                            <a href="" class="text-muted">
                                <h5>Shoes</h5>
                            </a>
                            <h4 class="card-title">
                                <strong>
                                    <a href="">Black heels</a>
                                </strong>
                            </h4>

                            <!--Description-->
                            <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                                non.
                            </p>

                            <!--Card footer-->
                            <div class="card-footer">
                                <span class="float-left">79$</span>
                                <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                            </div>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>

                <div class="col-md-4 clearfix d-none d-sm-block">

                    <!--Card-->
                    <div class="card card-cascade narrower card-ecommerce">

                        <!--Card image-->
                        <div class="view view-cascade overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(31).jpg" class="card-img-top" alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body card-body-cascade text-center no-padding">
                            <!--Category & Title-->
                            <a href="" class="text-muted">
                                <h5>Outerwear</h5>
                            </a>
                            <h4 class="card-title">
                                <strong>
                                    <a href="">Black jacket</a>
                                </strong>
                            </h4>

                            <!--Description-->
                            <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.
                            </p>

                            <!--Card footer-->
                            <div class="card-footer">
                                <span class="float-left">149$</span>
                                <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                            </div>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>

            </div>
            <!--Second slide-->

            <!--Third slide-->
            <div class="carousel-item">

                <div class="col-md-4">

                    <!--Card-->
                    <div class="card card-cascade narrower card-ecommerce">

                        <!--Card image-->
                        <div class="view view-cascade overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(38).jpg" class="card-img-top" alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body card-body-cascade text-center no-padding">
                            <!--Category & Title-->
                            <a href="" class="text-muted">
                                <h5>Accessories</h5>
                            </a>
                            <h4 class="card-title">
                                <strong>
                                    <a href="">Leather bag</a>
                                </strong>
                            </h4>

                            <!--Description-->
                            <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                                non.
                            </p>

                            <!--Card footer-->
                            <div class="card-footer">
                                <span class="float-left">29$</span>
                                <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                            </div>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>

                <div class="col-md-4 clearfix d-none d-sm-block">

                    <!--Card-->
                    <div class="card card-cascade narrower card-ecommerce">

                        <!--Card image-->
                        <div class="view view-cascade overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/belt.jpg" class="card-img-top" alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body card-body-cascade text-center no-padding">
                            <!--Category & Title-->
                            <a href="" class="text-muted">
                                <h5>Accessories</h5>
                            </a>
                            <h4 class="card-title">
                                <strong>
                                    <a href="">Leather belt</a>
                                </strong>
                            </h4>

                            <!--Description-->
                            <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.
                            </p>

                            <!--Card footer-->
                            <div class="card-footer">
                                <span class="float-left">89$</span>
                                <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                            </div>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>

                <div class="col-md-4 clearfix d-none d-sm-block">

                    <!--Card-->
                    <div class="card card-cascade narrower card-ecommerce">

                        <!--Card image-->
                        <div class="view view-cascade overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(57).jpg" class="card-img-top" alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body card-body-cascade text-center no-padding">
                            <!--Category & Title-->
                            <a href="" class="text-muted">
                                <h5>Shoes</h5>
                            </a>
                            <h4 class="card-title">
                                <strong>
                                    <a href="">Sneakers</a>
                                </strong>
                            </h4>

                            <!--Description-->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit. Nam incidunt eius est voluptatibus.
                            </p>

                            <!--Card footer-->
                            <div class="card-footer">
                                <span class="float-left">129$</span>
                                <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                            </div>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>

            </div>
            <!--Third slide-->

        </div>
        <!--Slides-->
    </div>
    <!--Carousel Wrapper-->
    <!--Controls-->
    <div class="controls-top">
        <a class="btn-floating primary-color" href="#multi-item-example" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="btn-floating primary-color" href="#multi-item-example" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </div>
    <!--Controls-->
</body>
</html>