<?php 

class Todo{

    public function isDone(){
        return ($this->done) ? true : false; //false
    }

    public function isImportant(){
       
        return ($this->important) ? "Important" : "Not Important";
        
    }

    public function makeItDone(){
      $this->done=1;
    }

    public function showTodo(){
       
       if($this->isDone()){
        return "<s>" . $this->title . "</s>" . "<span>&nbsp;" . $this->isImportant() . "</span>"; 
              
       }else{
        return $this->title. "<span>&nbsp;" . $this->isImportant() . "</span>"; 
        
       }

  
    }
}
?>