<?php
use App\Categories;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Categories::class, function (ModelConfiguration $categories) {
    $categories->setTitle('Categories');
    // Display
    $categories->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
           AdminColumn::text('id')->setLabel('id'),
           AdminColumn::text('name')->setLabel('name'),
           AdminColumn::text('parent_id')->setLabel('Parent Category'),
           AdminColumn::text('description')->setLabel('description'),
           AdminColumn::text('keywords')->setLabel('keywords')
        ]);
        $display->paginate(15);
        return $display;
    });


    // Create And Edit
    $categories->onCreateAndEdit(function() {
        $form = AdminForm::panel()->addBody(
<<<<<<< HEAD
            AdminFormElement::text('name', 'Title')->required(),
            //AdminFormElement::number('parent_id', 'Parent ID'),
            AdminFormElement::select('parent_id', 'Parent ID', '\App\Categories')->setDisplay('name'),
            AdminFormElement::textarea('description', 'Description')->required(),
            AdminFormElement::text('keywords', 'Keywords')->required()
=======
            AdminFormElement::text('name', 'Name')->required()->unique(),
             AdminFormElement::select('parent_id', 'Parent_id','App\Categories')->setDisplay('name'),
            AdminFormElement::textarea('description', 'Description')->setRows(2),
            AdminFormElement::text('keywords', 'Keywords')
>>>>>>> refs/remotes/origin/master
        );
        return $form;
    });
})
    ->addMenuPage(categories::class, 0)
    ->setIcon('fa fa-bank');
