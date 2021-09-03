<!DOCTYPE html>
<html lang="en">
<!-- hello -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specialization Exercise</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

    <div class="col">
        <div class="ml-5 mt-3"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#displayUser">
                Sign Up </button>
        </div>
        <div class="modal fade" id="displayUser" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Log In</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post">
                        <div class="modal-body">
                            <div class="form-group container">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Enter Username">
                            </div>
                            <div class="form-group container">
                                <label>Email address</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container">
            <?php
            if (isset($_POST['submit'])) {
                echo "<h1 class='text-success'>Welcome " . $_POST['username'] . "!" . "</h1>";
                echo "<p class='text-info'>Email: " . $_POST['email'] . "</p>";
            }
            ?>
        </div>
    </div>

    <div class="col">
        <div class="ml-5 mt-3"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#computeTwoNumbers">
                Compute the Sum
            </button>
        </div>
        <div class="modal fade" id="computeTwoNumbers" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Numbers</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post">
                        <div class="modal-body">
                            <div class="form-group container">
                                <label>First Number</label>
                                <input type="text" name="num1" class="form-control" placeholder="Enter First Number">
                            </div>
                            <div class="form-group container">
                                <label>Second Number</label>
                                <input type="text" name="num2" class="form-control" placeholder="Enter Second Number">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="add" name="add" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <?php
            if (isset($_POST['add'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $sum = $num1 + $num2;
                if ($num1 == $num2) {
                    echo ("<h3 class='text-primary'>Triple the sum because the two Numbers have the same value:" . "</h3>");
                    echo ("<h4 class='text-'>" . $num1 . " + " . $num2 . " = " . $sum * 3) . "</h4>";
                } else {
                    echo ("<h3 class='text-primary'>Addition:" . "</h3>");
                    echo ("<h4 class='text-'>" . $num1 . " + " . $num2 . " = " . $sum) . "</h4>";
                }
            }
            ?>
        </div>
    </div>

    <div class="col">
        <div class="ml-5 mt-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nestedLoop">Nested Loop</button>
        </div>
        <div class="modal fade" id="nestedLoop" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nested Loop</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post">
                        <div class="modal-body">
                            <div class="form-group container">
                                <label>Range of The Loop</label>
                                <input type="text" name="range" class="form-control" placeholder="Enter A Number">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="nested" name="nested" class="btn btn-primary">Nested</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container">
            <?php
            if (isset($_POST['nested'])) {
                $range = $_POST['range'];

                for ($x = 1; $x <= $range; $x++) {
                    for ($y = 1; $y <= ($x > $range / 2 ? $range - $x : $x); $y++) {
                        echo ("* ");
                    }
                    echo ("<br>");
                }
            }
            ?>
        </div>
    </div>

    <div class="col">
        <div class="ml-5 mt-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#primeNum">Prime or Not</button>
        </div>
        <div class="modal fade" id="primeNum" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Prime or Not</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post">
                        <div class="modal-body">
                            <div class="form-group container">
                                <label>Number</label>
                                <input type="text" name="number" class="form-control" placeholder="Enter A Number">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="prime" name="prime" class="btn btn-primary">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php
        if (isset($_POST['prime'])) {
            $number = $_POST['number'];

            function primeCheck($number)
            {
                if ($number == 1)
                    return 0;
                for ($i = 2; $i <= $number / 2; $i++) {
                    if ($number % $i == 0)
                        return 0;
                }
                return 1;
            }


            $flag = primeCheck($number);
            if ($flag == 1) {
                echo "Prime";
            } else {
                echo "Not Prime";
            }
        }
        ?>
    </div>


    <!-- lowercase -->


    <form class="form-inline mt-5" method="post">
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" class="form-control" name="strlower" id="strlower" placeholder="Letters">
        </div>
        <button type="save" name="save" class="btn btn-primary mb-2">check</button>
    </form>



    <?php
    if (isset($_POST['save'])) {
        $str = $_POST['strlower'];

        if (ctype_lower($str)) {
            echo "Lowercase";
        } else {
            echo "Uppercase";
        }
    }
    ?>



    <form class="form-inline mt-5" method="post">
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" class="form-control" name="strpal" id="strpal" placeholder="palindrome">
        </div>
        <button type="palindrome" name="palindrome" class="btn btn-primary mb-2">check</button>
    </form>



    <?php

    if (isset($_POST['palindrome'])) {
        $strpal = $_POST['strpal'];

        if ($strpal == strrev($strpal)) {
            echo "<br> Palindrome";
        } else {
            echo "<br> Not Palindrome";
        }
    }

    ?>



<form class="form-inline mt-5" method="post">
        <div class="form-group mx-sm-3 mb-2">
            <input type="date" class="form-control" name="daysto">
            <input type="date" class="form-control" name="daysfrom" style="margin-left:1px;">
        </div>
        <button type="text" name="saveDate" class="btn btn-primary mb-2">check</button>
    </form>


<?php
if(isset($_POST['saveDate'])) {

    $daysfrom = $_POST['daysfrom'];
    $daysto = $_POST['daysto'];
    echo 'Difference of days B.W <b>' . $daysfrom . '</b>-<b>'.$daysto.'</b> are';
    $daysto = strtotime($daysto);
    $daysfrom = strtotime($daysfrom);
    $datediff = $daysto - $daysfrom;
    echo floor($datediff / (60 * 60 * 24));

    }
?>



<hr>
<center>
    <?php
    $current_date = "2021-12-23";
    $birth_date = "2021-12-24";

    echo "Current Date: " . $current_date;
    ?><br>
    <?php
    echo "Date: " . $birth_date;
    ?>
    <br>

    <?php
    $date_diff = abs(strtotime($birth_date) - strtotime($current_date));

    $years = floor($date_diff / (365 * 60 * 60 * 24));
    $months = floor(($date_diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    $days = floor(($date_diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

    printf("%d years, %d months, %d days", $years, $months, $days);
    printf("\n");
    ?>
</center>










<!-- Roman numerals -->

  
<center>
<hr
<h5>
    Arabic Numbers:  24
</h5><br><br>
<?php 
function convertToRomanNumerals($num){ 
    $n = intval($num); 
    $res = ''; 

    //array of roman numbers
    $romanNumberNumerals_Array = array( 
        'M'  => 1000, 
        'CM' => 900, 
        'D'  => 500, 
        'CD' => 400, 
        'C'  => 100, 
        'XC' => 90, 
        'L'  => 50, 
        'XL' => 40, 
        'X'  => 10, 
        'IX' => 9, 
        'V'  => 5, 
        'IV' => 4, 
        'I'  => 1); 

    foreach ($romanNumberNumerals_Array as $roman => $number){ 
        $matches = intval($n / $number); 

        $res .= str_repeat($roman, $matches); 

        $n = $n % $number; 
    } 

    return $res; 
} 

echo convertToRomanNumerals(24); 
?>




<br><br><br>

<form method="post">
          <label for="bubble">Bubble Sorting</label>
          <input type="number" name="sort" class="form-control w-50">
          <input type="number" name="sort1" class="form-control w-50 mt-2">
          <input type="number" name="sort2" class="form-control w-50 mt-2">
          <input type="number" name="sort3" class="form-control w-50 mt-2">
          <button type="submit" class="btn btn-primary mt-2" name="saveSort">Submit</button>
        </form>


        <?php

          function bubble_Sort($bubble)
          {
            do
            {
              $swap = false;
              for( $i = 0, $c = count( $bubble ) - 1; $i < $c; $i++ )
              {
                if( $bubble[$i] > $bubble[$i + 1] )
                {
                  list( $bubble[$i + 1], $bubble[$i] ) =
                      array( $bubble[$i], $bubble[$i + 1] );
                  $swap = true;
                }
              }
            }
            while( $swap );
          return $bubble;
          }
          if(isset($_POST['saveSort'])){

            $number1 = $_POST['sort'];
            $number2 = $_POST['sort1'];
            $number3 = $_POST['sort2'];
            $number4 = $_POST['sort3'];

            $bubble_sorted = array($number1, $number2, $number3, $number4);
            echo "Original Array :\n";
            echo implode(', ',$bubble_sorted );
            echo "\nSorted Array\n:";
            echo implode(', ',bubble_Sort($bubble_sorted));

          }
        ?>







</body>

</html>