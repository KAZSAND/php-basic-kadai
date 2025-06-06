<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編/Kadai_SORT</title>
</head>
<body>
    <p>
        <?php
        

        function sort_2ways ($array,$order){
            if ($order){
                
                echo "昇順にソートします。<br>";
                sort($array);

            }else {
                
                echo "降順にソートします。<br>";
                rsort($array);
            }
                
            foreach ($array as $value){
                echo $value . "<br>";
            }
        }
        //配列を宣言
        $nums=[15,4,18,23,10];

        sort_2ways($nums,true);
        

        sort_2ways($nums,false);
        
        
       ?>

    </p>

    
</body>
</html>