<?php
/*
------url-redirector file------
copyright 2017 (By Twikor)
*/

//*** CONFIG GOES BELOW!

//** Where are ye to go?

$tar_base_url = "http://twic.me";

//** Which room are ye to be in?

$redi_pairs = array(
  '/' => '/',
  '/work/' => '/work',
  '/life/' => '/life',
  '/about/' => '/about',
  '/link/' => '/link',
  '/work/note/' => '/work/note',
  '/work/utility/' => '/work/utility',
  '/work/research/' => '/work/research',
  '/work/experiment/' => '/work/experiment',
  
//** Have somewhere outside,see the beauty of the world!
  
  '/google/' => 'https://google.com',
  
//** Add more as you like!
  
  '' => '',
  '' => '',
  '' => '',
  '' => '',
  '' => '',
  '' => '',
  '' => '',
  '' => '',
  '' => ''
);

//*** START ITS WORK!
$cur_uri = $_SERVER['PATH_INFO'];
$cur_uri_step = explode('/',$cur_uri);
echo "Current uri: ".$cur_uri."<br/>";
if (substr($cur_uri,-1) != "/")
{
  $cur_uri = $cur_uri."/";
}
if (isset($redi_pairs[$cur_uri]))
{
  header('HTTP/1.1 301 Moved Permanently');
  if (preg_match('/^^((https|http|ftp|rtsp|mms)?:\/\/)[^\s]+$/',$redi_pairs[$cur_uri]))
  {
    header('Location: '.$redi_pairs[$cur_uri]);
    echo "Action: 301 to ".$redi_pairs[$cur_uri];
  }
  else
  {
    header('Location: '.$tar_base_url.$redi_pairs[$cur_uri]);
    echo "Action: 301 to ".$tar_base_url.$redi_pairs[$cur_uri];
  }
}
else
{
  header('HTTP/1.1 404 Not Found');
  echo "Action: 404";
}
