<?php

use function PHPSTORM_META\type;

require_once "../../../system/config.php";
    require_once "../../../system/database.php";
    require_once "../../models/home.php";
    $model = new Model_home;
    session_start();

    switch ($_POST['action']) {
        case 'getData':
            $array      = array();   
            $filter     = $_POST['filterOb'];
            $data       = json_decode($filter);            
            $form       = $_POST['form'];
            if ($form > 0) {
                $form   = $form * 9;
            }    
            if (isset($data->keyWord) && $data->keyWord != '') {
                $keyWord = $data->keyWord;
                $dataProducts = $model->getBookByKeyWordFormLimit($keyWord, $form);
                $amountProduct = $model->getAmountBookByKeyWord($keyWord);

                echo json_encode([$dataProducts, $amountProduct, $keyWord, $form]);                         
            } else {
                $notOr      = true;   
                $sqlCheck   = false;   
                $where      = false;
                $justClass  = false;
                            
                $type       = $data['0']->type;
                $class      = $data['1']->class;
                $idcate     = $data['2']->category;

                $sql        = 'SELECT * FROM `book` ';

                if (count($type) > 0 && $type != "") {
                    if ($where == false) {
                        $sql  .= 'WHERE ';
                        $where = true;
                    } 
                    $sqlCheck  = true;   
                    $notOr     = false;          
                    $justClass = false;
                    $sql      .= 'type in (';
                    $sql      .= implode(',', $type);
                    $sql      .= ')';
                }

                if (count($class) > 0 && $class[0] != "") {
                    if ($where == false) {
                        $sql  .= 'WHERE ';
                        $where = true;
                    } 
                    $sqlCheck = true;
                    $justClass = true;
                    if ($notOr == false) {
                        $sql  .= ' AND ';
                    } else {
                        $notOr = false;
                    }

                    $sql .= 'class in (';
                    $sql .= implode(',', $class);
                    $sql .= ')';
                }

                if (count($idcate) > 0 && $idcate[0] > 0) {
                    if ($where == false) {
                        $sql  .= 'WHERE ';
                        $where = true;
                    } 
                    $sqlCheck = true;
                    $justClass = false;
                    if ($notOr == false) {
                        $sql  .= ' AND ';
                    } else {
                        $notOr = false;
                    }

                    $sql .= 'idcate in (';
                    $sql .= implode(',', $idcate);
                    $sql .= ')';
                }
                if ($sqlCheck === true || $form > 0) {
                    $amountProduct = $model->getAmountProduct($sql);
                    $amountProduct = count($amountProduct);
                }
                if ($justClass == true) {
                    $sql .= ' ORDER BY idcate ASC, class ';
                } else {            
                    $sql .= ' ORDER BY idcate ASC, class ';
                }
                $sql .= ' limit ' . $form . ' , 9';

                if ($sqlCheck === true || $form > 0) {
                    $dataProducts = $model->getProductsBySql($sql);
                    
                } else {                                           
                    $dataProducts = $model->getProductDefault($form);
                    $amountProduct = $model->getAmountProductDefault();
                    
                    // $dataProducts = '';
                }

                echo json_encode([$dataProducts, $amountProduct, $sql, $form]);                         
            }
            break;    
        case "getDataSpResources": 
            $array      = array();               
            $class      = $_POST['class'];
            $form       = $_POST['form'];
            
            settype($class, "int");
            settype($form, "int");

            // if ($class > 12) { // get all
            //     if ($form > 0) {
            //         $form = ($form - 1) * 9;
            //         $listSpResource   = $model->getAllSupportResourceLimitForm($form);                    
            //     } else {                
            //         $listSpResource   = $model->getAllSupportResourceLimit();                    
            //     }
            //     $amountSupport    = $model->getAmountSpResources();
            // } else {  // get by class                       
                                              
            // }
            if ($form > 0) {
                $form = ($form - 1) * 9;    
            }
            
            $listSpResource   = $model->getSupportResourceBy($class, $form);            
            $amountSupport    = $model->getAmountSupportResourceBy($class); 

            echo json_encode([$listSpResource, $amountSupport, $form, $class]);
            
            break;   
        default:
            # code...
            break;
    }
?>