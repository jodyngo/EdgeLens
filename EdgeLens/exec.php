<?php


if(isset($_GET["cloud"])){
	$file = fopen("cloud.txt", "r");
	$ip = fgets($file);

	move_uploaded_file("input.jpg", "input.jpg");
	$tmp = file_get_contents("http://".$ip."/EdgeLens/exec.php");
	
	echo $ip;
	exec("wget -O output.jpg http://".$ip."/EdgeLens/output.jpg");

}
else{
	echo exec("cp input.jpg ./Yolo/test/images/");

	while(true){
		if(file_exists("./Yolo/test/output/0_0.jpg")) break;
		else sleep(0.1);
	}

	echo exec("mv Yolo/test/output/0_0.jpg output.jpg");
}


echo "Done";

?>