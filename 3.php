<?php abstract class AbstractClass
{

   
    abstract public function new();
    abstract public function save();

   
    public function getName($stroka) {
        return $stroka;
    }
}

class ConcreteClass1 extends AbstractClass
{
   
  public function new() {
        return "new zapis";
    }

    public function save() {
        return "Save";
    }
    public function getName($stroka){

        return parent::getName($stroka)." Здорово!";
    }
}
$obj=new ConcreteClass1();
echo $obj->getName("Сергей-");

?>