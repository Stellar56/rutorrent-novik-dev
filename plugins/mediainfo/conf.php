<?php

if(empty($pathToExternals['mediainfo']))	// May be path already defined?
{
	$pathToExternals['mediainfo'] = '/usr/bin/mediainfo';	// Something like /usr/bin/mediainfo. If empty, will be found in PATH.
}

>?