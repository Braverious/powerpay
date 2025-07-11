<?php

/**
 * Helper Rupiah
 *
 * @description Helper untuk konversi angka ke format rupiah
 *
 * @package     Helper
 * @subpackage  Rupiah
 * @category    Helpers
 * @param int $val
 * @return string
 */
function Rupiah($val)
{
  if ($val) {
    return "Rp " . number_format($val, 2, ",", ".");
  }
  return "Rp. 0";
}


/**
 * Helper IsStrIncludes
 *
 * @description Helper untuk mengecek apakah sebuah string memiliki...
 *
 * @package     Helper
 * @subpackage  IsStrIncludes
 * @category    Helpers
 * @param string $match
 * @param string $val
 * @return bool
 */
function IsStrIncludes($match, $val)
{
  return strpos($match, $val);
}

/**
 * Helper Admin Fee
 *
 * @description Helper untuk biaya admin
 *
 * @package     Helper
 * @subpackage  Admin Fee
 * @category    Helpers
 * @param string $format
 * @return bool
 */
function AdminFee($format = "number")
{

  if ($format === "rupiah") {
    return Rupiah(2500);
  } else {
    return 2500;
  }
}

/**
 * Helper PrettyPrintArr
 *
 * @description Untuk mempercantik debug log
 *
 * @package     Helper
 * @subpackage  PrettyPrintArr
 * @category    Helpers
 * @param array $array
 * @return string
 */
function PrettyPrintArr($array = [])
{
  return "<pre>" . print_r($array, true) . "</pre>";
}

/**
 * Helper BenchmarkInfo
 *
 * @description Helper untuk konversi informasi benchmark
 *
 * @package     Helper
 * @subpackage  BenchmarkInfo
 * @category    Helpers
 * @param string $elapsed_time
 * @param string $msg
 * @return object
 */
function BenchmarkInfo($elapsed_time = NULL, $msg = "Query Name")
{
  $bencObj = (object) [];
  $bencObj->nama = $msg;
  $bencObj->memory = MemoryUsage();
  $bencObj->elapsed_time = $elapsed_time;
  return $bencObj;
}

function MemoryUsage()
{
  return (!function_exists('memory_get_usage')) ? '0' : round(memory_get_usage() / 1024 / 1024, 2) . 'MB';
}


function ParseQueryString()
{
  $query_string = $_SERVER['QUERY_STRING'];
  $params = array();

  if (!empty($query_string)) {
    parse_str($query_string, $params);
  }
  return (object) $params;
}
