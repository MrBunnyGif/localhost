<?php
$i = 1;
for ($i = 1; $i<177; $i++){
    if($i <=9){
        $url = 'http://dataimg.hqdragon.com/leitor/hq/Scott%20Pilgrim/05/00'.$i.'.jpg';  
    }else if($i<=99){
        $url = 'http://dataimg.hqdragon.com/leitor/hq/Scott%20Pilgrim/05/0'.$i.'.jpg';  
    }else{
        $url = 'http://dataimg.hqdragon.com/leitor/hq/Scott%20Pilgrim/05/'.$i.'.jpg';  
    }
    
    $img = 'logo.png';  
    
    // Function to write image into file 
    file_put_contents($i.'.jpg', file_get_contents($url)); 
}
echo "File downloaded!"
?>