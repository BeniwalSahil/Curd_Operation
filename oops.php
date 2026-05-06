<?php 

// Arithmetic
$a = 10;
$b = 3;

echo $a + $b; // 13
echo "<br>";
echo $a - $b; // 7
echo "<br>";
echo $a * $b; // 30
echo "<br>";
echo "<br>";
echo $a / $b; // 3.33
echo "<br>";
echo $a % $b; // 
echo "<br>";
echo $a ** $b; // 1000
echo "<pre>";

//assigment operator
$sa = 10;
echo $sa += 14;echo "<br>";
echo $sa -= 234;echo "<br>";
echo $sa *= 5;echo "<br>";
echo $sa /=23;echo "<br>";echo "<br>";


// Comparsion operator

$a = 10;echo "<br>";
var_dump($a == 10);echo "<br>";
var_dump($a >= 10);echo "<br>";
var_dump($a <= 10);echo "<br>";
var_dump($a === 10);echo "<br>";
var_dump($a != 10);echo "<br>";
var_dump($a !== 10);echo "<br>";

//Increment / Decrement Operators

$aa = 10;
echo ++$aa;echo "<br>";
echo $aa++;echo "<br>";
$aaaa = 10;
echo --$aaaa;echo "<br>";
echo $aaaa--;echo "<br>";
echo "<br>";
// Logical Operators

$a = 10;
$b = 5;
if($a <= 10 && $b == 5){
    echo  "(bool) .True";
}
echo "<br>";
if($a != 10 || $b <= 5){
    echo  "(bool) .True";
}
echo "<br>";

$first  ="SAHIL";
$last  = "BENIWAL";

echo $first  ." ". $last;

$first .= "Kumar";

echo $first;



// array operator

$a = ["a" => 2,"b" => 10];
$b = ["b" => 4, "c" => 3];

print_r($a + $b);

// ternery operator

$age = 18;

$status  = $age >= 18 ? "Adult" : "Minor";
echo $status;


// Switch case

$favcolor = "Gresen";

Switch($favcolor){
    case "Resd";
        echo "Your favorite color id red";
    break;
    case "Green";
        echo "Your favorite color is green";
    break;
    case "Blue";
        echo "Your favorite color is Blue";
    break;
    default:
    echo "Your are looking some other color but your color is not present this time";
}
function messa(){
    return __FUNCTION__;
}
echo messa();
trait messag{
    function t(){
        return __TRAIT__;
    }
}

class mesasgf{
    use messag;
}

$in = new mesasgf();
echo $in->t();


echo "<br>";
class car{
    public $color;
    public $name;

    public function __construct($color,$name){
        $this->color = $color;
        $this->name = $name;
    }

    public function message(){
        return "This car is $this->color . and name is $this->name";
    }
}

$a = array("Volvo", "BMW", "Toyota"); // indexed array
$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); 

$a = (object) $a;
$b = (object) $b;
var_dump($a);
var_dump($b);
$mycar = new car("Blue","Swift");
$mycar = (array) $mycar;
var_dump($mycar);


$a = 23;
$c = 3.34;
$f = "sdf";
var_dump($a);

var_dump($c);

var_dump($f);



$x = "Hello My Name is Sahil Beniwal";
$y = explode(" ", $x);
print_r($y);
echo strlen("Hello World!");

echo str_word_count("ajhsdgfhjfvbf");

$x  =342;

var_dump($x);

$json = [324,345,4543,543,543,5,454,35,43];

var_dump(json_encode($json));
echo "<pre>";

$jsons = '{"sidfh":324,"sidfsdh":345,"sidfsdsh":4543,"sidfasdah":543,"sidasdfsafh":543,"sidsdfasdfh":5,"sidsdsadfh":454,"sidfqrweh":35,"sidfasqerewh":43}';
var_dump(json_decode($jsons));


class nc {
    public static function m(){
        echo "Hello World";
    }
}

nc::m();

class d{
    public static function ms($n , $u)
    {
        return $n * $u;
    }
}
$res = d::ms(4,6);
echo $res;

trait w{
    public function welcome(){
        echo "This function public";
    }

    public function new(){
        echo "This is a new";
    }
}
trait e{
    public function welcome1(){
        echo "This function public";
    }

    public function new1(){
        echo "This is a new";
    }
}

class nn{
    use w , e;
}

$nn = new nn();
$nn->welcome();
$nn->welcome1();

interface Animal{
    public function makesound();
}  

class cat implements Animal{
    public function makesound(){
        echo "This is a Cat Sound<br>";   
    }
}
Class dog implements Animal{
    public function makesound(){
        echo "This is a dog sound<br>";
    }
}

$cat = new cat();
$cat->makesound();
$dog = new dog();
$dog->makesound();

abstract class ParentClass{
   abstract public function prefixName($name);
}

class ChildClass extends ParentClass {
    
    public function prefixName($name ,$seprator = "", $greet = "Dear"){
        if($name == "Sahil Beniwal"){
            $prefix = "Mr.";
        } elseif ($name == "Akansha") {
            $prefix = "Mrs.";
        } else {
            $prefix = "Mr";
        }

        return "$greet  $prefix$seprator  $name";
    }        
}

$clas = new ChildClass;
echo $clas->prefixName("Sahil Beniwal");
echo "<br>";
echo $clas->prefixName("Akansha");
echo "<br>";
echo $clas->prefixName("AA");

// abstract class car{
//     public $name;

//     public function __construct($name){
//         $this->name = $name;
//     }

//     abstract public function intro();
// }
// class Audi extends car{
//     public function intro(){
//         return "This is a $this->name car";
//     }
// }

// class citron extends car{
//     public function intro(){
//         return "This is a $this->name car";
//     }
// }

// $audi = new Audi("Audi");
// echo $audi->intro();

// $cit = new citron("Citron");
// echo $cit->intro();

// Class Fruit{
//     public $name;
//     public $color;

//     public function __construct($name,$color){
//         $this->name = $name;
//         $this->color = $color;
//     }
//     public function intro(){
//         echo "This is a Name $this->name and the Color is $this->color";
//     }
// }

// Class Strawberry extends Fruit{
//     public $weight;

//     public function __construct($name,$color,$weight){
//         $this->name = $name;
//         $this->color = $color;
//         $this->weight = $weight;
//     }

//     public function intro(){
//         echo "A $this->name is $this->color and the weight is $this->weight";
//     }
// }

// $str = new Strawberry("Strawberry","red",50);

// $str->intro();


// class nesw{
//     const Message = "This is const keyword for using that all type of function";

//     public function n(){
//         echo self::Message;
//     }
// }
// $n = new nesw();
// $n->n();
// echo nesw::Message;
// class fruits{
    
//     public $apple;
//     public $banana;
//     private $g;
    
//     public function set_details($apple,$banana,$g){
//         $this->apple = $apple;
//         $this->banana = $banana;
//          $this->g = $g;
//     }
//     public function get_details(){
//         echo "First fruit name :" . $this->apple . "<br>Second fruit name:" . $this->banana . "<br>". $this->g;
//     }
// }

// $fr = new fruits();
// // var_dump($fr instanceof fruits);
// $fr->set_details("Apple","Banana","g");
// // $fr->set_details = "f";
// $fr->get_details();


// // constructor
// class cons{
//     public $name;
//     public $color;
    
//     function __construct($name,$color)
//     {   
//         $this->name = $name;
//         $this->color = $color;
//     }
//     function get_det(){
//         echo "Name:" .$this->name . "<br> Color". $this->color;
//     }
// }
// $c = new cons("Maruti","White");
// $c->get_det();

// class cd{
//     public $name;
//     public $color;

//     function __construct($name, $color){
//         $this->name = $name;
//         $this->color = $color;
//     }
//     function __destruct()
//     {
//         echo "<br>Name:".$this->name."<br>Color".$this->color;
//     }
// }

// $dc = new cd("Swift","White");
// // inheritance

// class ins{
//     public $ne;
//     public $d;
//     public function __construct($ne,$d){
//         $this->ne = $ne;
//         $this->d = $d;
//     }
//     public function intro(){
//         echo "This is nr $this->ne and the color $this->d";
//     }

//     protected function news(){
//         echo "The fruit is $this->ne and the color is $this->d.";
//     }
// }

// class straw extends ins{
//     public function mes(){
//         echo "Am Straw";
//         $this->news();
//     }
// }


// $ste = new straw("Ap","fg");
// $ste->mes();
// $ste->intro();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="text" id="inp">
    <button onclick="btn_dd()">Add</button>
    <button onclick="remove()">Remove</button>
    <ul id="list"></ul>
</body>
<script>
function btn_dd() {
    let li = document.createElement("li");
    li.innerHTML = document.getElementById("inp").value + "<input typr='text'>";
    document.getElementById("list").append(li);
    document.getElementById("inp").value = "";
}

function remove() {
    let listing = document.getElementById("list");
    if (listing.lastElementChild) {
        listing.lastElementChild.remove();
    }
}
</script>

</html>