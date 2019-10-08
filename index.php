
<?php
echo "hello world asd ";

# string variable
$name = 'alex';
#integer variable
$age = 15;
#print the variable
echo $name;
echo "<br>";
#printing var and text between each other
echo 'His name is ' . $name . 'and he is ' . $age;
echo "<br>";
#printing HTML elements
echo '<a href=\"http://www.google.com\">Link</a>';
echo "<br>";
echo "<h2>HEADER</h2>";
echo "<br>";
echo "<p>paragraph</p>";
echo "<br>";
echo "<div>div</div>";
echo "<br>";
#printing float numbers
$bankBalance = 1.2e9;
echo 'Your bank balance is ₺' . $bankBalance ;
echo "<br>";
#boolean
$fileIsUploaded = true;
#if else
if ($fileIsUploaded){
    echo ' <h4>file is uploaded </h4>';
}
// $fileIsUploaded = upload_file(); ???function
echo "<br>";
#is_int( var );
$isInt = is_int(1);
echo $isInt;
echo "<br>";
if ($isInt) {
    echo 'Your value is an integer'. $isInt;
}
echo "<br>";
var_dump(is_int('asd'));

# array
$names = ['alex',false,'billy',123,12.2e5,'asd'] ;
var_dump($names);
$asd = count($names);
echo $names[0];
echo "<br>";
for ($x = 0; $x < $asd; $x++){
    echo $names[$x];
    echo "<br>";
}
echo "<br>";
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
echo "<br>";
#foreach
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}
echo "<br>";
# function
function writeMsg() {
    echo "Hello world!";
}

writeMsg(); // call the function
echo "<br>";
#diving into arrays
$records = [
    [
        'username' => 'alex',
        'email' => 'email@mail.com',
        'likes' => ['cats','food']
    ],
    [
        'username' => 'billy',
        'email' => 'billy@mail.com',
        'likes' => ['dogs','drinks']
    ],
];
echo '<pre>'. var_dump($records).'</pre>';

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<br> Sorted <br> ";
ksort($age); //sorted ascending order to key ksort()
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
# sorting
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
foreach($numbers as $value){
    echo $value;
    echo "<br>";
}

