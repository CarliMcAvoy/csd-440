<!---
Program demonstrates creation of a class, use of a constructor with a parameter, getters and setters, class methods,
creating instances of a class, and using class methods.
--->

<html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>Module 6 Assignment</title>
</head>
    <body>
    <h1>Class Creation and Usage</h1>
    <?php

        Class CarliMyInteger{

            public $num;

            public function __construct(int $num){
                $this->num = $num;
            }

            public function getNum(): int{
                return $this->num;
            }

            public function setNum(int $num){
                $this->num = $num;
            }

            public function isEven(){
                if ($this->num % 2 === 0){
                    echo"Number is even.";
                    }
                else{
                    echo"Number is not even.";
                    }
                }

            public function isOdd(){
                if ($this->num % 2 !== 0){
                    echo"Number is odd.";}
                else{
                    echo"Number is not odd.";
                }
            }

            public function isPrime(){
                if ($this->num <= 1) {
                    return false;
                }

                for ($i = 2; $i <= sqrt($this->num); $i++) {
                    if ($this->num % $i === 0) {
                        return false;
                    }
                }

                return true;
            }
        }

        $testOne = new CarliMyInteger(14);
        $testTwo = new CarliMyInteger(51);

        echo "<h3>Instance Number: {$testOne->getNum()}</h3><br>";
        echo $testOne->isEven();echo '<br>';
        echo $testOne->isOdd();echo '<br>';

        if ($testOne->isPrime()){
            echo"Number is prime.";
        }
        else{
            echo"Number is not prime.";
        }

        echo "<h3>Instance Number: {$testTwo->getNum()}</h3><br>";
        echo $testTwo->isEven();echo '<br>';
        echo $testTwo->isOdd();echo '<br>';

        if ($testTwo->isPrime()){
            echo"Number is prime.";
        }
        else{
            echo"Number is not prime.";
        }


    ?>
    </body>
</html>
