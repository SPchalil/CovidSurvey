<?php echo file_get_contents("html/header.html"); ?>

<?php 

include 'connect.php';
error_reporting(0);
//$associations = array();
if (isset($_POST['submit'])){
    $empid = $_POST['empNum'];

/*------------------*/
    $vaccinecheck1= $_POST['vaccinated'];
    $vaccinechk = "";
    foreach($vaccinecheck1 as $vaccinechk1 ){
        $vaccinechk.= $vaccinechk1;
    }
/*------------------*/
    $countrycheck1 = $_POST['countries'];
    $countrychk = "";
    foreach($countrycheck1 as $countrychk1 ){
        $countrychk.= $countrychk1.",";
    }
/*------------------*/
    $othercountrycheck1 = $_POST['Othercountries'];
    $othercountrychk = "";
    foreach($othercountrycheck1 as $othercountrychk1 ){
        $othercountrychk.= $othercountrychk1.",";
    }
//var_dump($othercountrychk) ;
/*------------------*/
//var_dump($countrycheck1) ;
//echo $empid;
/*------------------*/
    if (!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }
    
    $sql="SELECT * FROM surveytable WHERE employeeid='$empid'";
    $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>=1)
        {
            header('Location: check.php');
        }
        else
            {
                //insert query goes here
                $sql = "INSERT INTO surveytable(employeeid, Countries, OtherCountries, Vaccinated)VALUES('$empid','$countrychk','$othercountrychk','$vaccinechk')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    echo 'Data added sucessfully';
                }
                else{
                    echo "Error: ". $sql . "<br>" . mysqli_error($conn);
                }
            }
    
    /*---Insert 
    $sql = "INSERT INTO surveytable(studentid, Associations, OtherAssociations, Alumni)VALUES('$stuid','$assochk','$otherassochk','$alumnichk')";
    if(mysqli_query($conn, $sql)){
        echo 'Data added sucessfully';
    }
    else{
        echo "Error: ". $sql . "<br>" . mysqli_error($conn);
    }
    /*--------------*/
    mysqli_close($conn);
}


?>

<html>
<head>
    <title>Survey form</title>
</head>
<body>
    <div class = "surveyintroduction">
        <h2><i>Thank-you for your submission.</i></h1>
    </div>
</body>
</html>
<?php echo file_get_contents("html/footer.html"); ?>
<p class="copyright">Copyright © Swapna <?php echo date("Y"); ?></p>





