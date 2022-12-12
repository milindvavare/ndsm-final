<?php 
session_start();
include('../db/database_connection.php');    
// echo $username = $_POST['username'];
// $password = $_POST['password'];

     $response = array();
        	$query = "
        	SELECT * FROM admin_login WHERE username = :username
        	";
        	$statement = $connect->prepare($query);
        	$statement->execute(
        		array(
        				'username'	=>	$_POST["username"]
        			)
        	);
        	$count = $statement->rowCount();
        	if($count > 0)
        	{ 
        		$result = $statement->fetchAll();
        		foreach($result as $row)
        		{

        			if($row['status'] == '1')
        			{
        				if($_POST["password"] == $row["password"])
        				{

        				
                            $user_id = "".$row['id']."";
                            $username = $row['username'];

                            echo "1";
                           // $response[] = array("user_name"=>$row['user_name'], "user_id"=>$user_id, "user_mobile"=>$user_mobile);
                           //  echo json_encode($response);

                            $_SESSION['user_id'] = $user_id;
                            $_SESSION['username'] = $username;


        				}
        				else
        				{
        					//$message = "Wrong Password";
                              echo "2";
        				}
        			}
        			else
        			{
        				//$message = "Your account is Deactive Contact Petter";
                          echo "3";
        			}
        		}
        	}
        	else
        	{
        		//$message = "Wrong Mobile Or Password";
                        echo "4";
        	}
?>