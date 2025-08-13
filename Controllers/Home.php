<?php
class Home extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->model = new HomeModel();
        session_start();
    }

    public function index() {
        $data['title'] = 'Pagina Principal';
        $data['categorias'] = $this -> model -> getCategorias();
        $data['nuevosProductos'] = $this -> model -> getNuevosProductos();
        $this->views->getView('home', "index", $data);
    }
}