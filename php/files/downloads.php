<?php
      if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_REQUEST['textFile'])){
            $f="mytext.txt";   

            $file = ("download/$f");

            $filetype=filetype($file);

            $filename=basename($file);

            header ("Content-Type: ".$filetype);

            header ("Content-Length: ".filesize($file));

            header ("Content-Disposition: attachment; filename=".$filename);

            readfile($file);

        }

        if(isset($_REQUEST['pdfFile'])){
            $f="dummy.pdf";   

            $file = ("download/$f");

            $filetype=filetype($file);

            $filename=basename($file);

            header ("Content-Type: ".$filetype);

            header ("Content-Length: ".filesize($file));

            header ("Content-Disposition: attachment; filename=".$filename);

            readfile($file);

        }

        if(isset($_REQUEST['jpgFile'])){
            $f="redrose.jpg";   

            $file = ("download/$f");

            $filetype=filetype($file);

            $filename=basename($file);

            header ("Content-Type: ".$filetype);

            header ("Content-Length: ".filesize($file));

            header ("Content-Disposition: attachment; filename=".$filename);

            readfile($file);

        }

      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="download/mytext.txt">Download TEXT file</a></p>
    <p><a href="download/all.zip">Download ZIP file</a></p>
    <p><a href="download/dummy.pdf">Download PDF file</a></p>
    <p><a href="download/redrose.jpg">Download JPG file</a></p>

    <p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <p> <button type="submit" name="textFile"> Download TEXT file </button></p>
            <p> <button type="submit" name="pdfFile"> Download PDF File </button></p>
            <p> <button type="submit" name="jpgFile"> Download JPG File </button></p>
        
        </form>
    </p>
</body>
</html>
