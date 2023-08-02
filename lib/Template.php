<?php class Template{
    // Path to template 
    protected $template;
    // Vars Passed in 
    protected $vars = array(); 


    // Constructor of the template 
    public function __construct($template){
        $this->template = $template;
    }

    // get method 
    public function __get($key){
        return $this->vars[$key];
    }

    // set method 
    public function __set($key, $value){
        $this->vars[$key] = $value;
    }

    // to string method 
    public function __toString(){
        extract($this->vars); 
        chdir(dirname($this->template));

        // Start output buffering, before being displayed to the screen 
        ob_start();

        include basename($this ->template); 

        // This function gets the contents of the output buffer, discards the buffer, and turns off output buffering
        return ob_get_clean(); 
    }

}