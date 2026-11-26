<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Code php viết ở đây

    //In ra màn hình dùng echo
    echo "Hello World";

    //Biến $Tên biến = giá trị
    $hoTen = "Thuy Linh";
    $tuoi = 21;

    //Nối chuỗi .
    echo $hoTen . " " . $tuoi . " tuổi";

    $soThuNhat = 10;
    $soThuHai = 5;

    //+ - * / %
    $ketQua = $soThuNhat + $soThuHai;
    echo $ketQua . "<br>";

    //+= -= /= *= %=
    $soThuNhat+=$soThuHai;
    echo $soThuNhat;

    $diem = 5;
    if($diem < 4){
        echo "Trượt môn!";
}
elseif($diem >= 4 && $diem <5){
    echo "D";
}
elseif($diem >= 5 && $diem <7){
    echo "C";
}
elseif($diem >= 7 && $diem <8){
    echo "B";
}
else{
    echo "A";
}

//8. switch case
$color = "blue";
switch($color){
    case "red":
        echo "<br>";
        echo "IS RED";
        break;
    case "blue":
        echo "<br>";
        echo "<br>";
        echo "IS BLUE";
        break;
        default:
        echo "<br>";
        echo "no color";
        break;
}

for($i = 0; $i < 100 ; $i++){
    echo $i . "<br>";
}

?>
    
    
</body>
</html>