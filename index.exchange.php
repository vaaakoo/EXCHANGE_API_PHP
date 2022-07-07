
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="center">

        <h1>Currency Converter</h1>
        
    <form class="form " action="index.exchange.php" method="POST">
            <div class="form-group">
                <input type="text" name="money" required>
                <span></span>
                <label for="money">Amount</label>
            </div>
            <div class="form-group">
                <input type="text" name="Curency" required>
                <span></span>
                <label for="Curency">From</label>
            </div>
            <div class="form-group">
                <input type="text" name="Curency1" required>
                <span></span>
                <label for="Curency1">To</label>
            </div>
            <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>    
        <div class="container">
            <div class="result">
                <?php
                    if (isset ($_POST['submit']) && strlen($_POST['Curency']) > 0) {
                            $from = $_POST['Curency'];
                            $to = $_POST['Curency1'];
                            $money = $_POST['money'];

                        require_once("./exchange.php");

                        $result = $money * $response;

                        if ($err) {
                            echo "cURL Error #:" . $err;
                        } else {
                            echo "<h1  style='color:#bf2aee'> {$response} </h1><br>";
                            echo "<p><h1 style='color:#cf5fff' > {$result} </h1></p><br>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
