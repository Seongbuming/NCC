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
                    <p>아직도 많은 암의 원인이 밝혀지지 않고 있기는 하나 여러 역학연구를 통한 발암요인과 암발생 간의 인과관계에 근거하여 위험요인들을 밝혀내고 있습니다.<br>세계보건기구의 산하기구인 국제암연구소(IARC) 및 미국 국립암협회지에서 밝힌 암의 원인은 아래와 같습니다.</p>
                    <h3>개요</h3>
                    <p class="square">국제암연구소(IARC)와 미국 국립암협회지에서 밝힌 암의 원인</p>
                    <p class="minus">국제암연구소(IARC)와 미국 국립암협회지에서 밝힌 암의 원인</p>
                    <table summary="원인, 국제암연구소, 미국 국립암협회지에 대한 정보가 있습니다.">
                        <caption>국제암연구소(IARC)와 미국 국립암협회지에서 밝힌 암의 원인</caption>
                        <colgroup>
                            <col width="40%" />
                            <col width="30%" />
                            <col width="30%" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">원인</th>
                                <th scope="col">국제암연구소 <sub>1)</sub></th>
                                <th scope="col">미국 국립암협회지 <sub>2)</sub></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">흡연</td>
                                <td>15 ~ 30%</td>
                                <td>30%</td>
                            </tr>
                            <tr>
                                <td scope="row">만성 감염</td>
                                <td>10 ~ 25%</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td scope="row">음식</td>
                                <td>30%</td>
                                <td>35%</td>
                            </tr>
                            <tr>
                                <td scope="row">직업</td>
                                <td>5%</td>
                                <td>4%</td>
                            </tr>
                            <tr>
                                <td scope="row">유전</td>
                                <td>5%</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td scope="row">생식요인 및 호르몬</td>
                                <td>5%</td>
                                <td>7%</td>
                            </tr>
                            <tr>
                                <td scope="row">음주</td>
                                <td>3%</td>
                                <td>3%</td>
                            </tr>
                            <tr>
                                <td scope="row">환경오염</td>
                                <td>3%</td>
                                <td>2%</td>
                            </tr>
                            <tr>
                                <td scope="row">방사선</td>
                                <td>3%</td>
                                <td>3%</td>
                            </tr>
                        </tbody>
                    </table>
                    <ol class="num_ol">
                        <li>세계보건기구 산하 국제암연구소 발행 World Cancer Report 2003</li>
                        <li>세계보건기구의 National Cancer Control Programes 책자에 소개된 내용임(Doll R, Peto R, The Cause of Cancer: Quantitative estimates of avoidable risk of cancer in the United Status today. Journal of the National Cancer Institute, 1981, 66:1191-1308)</li>
                    </ol>
                    <p class="square">흡연은 건강을 위협하는 중독성 질환입니다.</p>
                    <p>흡연은 나와 주변인들의 건강을 해치는 나쁜 습관이며, 중독성 질환입니다. 담배와 담배연기에는 중독을 일으키는 니코틴을 포함하여 60여종의 발암 물질과 4,000종의 유해화학물질이 포함되어 있는 것으로 알려져 있습니다. 그 중에는 벤젠, 벤조피렌, 페놀과 같이 잘 알려진 발암물질과 청산가스, 비소 등의 독극물이 포함되어 있습니다. </p>
                    <div class="textbox center">
                        <img src="images/091209_01.bmp" alt="흡연은 나와 주변인들의 건강을 해치는 나쁜 습관이며, 중독성 질환입니다. 담배와 담배연기에는 중독을 일으키는 니코틴(마약, 발암물질, 살충제, 제초제)을 포함하여 69종의 발암 물질과 4,000종 이상의 화학물질이 포함되어 있는 것으로 알려져 있습니다. 그 중에는 벤젠(휘발유 성분), 벤조피렌(강력한 발암물질), 페놀(발암물질, 석탄산, 소독제)과 같이 잘 알려진 발암물질과 청산가스(사형가스, 독가스, 26-32갑:LD50), 비소(사약의 성분) 등의 독극물이 포함되어 있습니다. 이밖에 나프타린(좀약), 나프티라민(방부제), 디디티(살충제), 벤젠(휘발유성분), 폴로늄210(방사선), 비닐크롤라이드(PVC원료), 우레탄(산업용용제), 니켈(중금속, 밧데리, 도료), 부탄(라이터의 원료), 크로미움(중금속, 도료, 합금), 타르(아스팔트), 카드미움(자동차 밧데리 사용), 아세톤(페인트제거제), 비소(사약의 성분), 프롬알데히드(매운맛, 최루탄 사용), 암모니아(호흡기 자극), 디메칠니트로사민(발암물질), 일산화탄소(연탄가스중독 주원인), 소독제), 메타놀(로켓연로, 78-175갑:LD50+)이 포함되어 있습니다." />
                        <p>[ 주요 담배 및 담배 연기 성분 ]</p>
                    </div>
                    <div class="textbox">
                        <p>국제암연구소(IARC)는 세계보건기구(WHO) 산하 기구로서, 발암요인 확인평가 그룹(The Carcinogen Identification and Evaluation Group, CIE)을 주축으로 1971년 이래 IARC 모노그래프 프로그램(Monograph Program)을 운영해 왔습니다. 2016년 현재 총 998종의 위험 요인에 대해 발암성 검토를 했고, 그 결과를 담아 ‘인체 발암요인에 관한 평가보고서(Monographs on the Evaluation of Carcinogenic Risks to Human)’를 110권 이상 발간했습니다 .</p>
                        <p>국제암연구소에서는 체외실험  ,  동물실험과 사람을 대상으로 한 역학적 연구 등에 근거하여 발암성을 평가하며  ,  이를 바탕으로 발암 요인을  5  개 군으로 분류하고 있습니다  .</p>
                        <p>1   군  : 인간에게 암을 유발하는 것이 확실함(Carcinogenic to humans), 119종</p>
                        <p>2A   군  : 인간에게 암을 유발할 개연성이 높음(Probably carcinogenic to humans), 81종</p>
                        <p>2B   군  : 인간에게 암을 유발할 가능성이 있음(Possibly carcinogenic to humans), 292종</p>
                        <p>3   군  : 인간에 대한 발암성을 분류할 수 없음(Not classifiable as to its carcinogenicity to humans), 505종</p>
                        <p>4   군  : 인간에게 암을 유발하지 않을 개연성이 높음(Probably not carcinogenic to humans), 1종</p>
                    </div>
                    <div class="textbox blue">
                    </div>
                    <div class="textbox blue border">
                    </div>
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
