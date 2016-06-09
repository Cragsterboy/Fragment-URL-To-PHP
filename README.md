# Fragment URL To PHP

An easy way to be able to pass fragment URLs into PHP.

I have seen around a few places people saying you are only able to parse a fragment URL in javascript, this is true. 
However this routine allows users to turn the fragement URL into a URL which can then be sent as a request to the server, which PHP is able to parse.

The code simply uses javascript to get the fragement URL, then replaces the hashtag in the string to a question mark, thus turning it into a request which PHP is able to parse. It then redirects the page back to itself with the new hash string attached to the url as a request, which allows php to parse the URL parameters.

Any questions please ask.
