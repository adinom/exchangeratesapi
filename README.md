# exchangeratesapi
To post and recieve JSON data Using php I used PHP cURL:

-Specify the URL ($url) where the JSON data need to be sent.

-Initiate new cURL resource using curl_init().

-Seting the URL to retrieve using the CURLOPT_URL option.

-return the transfer as a string of the value returned by curl_exec () instead of displaying it directly using the CURLOPT_RETURNTRANSFER option.

-Setup data in PHP array and encode into a JSON string using json_encode().

-Finally, the curl_exec() function is used to execute the POST request.
Exchangerates.php
# to use the exchangerates api code 
-To run this php script on a local machine turn on Apache server so you can have an enabled php server on your computer and open your web browser and type localhost/Exchangerates.php.

# to use the google sheets api:
to execute this code install composer in your computer and you should have a php server also you should download and use the google apiclient version 2.0 or + and use the provided json file.
