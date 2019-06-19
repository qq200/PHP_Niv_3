<pre>
<?php
// class/ object?
    //structured data
    //costum dada type
    //politisc
    //relation
    //entities -properties/methods
    $user_array=[
        'username'=>'valentin99',
        'pasword'=>'valiushik99',
        'year'=>1999
    ];
    $user_array['gender']='M';
    var_dump($user_array);        
//////////////////////////////////////////
    $user_object=(object)$user_array;
    $user_object->gender='M';
    var_dump($user_object);

    print $user_object->year;
    print $user_object->pasword;
    print $user_object->username."<br>";
/////////////////////////////////////////////////////
////////////////////////////////////
$product=new stdClass();
$product->name="iPhone Xii";
$product->price=new stdClass();
$product->price->amount=500;
$product->price->currency='EUR';
$product->about=function(){
    print "this is a product";
};
var_dump($product);
/////////////////////////////////////////////////////
////////////////////////////////////////
//1) define a class
class Product{   ///---CamelCase
    public $name= "iPhone Xii";
    public $price="500EUR";
    public $quantity="10";

    public function __construct($name, $price, $quantity){
        $this->name=$name;
        $this->price=$price;
        $this->quantity=$quantity;
    }

}// ACCES MODIFIER : public, private, protected
//2) create object of a class

$p1 =new Product("Galaxy", "300EUR", 10);
$p2 =new Product("Galaxy z1", "400EUR", 110);
$p3 =new Product("Galaxy a3", "900EUR", 20);
var_dump($p1);
var_dump($p2);
var_dump($p3);


?>
</pre>