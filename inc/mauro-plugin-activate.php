<?php

class PluginActivate{
    
    public static function activate(){
        flush_rewrite_rules();
    }
}