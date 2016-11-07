<?php

require 'models/book.php';

$id = get('id');

if ($id) {
	$book = findBookById($id);
} else {
	echo 'new book';

	$book = array(
        'id' => null,
        'title' => null,
        'price' => null,
        'description' => null,
        'is_active' => null
    );
}
?>

<form method="post">
    <input type="hidden" name="id" value="<?=$book['id']?>">

    Title : <input type="text" name="title" value="<?=$book['title']?>"> <br>
    Price : <input type="text" name="price" value="<?=$book['price']?>"> <br>
    Description: <textarea name="description" id="" cols="30" rows="10"><?=$book['description']?></textarea> <br>
    Is active: <input type="checkbox" name="is_active" <?=$book['is_active'] ? 'checked': '' ?> > <br>
    <button>Go</button>

</form>
