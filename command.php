#!/usr/bin/env php

<?php

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

require 'vendor/autoload.php';

$app = new Application('sohelIt', '1.0.0');

$app->register('sayHello')
    ->setDescription('This is my fist command')
    ->addArgument('name', InputArgument::REQUIRED, "Your name is required and string")
    ->setCode(function (InputInterface $input, OutputInterface $output) {
        $name = $input->getArgument('name');
        $output->writeln('<comment>Hello ' . $name . '</comment>');

    });

$app->run();