<?php

echo exec("cp input.jpg ./Aneka/");

while(true){
	if(file_exists("./Aneka/0_0.jpg")) break;
	else sleep(0.1);
}

echo exec("mv ./Aneka/0_0.jpg output.jpg");
echo "Done";

?>