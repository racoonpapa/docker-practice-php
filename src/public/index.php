<html>
    <body>
        <h1>Simple Docker Practice</h1>
        <?php
            $conn = new mysqli("mysql", "test", "test");
            if($conn->connect_error) {
                echo "<p>mysqlnd not working</p>";
            } else {
                echo "<p>mysql working</p>";
            }
            
            phpinfo();
        ?>
    </body>
</html>