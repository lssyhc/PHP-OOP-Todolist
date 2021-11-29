<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodoList(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = "Belajar PHP Dasar";
    $todolistRepository->todolist[2] = "Belajar PHP OOP";
    $todolistRepository->todolist[3] = "Belajar PHP Database";

    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodolist();
}

function testAddTodoList(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();
}

function testRemoveTodoList(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();

    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();

    $todolistService->removeTodolist(4);
    $todolistService->showTodolist();

    $todolistService->removeTodolist(2);
    $todolistService->showTodolist();

    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();
}

testRemoveTodoList();
