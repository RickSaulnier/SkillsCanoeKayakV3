<?php include 'header2.php'; ?>
<?php include 'navigation2.php'; ?>

        <!--INFO CONFIRMATION MESSAGE DISPLAYED AFTER BOOK.PHP FORM FILLED OUT-->
        <div class="thankYouAllText">   
            <div class="thanksline">
                <h1 class="thankstext">Thank You</h1>
            </div>
            <div class="thanksAllTxt">
                Thank you: <?php echo $_GET["email"]; ?>
                <br/>
                <br/>
                We will contact you about the: <br/>
                <?php echo $_GET["location"]; ?> 
                trip on the <?php echo $_GET["date"]; ?>
            </div>
        </div>

    <?php include 'footer.php'; ?>