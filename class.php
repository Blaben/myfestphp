<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <h1>The fruit Program</h1>

    <?php
    class fruit {
        public $name;
        public $color;

        function set_name($name){
            $this->name = $name;
        }

        function get_name(){
            return $this->name;
        }
    }

    ?>
</body>
</html>