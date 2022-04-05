<?php
class TelClass
{
  function trimInput()
  {
    $params = [];
    $params["tel"] = trim(filter_input(INPUT_POST, 'tel'));
    return $params;
  }

  function useInput()
  {
    $trim = self::trimInput();
    $trim_tel = $trim['tel'];
    return $trim_tel;
  }
}

/**
 * 電話番号（ハイフン無しの6～9桁、またはハイフンありの13桁以下）
 *
 * @param String $str チェック文字列
 * @return boolean true：エラー無し false：validationエラーあり
 */

function isPhoneNumber($str) {
  if (!preg_match("/^[0-9-]{6,9}$|^[0-9-]{13}$/", $str)) {
      return true;
  }
  return false;
}


$input = new TelClass;
$POST_tel = $input->useInput();