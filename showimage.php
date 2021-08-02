<?php
include("Connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
    .head{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Showing Image</title>
</head>

<body>
    <div class="head">
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>Sno</th>
                    <th>FileName</th>
                    <th>Image Here</th>
                </tr>
            </thead>
            <tbody>
            <?php
             $Query='SELECT * FROM `resume_inputdata` ';
             $result=mysqli_query($conn,$Query);
             while ($row_fetch=mysqli_fetch_assoc($result))
             { 
                echo" <tr>
                      <td>$row_fetch[SNo]</td> 
                      <td>$row_fetch[FileName]</td>
                      <td><img src=$row_fetch[Image] alt=$row_fetch[FileName]></td>
                      </tr> 
               ";
             }
             
            ?>
            </tbody>
        </table>
        
    </div>
</body>

</html>