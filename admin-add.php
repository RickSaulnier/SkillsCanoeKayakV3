<?php include 'header2.php'; ?>
<?php include 'navigation2.php'; ?>

    
        

    <form class="adminformElements" action="admin-confirm.php" method="post">
   
    <!--INPUT FORM-->
    <div class="addLine" >    
        <h1 class="addtext">Add An Adventure</h1>
    </div>

    <h3 class="detailsH3">Input details about the trip</h3>

        <!--HEADING INPUT WITHOUT VALIDATION-->
        <div class="addFormLabels">
            <label>Heading</label>
            <select name="heading" id="heading">
                <option class="selectBox inputSize" value="">Select</option>
                <option class="selectBox inputSize" value="Halifax">Halifax</option>
                <option class="selectBox inputSize" value="Dartmouth">Dartmouth</option>
            </select>
        </div>
        
        <br/><br/>

        <!--DATE SELECTION WITH CALENDAR BLOCK-->
        <div class="addFormLabels">
            <label>Trip Date</label>
            <input type="date" name="date" id="date" class="tripDateBox" value="mm/dd/yyyy">
        </div>
        <br/><br/>

        <!--DURATION INPUT WITHOUT VALIDATION-->
        <div class="addFormLabels">
            <label>Duration</label>
            <select name="duration" id="duration"> 
            <option class="selectBox inputSize" value="">Select</option>
            <option class="selectBox inputSize" value="60">1hr</option>
            <option class="selectBox inputSize" value="120">2hr</option>
            <option class="selectBox inputSize" value="240">4hr</option>
        </select>
        </div>
        
        <br/><br/>

        <!--SUMMARY INPUT WITHOUT VALIDATION-->
        <div class="addFormLabels">
            <label>Summary</label>
            <input class="summaryBoxSiz inputSize" type="text" name="summary" placeholder="">
        </div>
        <br/><br/>

        <!--SUBMIT BUTTON-->
        <input class="subButton" type= "submit" value="Submit">
        
    </form>

    <?php include 'footer.php'; ?>