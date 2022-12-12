<?php
    namespace AlekseyUvarov\cold_hot\Controller;
    use function AlekseyUvarov\cold_hot\View\showGame;

    function startGame(){
        echo "Game started".PHP_EOL;
        showGame();
    }
?>