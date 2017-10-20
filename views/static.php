<!doctype html>
<html lang="ko">
<head>
    <?=$this->loadLayout("head")?>
</head>

<body>
    <div class="header">
        <?=$this->loadLayout("header")?>
    </div>

    <div class="navigation">
        <?=$this->loadLayout("navigation")?>
    </div>

    <div class="contents">
        <h2>서브 타이틀</h2>
    </div>

    <div class="footer">
        <?=$this->loadLayout("footer")?>
    </div>
    
    <?=$this->loadLayout("scripts")?>
</body>
</html>
