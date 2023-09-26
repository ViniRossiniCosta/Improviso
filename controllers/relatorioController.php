<?php
class relatorioController extends Controller
{

    private $user;
    public function __construct()
    {
        parent::__construct();

        $this->user = new Users();
        if (!$this->user->checkLogin()) {
            header("Location: " . BASE_URL . "/login");
            exit;
        } else {

        }
    }

    public function index()
    {
        $data = array();
        $p = new Products();

        $data['list'] = $p->getLowQuantityProducts();

        $this->loadTemplate('relatorio', $data);
    }

}