<?php
        include './Database/Controler.php';
        include 'role.php';
?>

                     
<h2 style="color:orangered;">
    <b>Welcome <?php echo $_SESSION["fac_name"]; ?></b></h2>
    <br> 
<script language="javascript">
var i=0;
var path=new Array();

//list of images

path[0]="img/OIP (10).jpeg";
path[1]="img/OIP (11).jpeg";
path[2]="img/OIP (12).jpeg";
path[3]="img/OIP (13).jpeg";
path[4]="img/OIP (14).jpeg";
path[5]="img/OIP (15).jpeg";
path[6]="img/OIP (16).jpeg";


function swapImage()
{
            document.slide.src=path[i];
            if(i<path.length-1)
	i++;
            else 
	i = 0;
    setTimeout("swapImage()",2700);
}

window.onload=swapImage;
</script>
       
<center>
    <img name="slide" src="img/1.jpeg" height="400"  width="900" style="border: 8px double black"></img>
</center>


<?php
        include 'footer.php';
?>