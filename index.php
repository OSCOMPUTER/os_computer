<?php
include "config/db_connect.php";

$sql = 'SELECT title,ingredients,id FROM pizza ORDER BY created_at';
$result = mysqli_query($conn, $sql);

$count=mysqli_num_rows($result);
$pizza='';

while($pizza = mysqli_fetch_assoc($result)){

    $ing=explode(',',$pizza["ingredients"]);
// if($ing[1]){
// $one=$ing[1];
// }else{
// $one=$ing[0];
// }

    $piz.='
            <div class="col s6 md3">
                        <div class="card z-depth-0">
                            <div class="card-content center">
                                <h6>'.$pizza["title"].'</h6>
                                <ul>'
                                .$ing[0].
                                '</ul>
                            </div>
                            <div class="card-action right-align">
                            <a class="brand-text" href="details.php?id='.$pizza["id"].'">More info |</a>
                            <a class="brand-text" href="update.php?id='.$pizza["id"].'">Update</a>
                            </div>                    
                        </div>
                    </div>
    ';
   
}

mysqli_free_result($result);
mysqli_close($conn);
include "templates/header.php";






?>








<h2 class="center green-text"><img width="100" height="100"src="pizza3.jpg"> Pizzas from Euro Pizzas!!!</h2>
<div class="container">
    <div class="row">

           <!-- we have <?php echo $count;?> number of Pizza. -->
            <?php echo  $piz;?>

    </div>


<?php
require "templates/footer.php";
