<?php

namespace ToiLaDev\Page;

use ToiLaDev\Traits\ModuleServiceProviderTrait;
use ToiLaDev\Page\Repositories\PageRepository;
use ToiLaDev\Page\Repositories\PageRepositoryInterface;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    use ModuleServiceProviderTrait;

    public $casts = [
        'ToiLaDev\Page\Models\Page' => 'ToiLaDev\Page\Controllers\PageController',
    ];

    private $permissions = [
        'view'         => 'View Page',
        'create'       => 'Create Page',
        'edit'         => 'Edit Page',
        'delete'       => 'Delete Page'
    ];
    private $appendAdminMenus = [
        'content' => [
            'page' => [
                'title'     => 'Pages',
                'icon'      => 'file',
                'route'     => 'admin.pages.index',
                'permission'=> 'page.view'
            ]
        ]
    ];

//    private $notications = [
//        [
//            'for' => 'employee',
//            'key' => 'test',
//            'title' => 'Test',
//            'type' => ['email', 'sms'],
//            'default' => ['email']
//        ]
//    ];

    //private $theme = true;
}
