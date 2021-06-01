<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class sessionAdmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(session('rol') == 'seller'){
            return redirect()->to(base_url('/clients'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}