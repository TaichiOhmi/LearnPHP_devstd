<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP Chap4 Activity Functions</title>
    <style>
        .success {
            border: 2px solid #198754;
            border-radius: 5px;
            padding:5px;
        }
        .danger {
            border: 2px solid #dc3545;
            border-radius: 5px;
            padding:5px;
        }
        .warning {
            border: 2px solid #ffc107;
            border-radius: 5px;
            padding:5px;
        }
    </style>
</head>
<body>

        <?php 
            include 'chapter_4_activity_functions.php';

            if(isset($_POST['shirts_price'])){
                $shirts_price = $_POST['shirts_price'];
            }
        
            if(isset($_POST['shirts_quantity'])){
                $shirts_quantity = $_POST['shirts_quantity'];
            }
        
            if(isset($shirts_price) && isset($shirts_quantity)){
                $shirts_total = Total($shirts_price,$shirts_quantity);
            }
        
            if(isset($_POST['pants_price'])){
                $pants_price = $_POST['pants_price'];
            }
        
            if(isset($_POST['pants_quantity'])){
                $pants_quantity = $_POST['pants_quantity'];
            }
        
            if(isset($pants_price) && isset($pants_quantity)){
                $pants_total = Total($pants_price,$pants_quantity);
            }
        
            if(isset($_POST['shoes_price'])){
                $shoes_price = $_POST['shoes_price'];
            }
        
            if(isset($_POST['shoes_quantity'])){
                $shoes_quantity = $_POST['shoes_quantity'];
            }
        
            if(isset($shoes_price) && isset($shoes_quantity)){
                $shoes_total = Total($shoes_price,$shoes_quantity);
            }
        ?>

    <div class="container-fluid">
        <div class="container-fluid text-center my-3 display-1 fw-bold">
            SALES
        </div>
        <div class="container-fluid">
            <form action="#" method="POST" class="mt-5">                      
                <div class="row form-group g-3">
                    <div class="col-sm-4">
                        <label for="" class="col-sm"><h1>Shirts</h1></label>
                    </div>
                    <div class="col-sm-4">
                        <div class="success">
                            <div class="text-muted">
                            Price
                            </div>
                            <input type="text" class="form-control text-center border-0 shadow-none p-0" id="shirts_price" name="shirts_price" value="<?php echo $shirts_price ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="success">
                            <div class="text-muted">
                            Quantity
                            </div>
                            <input type="text" class="form-control text-center border-0 shadow-none p-0" id="shirts_quantity" name="shirts_quantity" value="<?php echo $shirts_quantity ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label for="" class="col-sm"><h1>Pants</h1></label>
                    </div>
                    <div class="col-sm-4">
                        <div class="danger">
                            <div class="text-muted">
                                Price
                            </div>
                            <input type="text" class="form-control text-center border-0 shadow-none p-0" id="pants_price" name="pants_price" value="<?php echo $pants_price ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="danger">
                            <div class="text-muted">
                                Quantity
                            </div>
                            <input type="text" class="form-control text-center border-0 shadow-none p-0" id="pants_quantity" name="pants_quantity" value="<?php echo $pants_quantity ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label for="" class="col-sm"><h1>Shoes</h1></label>
                    </div>
                    <div class="col-sm-4">
                        <div class="warning">
                            <div class="text-muted">
                                Price
                            </div>
                            <input type="text" class="form-control text-center border-0 shadow-none p-0" id="shoes_price" name="shoes_price" value="<?php echo $shoes_price ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="warning">
                            <div class="text-muted">
                                Quantity
                            </div>
                            <input type="text" class="form-control text-center border-0 shadow-none p-0" id="shoes_quantity" name="shoes_quantity" value="<?php echo $shoes_quantity ?>">
                        </div>
                    </div>

                    <div class="col-sm my-5">
                        <button class="btn btn-primary shadow-none w-100" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="container-fluid">
            <table class="table table-striped text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Item Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Number of Items</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Shirts</th>
                        <td><?php echo $shirts_price ?></td>
                        <td><?php echo $shirts_quantity ?></td>
                        <td><?php echo $shirts_total ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Pants</th>
                        <td><?php echo $pants_price ?></td>
                        <td><?php echo $pants_quantity ?></td>
                        <td><?php echo $pants_total ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Shoes</th>
                        <td><?php echo $shoes_price ?></td>
                        <td><?php echo $shoes_quantity ?></td>
                        <td><?php echo $shoes_total ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        
        
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


<!-- <table class="table table-borderless">
    <tbody>
        <tr>
            <td class="col-4"><label for=""><h1>Shirts</h1></label></td>
            <td><input type="text" class="form-control col border-success border-2" id="shirts_price" name="shirts_price" placeholder="Price" value="<?php if(isset($_POST['shirts_price'])){echo $_POST['shirts_price'];} ?>"></td>
            <td><input type="text" class="form-control col border-success border-2" id="shirts_quantity" name="shirts_quantity" placeholder="Quantity" value="<?php if(isset($_POST['shirts_quantity'])){echo $_POST['shirts_quantity'];} ?>"></td>
        </tr>
        <tr>
            <td class="col-4"><label for=""><h1>Pants</h1></label></td>
            <td><input type="text" class="form-control col border-danger border-2" id="pants_price" name="pants_price" placeholder="Price" value="<?php if(isset($_POST['pants_price'])){echo $_POST['pants_price'];} ?>"></td>
            <td><input type="text" class="form-control col border-danger border-2" id="pants_quantity" name="pants_quantity" placeholder="Quantity" value="<?php if(isset($_POST['shirts_quantity'])){echo $_POST['shirts_quantity'];} ?>"></td>
        </tr>
        <tr>
            <td class="col-4"><label for=""><h1>Shoes</h1></label></td>
            <td><input type="text" class="form-control col border-warning border-2" id="shoes_price" name="shoes_price" placeholder="Price" value="<?php if(isset($_POST['shoes_price'])){echo $_POST['shoes_price'];} ?>"></td>
            <td><input type="text" class="form-control col border-warning border-2" id="shoes_quantity" name="shoes_quantity" placeholder="Quantity" value="<?php if(isset($_POST['shoes_price'])){echo $_POST['shoes_quantity'];} ?>"></td>
        </tr>
    </tbody>
</table>
<div class="d-grid gap-2">
    <button class="btn btn-primary shadow-none" type="submit">Submit</button>
</div> -->