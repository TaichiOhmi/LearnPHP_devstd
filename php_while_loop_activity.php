<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP While Loop Counting</title>
    <style>
        li {
            box-sizing:border-box;
        }
    </style>
</head>
<body>
    <?php
        include 'php_while_loop_activity_functions.php';

        $start = $_POST['firstnumber'];
        $end = $_POST['secondnumber'];
    ?>

    <div class="container-fluid">
        <div class="container-fluid text-center my-5 display-1 fw-bold">
            While Loop Counting
        </div>
        <div class="container-fluid w-75 text-white">
            <form action="#" method="POST">
                <div class="row form-group g-3">
  
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
               
                    <div class="col-sm-12 mb-4">
                        <button class="btn btn-success w-100" type="submit">Submit</button>
                    </div>


                </div>
            </form>

        </div>
    </div>

    <div class="container-fluid">
        <div class="container-fluid w-75 fw-bold fs-3">
            <?php 
                if($start < $end){
                    CountUp($start, $end);
                }
                else{
                    CountDown($start, $end);
                }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>