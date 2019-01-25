<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\OrderRequest as StoreRequest;
use App\Http\Requests\OrderRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class OrderCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class OrderCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();
    
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Order');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/order');
        $this->crud->setEntityNameStrings('order', 'orders');

        // Types
        // $this->crud->addColumn([
        //     // 1-n relationship
        //     'label' => "User", // Table column heading
        //     'type' => "select",
        //     'name' => 'user_id', // the column that contains the ID of that connected entity;
        //     'entity' => 'user', // the method that defines the relationship in your Model
        //     'attribute' => "name", // foreign key attribute that is shown to user
        //     'model' => "App\Models\BackpackUser", // foreign key model
        // ]);
        
        $this->crud->addField([
            // 1-n relationship
            'label' => "User", // Table column heading
            'type' => "select",
            'name' => 'user_id', // the column that contains the ID of that connected entity;
            'entity' => 'user', // the method that defines the relationship in your Model
            'attribute' => "name", // foreign key attribute that is shown to user
            'model' => "App\Models\BackpackUser", // foreign key model
        ]);
//  -------------------------------------------- USER_ID ---------------------------------------------------------

        // $this->crud->addColumn([
        //     // 1-n relationship
        //     'label' => "Plan", // Table column heading
        //     'type' => "select",
        //     'name' => 'plan_id', // the column that contains the ID of that connected entity;
        //     'entity' => 'plan', // the method that defines the relationship in your Model
        //     'attribute' => "name", // foreign key attribute that is shown to user
        //     'model' => "App\Models\Plan", // foreign key model
        // ]);

        $this->crud->addField([
            // 1-n relationship
            'label' => "Plan", // Table column heading
            'type' => "select",
            'name' => 'plan_id', // the column that contains the ID of that connected entity;
            'entity' => 'plan', // the method that defines the relationship in your Model
            'attribute' => "name", // foreign key attribute that is shown to user
            'model' => "App\Models\Plan", // foreign key model
        ]);
//  -------------------------------------------- PLAN_ID ---------------------------------------------------------
                
        // $this->crud->addColumn([
        //     // 1-n relationship
        //     'label' => "Schedule", // Table column heading
        //     'type' => "select",
        //     'name' => 'schedule_id', // the column that contains the ID of that connected entity;
        //     'entity' => 'schedule', // the method that defines the relationship in your Model
        //     'attribute' => "name", // foreign key attribute that is shown to user
        //     'model' => "App\Models\Schedule", // foreign key model
        // ]);

        $this->crud->addField([
            // 1-n relationship
            'label' => "Schedule", // Table column heading
            'type' => "select",
            'name' => 'schedule_id', // the column that contains the ID of that connected entity;
            'entity' => 'schedules', // the method that defines the relationship in your Model
            'attribute' => "name", // foreign key attribute that is shown to user
            'model' => "App\Models\Schedule", // foreign key model
        ]);
//  -------------------------------------------- SCHEDULE_ID ---------------------------------------------------------    
        
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();

        // add asterisk for fields that are required in OrderRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
