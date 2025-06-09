<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kadai_016

    </title>
</head>
<body>
    <P>
        <?php
        //food class
        class Food {
            private $name;
            private $price;

            //method
            public function show_price( int $price) {
                echo $this->price;
            }
                

            //constructor
            public function __construct(string $name, int $price){
                $this-> name= $name;
                $this->price=$price;
            }

        }

        //Animal class
        class Animal {
            private $name;
            private $height;
            private $weight;

            public function show_height(int $height) {
                echo $this->height;
            }

            //construct
            public function __construct(string $name, int $height, int $weight ){
                $this-> name=$name;
                $this-> height=$height;
                $this-> weight=$weight;

            }

        }

        //make food instance
        $vegetable =new Food("potato",250);
        

        print_r($vegetable);
        
        echo "<br>";

        //make animal instance
        $mammal =new Animal("dog", 60, 5000);

        print_r($mammal);


        echo "<br>";

        //access to method

        $vegetable->show_price(250);
        

        echo "<br>";

        
        $mammal->show_height(60);
        


        
    
    
        ?>
    </P>
    
</body>
</html>