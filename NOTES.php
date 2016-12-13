 <?php

    $db = new PDO('mysql:host=localhost;dbname=book_an_appointment;charset=utf8', 'root', 'root');

                $sql = "SELECT * FROM appointment_message
                        ORDER BY `date`";
                $result = $db->query( $sql );
                $data = $result->fetchAll();

                try {
                    $query = $db->prepare( $sql );
                    $result = $query->execute();
                } catch( PDOException $err ) {
                    echo "Sorry, error happened.";
                    echo $err->getMessage();
                }
                


    // loop over it
    foreach( $data as $row ) {
        // display row:
        echo "<h3>appointment:".$row['date']."</h3>";
        echo "</ul>";

        echo "<li>"."appointment ID#:".$row['id']."</li>";
        echo "<li>"."Name:".$row['name']."</li>";
        echo "<li>"."email:".$row['email']."</li>";
        echo "<li>"."phone:".$row['phone']."</li>";
        // echo "<li>"."date:".$row['date']."</li>";
        echo "<li>"."time:".$row['time']."</li>";


        echo "</ul>";
    }
?>
