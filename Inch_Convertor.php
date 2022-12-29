<html>
    <head>
        <title>
            Inch Convertor
        </title>
    </head>
    <body>
        <h3>Inch Convertor</h3>
        <br>
        <form method="post" action="Inch_Convertor.php">
            Insert number of inches:
            <input type="text" name="nr_inch" value="
                <?php
                    $nr=@$_POST["nr_inch"];
                    echo $nr;
                ?>">
            <br>    
            Select an unit:
            <select name="unit" size=1>
                <option value="0" selected>--Choose an unit--</option>
                <option value="10">milimeters</option>
                <option value="1">centimeters</option>
                <option value="0.01">meters</option>
            </select>
            <br><br>
            <input type="submit" value="Convert!">
            <br><br>
            <?php
                $unit=@$_POST["unit"];
                if($unit==0) printf("Choose an unit first!");
                else
                {
                    $nr=@$_POST["nr_inch"];
                    if($unit==10) $str="mm";
                    else if($unit==1) $str="cm";
                    else if($unit=0.01) $str="m";
                    $result=$nr*2.54*$unit;
                    printf("\n\n %.2f inches = %.2f %s",$nr,$result,$str);
                }
            ?>
            <br><br>
        </form>
    </body>
</html>
