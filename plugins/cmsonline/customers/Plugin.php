<?php namespace Cmsonline\Customers;

use Backend;
use System\Classes\PluginBase;


class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'customers',
            'description' => 'No description provided yet...',
            'author'      => 'cmsonline',
            'icon'        => 'icon-leaf'
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
            'Cmsonline\Customers\Components\MyComponent' => 'myComponent',
        ];
    }

    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'cmsonline.customers.some_permission' => [
                'tab' => 'customers',
                'label' => 'Some permission'
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'customers' => [
                'label'       => 'Customers',
                'url'         => Backend::url('cmsonline/customers/home'),
                'icon'        => 'icon-users',
                'permissions' => ['cmsonline.customers.*'],
                'order'       => 500,
            ],
        ];
    }

}
