<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "database_form");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $name = $_REQUEST['name'];
        $subject = $_REQUEST['subject'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];
        $number = $_REQUEST['number'];
        $timestamp = date("Y-m-d H:i:s");

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO contact_form VALUES ('$name',
            '$subject','$email','$message','$number', now())";

        // Check if the query is successful
        
        ?>
    </center>
</body>

</html>
