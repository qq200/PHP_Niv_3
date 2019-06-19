<!-- <pre> -->
<?php
class Button{
    //
    public $text;
    public $bg_color;
    public $text_color;

    public function __construct($text="OK",$bg_color="blue",$text_color="black"){
        $this->text=$text;
        $this->bg_color=$bg_color;
        $this->text_color=$text_color;
    }
    public function render(){ //metod
        print"<button style=\"color:{$this->text_color}; background:{$this->bg_color};\">{$this->text}</button>";
    }
}
$b1=new Button("Back","white" );
$b1->render();
$b2=new Button();
$b2->render();
$b3=new Button("Cancel", "red", "black");
$b3->render();
var_dump($b1);
var_dump($b2);
var_dump($b3);

//ACASA
//$color="#FF6677; 
//function hex_to_rgb($clor){
    //return [255, 66,77]
//}
?>
<?php
// __construct- introduce parametii initiali;
// __destruct- participa la stergere pentru a elibera memoria
// __get, __set- participa la citire si inscrierea proprietatilor
// __toString- preface in string
// __clone- cloneaza obiectul


?>