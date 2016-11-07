<?php

require 'models/book.php';
$books = findAllBooks();

if (get('action') == 'delete') {
	$id = get('id');

	$res = removeBookById($id);

	if ($res === false) {
		setFlash('Error');
    	redirect('/index.php?page=book_list');
	}

	setFlash('Removed');
    redirect('/index.php?page=book_list');
}

?>

<a href="/index.php?page=book_edit" class='btn btn-success'>Add book</a>

<table border='1' cellspacing="0" cellpadding="10" width="100%">
	
<tr>
	<th>ID</th>
	<th>Title</th>
	<th>Price</th>
	<th>Actions</th>
</tr>

<?php foreach ($books as $book) : ?>
<tr>
	<td><?=$book['id']?></td>
	<td><?=$book['title']?></td>
	<td><?=$book['price']?> UAH </td>
	<td>
		<a href="/index.php?page=book_edit&amp;id=<?=$book['id']?>">Edit</a>
		<a href="/index.php?page=book_list&amp;action=delete&amp;id=<?=$book['id']?>">Delete</a>
	</td>
</tr>
<?php endforeach; ?>

</table>

