<?php
    echo strlen("hello world!"); // output = 12
    echo str_word_count("Hello world!"); // output = 2
    echo str_rev("Hello world!"); // outputs !dlrow olleH
    // search for substring position 
    echo strpos("hello world!" , "world"); // outputs 6
    // replace string 
    echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>