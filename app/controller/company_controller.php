<?php

require_once(__ROOT__ . "controller/controller.php");

class CompanyController extends Controller
{
  public function insertComp()
  {
    $company_name = $_REQUEST['company_name'];
    $type = $_REQUEST['type'];
    $email = $_REQUEST['email'];
    $url = $_REQUEST['url'];
    $phoneNumber = $_REQUEST['phoneNumber'];
    $address  = $_REQUEST['address'];

    $this->model->insertCompany($company_name, $type, $email, $url, $phoneNumber, $address);
  }


  public function editComp()
  {
    $company_id = $_POST['company_id'];
    // $type =$_POST['type'];
    $type = "test";
    $company_name = $_POST['company_name'];
    $email = $_POST['email'];
    $url = $_POST['url'];
    $phoneNumber = $_POST['phoneNumber'];
    $address  = $_POST['address'];

    $this->model->editCompany($company_id, $type, $company_name, $email, $url, $phoneNumber, $address);
  }


  public function deleteComp($company_id)
  {
    $company_id = $_REQUEST['company_id'];
    $this->model->getCompany($company_id)->deleteCompany($company_id);
  }
}
