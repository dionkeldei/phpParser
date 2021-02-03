<?php

namespace dionkeldei\BladeParser;

class Parser
{
    function __construct($html){
      $this->html = $html;
      $this->variables = [];
    }


    function showHtml(){
      return $this->html;
    }

    function getVariables(){
      preg_match_all('/\\{{(.*?)\\}}/', $this->html, $match);
      foreach($match[1] as $var){
        if(strpos($var,"$") == 0){
          $var = explode('$',$var);
          array_push($this->variables,$var[1]);
        }
      }
      return $this->variables;
    }
}

