<?php namespace Cmsonline\Customers\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Home Back-end Controller
 */
class Home extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Cmsonline.Customers', 'customers', 'home');
    }
}