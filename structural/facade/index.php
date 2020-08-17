<?php

// The Facade Design Pattern helps us to add a higher level element to abstract the code provided by sub-systems in order to reduce complexity and maintainability

/**
 * To implement the Facade Design Pattern in an application, we need two elements (+ the abstracted code)
 * 
 *  The Client : Which is going to send a request for a specific task (send an email, getting parsed data from a web service)
 *  The Facacde : The object which is going to abstract all the complexity needed for a request
 */

 Include 'Facade.php';
 Include 'Client.php';
 Include 'ComplexeService.php';
 Include 'VeryComplexeService.php';
 Include 'IncrediblyComplexeService.php';

 Use Designpatterns\Structural\Facade\Client;

 (new Client)->execute();