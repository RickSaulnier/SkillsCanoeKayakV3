<?php include 'header2.php'; ?>
<?php include 'navigation2.php'; ?>

<div class="adminformElementsConfirm">
    <!--INFO CONFIRMATION MESSAGE DISPLAYED AFTER BOOK.PHP FORM FILLED OUT-->
    <div class="confirmline">
        <h1 class="confirmText">Admin - Confirm</h1>
    </div>

    <!--SEND THE INFO FROM THE FORM TO THE DATABASE-->
    <?php

    $heading = $_POST['heading'];
    $date = $_POST['date'];
    $duration = $_POST['duration'];
    $summary = $_POST['summary'];


    /*CAN FIND INSERTING INTO THE DB IN WEEK 11 VIDEO AT 46MIN IN*/
    $sql = "INSERT INTO addadventure (heading, tripDate, duration, summary)
    VALUES ('$heading',  '$date',  '$duration', '$summary')";
    if (mysqli_query($conn, $sql)) {
        echo '<div class="addSuccess">' . 'New booking added successfully' . '</div>';
    } 
    else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    ?>

    

    <!--A LINK TO ALL ADVENTURES PAGE WHERE ALL DATABASE INFO IS DISPLAYED-->
    <br><a class="viewAllAdv" href="all-adventures.php">View All Adventures</a>
</div>




    <?php include 'footer.php'; ?>