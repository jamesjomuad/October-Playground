<?php namespace Cmsonline\Invoice\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Dashboard Back-end Controller
 */
class Dashboard extends Controller
{


    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Cmsonline.Invoice', 'invoice', 'dashboard');
    }
    
    public function index(){
        
        $this->var['days'] = array(
            'Sunday',
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday'
        ); 
    }
    
}