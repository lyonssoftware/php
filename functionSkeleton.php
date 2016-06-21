PHP_FUNCTION(hackers_function) {
  /* your accepted arguments here */
  long number;
  
  /* accepting arguments */
  if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "l", &number) != SUCCESS) {
      return;
  }
  
  /* do some work on the input */
  number *= 2;
  
  /* set return value */
  RETURN_LONG(number);
}
