<?php

function findAllBooks() 
{
	global $link;
	$sql = "SELECT * FROM book";

	$res = mysqli_query($link, $sql);

	$books = [];
	while ($row = mysqli_fetch_assoc($res)) {
		$books[] = $row;	
	}

	return $books;
}


function findBookById($id) 
{
	global $link;
	$id = (int)$id;
	$sql = "SELECT * FROM book WHERE id = {$id}";
	$res = mysqli_query($link, $sql);

	return mysqli_fetch_assoc($res);
}

function removeBookById($id) 
{
	global $link;
	$id = (int)$id;
	$sql = "DELETE FROM book WHERE id = {$id}";
	return mysqli_query($link, $sql);
}

function saveBook(array $book) 
{

}