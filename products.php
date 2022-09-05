<!DOCTYPE html>
<html>
<body>
<?php
    $products = 
    array(  array("01","Finalmouse Starlight-12 Red","5990 baht","img/1.jpg"),
            array("02","Finalmouse Starlight-12 Poseidon","5990 baht","img/2.jpg"),
            array("03","Finalmouse Starlight-12 Achilles","6990 baht","img/3.jpg"),
            array("04","Finalmouse Starlight-12 Pegasus","6990 baht","img/4.jpg"),
            array("05","Finalmouse Starlight-12 Hades King","5990 baht","img/5.jpg"),
            array("06","Finalmouse Starlight-12 Zeus King","4590 baht","img/6.jpg"),
            array("07","Finalmouse Starlight-12 Phantom","6990 baht","img/7.jpg"),
            array("08","Finalmouse Starlight-12 Pegasus","5990 baht","img/new8.jpg"),
            array("09","Finalmouse X Tenz","3990 baht","img/new9.jpg"),
            array("10","Finalmouse Ultra Light","5990 baht","img/new10.jpg"),
    );

    echo '<table width"100%" border="1">
    <tr>
      <th>id</th>
      <th>name</th>
      <th>price</th>
      <th>img</th>
    </tr>
    ';

    for($i=0;$i<10;$i++){
        $r = rand(0,256);
        $g = rand(0,256);
        $b = rand(0,256);
        echo "<tr>
        <td style ='color:rgb($r,$g,$b)'>".$products[$i][0]."</td>
        <td style ='color:rgb($r,$g,$b)'>".$products[$i][1]."</td>
        <td style ='color:rgb($r,$g,$b)'>".$products[$i][2]."</td>
        <td ><img src=".$products[$i][3]." width='250' height='250'/></td>
        </tr>";  
    }
   
    echo '</table>'
?>

</body>
</html>