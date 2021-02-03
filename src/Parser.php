<?php

namespace dionkeldei\BladeParser;

class Parser
{
    function __construct(html){
      $this->html = html;
    }

    function showHtml(){
      return $this->html;
    }
}
