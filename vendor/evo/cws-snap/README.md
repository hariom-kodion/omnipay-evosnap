# PHP-CWS-lib
PHP-CWS-lib is a small library that will help PHP developers to process their payments through EVO Snap*.

You can get more info about CWS at the [Snap* website.](http://www.evosnap.com/develop-with-snap/)

# Using the library with Composer:

Below is an "composer.json" example file that will download the library:

```javascript
{
    "name": "evo/example",
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/EVO-Snap/PHP-CWS-lib"
        }
    ],
    "require": {
        "evo/cws-snap": "2.1.27"
    }
}
```

# Use in production
CWS library uses PHP cURL to communicate with our servers. It is prepared to avoid SSL verification in our UAT to allow developers a quick setup or their development environment. While using Hosted Payments with our production servers you could get some errors while communicating with them caused by a misconfigured cURL. You will want to verify that you have an updated CA bundle file. You can download the latest version from the cURL official site at https://curl.haxx.se/docs/caextract.html.
Once you got a valid CA bundle, you will want to configure your cURL library to use it. You will only need to edit your "php.ini" file, add the code below and restart your server.
```
curl.cainfo=/path/to/bundle/cacert.pem
```
Note that according to cURL documentation: "This is required to be an absolute path.".
