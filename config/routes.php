<?php

$app->get('/',  function() use ($app)  {
    $template = $app->twig->loadTemplate('index.html');
    echo $template->render(array('title' => 'S'));
});