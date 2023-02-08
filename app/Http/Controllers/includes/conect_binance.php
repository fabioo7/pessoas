<?php
//header('Content-Type: application/json');


$KEY = env('BINANCE_KEY');
$SECRET = env('BINANCE_SECRET');
$BASE_URL = env('BINANCE_BASE_URL');


function signature($query_string, $secret) {
    return hash_hmac('sha256', $query_string, $secret);
}

function sendRequest($method, $path) {
  global $KEY;
  global $BASE_URL;
  
  $url = "${BASE_URL}${path}";

  //echo "requested URL: ". PHP_EOL;
  //echo $url. PHP_EOL;
  //echo '<br>';
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-MBX-APIKEY:'.$KEY));    
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, $method == "POST" ? true : false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $execResult = curl_exec($ch);
  $response = curl_getinfo($ch);
    
  // if you wish to print the response headers
  // echo print_r($response);

  curl_close ($ch);
  return json_decode($execResult, true);
}

function signedRequest($method, $path, $parameters = []) {
  global $SECRET;

  $parameters['timestamp'] = round(microtime(true) * 1000);
  $query = buildQuery($parameters);
  $signature = signature($query, $SECRET);
  return sendRequest($method, "${path}?${query}&signature=${signature}");
}

function buildQuery(array $params)
{
    $query_array = array();
    foreach ($params as $key => $value) {
        if (is_array($value)) {
            $query_array = array_merge($query_array, array_map(function ($v) use ($key) {
                return urlencode($key) . '=' . urlencode($v);
            }, $value));
        } else {
            $query_array[] = urlencode($key) . '=' . urlencode($value);
        }
    }
    return implode('&', $query_array);
}


////////////////////////////////////////////////////////////////////////////////////////////////
