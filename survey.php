<?php echo file_get_contents("html/header.html"); ?>

<html>
<head>
    <title>Survey form</title>
</head>
<body>

</div >
    <form class ="formwidth" action ="surveyHandler.php" method="POST" >
        <p class = "surveyquestions">Countries travelled? (Please check all that apply)</p>
        <input type="checkbox" value="India" name="countries[]">India
        <input type="checkbox">Other <input type="text" id="other" name="Othercountries[]"><br><br>
        <input type="checkbox" value="Europe" name="countries[]">Europe
        <input type="checkbox">Other <input type="text" id="other" name="Othercountries[]"><br><br>
        <input type="checkbox" value="US" name="countries[]">US
        <input type="checkbox" value="China" name="countries[]">China
        <input type="checkbox" value="Africa" name="countries[]">Africa

        <p class = "surveyquestions">Are you a vaccinated with two doses?</p>
        <input type="checkbox" value="Yes" name="vaccinated[]">Yes
        <input type="checkbox" value="No" name="vaccinated[]">No<br><br>

        <label for="empNum">Employee Number:</label>
        <input type="text" id="empNum" name="empNum"><br><br>

        <input type="submit" value="SUBMIT" id = "submit" name="submit">
    </form>
</div>
</body>
</html>
<?php echo file_get_contents("html/footer.html"); ?>
<p class="copyright">Copyright © Swapna <?php echo date("Y"); ?></p>

