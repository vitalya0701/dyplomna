<?php
use App\categories;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(categories::class, function (ModelConfiguration $categories) {
    $categories->setTitle('categories');
    // Display
    $categories->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
           AdminColumn::text('id')->setLabel('id'),
           AdminColumn::text('name')->setLabel('name'),
           AdminColumn::text('parent_id')->setLabel('parent_id'),
           AdminColumn::text('description')->setLabel('description'),
           AdminColumn::text('keywords')->setLabel('keywords')
        ]);
        $display->paginate(15);
        return $display;
    });


    // Create And Edit
    $categories->onCreateAndEdit(function() {
        $form = AdminForm::panel()->addBody(
          //  AdminFormElement::text('title', 'Title')->required()->unique(),
          //  AdminFormElement::textarea('address', 'Address')->setRows(2),
          //  AdminFormElement::text('phone', 'Phone')
        );
        return $form;
    });
})
    ->addMenuPage(categories::class, 0)
    ->setIcon('fa fa-bank');