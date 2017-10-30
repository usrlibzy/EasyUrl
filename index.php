<?php
/*
------url-redirector file------
copyright 2017 (By Twikor)
*/

//*** CONFIGS GOES BELOW!

//*Where you are to go?
$tar_base_url = "http://twic.me";

//*Which room you are to be in?
$redi_pairs = array(
  '/work/' => '/work',
  '/life/' => '/life',
  '/about/' => '/about',
  '/link/' => '/link',
  '/work/note/' => '/work/note',
  '/work/utility/' => '/work/utility',
  '/work/research/' => '/work/research',
  '/work/experiment/' => '/work/experiment',
  '' => '',
  '' => '',
  '' => '',
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

//*** START IT'S WORK!
$cur_uri = $_SERVER['PATH_INFO'];
echo "Current uri: ".$cur_uri."<br/>";
if (substr($cur_uri,-1) != "/")
{
  $cur_uri = $cur_uri."/";
}
if (isset($redi_pairs[$cur_uri]))
{
  header('HTTP/1.1 301 Moved Permanently');
  header('Location: '.$tar_base_url.$redi_pairs[$cur_uri]);
  echo "Action: 301 to ".$tar_base_url.$redi_pairs[$cur_uri];
}
else
{
  header('HTTP/1.1 404 Not Found');
  echo "Action: 404";
}
