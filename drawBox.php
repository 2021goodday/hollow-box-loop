<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIDTERM TECHNICAL - Kyla Adrielle Narvasa</title>
</head>
<body>
    <style>
        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 10px;
            }

        body {
            background-color: #ADD8E6;
        }

        div {
            font-size: 30px;
        }

    </style>
    <div class="center">
    <?php
        $boxSize = 18;
        
    for($i = 0; $i < $boxSize; $i++) {
        
        for($j = 0; $j < $boxSize; $j++) {
           
            if($i === 0 || $i === $boxSize - 1) {
                echo "*";
            }
            else {
               
                if($j === 0 || $j === $boxSize - 1) {
                    echo "*";
                }
                else {
                    
                    echo "&nbsp;&nbsp;";
                }
            }
        }
        echo "<br>";
    }
    ?>
    </div>
</body>
</html>