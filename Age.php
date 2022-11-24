<style>
    p{
        background:green;
        color:white;
        padding:10px;
        font-weight:bold;
        font-size:19px;
        


    }
    </style>

<center><form action="AGe.php"method="post">
    How old are You
    <input type="text" name="Age" placeholder="Enter your age">
    <input type="submit" value="click" name="btn">
</form>

<?php
if(isset($_POST['btn'])){
    $age=$_POSt['age'];

    echo "<p>". ($age*12)."months </p>";
    echo "<p>". ($age*365)."days </p>";
    echo "<p>". ($age*365*24)."hours </p>";
}

?>