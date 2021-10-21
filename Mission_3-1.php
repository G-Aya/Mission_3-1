<html>
    <head>
    <meta charset = "UTF-8">
    <title>Mission_3-1</title>
    </head>
    <body>
        <form action = "" method = "post">
        <input type = "text" required name = "name" value = "名前"><br>
        <input type = "text" required name = "str" value = "コメント"><br>
        <input type = "submit" name = "submit" value = "送信"><br>
        </form>
        <?php
       
        
        if(!empty($_POST["str"])){
        $str = $_POST["str"];
        $name = $_POST["name"];
        $date = date("Y/m/d H:i:s");/*(年/月/日　時:分：秒)
        /*echo $str."を受け付けました<br>";*/
        
        $filename = "Mission_3-1.txt";
        $fp = fopen($filename,"a");
        $num = count(file($filename)); /*ファイルのデータの行数を数えて$numに代入*/
        $num++;
      
        fwrite($fp, $num ."<>". $name ."<>". $str."<>".$date.PHP_EOL);
        fclose($fp);
        
            
        
        if(file_exists($filename)){
    $lines = file($filename,FILE_IGNORE_NEW_LINES);
        }
    foreach($lines as $line){
        echo $line."<br>";
    }
     }
    ?>
    </body>
</html>