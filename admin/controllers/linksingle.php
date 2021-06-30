<?php
require_once "models/linksingle.php";
require_once "../lib/myfunctions.php";
class linksingle
{
    public function __construct()
    {
        $this->model = new Model_linksingle();
        $this->lib = new lib();
        $act = "index";

        if (isset($_GET["act"]) == true) {
            $act = $_GET['act'];
        }

        switch ($act) {
            case 'index':
                $this->index();
                break;
            case 'edit':
                $this->addNew();
                break;

            default:

                break;
        }

    }
    public function index()
    {
        $list = $this->model->listRecords();
        $page_title = "Danh sách danh mục";
        $page_file = "views/linksingle_index.php";
        require_once "views/layout.php";
    }
    public function addNew()
    {
        if (isset($_GET['id']) && ($_GET['ctrl'] = 'categories')) {
            $oneRecode =  $this->model->showOneLink($_GET['id']);
            $page_title = "Sửa danh mục";
            $page_file = "views/linksingle_edit.php";
        } 

        if (isset($_POST['them']) && $_POST['them']) {
            $name = $_POST['name'];
            $name = $this->lib->stripTags($name);

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                settype($id, "int");
                
                $this->edit($name, $id);
            }
        }

        require_once "views/layout.php";
    }

    public function edit($name, $id)
    {
        if (isset($_GET['id'])) {

            if ($this->model->editLinkSingle($name, $id)) {
                echo "<script>alert('Sửa thành công')</script>";
                header("location: ?ctrl=linksingle");
            } else {
                echo "<script>alert('Sửa thất bại')</script>";
            }
        }
        require_once "views/layout.php";
    }

}
