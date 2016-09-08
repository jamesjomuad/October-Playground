<?php namespace Cmsonline\Invoice\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use cmsonline\invoice\Plugin;
use Cmsonline\Invoice\Models\Account;
use Cmsonline\Invoice\Models\Invoice;
use Pusher;


class Invoices extends Controller
{

    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct(){
        parent::__construct();
        
        $this->assetPath = Plugin::get()->assetPath;
        $this->addCss($this->assetPath.'/css/invoice.css');
        $this->addJs('https://js.pusher.com/3.2/pusher.min.js');
        $this->addJs($this->assetPath.'/js/pusher.js');
        $this->addJs($this->assetPath.'/js/main.js');
        
        BackendMenu::setContext('Cmsonline.Invoice', 'invoice', 'invoices');

        
        // $pusher = new Pusher(env('PUSHER_KEY'),env('PUSHER_SECRET'),env('PUSHER_APP_ID'));
        // $options = array('encrypted' => true);    

        // $data['message'] = 'hello world';
        // $pusher->trigger('test_channel', 'my_event', $data);

        // dd([
            // $pusher,
            // $pusher->get_channels(),
            // $pusher->trigger('jwave', 'my_event', $data)
        // ]);
        
    }

	public function onRefresh(){
		$lastID = request()->input('lastID');
		
		return [
			'invoices' => Invoice::getLatest($lastID-5)->get()->toArray()
		];
		return response()
		->json(Invoice::getLatest($lastID-5)->get()->toArray())
		->send();
	}
	
}







