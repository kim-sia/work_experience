<!doctype html>
<html>
<body>
<?php
//<head> <meta charset = "utf-8"> </head>
//include 'db.php';
header("Content-Type: text/html; charset=UTF-8");

$p_Kind = $_POST['kind'];
$p_Title = $_POST['title'];
$p_Contents = $_POST['contents'];
$p_Year = $_POST['year'];


$img_dir = $_SERVER['DOCUMENT_ROOT']; // 저장 디렉토리
$img_tmp = $_FILES['image']['tmp_name']; // 임시 파일명
$img_type = $_FILES['image']['type']; // 저장가능 이미지 타입
$img_name = $_FILES['image']['name']; // 파일명(ex: xxxx.jpg)

$img_dir1 = $_SERVER['DOCUMENT_ROOT']; // 저장 디렉토리
$img_tmp1 = $_FILES['image1']['tmp_name']; // 임시 파일명
$img_type1 = $_FILES['image1']['type']; // 저장가능 이미지 타입
$img_name1 = $_FILES['image1']['name']; // 파일명(ex: xxxx.jpg)


$filename = explode(".", $img_name); // 파일명 및 확장자를 분리한 배열
$extension = strtoupper($filename[sizeof($filename)-1]); // 확장자 추출

$filename1 = explode(".", $img_name1); // 파일명 및 확장자를 분리한 배열
$extension1 = strtoupper($filename1[sizeof($filename1)-1]); // 확장자 추출


// 기존의 파일과 이름이 같은 경우 filename 을 2_filename과 같이 rename
$now_count = 0;
$echo_now_count = "";
$original_file_name = $img_name;

$now_count1 = 0;
$echo_now_count1 = "";
$original_file_name1 = $img_name1;

while(1)
{
    $up_filename = $echo_now_count.$original_file_name; // 파일 이름 변경
    if(!file_exists("$img_dir/$up_filename")) break;
    if($now_count) $now_count++;
    else $now_count = 2;
    $echo_now_count = $now_count."_";
}

while(1)
{
    $up_filename1 = $echo_now_count1.$original_file_name1; // 파일 이름 변경
    if(!file_exists("$img_dir1/$up_filename1")) break;
    if($now_count1) $now_count1++;
    else $now_count1 = 2;
    $echo_now_count1 = $now_count1."_";
}


$save_name = $img_dir."/".$up_filename; // copy시 전체 경로 및 파일명

$save_name1 = $img_dir1."/".$up_filename1; // copy시 전체 경로 및 파일명


if(is_file($img_tmp))
{
    if(copy($img_tmp, $save_name)) // 파일 업로드
    {
        unlink($img_tmp); // 임시 파일 삭제
    }
    else {
        unlink($img_tmp);
        echo("
      <script>
      window.alert('파일 저장시 오류가 발생했습니다.');
      history.go(-1);
      </script>
    ");
        exit;
    }
}
else{
    echo("
    <script>
    window.alert('파일이 첨부되지 않았습니다.');
    history.go(-1);
    </script>
  ");
    exit;
}

if(is_file($img_tmp1))
{
    if(copy($img_tmp1, $save_name1)) // 파일 업로드
    {
        unlink($img_tmp1); // 임시 파일 삭제
    }
    else {
        unlink($img_tmp1);
        echo("
      <script>
      window.alert('파일 저장시 오류가 발생했습니다.');
      history.go(-1);
      </script>
    ");
        exit;
    }
}
else{
    echo("
    <script>
    window.alert('파일이 첨부되지 않았습니다.');
    history.go(-1);
    </script>
  ");
    exit;
}

try{
    $pdo = new PDO("mysql:" . "host=localhost;" . "dbname=sothecodehome", 'root', '123456', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $db = $pdo->prepare("INSERT INTO project_info (PROJECT_KIND, PROJECT_TITLE, PROJECT_CONTENTS, PROJECT_YEAR, PROJECT_IMG, PROJECT_IMG1) VALUES (:Kind, :Title, :Contents, :p_Year, :up_filename, :up_filename1)");

    $db->bindParam(':Kind', $p_Kind);
    $db->bindParam(':Title', $p_Title);
    $db->bindParam(':Contents', $p_Contents);
    $db->bindParam(':p_Year' , $p_Year);
    $db->bindParam(':up_filename', $up_filename);
    $db->bindParam(':up_filename1', $up_filename1);

    $db->execute();
    $pdo = null;
}
catch(Exception $e){
    echo $e->getMessage(); //에러 출력
}

echo "<meta http-equiv='refresh' content='0; url=project_manager.php'>";
?>

</body>
</html>
