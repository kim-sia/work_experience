<!doctype html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
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
            margin-top: 171px;
            float: left;
            margin-right: 126px;
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
            margin-top: 3px;
            float: left;
            margin-right: 53px;
        }
        .company_contents_title{
            height: 48px;
            font-family: Montserrat;
            font-size: 20px;
            font-weight: normal;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.2;
            letter-spacing: normal;
            text-align: left;
            color: #8994ae;
            padding-top: 109px;
            padding-left: 139px;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('#roadmap_btn').click(function () {
                $('#roadmap_btn').children('.company_num').css('color','white')
                $('#roadmap_btn').children('.company_title').css('color','white')
                $('#ci_symbol_btn').children('.company_num').css('color','#5b5d6e')
                $('#ci_symbol_btn').children('.company_title').css('color','#5b5d6e')
                $('#partner_btn').children('.company_num').css('color','#5b5d6e')
                $('#partner_btn').children('.company_title').css('color','#5b5d6e')
                $("#roadmap").show()
                $("#ci_symbol").hide()
                $("#partner").hide()
            })
            $('#ci_symbol_btn').click(function () {
                $('#roadmap_btn').children('.company_num').css('color','#5b5d6e')
                $('#roadmap_btn').children('.company_title').css('color','#5b5d6e')
                $('#ci_symbol_btn').children('.company_num').css('color','white')
                $('#ci_symbol_btn').children('.company_title').css('color','white')
                $('#partner_btn').children('.company_num').css('color','#5b5d6e')
                $('#partner_btn').children('.company_title').css('color','#5b5d6e')
                $("#roadmap").hide()
                $("#ci_symbol").show()
                $("#partner").hide()
            })
            $('#partner_btn').click(function () {
                $('#roadmap_btn').children('.company_num').css('color','#5b5d6e')
                $('#roadmap_btn').children('.company_title').css('color','#5b5d6e')
                $('#ci_symbol_btn').children('.company_num').css('color','#5b5d6e')
                $('#ci_symbol_btn').children('.company_title').css('color','#5b5d6e')
                $('#partner_btn').children('.company_num').css('color','white')
                $('#partner_btn').children('.company_title').css('color','white')
                $("#roadmap").hide()
                $("#ci_symbol").hide()
                $("#partner").show()
            })
        })
    </script>
</head>
<body>

<div style="width: 1143px; height: 345px; background-image: url(../../../bk_company.png);">
    <div style="width: 55px; height: 7px; background-color: #00d5a1; border-radius: 20px;margin-bottom: 21px; float: left"></div>
    <h1 class="font-weight-bold text-left white-text h1" style="float: left; clear: both">Company</h1>

    <button style="border: none; background: none" id = "roadmap_btn">
        <div class = company_num style="color: #ffffff;">01</div>
        <div class = company_title style="color: #ffffff; clear: both">Road Map</div>
    </button>
    <button style="border: none; background: none" id="ci_symbol_btn">
        <div class = company_num>02</div>
        <div class = company_title style="clear: both">CI&Symbol</div>
    </button>
    <button style="border: none; background: none" id="partner_btn">
        <div class = company_num>03</div>
        <div class = company_title style="clear:both">Partner</div>
    </button>
</div>

<p class = company_contents_title>COMUNICATION<br>& DESIGN</p>
<div id="roadmap">
    <img style="clear: both; float: left; margin-top: 103.6px"  src="../../../company_ani_book_img.png">
    <img style="clear: both; float: left; margin-top: -174.4px;" src="../../../company_img.png">
    <?php include("Company_RoadMap.php"); ?>
</div>
<div id = "ci_symbol">
</div>
<div id = "partner"></div>
</body>
</html>