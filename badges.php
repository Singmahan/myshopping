<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .one{
            background-color: brown;
            color:white;
        }
        .two{
            background-color: gold;
            color:white;
        }

        .three{
            background-color: indigo;
            color:white;
        }
        .four{
            background-color: tomato;
            color:white;
        }

        .five{
            background-color: blue;
            color:white;
        }
    </style>
</head>
<body>
    <?php
       $total=2363425763;
           $englan=number_format(((66435600/$total)*100),2);
           $australia=number_format(((25640652/$total)*100),2);
           $chaina=number_format(((1401681680/$total)*100),2);
           $france=number_format(((67064000/$total)*100),2);
           $derman=number_format(((83149300/$total)*100),2);
           $italy=number_format(((60247214/$total)*100),2);
           $japanese=number_format(((126010000/$total)*100),2);
           $southkorea=number_format(((51780579/$total)*100),2);
           $Malaysia=number_format(((32713760/$total)*100),2);
           $Singapore=number_format(((5703600/$total)*100),2);
           $Spain=number_format(((47100396/$total)*100),2);
           $us=number_format(((329419677/$total)*100),2);
           $thailand=number_format(((66479305/$total)*100),2);
    ?>

    <div class="container">
        <h1>Population Covit-19</h1>
        <div class="row">
            <div class="col-4">
                <span class="badge badge-primary">England</span> =<?php echo $englan;?> <br>
                <span class="badge badge-success">Australia</span> =<?php echo $australia;?> <br>
                <span class="badge badge-secondary">Chaina</span> =<?php echo $chaina;?> <br>
                <span class="badge badge-primary">France</span> =<?php echo $france;?> <br>
            </div>
                <div class="col-4">
                    <span class="badge badge-warning">German</span> =<?php echo $derman;?> <br>
                    <span class="badge badge-info">Italy</span> =<?php echo $italy;?> <br>
                    <span class="badge badge-light">Japanese</span> =<?php echo $japanese;?> <br>
                    <span class="badge badge-dark">South Korea</span> =<?php echo $southkorea;?> <br>
            </div>
            <div class="col-4">
                    <span class="badge one">Malaysia</span> =<?php echo $Malaysia;?> <br>
                    <span class="badge two">Singapore</span> =<?php echo $Singapore;?> <br>
                    <span class="badge threed">Spain</span> =<?php echo $Spain;?> <br>
                    <span class="badge four">U.S.</span> =<?php echo $us;?> <br>
                    <span class="badge five">Thailand</span> =<?php echo $thailand;?> <br>
            </div>  
        </div>
    </div>    
</body>
</html>