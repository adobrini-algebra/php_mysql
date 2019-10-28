<?php

class Validation{

    private $db;
    private $errors = array();
    private $passed = false;

    public function __construct(){
        $this->db = DB::getInstance();
    }

    public function check($inputs = array()){
        foreach ($inputs as $input => $rules) {
            foreach ($rules as $rule => $rule_value) {

                $input_value = escape(trim(Input::get($input)));

                if ($rule === 'required' && empty($input_value)) {
                    $this->addError($input, "Field $input is required.");
                }elseif(!empty($input_value)){
                    switch ($rule) {
                        case 'min':
                            if (strlen($input_value) < $rule_value ) {
                                $this->addError($input, "Field $input must have minimum of $rule_value characters.");
                            }
                            break;
                        case 'max':
                            # code...
                            break;
                        case 'unique':
                            # code...
                            break;
                        case 'matches':
                            # code...
                            break;
                        case 'pattern':
                            # code...
                            break;
                        
                        default:
                            # code...
                            break;
                    }
                }
            }
        }
    }

    private function addError($input, $error){
        $this->errors[$input] = $error;
    }

    public function hasError($input){
        if (isset($this->errors[$input])) {
            return $this->errors[$input];
        }
        return false;
    }

    public function getErrors(){
        return $this->errors;
    }

    public function passed(){
        return $this->passed;
    }
}