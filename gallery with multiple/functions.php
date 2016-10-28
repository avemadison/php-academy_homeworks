<?php
function dd($a)
{
    echo '<pre>';
    print_r($a);
    echo '</pre>';
}
function requestIsPost ()
{
    return strtolower($_SERVER['REQUEST_METHOD'])=='post';
}

function requestIsGet()
{
    return (bool)$_GET;
}


function post($key)
{
    return isset($_POST[$key])? $_POST[$key] : null;
}


function get($key)
{
    return isset($_GET[$key])? $_GET[$key] : null;
}

//function save ( $comment)
//{
//    $res = file_put_contents(
//        'comments.txt',
//        $comment.PHP_EOL,
//        FILE_APPEND
//    );
//    if (!$res) {
//        die('Error');
//    }
//}


function redirect ($to)
{
    header('Location:'. $to);
    die;
}
function formIsValid ()
{
    return post('username') != ''
    && post('email') != ''
    && post('massage') != '';
}

function emailIsVisible($key)
{
    return (bool)$key ? $key : null;
}

function createComment($username, $email, $comment)
{
    $order = array("\r\n", "\n", "\r");
    $replace = '<br />';
    $comment = htmlspecialchars($comment);
    return array(
        'username' => htmlspecialchars($username),
        'email' => $email,
        'comment' => str_replace($order, $replace, $comment),
        'datetime' => date('Y-m-d H:i:s'),
        'rating' => 0,
        'email_invisible' => emailIsVisible(post('email_invisible')),
    );
}


function saveToFile($arr, $file)
{
    file_put_contents(
        $file,
        serialize($arr) . PHP_EOL,
        FILE_APPEND
    );
}


function loadFromFile($file)
{
    $commentsRaw = file($file);
    $comments = [];
    foreach ($commentsRaw as $item) {
        $comments[] = unserialize($item);
    }
    return $comments;
}

function getRatingUp()
{
    $array = array_reverse(loadFromFile(COMMENTS_FILE));
    $array[get('key')]['rating']++;
    $array = array_reverse($array);
    unlink(COMMENTS_FILE);
    foreach ($array as $t) {
        saveToFile($t, COMMENTS_FILE);
    }
}


function getRatingDown()
{
    $array = array_reverse(loadFromFile(COMMENTS_FILE));
    $array[get('key')]['rating']--;
    $array = array_reverse($array);
    unlink(COMMENTS_FILE);
    foreach ($array as $t) {
        saveToFile($t, COMMENTS_FILE);
    }
}

function getCommentDelete()
{
    $array = array_reverse(loadFromFile(COMMENTS_FILE));
    unset($array[get('key')]);
    $array = array_values($array);
    $array = array_reverse($array);
    unlink(COMMENTS_FILE);
    if ($array) {
        foreach ($array as $t) {
            saveToFile($t, COMMENTS_FILE);
        }
    } else file_put_contents(COMMENTS_FILE, '');
}
