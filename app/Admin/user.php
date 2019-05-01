<?php
use App\User;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(User::class, function (ModelConfiguration $model) {
    $model->setTitle('Users');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
           AdminColumn::text('email')->setLabel('Email'),
           AdminColumn::text('name')->setLabel('name'),
           AdminColumn::text('created_at')->setLabel('created_at'),
           AdminColumn::text('updated_at')->setLabel('updated_at')
        ]);
        $display->paginate(15);
        return $display;
    });


    // Create And Edit
    $model->onCreateAndEdit(function() {
        $form = AdminForm::panel()->addBody(
            AdminFormElement::text('title', 'Title')->required()->unique(),
            AdminFormElement::textarea('address', 'Address')->setRows(2),
            AdminFormElement::text('phone', 'Phone')
        );
        return $form;
    });
})
    ->addMenuPage(User::class, 0)
    ->setIcon('fa fa-bank');