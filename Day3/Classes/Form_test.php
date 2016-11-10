<?php

include('form_class.php');

$form = new FormClass();

$formStart = $form->startForm('<?php echo $_SERVER[\'PHP_SELF\']; ?>', 'post') .
    PHP_EOL .
    $form->startTag('p') .
    PHP_EOL .
    $form->addLabelForm('City: ') .
    $form->addInput('text', 'City', '') .
    $form->endTag() .
    PHP_EOL .
    $form->addInput('submit','submit','submit') .
    $form->endForm();

echo $formStart;