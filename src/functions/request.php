<?php
function request($method, $url, $requestbody = null)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    if (strtolower($method) == "post") {
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json"
        ));

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestbody));
    }

    $data = curl_exec($ch);
    curl_close($ch);

    if (isset($data)) {
        return json_decode($data);
    }

    return null;
}
