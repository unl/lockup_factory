<?php
namespace Models;

class ScriptState  {
    private $scriptDeclarations = array();
    private $scripts = array();

    public function loadScriptDeclaration($content, $type = '', $appendToHead = FALSE) {
        $this->scriptDeclarations[] = new ScriptDeclaration($content, $type, $appendToHead);
    }

    public function applyScriptDeclarations(&$page) {
        foreach ($this->scriptDeclarations as $declaration){
            if ($declaration instanceof ScriptDeclaration) {
                $page->addScriptDeclaration($declaration->content(), $declaration->type() , $declaration->appendToHead());
            }
        }
    }

    public function loadScript($url, $type = '', $appendToHead = FALSE) {
        $this->scripts[] = new Script($url, $type, $appendToHead);
    }

    public function applyScripts(&$page) {
        foreach ($this->scripts as $script){
            if ($script instanceof Script) {
                $page->addScript($script->url(), $script->type() , $script->appendToHead());
            }
        }
    }
}

class ScriptDeclaration {
    private $content;
    private $type;
    private $appendToHead;

    public function __construct($content, $type = '', $appendToHead = FALSE)
    {
        $this->content = $content;
        $this->type = $type;
        $this->appendToHead = ($appendToHead === TRUE);
    }

    public function content() {
        return $this->content;
    }

    public function type() {
        return $this->type;
    }

    public function appendToHead() {
        return $this->appendToHead;
    }
}

class Script {
    private $url;
    private $type;
    private $appendToHead;

    public function __construct($url, $type = '', $appendToHead = FALSE)
    {
        $this->url = $url;
        $this->type = $type;
        $this->appendToHead = ($appendToHead === TRUE);
    }

    public function url() {
        return $this->url;
    }

    public function type() {
        return $this->type;
    }

    public function appendToHead() {
        return $this->appendToHead;
    }
}