<?php uses('util.cmd.Console', 'text.doclet.Doclet', 'text.doclet.RootDoc');

;
;




 class Untested extends Doclet{




public function start(RootDoc $root){
while ($this->classes->hasNext()) {
$class=$this->classes->next();
if (($class->isOrdinaryClass()||$class->isEnum())&&!$class->tags('test')) {
Console::writeLine($class);};};}}xp::$registry['class.Untested']= 'net.xp_forge.tests.Untested';xp::$registry['details.net.xp_forge.tests.Untested']= array (
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
    4 => 'Lists all classes without tests',
  ),
);
?>
