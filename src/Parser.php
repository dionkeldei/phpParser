<?php

namespace dionkeldei\BladeParser;

class Parser
{
    __construct(html){
      $this->html = html;
    }

    function showHtml(){
      return $this->html;
    }
}
