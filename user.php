<?php 

function getUserById($id, $dbName){
    $sql = "SELECT * FROM alunos WHERE id = ?";
	$stmt = $dbName->prepare($sql);
	$stmt->execute([$id]);
    
    if($stmt->rowCount() == 1){
        $user = $stmt->fetch();
        return $user;
    }else {
        return 0;
    }
}

 ?>