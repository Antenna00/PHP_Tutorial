<?php


//* Creating Folders
if(!is_dir("./outputs/")) {
    //^ if dir doesn't exist;
    mkdir('./outputs');
}

//* Creating files with default contents
$success = file_put_contents("./outputs/output.txt", "2018-06-01 ファイルに書き込みを行いました。");

if($success) {
    print("Completed File Writing!" . "<br />");
} else {
    print("Failed File Writing ;(" . "<br />");
}

//* Get file contents
$contents = file_get_contents("./outputs/output.txt");
print($contents);

//* Adding the content in existing file is just combination of above 2. You can append with .= operators