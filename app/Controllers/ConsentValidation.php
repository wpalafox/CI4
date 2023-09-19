<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ConsentController extends BaseController
{
    public function consent_validation()
    {   
        echo "Inside consent_validation"; exit;
        // Start a session if not already started
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Get POST data
        $a = $this->request->getPost('Age');
        $b = $this->request->getPost('understand');
        $c = $this->request->getPost('participate'); // corrected the typo

        // Store data in session
        $this->session->set([
            'Age_flag'         => $a,
            'understand_flag'  => $b,
            'participate_flag' => $c,
            'is_logged_in'     => 1
        ]);

        // Check consent
        if ($a && $b && $c) {
            return view('signup');
        } else {
            return view('consent_fail');
        }
    }
}
