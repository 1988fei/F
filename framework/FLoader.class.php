<?php
            if (false !== ($pos = strrpos($class, '\\')))
            {
            	$classPath = strtolower(str_replace('\\', DS, substr($class, 0, $pos + 1)));
            	$className = substr($class, $pos + 1);
            }
        	$classPath = strtolower(str_replace('_', DS, substr($class, 0, $pos + 1)));