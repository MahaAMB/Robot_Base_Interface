<! DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- ------~~ CSS & HTML CODE ~~------ !--> 
        <title>Control Page</title>
    
        <style type="text/css">
           body{
               
                display:flex;
                position: absolute;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                box-sizing: border-box;
                text-align: center;   
            }

            button {
                margin-top: 10px;
                padding: 10px;
                background: #009A8F;
                color: #fff;
                font-family: cursive;
                height: 50px;
                width: 90px;
                border-radius: 10%;
                border-color: #d3d3d3;
                box-shadow: 3px 5px #d3d3d3;
                cursor: pointer;
            }
            
            button:hover{
                background-color: #32AEA5;
            }

        </style>
    </head>

    <body>

        <form action="" method="post">

            <button type="submit" name="fwd"><strong>Forward</strong></button>
            <br>
            <button type="submit" name="left"><strong>left</strong></button>
            <button type="submit" name="stop"><strong>Stop</strong></button>
            <button type="submit" name="right"><strong>Right</strong></button>
            <br>
            <button type="submit" name="bwd"><strong>Backward</strong></button>
            
        <!-- ------~~ PHP CODE ~~------ !--> 
        <?php
        /* DB Connection */
         $db_con = new mysqli('localhost:3306','root', '', 'robotarmtask1') or Die("\n Unable to connect:"  . mysqli_error());
        ?>

        <?php
        /* Store the direction of the robot movement in the DB */
        if (isset($_POST["fwd"])) {
            $sql = "UPDATE robotmovement SET Direction = 'Robot is moving forward'";
            $query = mysqli_query($db_con, $sql);
        }
            
        if (isset($_POST["bwd"])) {
            $sql = "UPDATE robotmovement SET Direction = 'Robot is moving backward'";
            $query = mysqli_query($db_con, $sql);
        }
            
        if (isset($_POST["stop"])) {
            $sql = "UPDATE robotmovement SET Direction = 'Robot stopped moving'";
            $query = mysqli_query($db_con, $sql);
        }
            
        if (isset($_POST["right"])) {
            $sql = "UPDATE robotmovement SET Direction = 'Robot is moving to the right'";
            $query = mysqli_query($db_con, $sql);
        }

        if (isset($_POST["left"])) {
            $sql = "UPDATE robotmovement SET Direction = 'Robot is moving to the left'";
            $query = mysqli_query($db_con, $sql);
        }
            
        ?>
            
    </form>
    </body>
    </html>