<?php

class MainController extends Controller
{

    function test1()
    {
        $fromDomain = parse_url(getRequestReferer())['host'];
        setcookie('referrer', $fromDomain);

        $file = '/file.exe';
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=\"" . basename($file) . "\"");
        readfile($file);
    }

    function test2()
    {
        $array = [
            2313213,
            228,
            3213,
            543543,
            228,
            23132133
        ];

        $time = -microtime(true);
        foreach(array_count_values($array) as $val => $c)
            if($c == 2) $matches[] = $val;
        $time += microtime(true);
        echo 'Found: <br>';
        foreach ($matches as $item) {
            echo $item.'<br>';
        };
        echo "<br>Execution time: ".$time;

    }

    function test3()
    {
        $this->render('blocks');
    }
}