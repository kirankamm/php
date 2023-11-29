<?php

interface  Room1{
   public function student1();

} 


interface  Room2{

   public function student2();
}

class test implements Room1,Room2{

  public function student1(){
echo "combination of both class give one prodecte unity";
  }

  public function student2(){
    echo "combination of both class give one prodecte unity";
      }

}
$obj=new test();

echo $obj->student1();

?>

