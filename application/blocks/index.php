<?php
$this->setView(__DIR__.'/templates',__DIR__.'/cache');

echo $this->template->render('app', ['name' => 'John Doe']);	