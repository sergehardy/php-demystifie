<?php

/**
 * usage:
 * 
 * In MindMup: File > Download as > Outline 
 * - Format: Markdown
 * - Outline type: 3 heading levels + bullet points
 * + Include text nodes
 * => will output xxxxx.outline.md
 * 
 * then:
 * 
 * php generate_slides.php xxxxx.outline.md Slides/
 * 
 */


if(!isset($argv[1]) || !isset($argv[2]))
  exit("Missing args\n");

if(!file_exists($argv[1]))
  exit("Incorrect input file\n");

if(!is_dir($argv[2]))
  exit("Incorrect output dir\n");


$lines = file($argv[1]);
$output_dir = $argv[2];

$last_slide="";
$n="";
$title="";
$plan=[];

foreach($lines as $line) 
{   
    if(substr ( $line , 0,1 ) == "#" )
    {
      $line = substr($line,1);
    }
    
    $matches=[];
    
    if(preg_match('/# (.*)\. (.*)/', $line, $matches))
    {
        $start_new_slide = true;
        
        $n = $matches[1];
        $title = $matches[2];
        
        if($last_slide!="")
        {
          $last_slide = sprintf("# %s\n%s",$title,$last_slide);
          
          $slide_fn = sprintf("%s_%s.md",$n,slugify($title));
        
          file_put_contents("$output_dir/$slide_fn",$last_slide);
          
          $plan[] = $slide_fn;
        }
        
        
        
        $last_slide="";
        
    }
    else
    {
      if($title!="" && $n!="")
      {
          if(preg_match('/## /', $line, $matches))
          {
            $line = "\n\n$line";
          }
            
          $last_slide.= $line ;
      }
    }
    
}

sort($plan);
file_put_contents("$output_dir/slides.json",json_encode($plan));

function slugify($string)
{
    return strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
}


    
