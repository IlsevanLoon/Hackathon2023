<?php

function debug($var, $die = false)
{
    echo "<pre>";
    print_r($var);
    echo "<hr />";
    echo "</pre>";
    if ($die) {
        die();
    }
}


//Dynamically add CSS files to header page
if (!function_exists('add_css')) {
    function add_css($file = '')
    {
        $str        = '';
        $ci         = &get_instance();
        $header_css = $ci->config->item('header_css');

        if (empty($file)) {
            return;
        }

        if (is_array($file)) {
            if (!is_array($file) && count($file) <= 0) {
                return;
            }
            foreach ($file as $item) {
                $header_css[] = $item;
            }
            $ci->config->set_item('header_css', $header_css);
        } else {
            $str          = $file;
            $header_css[] = $str;
            $ci->config->set_item('header_css', $header_css);
        }
    }
}


if (!function_exists('load_css')) {
    function load_css($assets)
    {
        $str        = '';
        foreach ($assets as $item) {
            $str .= '<link rel="stylesheet" href="' . $item . '?v=' . getenv('CSS_VERSION') . '" type="text/css" />' . "\n";
        }

        return $str;
    }
}

if (!function_exists('load_js')) {
    function load_js($assets)
    {
        $str        = '';
        foreach ($assets as $item) {
            $str .= "<script type=\"text/javascript\" src=\"". $item . "?v=" . getenv('JS_VERSION') . "\"></script>" . "\n";
        }
        return $str;
    }
}

function format_filesize($bytes)
{
    $bytes   = floatval($bytes);
    $arBytes = array(
        0 => array(
            "UNIT"  => "TB",
            "VALUE" => pow(1024, 4),
        ),
        1 => array(
            "UNIT"  => "GB",
            "VALUE" => pow(1024, 3),
        ),
        2 => array(
            "UNIT"  => "MB",
            "VALUE" => pow(1024, 2),
        ),
        3 => array(
            "UNIT"  => "KB",
            "VALUE" => 1024,
        ),
        4 => array(
            "UNIT"  => "B",
            "VALUE" => 1,
        ),
    );

    $result = "0 B";

    foreach ($arBytes as $arItem) {
        if ($bytes >= $arItem["VALUE"]) {
            $result = $bytes / $arItem["VALUE"];
            $result = str_replace(".", ",", strval(round($result, 2))) . " " . $arItem["UNIT"];
            break;
        }
    }
    return $result;
}

function format_date($date, $format = "d-m-Y")
{
    if ($date == "0000-00-00 00:00:00" || $date == "0000-00-00" || !$date) {
        return "Datum onbekend";
    }

    return date($format, strtotime($date));
}

function format_datetime($date, $format = "d-m-Y H:i")
{
    if ($date == "0000-00-00 00:00:00" || $date == "0000-00-00" || !$date) {
        return "Datum onbekend";
    }

    return date($format, strtotime($date));
}

function format_money($amount)
{
    return number_format($amount, 2, ",", ".");
}

function format_decimal_number($amount)
{
    $amount = preg_replace("/[^0-9,.-]/", "", $amount);
    list($number, $decimal) = preg_split("/[,.]+/", $amount);

    $decimal = (int)$decimal;

    if (!empty($decimal)) {
        $number = number_format($number.".".$decimal, 2, ",", ".");
    } else {
        $number = number_format($number, 0, ",", ".");
    }

    return $number;
}

function get_month_name($number)
{
    $months = array("Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December");

    return $months[$number - 1];
}

function get_short_month_name($number)
{
    $months = array("Jan", "Feb", "Maa", "Apr", "Mei", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dec");

    return $months[$number - 1];
}


function seconds_to_days_hours_minutes($seconds)
{
    $days = floor($seconds / 86400);

    $hours   = floor(($seconds % 86400) / 3600);
    $minutes = ($seconds % 3600) / 60;

    $minutes = ceil($minutes);

    if($minutes == 60)
    {
        $hours++;
        $minutes = 0;
    }

    $hours   = str_pad($hours, 2, 0, STR_PAD_LEFT);
    $minutes = str_pad($minutes, 2, 0, STR_PAD_LEFT);

    return $days . "d " . $hours . "u " . $minutes ."m";
}

function seconds_to_hours_minutes($seconds)
{
    $hours   = floor($seconds / 3600);
    $minutes = ($seconds % 3600) / 60;

    $minutes = ceil($minutes);

    if($minutes == 60)
    {
        $hours++;
        $minutes = 0;
    }

    $hours   = str_pad($hours, 2, 0, STR_PAD_LEFT);
    $minutes = str_pad($minutes, 2, 0, STR_PAD_LEFT);

    return $hours . ":" . $minutes;
}

function seconds_to_hours_minutes_seconds($seconds)
{
    $hours   = floor($seconds / 3600);
    $minutes = ($seconds % 3600) / 60;

    $minutes = floor($minutes);

    if($minutes == 60)
    {
        $hours++;
        $minutes = 0;
    }

    $seconds = $seconds % 60;

    $hours   = str_pad($hours, 2, 0, STR_PAD_LEFT);
    $minutes = str_pad($minutes, 2, 0, STR_PAD_LEFT);
    $seconds = str_pad($seconds, 2, 0, STR_PAD_LEFT);

    return $hours . ":" . $minutes . ":" . $seconds;
}

function decimal_to_hours_minutes($decimal)
{
    $total_minutes = $decimal * 60;

    $hours   = floor($total_minutes / 60);
    $minutes = $total_minutes % 60;

    $hours   = str_pad($hours, 2, 0, STR_PAD_LEFT);
    $minutes = str_pad($minutes, 2, 0, STR_PAD_LEFT);

    return $hours . ":" . $minutes;
}

function seconds_to_declarable_hours($seconds)
{
    return $seconds / 3600;
}

function seconds_to_invoice_hours($seconds)
{
    $minutes = $seconds / 60;
    return number_format(ceil($minutes / 5) * 0.0833333333333333, 2);
}

function translate_day($date)
{
    $data = array
        (
        'Monday'    => 'Maandag',
        'Tuesday'   => 'Dinsdag',
        'Wednesday' => 'Woensdag',
        'Thursday'  => 'Donderdag',
        'Friday'    => 'Vrijdag',
        'Saturday'  => 'Zaterdag',
        'Sunday'    => 'Zondag',

        'Mon'       => 'Ma',
        'Tue'       => 'Di',
        'Wed'       => 'Wo',
        'Thu'       => 'Do',
        'Fri'       => 'Vr',
        'Sat'       => 'Za',
        'Sun'       => 'Zo',
    );

    return str_replace(array_keys($data), array_values($data), $date);
}



function getStartAndEndDate($week, $year) {
  $dto          = new DateTime();
  $ret["start"] = $dto->setISODate($year, $week)->format("Y-m-d");
  $ret["end"]   = $dto->modify("+6 days")->format("Y-m-d");
  return $ret;
}



function dutch_month_to_english($month)
{
    if($month == "Januari" || $month == "Jan") { return 1; }
    if($month == "Februari" || $month == "Feb") { return 2; }
    if($month == "Maart" || $month == "Maa" || $month == "Mrt") { return 3; }
    if($month == "April" || $month == "Apr") { return 4; }
    if($month == "Mei" || $month == "Mei") { return 5; }
    if($month == "Juni" || $month == "Jun") { return 6; }
    if($month == "Juli" || $month == "Jul") { return 7; }
    if($month == "Augustus" || $month == "Aug") { return 8; }
    if($month == "September" || $month == "Sep") { return 9; }
    if($month == "Oktober" || $month == "Okt") { return 10; }
    if($month == "November" || $month == "Nov") { return 11; }
    if($month == "December" || $month == "Dec") { return 12; }

    return;
}

if (!function_exists('array_key_first')) {
    function array_key_first(array $arr) {
        foreach($arr as $key => $unused) {
            return $key;
        }
        return NULL;
    }
}

