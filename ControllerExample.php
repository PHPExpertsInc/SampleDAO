<?php

//omitting setting exception mode, don't forget it!
$db = new PDO(...);
$authorDao = new AuthorDao($db);
$authorService = new AuthorService($authorDao);

$authorService->getBooks($author->getPrimaryKey());

//tip: you can simplify construction by using a Builder pattern, or a Factory pattern if you want to handle more than one implementation of the service.
