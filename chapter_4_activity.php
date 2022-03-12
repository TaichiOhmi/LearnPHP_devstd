<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP Chap4 Activity</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container-fluid">
            <h1 class="text-center">SALES</h1>
        </div>
        <div class="container-fluid">
            <form action="chapter_4_activity_functions.php" method="POST" class="mt-5">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td class="col-4"><label for=""><h2>Shirts</h2></label></td>
                            <td><input type="text" class="form-control col border-success border-2" id="shirts_price" name="shirts_price" placeholder="Price"></td>
                            <td><input type="text" class="form-control col border-success border-2" id="shirts_quantity" name="shirts_quantity" placeholder="Quantity"></td>
                        </tr>
                        <tr>
                            <td class="col-4"><label for=""><h2>Pants</h2></label></td>
                            <td><input type="text" class="form-control col border-danger border-2" id="pants_price" name="pants_price" placeholder="Price"></td>
                            <td><input type="text" class="form-control col border-danger border-2" id="pants_quantity" name="pants_quantity" placeholder="Quantity"></td>
                        </tr>
                        <tr>
                            <td class="col-4"><label for=""><h2>Shoes</h2></label></td>
                            <td><input type="text" class="form-control col border-warning border-2" id="shoes_price" name="shoes_price" placeholder="Price"></td>
                            <td><input type="text" class="form-control col border-warning border-2" id="shoes_quantity" name="shoes_quantity" placeholder="Quantity"></td>
                        </tr>
                        <!-- <tr>
                            <td colspan="4"><input type="submit" Value="Submit" class="btn btn-primary shadow-none"></td>
                        </tr>  -->
                    </tbody>
                </table>
                <div class="div">
                    <input type="submit" Value="Submit" class="btn btn-primary shadow-none">
                </div>
                        






                <!-- <div class="row form-group mb-3">
                    <label for="" class="col"><h2>Shirts</h2></label>
                    <input type="text" class="form-control col border-success border-2"" id="shirts_price" name="shirts_price" placeholder="Price">
                    <input type="text" class="form-control col border-success border-2" id="shirts_quantity" name="shirts_quantity" placeholder="Quantity">
                </div>
                <div class="row form-group mb-3">
                    <label for="" class="col"><h2>Pants</h2></label>
                    <input type="text" class="form-control col border-danger border-2"" id="pants_price" name="pants_price" placeholder="Price">
                    <input type="text" class="form-control col border-danger border-2" id="pants_quantity" name="pants_quantity" placeholder="Quantity">
                </div>
                <div class="row form-group mb-5">
                    <label for="" class="col"><h2>Shoes</h2></label>
                    <input type="text" class="form-control col border-warning border-2" id="shoes_price" name="shoes_price" placeholder="Price">
                    <input type="text" class="form-control col border-warning border-2" id="shoes_quantity" name="shoes_quantity" placeholder="Quantity">
                </div>
                <div class="row form-group">
                    <input type="submit" Value="Submit" class="btn btn-primary shadow-none">    
                </div> -->
            </form>
        </div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>