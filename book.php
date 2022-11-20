<?php include 'header2.php'; ?>
<?php include 'navigation2.php'; ?>

<!--INPUT FORM-->
<div class="bookTripFormBox">
    <div class="bookLine" >    
        <h1 class="booktext">Book a Trip</h1>
    </div>
        <h3 class="detailsH3">Just some quick details</h3>

    <form action="thank-you.php" method="get">

        <!--EMAIL INPUT WITHOUT VALIDATION-->
        <label class="emailLabel">Email</label>
        <input class="boxSiz" type="text" name="email" placeholder="">
        <br/><br/>

        <!--LOCATION WITH 2 OPTIONS-->
        <label class="locLabel">Location</label>
        <select class="locationBox" name="location" id="location">
            <option class="selectBox locInput" value="">Select</option>
            <option class="selectBox locInput" value="Halifax">Halifax</option>
            <option class="selectBox locInput" value="Dartmouth">Dartmouth</option>
        </select>
        <br/><br/>

        <!--DATE SELECTION WITH CALENDAR BLOCK-->
        <label class="dateLabel">Trip Date</label>
        <input class="dateBox" type="date" name="date" id="date" value="mm/dd/yyyy">
        <br/><br/>

        <!--SUBMIT BUTTON-->
        <input class="subButton" type= "submit" value="Submit"><br>
    </form>
</div>

    <!--ADD ADVENTURE LINK
    <a class="addBooking" href="admin-add.php">Click here to add to a previous booking</a>
    -->
    <?php include 'footer.php'; ?>