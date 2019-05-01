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
            AdminFormElement::text('name', 'Name')->required()->unique(),
             AdminFormElement::select('parent_id', 'Parent_id','App\Categories')->setDisplay('name'),
            AdminFormElement::textarea('description', 'Description')->setRows(2),
            AdminFormElement::text('keywords', 'Keywords')
        );
        return $form;
    });
})
    ->addMenuPage(categories::class, 0)
    ->setIcon('fa fa-bank');