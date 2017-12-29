<?php 
		 header("Access-Control-Allow-Origin: *");
	  $books=[];
	  $search_query = $_REQUEST['q'];
	  $search_book = json_decode(file_get_contents("http://mcc-ws-odd1718.herokuapp.com/books.php?q=".$search_query));
	  $books = $search_book;

	header('Content-Type: application/json');
	print json_encode($books);

 ?>