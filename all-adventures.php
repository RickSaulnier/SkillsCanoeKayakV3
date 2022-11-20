<?php include 'canoeImageBody.php'; ?>


    <!--SELECT THE TABLE FROM THE DATABASE-->
    <div class="infoBorderBoxAllAd">
        <?php
        $sql = "SELECT * FROM addadventure";
        $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {      
                    echo "<h3 class='tripLocation printFormat'>" . $row["heading"] . "</h3>";
                    echo "<div class='datePrintOut printFormat'>" . "Date: " . $row["tripDate"] . "</div>";
                    echo "<div class='durPrintOut printFormat'>" . "Duration: " . $row["duration"] . "min" . "</div>"  . "<br>";
                    echo "<div class='summaryPrintOut printFormat'>" . "Summary"  . "</div>";
                    echo "<div class='sumTextFormat printFormat'>" . $row["summary"] . "</div>";

            }
            } else {
                echo "0 results";
            }
        ?>
    </div>


    <?php include 'footer.php'; ?>