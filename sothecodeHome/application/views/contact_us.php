<!doctype html>
<html>
<head>
    <style>
        .clearFix{content: ""; display: block; clear:both; }
    </style>
</head>
<body>
<?php
try{
    $pdo = new PDO("mysql:"."host=localhost;"."dbname=sothecodehome",'root', '123456', array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $pdo->prepare("SELECT * FROM contact_info WHERE EMAIL_NO=:email_no");
    $query->bindValue(":email_no", "1");
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);

    $address = $row['COP_ADDRESS'];
    $phone = $row['COP_PHONE'];
    $receive_address = $row['RECEIVE_EMAIL_ID'];
}
catch(Exception $e){
    echo $e->getMessage(); //에러 출력
}?>

<form action="../../../contact_us2.php" method="post">
<div class="clearFix" style="width: 100%; margin:0 auto;">
    <div style="float:left; width:321px; height:479px;background-color: #3c4ccb;">
        <dl>
            <dt>
                Contact Information
            </dt>
            <dd>
                <img src="../../../contact_icon_3.png">
                <?php echo("$address")?>
            </dd>
            <dd>
                <img src="../../../contact_icon_2.png">
                <?php echo("$phone")?>
            </dd>
            <dd>
                <img src="../../../contact_icon_1.png">
                <?php echo("$receive_address")?>
            </dd>
        </dl>
        <p>
            <span><img src="../../../contact_logo_youtube.png"></span>
        </p>
    </div>
    <div style="float: right; width:437px; height:479px; background-color: white">
        <table>
            <tr>
                <td colspan="2">Send us a Message</td>
            </tr>
            <tr>
                <td>
                    <label for="name">Your name</label>
                    <input type="text" name = "name" placeholder="Moon Giryang">
                </td>
                <td>
                    <label for="Company">Company</label>
                    <input type = "text" name = "company" placeholder="SO THE CODE">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email Address</label>
                    <input type="email" name = "email_address" placeholder="lian.moon@sothecode.com">
                </td>
                <td>
                    <label for="phone">phone</label>
                    <input type="tel" name = "phone" placeholder="010-7393-1581">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="message">Message</label>
                    <input type="text" style="width:462px; height: 80px" name = "message" placeholder="메세지를 입력할 수 있습니다. 할 말이 없어도 보내세요.">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right;">
                    <input type="image" src="../../../contact_btn_send.png" name="Submit" value="Sumbmit">
                </td>
            </tr>
        </table>
    </div>
</div>
</form>
</body>
</html>