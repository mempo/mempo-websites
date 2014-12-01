<html><head><title>IP address</title><body>
Your IP from which you opened this WWW site is seen here as: <code>
your_ip_address_is: [<?php echo htmlspecialchars($_SERVER['REMOTE_ADDR']); ?>]
</code>

<br/>
on port
[<?php echo htmlspecialchars($_SERVER['REMOTE_PORT']); ?>]
<hr/>

User agent (web browser vesion):
[<?php echo htmlspecialchars($_SERVER['HTTP_USER_AGENT']); ?>]
<hr/>

Referer
[<?php echo htmlspecialchars($_SERVER['HTTP_REFERER']); ?>]
<hr/>

See also:
<a href="https://panopticlick.eff.org/">https://panopticlick.eff.org/</a>
<hr/>

<div>
<b>Bash script coode</b> to detect your IP (as seen by us) and get it into variable:
	<div>
	<code><pre>
detected_ip=$( wget http://mempo.org/ip -q -O - | grep your_ip_address_is | head -n 1 | cut -d " " -f 2 | cut -d "[" -f 2 | cut -d "]" -f 1 ) 
echo $detected_ip
	</pre></code>
	</div>
</div>

<br/>

To avoid being spied upon we recommend: <a href="http://mempo.org/">Mempo Project - Hardened Privacy</a>!
</body>
</html>
