<?php
header("Content-type:text/html;charset=utf-8");

$json= file_get_contents('php://input');
$data = json_decode($json);
//print_r($data->userName);

$userName = $data->userName;
$phoneNumber = $data->phoneNumber;
$who = $data->who;
$whatCompany = $data->whatCompany;
$whatFor = $data->whatFor;


$servername = "localhost";
$username = "visitor";
$password = "visitor";
$dbname = "visitor";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

//$sql = "INSERT INTO user (userName, phoneNumber, who, whatCompany, whatFor) VALUES ('aaa', '11122223333', 'aaa', 'aaa', 'aaa')";
$sql = "INSERT INTO user(userName, phoneNumber, who, whatCompany, whatFor) VALUES('$userName', '$phoneNumber', '$who', '$whatCompany', '$whatFor')";

if ($conn->query($sql) === TRUE) {
//    echo "新记录插入成功";
    echo $sql;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
