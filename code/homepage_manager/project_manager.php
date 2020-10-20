<!doctype html>
<html>
<head>
    <link href="../css/bootstrap.min.css?after" rel="stylesheet">
    <link href="../css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>
<?php
    try
    {
        $pdo = new PDO("mysql:"."host=localhost;"."dbname=sothecodehome",'root', '123456', array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $pdo->prepare("SELECT * FROM project_info");
        $query->execute();
        /*
        while ($row = $query->fetch(PDO::FETCH_ASSOC)){
            echo $row['PROJECT_NO'].'<br>';
            echo $row['PROJECT_KIND'].'<br>';
            echo $row['PROJECT_TITLE'].'<br>';
            echo $row['PROJECT_CONTENTS'].'<br>';
            echo $row['PROJECT_YEAR'].'<br>';
            echo $row['PROJECT_IMG'].'<br>';
            echo $row['PROJECT_IMG1'].'<br>';
            echo $row['PROJECT_IMG2'].'<br>';
            echo $row['PROJECT_IMG3'].'<br>';
            echo $row['PROJECT_IMG4'].'<br>';
            echo $row['PROJECT_IMG5'].'<br>';
            echo $row['PROJECT_IMG6'].'<br>';
        }*/

    }catch (Exception $e) {
        echo $e->getMessage(); //에러 출력
    }
?>
<script>
    $(document).ready(function(){
        $('.write_form').hide();

        $('#write').click(function(){
            $('.write_form').show();
        });

        $("#delete").click(function() {

            $("input[name=check]:checked").each(function() {

                var project_no = $(this).val();

                console.log(project_no);

                $.ajax({
                    url: 'manager_delete.php', // 요청 할 주소
                    type: "POST",
                    data: {check : project_no},
                    success: function(jqXHR) {
                        console.log("success");
                    }, // 요청 완료 시
                    error: function(jqXHR) {
                        console.log("fail");
                    } // 요청 실패.
                });


            });

        });
    });
</script>
<div id = "write" class="fas fa-pencil-alt" style="padding-top: 100px; padding-bottom: 50px; padding-left: 50%"></div>
<div class = write_form>
    <form action = manager_insert.php method = "post" enctype="multipart/form-data" style="text-align: center">
        <!--
        <select name="kind" id = "kind">
            <option value="IoT">IoT</option>
            <option value="APP">APP</option>
            <option value="WEB">WEB</option>
            <option value="Platform">Platform</option>s
            <option value="Design">Design</option>
            <option value="Contents">Contents</option>
            <option value="H/W">H/W</option>
            <option value="Etc">Etc</option>
        </select>-->

        <p>kind&nbsp&nbsp&nbsp<input type = "text" name = "kind" size = "20"></p>
        <p>title&nbsp&nbsp&nbsp<input type = "text" name = "title" size = "20"></p>
        <p>contents&nbsp&nbsp&nbsp<input type = "text" name = "contents" style="width: 185px; height: 185px"></p>
        <p>year&nbsp&nbsp&nbsp<input type = "text" name = "year" size = "10"></p>
        <p>첨부파일&nbsp&nbsp&nbsp<input type = "file" name = "image" size = "4"> </p>
        <p>첨부파일&nbsp&nbsp&nbsp<input type = "file" name = "image1" size = "4"> </p>
        <p><a title="Link"><input type = "submit" value = "작성하기" style="border: none; background-color: white"></a></p>
    </form>
</div>

<table class="table">
    <thead>
    <tr>
        <th scope="col"><div class="far fa-check-square"></div></th>
        <th scope="col">Kind</th>
        <th scope="col">Title</th>
        <th scope="col">Contents</th>
        <th scope="col">Year</th>
        <th scope="col">Image</th>
        <th scope="col">Image1</th>
        <th scope="col">Image2</th>
        <th scope="col">Image3</th>
        <th scope="col">Image4</th>
        <th scope="col">Image5</th>
        <th scope="col">Image6</th>

    </tr>
    </thead>
    <tbody>
    <?php while($row = $query->fetch(PDO::FETCH_ASSOC)){?>
    <tr>
        <th scope="row"><input type = "checkbox" name = "check" style = "opacity: 1; pointer-events: visible" value = "<?= $row['PROJECT_NO']?>"></th>
        <td><?= $row['PROJECT_KIND'] ?></td>
        <td><?= $row['PROJECT_TITLE'] ?></td>
        <td><?= $row['PROJECT_CONTENTS'] ?></td>
        <td><?= $row['PROJECT_YEAR'] ?></td>
        <td><?= $row['PROJECT_IMG'] ?></td>
        <td><?= $row['PROJECT_IMG1'] ?></td>
        <td><?= $row['PROJECT_IMG2'] ?></td>
        <td><?= $row['PROJECT_IMG3'] ?></td>
        <td><?= $row['PROJECT_IMG4'] ?></td>
        <td><?= $row['PROJECT_IMG5'] ?></td>
        <td><?= $row['PROJECT_IMG6'] ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
<a id="delete" href="manager_delete.php">삭제</a>
</body>
</html>
