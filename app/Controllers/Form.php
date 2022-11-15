<?php

namespace App\Controllers;

use Config\Services;

class Form extends BaseController
{
    protected $helpers = ['form'];

    public function form()
    {
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('insertaDato', [
                'validation' => Services::validation(),
            ]);
        }

        $rules = [];

        if (! $this->validate($rules)) {
            return view('signup', [
                'validation' => $this->validator,
            ]);
        }

        return view('mostrarDato');
    }
}