<?php

// variables_orderの値がデフォルトのGPCSの場合、$_ENVに変数は格納されない。
// ini_setでは変更できないため、php.iniを編集する必要がある。

var_dump(putenv('taro=hida'));

var_dump($_ENV);

var_dump(getenv());
