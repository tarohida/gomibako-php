#!/bin/bash

SCRIPT_NAME="$1"

LEVELS=(E_ERROR E_WARNING E_PARSE E_NOTICE E_CORE_ERROR E_CORE_WARNING E_COMPILE_ERROR E_COMPILE_WARNING E_USER_ERROR E_USER_WARNING E_USER_NOTICE E_STRICT E_RECOVERABLE_ERROR E_DEPRECATED E_USER_DEPRECATED)

for LEVEL in ${LEVELS[@]};
do
  echo "${LEVEL}"
  php -d error_reporting=${LEVEL} "$1"
done