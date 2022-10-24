<?php

$url="http://localhost/curl%20api/api/";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
// echo $result;
$result=json_decode($result,true);
if(isset($result['status'])){
    if($result['status']==true){
        if(isset($result['result'])){
            if($result['result']==true){
                ?>
                <table>
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Phone</td>
                    </tr>
                    <?php
                    foreach($result['data'] as $list){
                        echo "<tr><td>".$list['id']."</td>
                        <td>".$list['name']."</td>
                        <td>".$list['email']."</td>
                        <td>".$list['phone']."</td></tr>";
                    }
                    ?>

                </table>


                <?php
            }else{
                echo $result['data'];
            }
        }
    }else{

    }
}else{
    echo "API not working";
}
?>