<?php

namespace Src\Controllers;

use \Psr\Http\Message\RequestInterface;
use \Psr\Http\Message\ResponseInterface;

/**
 * Description of WinesController
 *
 * @author admin
 */
class WinesController extends Controller{

    public function index(RequestInterface $request, ResponseInterface $response, $args) {

        if (empty($args)) {
            $this->render($response, 'wines/index.html.twig');
        } else {
            $this->render($response, 'wines/search_id.html.twig');
        }
    }

    public function home(RequestInterface $request, ResponseInterface $response){
        $result = $this->db;
        $this->render($response, 'wines/home.html.twig');
    }
    
    public function search(RequestInterface $request, ResponseInterface $response, $args) {
        $this->render($response, 'wines/search.html.twig', ['wineName' => $args['name']]);
    }

    public function add(RequestInterface $request, ResponseInterface $response) {
        true;
    }

}
