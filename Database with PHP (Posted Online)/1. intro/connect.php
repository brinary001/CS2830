<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri 

    // Originally, we listed our database credentials here:
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'myCS2830';

    /*
        But if you think about what we did above, that's a really bad design. 
        	In a webapp, we are probably going to contact our database from several 
        	different files (other than just connect.php). If that's the case, one 
        	change to our credentials above (a new dbname, password, etc.) would mean 
        	making changes to every file that uses those credentials. An alternative 
        	we explored was to put our credentials in one location (db.conf) and 
        	simply require it where we need it.
    */
   require_once "../db.conf";

    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if(mysqli -> connect_error) {
        $error = "Error: " . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
        require "login_form.php";
        exit;
    }

    $query = "select id from user where username = '$username' and password = '$password'";

    print $query;

   print "dbhost: ", $dbhost;
   print "dbuser: ", $dbuser;
   print "dbpass: ", $dbpass;
   print "dbname: ", $dbname;
    
    // Connect to the database
    // http://php.net/manual/en/book.mysqli.php
    // http://php.net/manual/en/mysqli.construct.php
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    
    // Check for errors
    // http://php.net/manual/en/mysqli.connect-error.php
    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }
    
    // If we're connected, we can print information about the host
    // http://php.net/manual/en/mysqli.get-host-info.php
    print "Connected! Status:" . $mysqli->host_info . "\n";
    
    // Create and run a query
    // http://php.net/manual/en/mysqli.query.php
    $query = "SELECT * FROM foodStock WHERE cost > 10";
    $result = $mysqli->query($query);

    // Print the result
    print_r($result);
    print "<br><br>\n";

    // fetch_assoc() gives us each record as an associative array
    // http://php.net/manual/en/mysqli-result.fetch-assoc.php
    //$row = $result->fetch_assoc();
    //print_r($row);

    // Loop through, printing each record
    while($row = $result->fetch_assoc()) {
        //print_r($row);
        print 'I have ' . $row['quantity'] . ' ' . $row['name'] . ' for $' . $row['cost'];
        print "<br>\n";
    }
    
    // Close the result set
    $result->close();
    // Close the database connection
    $mysqli->close();
?>