<?php
require_once("db.php");
require_once("component.php");


$con=Creatdb();

if(isset($_POST['creat'])){
    createData();
}
if(isset($_POST['comment'])){
    createComment();
}
if(isset($_POST['delete'])){
    delete();
}



function getdata(){
    $sql="SELECT * FROM project";
    $result =mysqli_query($GLOBALS['con'],$sql);
    
    if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
            return $result;
            //echo "Id:".$row['id']."-Book Name:".$row['book_name'];
        }
    }
}
function getcomment(){
    $sql="SELECT * FROM comments";
    $result =mysqli_query($GLOBALS['con'],$sql);
    
    if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
            return $result;
            //echo "Id:".$row['id']."-Book Name:".$row['book_name'];
        }
    }
}
    



function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}
function textNode($classname,$msg){
	$element="<h6 class='$classname'>$msg</h6>";
	echo $element;
}


function createData(){
    $username=textboxValue($value="cluntName");
    $sectionName=textboxValue($value='section');
    $numberName=textboxValue($value='number');
    $description=textboxValue($value="description");


    if($username&&$sectionName&&$numberName&& $description){
        $sql="INSERT INTO project(name, section ,number,description) VALUES ('$username','$sectionName','$numberName','$description')";

        if(mysqli_query($GLOBALS['con'],$sql)){
            textNode($classname="success",$msg="");
            // echo "";

        }else{
            echo "error";
        }
    }else{
        textNode($classname="succsess",$msg="Provide Data In TextBox");
    }
}


function createComment(){

    $comment=textboxValue($value="commenttt");

    if($comment){
        $sql="INSERT INTO comments(comment) VALUES ('$comment')";

        if(mysqli_query($GLOBALS['con'],$sql)){
            textNode($classname="success",$msg="REcord Succesfully");
            echo "";

        }else{
            echo "error dssds";
        }
    }else{
        textNode($classname="succsess",$msg="Provide Data In TextBox");
    }
}

//Delete Data
function delete(){
        $id_to_delete=mysqli_real_escape_string($GLOBALS['con'],$_POST['id_to_delete']);

        $sql="DELETE FROM project WHERE id=$id_to_delete";

        if (mysqli_query($GLOBALS['con'],$sql)) {
            //sucsee
            header('location: order.php');
        }else{
            //failure
            echo "query error".mysqli_error($GLOBALS['con']);
        } 
}

?>