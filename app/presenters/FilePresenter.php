<?php

namespace App\Presenters;
use Tracy\Debugger;

class FilePresenter extends BasePresenter {
    
    public function renderDefault() {
        $output = array();
        $command = __DIR__."/project1.exe";
        $pipes = array();
        $descriptorspec = array(
            0 => array("pipe","r"),
            1 => array("pipe","w"),
            2 => array("file","./error.log","a")
        ) ;
        $handle = proc_open($command, $descriptorspec, $pipes);
        Debugger::barDump($handle);
        fwrite($pipes[0], '3') ;
        $read = fread($handle, 32);
//        echo $read;
        pclose($handle);
//        exec($command, $output);
        $this->template->output = $output;
        $this->template->outputString = $read;
    }
}
