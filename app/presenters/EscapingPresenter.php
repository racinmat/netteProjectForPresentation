<?php
namespace App\Presenters;
class EscapingPresenter extends BasePresenter {
    public function renderDefault() {
        $this->template->script = "<script>alert(\"hacknuto!\");</script>";
        $this->template->alert = "alert('hacknuto z mouseover!');";
        $this->template->img = "\"\"\"><SCRIPT>alert(\"XSS\")</SCRIPT>\"";
        $this->template->imgOnMouseOver = "SRC=# onmouseover=\"alert('xxs')\"";
        $this->template->onError = "/ onerror=\"alert(String.fromCharCode(88,83,83))\"";
        $this->template->link = "http://ha.ckers.org/xss.js\">";
        $this->template->embed = '<EMBED SRC="data:image/svg+xml;base64,PHN2ZyB4bWxuczpz
        dmc9Imh0dH A6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcv Mj
        AwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hs aW5rIiB2ZXJzaW9uP
        SIxLjAiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTQiIGhlaWdodD0iMjAw IiBpZD0ieHNzIj48c2NyaXB0
        IHR5cGU9InRleHQvZWNtYXNjcmlwdCI+YWxlcnQoIlh TUyIpOzwvc2NyaXB0Pjwvc3ZnPg=="
        type="image/svg+xml" AllowScriptAccess="always"></EMBED>';
    }
}
