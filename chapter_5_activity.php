<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP Chap5 Activity</title>
    <style>
        li {
            box-sizing:border-box;
        }
    </style>
</head>
<body>
    <?php
        include 'chapter_5_activity_functions.php';

        if(isset($_POST['firstnumber']) && isset($_POST['secondnumber']) && !isset($_POST['options'])){
            $result = 'You must select a method of arithmetic operation';
        }
        else{
            $method = $_POST['options'];
            $first = $_POST['firstnumber'];
            $second = $_POST['secondnumber'];
    
            if($method == "addition"){
                $result = Addition($first, $second);
            }
    
            elseif($method == "subtraction"){
                $result = Subtraction($first, $second);
            }
    
            elseif($method == "multiplication"){
                $result = Multiplication($first, $second);
            }
    
            elseif($method == "division"){
                $result = Division($first, $second);
            }
    
            elseif($method == "modulo"){
                $result = Modulo($first, $second);
            }
    
            elseif($method == "exponential"){
                $result = pow($first, $second);
            }
        }
    ?>

    <div class="container-fluid">
        <div class="container-fluid text-center my-5 display-1 fw-bold">
            Calculator
        </div>
        <div class="container-fluid w-75 text-white">
            <form action="chapter_5_activity.php" method="POST">
                <div class="row form-group g-5">
  
                    <div class="col-sm-6">
                        <div class="border border-2 rounded px-1">
                            <div class="text-muted">
                            First Number
                            </div>
                            <input type="number" class="form-control col-sm border-0 shadow-none p-0 text-center" id="firstnumber" name="firstnumber"  required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="border border-2 rounded px-1">
                            <div class="text-muted">
                            Second Number
                            </div>
                            <input type="number" class="form-control col-sm border-0 shadow-none p-0 text-center" id="secondnumber" name="secondnumber" required>
                        </div>
                    </div>
               
                    <!-- <div class="d-flex justify-content-between">

                        <div class="col-sm-2">
                            <input type="radio" class="btn-check" name="options" id="addition" autocomplete="off">
                            <label class="btn btn-primary" for="addition">Addition</label>
                        </div>
    
                        <div class="col-sm-2">
                            <input type="radio" class="btn-check" name="options" id="substraction" autocomplete="off">
                            <label class="btn btn-danger" for="substraction">Substraction</label>
                        </div>
    
                        <div class="col-sm-2">
                            <input type="radio" class="btn-check" name="options" id="multiplication" autocomplete="off" >
                            <label class="btn btn-warning text-white" for="multiplication">Multiplication</label>
                        </div>
    
                        <div class="col-sm-2">
                            <input type="radio" class="btn-check" name="options" id="division" autocomplete="off">
                            <label class="btn btn-info text-white" for="division">Division</label>
                        </div>
    
                        <div class="col-sm-2">
                            <input type="radio" class="btn-check" name="options" id="modulo" autocomplete="off">
                            <label class="btn btn-secondary" for="modulo">Modulo</label>
                        </div>
    
                        <div class="col-sm-2">
                            <input type="radio" class="btn-check" name="options" id="exponential" autocomplete="off">
                            <label class="btn btn-dark" for="exponential">Exponential</label>
                        </div>
                    </div> -->

                    <div class="col-sm-12 text-center">
                        <ul class="list-inline m-0">
                            <li class="list-inline-item">
                                <input type="radio" class="btn-check" name="options" id="addition" autocomplete="off" value="addition">
                                <label class="btn btn-primary w-100 fw-bold" for="addition">Addition</label>
                            </li>
                            <li class="list-inline-item ">
                                <input type="radio" class="btn-check" name="options" id="subtraction" autocomplete="off" value="subtraction">
                                <label class="btn btn-danger w-100 fw-bold" for="subtraction">Subtraction</label>
                            </li>
                            <li class="list-inline-item ">
                                <input type="radio" class="btn-check" name="options" id="multiplication" autocomplete="off" value="multiplication">
                                <label class="btn btn-warning text-white w-100 fw-bold" for="multiplication">Multiplication</label>
                            </li>
                            <li class="list-inline-item ">
                                <input type="radio" class="btn-check" name="options" id="division" autocomplete="off" value="division">
                                <label class="btn btn-info text-white w-100 fw-bold" for="division">Division</label>
                            </li>
                            <li class="list-inline-item ">
                                <input type="radio" class="btn-check" name="options" id="modulo" autocomplete="off" value="modulo">
                                <label class="btn btn-secondary w-100 fw-bold" for="modulo">Modulo</label>
                            </li>
                            <li class="list-inline-item ">
                                <input type="radio" class="btn-check" name="options" id="exponential" autocomplete="off" value="exponential">
                                <label class="btn btn-dark w-100 fw-bold" for="exponential">Exponential</label>
                            </li>
                        </ul>
                    </div>
  

        
                    <div class="col-sm-12 mb-5">
                        <button class="btn btn-success shadow-none w-100  fw-bold" type="submit">Culculate</button>
                    </div>


                </div>
            </form>

        </div>
    </div>

    <div class="container-fluid text-center my-3 display-1 w-75">
        <?php 
            if(isset($result)){
                echo "Result:<br><span class='fw-bold'>$result</span>";
            }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>