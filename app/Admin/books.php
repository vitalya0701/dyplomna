<?php
use App\Book;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(book::class, function (ModelConfiguration $books) {
    $books->setTitle('books');
    // Display
    $books->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
           AdminColumn::text('id')->setLabel('id'),
           AdminColumn::text('name')->setLabel('name'),
           AdminColumn::text('category_id')->setLabel('category_id'),
           AdminColumn::image('image', 'Image'),
        ]);
        $display->paginate(15);
        return $display;
    });


    // Create And Edit
    $books->onCreateAndEdit(function() {
        $form = AdminForm::panel()->addBody(
            AdminFormElement::text('name', 'Name')->required(),
            AdminFormElement::image('image', 'Image')->required(),
             AdminFormElement::select('category_id', 'category_id','App\Categories')->setDisplay('name'),
            AdminFormElement::textarea('description', 'Description')->setRows(2)

        );
        return $form;
    });
})
    ->addMenuPage(Book::class, 0)
    ->setIcon('fa fa-bank');