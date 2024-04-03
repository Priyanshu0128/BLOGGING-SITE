<?php
require('conn.php');

if ($_POST['category']) {
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    if ($category == 'All blogs') {
        $res = mysqli_query($conn,"SELECT * FROM `blogname` ORDER BY date DESC ");
        // $result = mysqli_fetch_assoc($res);
        $rows = mysqli_num_rows($res);
        $data = [];
        while($row = mysqli_fetch_assoc($res)){
            $maindata = [
                'id'=>$row['id'],
                'user_id'=>$row['user_id'],
                'title'=>$row['title'],
                'discription'=>$row['discription'],
                'category'=>$row['category'],
                'image'=>$row['image'],
                'date'=>$row['date'],
            ];
            array_push($data,$maindata);
        }
        echo json_encode(["posts"=>$data]);
    } else {
        $res = mysqli_query($conn,"SELECT * FROM `blogname` WHERE `category`='$category' ORDER BY date DESC ");
        // $result = mysqli_fetch_assoc($res);
        $rows = mysqli_num_rows($res);
        $data = [];
        while($row = mysqli_fetch_assoc($res)){
            $maindata = [
                'id'=>$row['id'],
                'user_id'=>$row['user_id'],
                'title'=>$row['title'],
                'discription'=>$row['discription'],
                'category'=>$row['category'],
                'image'=>$row['image'],
                'date'=>$row['date'],
            ];
            array_push($data,$maindata);
        }
        echo json_encode(["posts"=>$data]);
    }
}
