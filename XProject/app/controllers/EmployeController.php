<?php
include "app/sevices/EmployeService.php";
class EmployeController
{

    private $employeService;
    public function __construct(){
        $this->employeService = new EmployeService();
    }
    public function index(){
       
          
        // Tương tác với Services/Models
       $employees = $this->employeService->getAll();
       
       include "/app/views/index.php";
      
    }
}