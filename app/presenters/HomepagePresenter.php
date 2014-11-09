<?php
namespace App\Presenters;

class HomepagePresenter extends BasePresenter {
    
    public function renderEscaping() {
        $this->template->script = "<script>alert(\"hacknuto!\");</script>";
        $this->template->alert = "alert('hacknuto z mouseover!');";
        $this->template->img = "\"\"\"><SCRIPT>alert(\"XSS\")</SCRIPT>\"";
        $this->template->imgOnMouseOver = "SRC=# onmouseover=\"alert('xxs')\"";
        $this->template->onError = "/ onerror=\"alert(String.fromCharCode(88,83,83))\"";
        $this->template->link = "http://ha.ckers.org/xss.js\">";
        $this->template->embed = '<EMBED SRC="data:image/svg+xml;base64,PHN2ZyB4bWxuczpzdmc9Imh0dH A6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcv MjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hs aW5rIiB2ZXJzaW9uPSIxLjAiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTQiIGhlaWdodD0iMjAw IiBpZD0ieHNzIj48c2NyaXB0IHR5cGU9InRleHQvZWNtYXNjcmlwdCI+YWxlcnQoIlh TUyIpOzwvc2NyaXB0Pjwvc3ZnPg==" type="image/svg+xml" AllowScriptAccess="always"></EMBED>';
    }
    
    public function renderTexts() {
        $this->template->array = $array = array("první", "druhý", "třetí", "čtvrtý");
        $this->template->size = 123456789;
        $this->template->time = new \DateTime();
    }

}
