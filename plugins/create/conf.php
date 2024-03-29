<?php
// configuration parameters

$useExternal = 'mktorrent';		// Valid choices:
				// false - use internal realization (may be too slow for large files)
				// "transmissioncli" - use program transmissioncli (see http://www.transmissionbt.com/)
				// "transmissioncreate" - use program transmissioncreate (see http://www.transmissionbt.com/)
				// "createtorrent" - use program createtorrent (see http://www.createtorrent.com)
				// "mktorrent" - use program mktorrent (see http://mktorrent.sourceforge.net)
				// "buildtorrent" - use program buildtorrent (see http://claudiusmaximus.goto10.org/cm/torrent.html)
				// "torrenttools" - use program torrenttools (see http://github.com/fbdtemme/torrenttools)
$pathToCreatetorrent = '/usr/bin/mktorrent';	// Something like /bin/createtorrent, or /bin/transmissioncli. If empty, program will be found in PATH.

$recentTrackersMaxCount = 15;
