<?php

trait Logger
{
    function __construct(String $mensagem)
    {
        echo "$mensagem";
    }
}
