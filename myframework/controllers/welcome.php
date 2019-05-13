<?php 
class welcome extends AppController{

    public function __construct($parent){
        $this->parent=$parent;
    }
    public function home(){
        //echo "hello";
        $data = array();
        $data["pagename"]= "home";
        $data["navigation"] = array("home"=>"/welcome/home", "api"=>"/api/about", "crud"=>"/crud/about");
        
        $this->parent->getView("navigation",$data);
        $this->parent->getView("header");
        $this->parent->getView("welcome");
        $this->parent->getView("footer");
    }
}
?>