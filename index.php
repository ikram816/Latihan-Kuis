<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tool.css">
   
    <title>Season Display</title>
</head>
<body>
    <?php
    if(isset($_POST['bulan'])){
        $bulan = $_POST['bulan'];

        if($bulan== 'December' || $bulan== 'January' || $bulan== 'February'){
            header("Location: winter.php");
        }else if($bulan== 'March' || $bulan== 'April' || $bulan== 'May'){
            header("Location: spring.php");
        }else if($bulan== 'June' || $bulan== 'July' || $bulan== 'August'){
            header("Location:summer.php");
        }else if($bulan== 'September' || $bulan== 'October' || $bulan== 'November'){
            header("Location: autumn.php");
        }
        exit();
    }

    ?>
   
    <div class="container">
    <div class="card">
        <div class="card-body">
        <h1>What's the <span style="color: red;">s</span><span style="color: orange;">e</span><span style="color: yellow;">a</span><span style="color: green;">s</span><span style="color: blue;">o</span><span style="color: purple;">n</span> at that time?</h1>
        <form method="post">
        <table cellspacing="10">
            <tr>
                <td> <input type="radio" name="bulan" value="January">January</td>
                <td> <input type="radio" name="bulan" value="February">February</td>
                <td> <input type="radio" name="bulan" value="March">March</td>
                <td> <input type="radio" name="bulan" value="April">April</td>
            </tr>
            <tr>
                <td> <input type="radio" name="bulan" value="May">May</td>
                <td> <input type="radio" name="bulan" value="June">June</td>
                <td> <input type="radio" name="bulan" value="July">July</td>
                <td> <input type="radio" name="bulan" value="August">August</td>
            </tr>
            <tr>
                <td> <input type="radio" name="bulan" value="September">September</td>
                <td> <input type="radio" name="bulan" value="October">October</td>
                <td> <input type="radio" name="bulan" value="November">November</td>
                <td> <input type="radio" name="bulan" value="December">December</td>
            </tr>
            
        </table>
        <div class="btn">
            <button type="submit"  id="see-season">See Season</button>
        </div>
        </form>
    </div>
    </div>
    </div>
</body>
</html>