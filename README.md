gj-pingkill
=======

Stop XMLRPC attack by killing pingbacks. See: http://blog.sucuri.net/2014/03/more-than-162000-wordpress-sites-used-for-distributed-denial-of-service-attack.html

### Install

Download as a zip, install via wordpress admin. Or submodule.

### Test

`curl -D -  "sitetotest.com" -d '<methodCall><methodName>pingback.ping</methodName><params><param><value><string>http://victim.com</string></value></param><param><value><string>www.anywordpresssite.com/postchosen</string></value></param></params></methodCall>'`

### License

MIT