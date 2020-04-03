<?php

/**
 *@class Definitions
 */
class Definitions
{

  function __construct()
  {
   foreach($class = class_name(__CLASS__) as $classes){
    /*$p->Pattern('/(\w+).(?R)/')*/);
    print_r(
      get_defined_constants(),
      get_defined_vars(),
      get_object_vars($this),
      get_defined_functions(),
      get_extension_funcs(),
      get_class_methods(__CLASS__),
      get_loaded_extensions(),
      get_included_files(),
      get_declared_classes(),
      get_declared_interfaces(),
      get_resources(),
      get_resource_type(),
      interface_exists("name", TRUE));
      class_parents(__CLASS__, TRUE));
      var_dump(get_class_vars(__CLASS__));
  }
 }
}
new Definitions();
/*<!--*/
///*
//printf(".$p->Pattern('/(\%s).(?R)."\, get_(\w+).(?R)/'));
//*///
/*-->*/
?>
