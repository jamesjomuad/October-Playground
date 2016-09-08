<?php namespace Cmsonline\Invoice;

use Backend;
use System\Classes\PluginBase;


class Plugin extends PluginBase
{
    function __construct()
    {
        $this->version      = 'v3.0';
        $this->name         = 'Email Invoice';
        $this->baseUrl      = 'cmsonline/invoice/';
        $this->assetPath    = '/plugins/cmsonline/invoice/assets';
        $this->pdfUrl       = 'https://email-invoice.com/pdf/';
    }
    
    public static function get()
    {
        return new Plugin;
    }

    public function pluginDetails()
    {
        return [
            'name'          => 'invoice',
            'description'   => 'No description provided yet...',
            'author'        => 'cmsonline',
            'icon'          => 'icon-envelope'
        ];
    }

    public function register()
    {

    }

    public function boot()
    {

    }

    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Cmsonline\Invoice\Components\MyComponent' => 'myComponent',
        ];
    }

    public function registerPermissions()
    {
        return [
            'cmsonline.invoice.invoices' => [
                'tab' => 'Invoice',
                'label' => 'Manage Invoice'
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'invoice' => [
                'label'       => 'Invoice',
                'url'         => Backend::url('cmsonline/invoice/invoices'),
                'icon'        => 'icon-envelope',
                'permissions' => ['cmsonline.invoice.*'],
                'order'       => 500,
            ],
        ];
    }

}
