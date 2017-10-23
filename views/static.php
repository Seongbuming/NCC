<!doctype html>
<html lang="ko">
<head>
    <?=$this->loadLayout("head")?>
    <link rel="stylesheet" href="stylesheets/static.css" />
</head>

<body>
    <div class="header">
        <?=$this->loadLayout("header")?>
    </div>

    <div class="navigation">
        <?=$this->loadLayout("navigation")?>
    </div>

    <div class="contents">
        <div class="sub">
            <h2>서브 타이틀</h2>

            <ul class="tab">
                <li name="tab-1">
                    <div class="title">개요</div>
                    <div class="arrow"></div>
                </li>
                <li name="tab-2" class="selected">
                    <div class="title">일반적인 암의 원인</div>
                    <div class="arrow"></div>
                </li>
                <li name="tab-3">
                    <div class="title">국민 암예방 수칙</div>
                    <div class="arrow"></div>
                </li>
            </ul>

            <div id="tab-2" class="tab-contents">
                <ul class="inner-tab">
                    <li name="inner-tab-1" class="selected">개요</li>
                    <li name="inner-tab-2">수술적 치료</li>
                    <li name="inner-tab-3">암종별 수술</li>
                    <li name="inner-tab-4">방사성요오드 치료</li>
                </ul>

                <div id="inner-tab-1" class="inner-tab-contents">
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <?=$this->loadLayout("footer")?>
    </div>
    
    <?=$this->loadLayout("scripts")?>
    <script src="javascripts/static.js"></script>
</body>
</html>
