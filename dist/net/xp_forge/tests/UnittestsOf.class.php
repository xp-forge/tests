<?php uses('util.cmd.Console', 'text.doclet.Doclet', 'text.doclet.RootDoc');

;
;




 class UnittestsOf extends Doclet{




public function start(RootDoc $root){
while ($this->classes->hasNext()) {
foreach ($this->classes->next()->tags('test') as $tag) {
Console::write($tag->class,' ');};};}}xp::$registry['class.UnittestsOf']= 'net.xp_forge.tests.UnittestsOf';xp::$registry['details.net.xp_forge.tests.UnittestsOf']= array (
  0 => 
  array (
  ),
  1 => 
  array (
    'start' => 
    array (
      1 => 
      array (
        0 => 'text.doclet.RootDoc',
      ),
      2 => 'void',
      3 => 
      array (
      ),
      4 => 'Entry point',
      5 => 
      array (
      ),
      6 => 
      array (
      ),
    ),
  ),
  'class' => 
  array (
    5 => 
    array (
    ),
    4 => 'Lists unittests for a given class',
  ),
);
?>
