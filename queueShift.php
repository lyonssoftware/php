<?php 
// process the queue in the correct order
function processSendQueue($socket, $sendQueue) { 
    while (!$sendQueue->isEmpty()) { 
                            //shift() is the same as dequeue() 
        $senditem = $sendQueue->shift(); 

        //returns the number of bytes written. 
        $rtn = socket_write($socket, $senditem); 
        if ($rtn === false) { 
            $sendQueue->unshift($senditem); 
            throw new exception("send error: " . socket_last_error($socket)); 
            return; 
        } 
        if ($rtn < strlen($senditem) { 
            $sendQueue->unshift(substr($senditem, $rtn); 
            break; 
        } 
    } 
} 
?>
