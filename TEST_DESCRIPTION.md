## Test Description
# a) Please arrange the loops after how fast they will run under PHP 7.1. If the dataset $array has about 1000000 int elements.

# b) What happens to the four loops if the dataset is empty, $array = NULL;


// ---- A -----------------------------------------
$ant = count($array);
for($i = 0 ; $i<$ant; $i++){
echo "[".$array[$i]."]";
}
// ---- B -----------------------------------------
foreach($array as $nr){
    echo "[".$nr."]";
}
 
// ---- C -----------------------------------------
for($i = 0, $ant = count($array) ; $i<$ant; $i++){
   echo "[".$array[$i]."]";
}
 
// ---- D -----------------------------------------
for($i = 0 ; $i<count($array);      $i++){
echo "[".$array[$i]."]";
}    
