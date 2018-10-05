<?php



      echo '<table border = "1" style= "width:100%">';

      for($x = 0; $x <= 100; $x++) {
        echo "<tr>";
        for($y = 0; $y <= 100; $y++) {
            if($x == 0){
              echo "<td> " . $y . " </td>";
            }
            else if ($y == 0){
              echo "<td> " . $x . " </td>";
            }
            else{
              echo "<td> " . $x * $y . " </td>";
            }

        }

        echo "</tr>";


    }



?>
