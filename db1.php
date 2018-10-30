<?php
	//Establishing Connection with Server
	$connection = mysqli_connect("localhost", "AmanGupta", "adeetiaman1997", "test-a-thon'18");
	if(isset($_POST['submit'])){

	//Fetching variables of the form which travels in URL

    $rollno = $_POST["roll_no"];
    $email = $_POST["email"];
    $Q1 = $_POST["Q1"];
    $Q2 = $_POST["Q2"];
    $Q3 = $_POST["Q3"];
    $Q4 = $_POST["Q4"];
    $Q5 = $_POST["Q5"];
    $Q6 = $_POST["Q6"];
    $Q7 = $_POST["Q7"];

    if($rollno !=''||$email !=''){
	//Insert Query of SQL
    mysqli_query($connection, "insert into test1(rollno, email, Q1, Q2, Q3, Q4, Q5, Q6, Q7) values ('$rollno', '$email', '$Q1', '$Q2', '$Q3', '$Q4', '$Q5', '$Q6', '$Q7')");
	header("refresh:0;url=Thanku.html");


    }
    else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
    }

	}
	//Closing Connection with Server
	mysqli_close($connection);
?>