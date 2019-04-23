@extends('app')
@section('content')
    <link rel="stylesheet" type="text/css" href="./css/demo1.css">
    <script type="text/javascript">
        function search() {
            var phone = $("#tel").val();
            var companyName = $("#companyName").val();
            var myreg = /^[1][3,4,5,6,7,8][0-9]{9}$/;
            if (companyName == "") {
                alert("请填写公司名！");
                return;
            }
            if (phone == "") {
                alert("请填写手机号！");
                return;
            }
            if (!myreg.test(phone)) {
                alert("手机号码格式不正确！");
                return;
            }

            $.ajax({
                type: "post",
                url: "/template/feedback.ashx",
                dataType: "text",
                data: { companyName: companyName, tel: phone, registType: "1" },
                success: function (ret) {
                    if (ret == "success") {
                        alert("提交成功，查询结果请联系客服！");
                        $("#companyName").val("");
                        $("#tel").val("");
                    } else if (ret == "isexist") {
                        alert("您已经提交过注册信息了，请耐心等待客服联系噢!");
                    } else {
                        alert("系统异常，请联系管理员!");
                    }
                }
            })
            //   ec_cs_fnDialogOK()
        }

    </script>


    <!-- banner -->
    <div class="zbanner">
        <div class="w1200">
            <div class="titleimg"><img src="./image/201803120918_03.png" alt="免费查询" style="width: 784px; height: 76px;"></div>
            <div class="inquirebox">
                <div class="search">
                    <div class="searchbar">
                            <span class="sr">
                                <input type="text" id="companyName" name="companyname" placeholder="请填写公司名字">
                                <input type="text" id="tel" name="younumber" placeholder="输入您的手机号码" maxlength="11">
                            </span>
                        <span class="search-button" onclick="search()">立即查询能否注册</span>
                    </div>
                </div>
                <div class="result-show cl">
                    <div class="result-left fl">
                        <p class="restit">近期查询结果，<span>目前已有<em>190582030</em>次查询</span></p>
                        <div class="resuscroll scoll">
                            <ul style="top: -36px;">
                                <li>
                                    <span>刘小姐</span>
                                    <span>152****2166</span>
                                    <span>查询:</span>
                                    <span class="search-commpany">（东莞市宾*科技开发有限公司）</span>
                                    <span>不可以注册</span>
                                </li>
                                <li>
                                    <span>张小姐</span>
                                    <span>138****6055</span>
                                    <span>查询:</span>
                                    <span class="search-commpany">（东方美宝*网络有限公司）</span>
                                    <span>不可以注册</span>
                                </li>
                                <li>
                                    <span>李小姐</span>
                                    <span>134****8876</span>
                                    <span>查询:</span>
                                    <span class="search-commpany">（广州进**管理有限公司）</span>
                                    <span>可以注册</span>
                                </li>
                                <li>
                                    <span>周先生</span>
                                    <span>135****6018</span>
                                    <span>查询:</span>
                                    <span class="search-commpany">（长沙***贸易有限公司）</span>
                                    <span>可以注册</span>
                                </li>
                                <li>
                                    <span>夏女士</span>
                                    <span>130****2398</span>
                                    <span>查询:</span>
                                    <span class="search-commpany">（无锡***科技有限公司）</span>
                                    <span>不可以注册</span>
                                </li>
                                <li>
                                    <span>蒋先生</span>
                                    <span>180****0768</span>
                                    <span>查询:</span>
                                    <span class="search-commpany">（中山市曼妮*服饰有限公司）</span>
                                    <span>不可以注册</span>
                                </li>
                                <li>
                                    <span>田女士</span>
                                    <span>188****5599</span>
                                    <span>查询:</span>
                                    <span class="search-commpany">（衡阳市凯斯*科技有限公司）</span>
                                    <span>可以注册</span>
                                </li>
                                <li>
                                    <span>罗先生</span>
                                    <span>176****2055</span>
                                    <span>查询:</span>
                                    <span class="search-commpany">（佛山市麦腾*科技开发有限公司）</span>
                                    <span>可以注册</span>
                                </li>
                                <li>
                                    <span>王先生</span>
                                    <span>185****3125</span>
                                    <span>查询:</span>
                                    <span class="search-commpany">（南京市复*科技有限公司）</span>
                                    <span>可以注册</span>
                                </li>
                                <li>
                                    <span>王先生</span>
                                    <span>189****6168</span>
                                    <span>查询:</span>
                                    <span class="search-commpany">（上海市思*科技有限公司）</span>
                                    <span>可以注册</span>
                                </li>
                                <li>
                                    <span>刘先生</span>
                                    <span>132****7089</span>
                                    <span>查询:</span>
                                    <span class="search-commpany">（深圳市思讯通*科技有限公司）</span>
                                    <span>可以注册</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="result-right fr">
                        <p class="rtit">注册成功状态</p>
                        <p>累计注册：<em class="rnum">324651</em>家</p>
                        <p>昨日注册：34家</p>
                        <p>上月注册：3515家</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 内容 -->
    <div class="content">
        <div class="container prominent zclock">
            <div class="clock w1200">
                <div class="clock-list">
                    <span class="iconcontainer zicon1"></span>
                    <span class="list-text">拿证快<em class="subtext">快至3天领证</em></span>
                </div>
                <div class="clock-list">
                    <span class="iconcontainer zicon2"></span>
                    <span class="list-text">收费低<em class="subtext">比同行更省百分之10</em></span>
                </div>
                <div class="clock-list ">
                    <span class="iconcontainer zicon3"></span>
                    <span class="list-text">保障高<em class="subtext">不成功不收费</em></span>
                </div>
                <div class="clock-list">
                    <span class="iconcontainer zicon4"></span>
                    <span class="list-text">服务好<em class="subtext">专业客服1对1服务</em></span>
                </div>
            </div>
        </div>
        <div class="main-xxjfw">
            <div class="w1200">
                <div class="titlebox">
                    <h1 class="title-h1">注册前,您需要确定以下信息及服务</h1>
                </div>
                <div class="xxjfw">
                    <div class="xxjfw-div1">
                        <div class="xxjfw-div1-tb">
                            <h1>按类型注册</h1>
                            <p>REGISTER BY TYPE</p>
                            <p class="xxjfw-div1-tb-p1">一站式服务</p>
                            <p class="xxjfw-div1-tb-p2">全程代办 快速拿证</p>
                            <p class="xxjfw-div1-tb-p2">服务网点 遍布全市</p>
                            <style>
                                .xxjfw-div1-tb-p1{font-weight:bold;}
                                .xxjfw-div1-tb-p2{font-weight:bold;}
                            </style>
                        </div>
                        <ul class="xxjfw-ul1">
                            <li>
                                <div><img src="./image/1-1.png"></div>
                                <h4>公司注册</h4>
                                <p>快至3天拿执照</p>
                                <p>已成交<span>13521</span>笔</p>
                                <p class="zixun"><a onclick="ec_cs_fnDialogOK()">立即咨询</a></p>
                            </li>
                            <li>
                                <div><img src="./image/1-2.png"></div>
                                <h4>个体工商户注册</h4>
                                <p>1张身份证即可当老板</p>
                                <p>已成交<span>25461</span>笔</p>
                                <p class="zixun"><a onclick="ec_cs_fnDialogOK()">立即咨询</a></p>
                            </li>
                            <li>
                                <div><img src="./image/1-3.png"></div>
                                <h4>合伙企业注册</h4>
                                <p>股权，注册一站式搞定</p>
                                <p>已成交<span>23451</span>笔</p>
                                <p class="zixun"><a onclick="ec_cs_fnDialogOK()">立即咨询</a></p>
                            </li>
                            <li class="last-li">
                                <div><img src="./image/1-4.png"></div>
                                <h4>外商独资公司注册</h4>
                                <p>足不出户全程代办</p>
                                <p>已成交<span>19306</span>笔</p>
                                <p class="zixun"><a onclick="ec_cs_fnDialogOK()">立即咨询</a></p>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
        <div class="section mt50">
            <div class="w1200">
                <div class="titlebox">
                    <h3>仅需4步快速注册 全程代办</h3>
                    <p class="subtitle">【省时】快至3天拿证    【省力】摆脱繁琐，让创业简单</p>
                </div>
                <div class="mt50 faststep">
                    <div class="steplist">
                        <div class="step"><span>第一步</span></div>
                        <div class="stepcont">
                            <span class="stepicon st1"></span>
                            <span class="steptext">公司核名<em>3分钟</em></span>
                        </div>
                    </div>
                    <div class="steplist">
                        <div class="step"><span>第二步</span></div>
                        <div class="stepcont">
                            <span class="stepicon st2"></span>
                            <span class="steptext">登记注册<em>1-3工作日</em></span>
                        </div>
                    </div>
                    <div class="steplist">
                        <div class="step"><span>第三步</span></div>
                        <div class="stepcont">
                            <span class="stepicon st3"></span>
                            <span class="steptext">领取执照<em>1个工作日</em></span>
                        </div>
                    </div>
                    <div class="steplist nopdr">
                        <div class="step"><span>第四步</span></div>
                        <div class="stepcont">
                            <span class="stepicon st4"></span>
                            <span class="steptext">完成刻章<em>1个工作日</em></span>
                        </div>
                    </div>
                </div>
                <div class="morebox mt50">
                    <a class="more" href="javascript:ec_cs_fnDialogOK()">申请注册</a>
                </div>
            </div>
        </div>
        <div class="section mt50 grap">
            <div class="w1200">
                <div class="titlebox">
                    <h3>办理完成 即可领取以下证件</h3>
                    <p class="subtitle">一站式办理证件 便捷 高效</p>
                </div>
                <div class="completed mt30 cl">
                    <div class="comlist">
                        <div class="comimg"><img src="./image/201803120917_20.jpg" alt="营业执照"></div>
                        <p>营业执照正本</p>
                    </div>
                    <div class="comlist">
                        <div class="comimg"><img src="./image/201803120917_22.jpg" alt="营业执照副本"></div>
                        <p>营业执照副本</p>
                    </div>
                    <div class="comlist">
                        <div class="comimg"><img src="./image/201803120917_24.jpg" alt="企业统一社会信用代码证明 "></div>
                        <p>企业统一社会信用代码证明 </p>
                    </div>
                    <div class="comlist">
                        <div class="comimg"><img src="./image/201803120917_26.jpg" alt="公司章程"></div>
                        <p>公司章程</p>
                    </div>
                    <div class="comlist">
                        <div class="comimg"><img src="./image/201803130938_25.jpg" alt="公司印章及印鉴存留卡"></div>
                        <p>公司印章及印鉴存留卡</p>
                    </div>
                </div>
                <div class="morebox mt50" style="margin-bottom: 0;">
                    <a class="more" href="javascript:ec_cs_fnDialogOK()">申请注册</a>
                </div>
            </div>
        </div>
        <div class="section grap" style="background: #edf3f7;">
            <div class="w1200">
                <div class="titlebox">
                    <h3>注册成功后，你还可能需要以下服务</h3>
                    <p class="subtitle">涵盖公司主要业务、让你全程无忧</p>
                </div>
                <div class="cswservice mt50">
                    <div class="cswservice-list">
                        <span class="sericon cop1"></span>
                        <div class="mat-text">
                            <span class="line"></span>
                            <span class="txt">银行开户</span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="cswservice-list">
                        <span class="sericon cop2"></span>
                        <div class="mat-text">
                            <span class="line"></span>
                            <span class="txt">代理记账</span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="cswservice-list">
                        <span class="sericon cop3"></span>
                        <div class="mat-text">
                            <span class="line"></span>
                            <span class="txt">商标注册</span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="cswservice-list">
                        <span class="sericon cop4"></span>
                        <div class="mat-text">
                            <span class="line"></span>
                            <span class="txt">公司注销</span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section mt50 cjbox">
            <div class="w1200">
                <div class="titlebox">
                    <h3>近期成交客户动态</h3>
                </div>
                <div class="newes mt30">
                    <div class="cj-tab">
                        <span class="cj"><em><strong>18564</strong>家</em>累计成交公司</span>
                        <span class="cj"><em><strong>18564</strong>家</em>累计成交公司</span>
                        <span class="cj"><em><strong>18564</strong>家</em>累计成交公司</span>
                    </div>
                    <div class="cj-show scoll">
                        <ul style="top: -36px;">
                            <li>
                                <span class="cj-who">深圳蓝小姐签定了股权变更</span>
                                <span class="cj-contact">189****5720</span>
                                <span class="cj-time">10分钟前</span>
                            </li>
                            <li>
                                <span class="cj-who">厦门范先生签定小规模代理记账</span>
                                <span class="cj-contact">176*******4</span>
                                <span class="cj-time">22分钟前</span>
                            </li>
                            <li>
                                <span class="cj-who">台州张女士签定一般纳税人代理记账</span>
                                <span class="cj-contact">188*******60</span>
                                <span class="cj-time">26分钟前</span>
                            </li>
                            <li>
                                <span class="cj-who">深圳 欧女士 签定深圳注册公司</span>
                                <span class="cj-contact">158****3571</span>
                                <span class="cj-time">41分钟前</span>
                            </li>
                            <li>
                                <span class="cj-who">钦州唐先生签定了股权变更</span>
                                <span class="cj-contact">135****6018</span>
                                <span class="cj-time">1小时前</span>
                            </li>
                            <li>
                                <span class="cj-who">深圳宋先生签定小规模代理记账</span>
                                <span class="cj-contact">135****6018</span>
                                <span class="cj-time">1小时前</span>
                            </li>
                            <li>
                                <span class="cj-who">南京杨先生签定了股权变更</span>
                                <span class="cj-contact">135****6018</span>
                                <span class="cj-time">2小时前</span>
                            </li>
                            <li>
                                <span class="cj-who">本溪韩女士签订了公司注册</span>
                                <span class="cj-contact">135****6018</span>
                                <span class="cj-time">2小时前</span>
                            </li>
                            <li>
                                <span class="cj-who">深圳蓝小姐签定了股权变更</span>
                                <span class="cj-contact">189****5720</span>
                                <span class="cj-time">10分钟前</span>
                            </li>
                            <li>
                                <span class="cj-who">厦门范先生签定小规模代理记账</span>
                                <span class="cj-contact">176*******4</span>
                                <span class="cj-time">22分钟前</span>
                            </li>
                            <li>
                                <span class="cj-who">台州张女士签定一般纳税人代理记账</span>
                                <span class="cj-contact">188*******60</span>
                                <span class="cj-time">26分钟前</span>
                            </li>
                            <li>
                                <span class="cj-who">深圳 欧女士 签定深圳注册公司</span>
                                <span class="cj-contact">158****3571</span>
                                <span class="cj-time">41分钟前</span>
                            </li>
                            <li>
                                <span class="cj-who">钦州唐先生签定了股权变更</span>
                                <span class="cj-contact">135****6018</span>
                                <span class="cj-time">1小时前</span>
                            </li>
                            <li>
                                <span class="cj-who">深圳宋先生签定小规模代理记账</span>
                                <span class="cj-contact">135****6018</span>
                                <span class="cj-time">1小时前</span>
                            </li>
                            <li>
                                <span class="cj-who">南京杨先生签定了股权变更</span>
                                <span class="cj-contact">135****6018</span>
                                <span class="cj-time">2小时前</span>
                            </li>
                            <li>
                                <span class="cj-who">本溪韩女士签订了公司注册</span>
                                <span class="cj-contact">135****6018</span>
                                <span class="cj-time">2小时前</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="news mt50">
            <div class="w1200">
                <h2 class="container-title"><em>新闻资讯</em></h2>
                <div class="newscontent mt30">
                    <div class="newstab">
                        <!--<span class="curr">工商注册</span>
                    <span>代理记账</span>
                    <span>商标注册</span>-->
                        <span class="curr">公司注册</span>
                        <span>代理记账</span>
                        <span>商标注册</span>

                    </div>
                    <div class="newscontainer mt30">
                        <div class="tab-box cl" style="display: block;">
                            <div class="tableft fl">
                                <div class="tableft-list">
                                    <div class="lnimg"><img src="./image/5FB7947E01EB485D98EF156A1F6D0E33.png"></div>
                                    <div class="lntext"><h4><a href="http://91laojie.com/news/34.html">个人独资企业到底是不是公司</a></h4>
                                        <p class="subtext">个人独资企业不是公司啊，如果还不知道的公司老板们，请转发让他们看到这一篇！为何会有人认为个人独资企业是公司呢？小编一直很费解。</p><p class="lntime">2018-03-15</p></div></div>
                                <div class="tableft-list">
                                    <div class="lnimg"><img src="./image/9E5EC9FF8A5C44E3A5AB061178EB9944.png"></div>
                                    <div class="lntext"><h4><a href="http://91laojie.com/news/33.html">创业需知 公司注册资本千万不能乱登记</a></h4>
                                        <p class="subtext">据了解，2015年《公司法》修改后，《公司法》对注册资本实行改革，实缴登记制度转变为认缴登记制度，工商部门只登记公司认缴的注册资本总额，无需登记实收资本，不再收取验资证明文件。改革旨在取消设立公司的门槛，降低设立公司的成本，激励创业，同时，转变政府职能，进行"宽进严管"，将注册资本的数额、股东认缴的出资额、出资方式和出资期限交由公司发起人自主约定，投资人要对缴纳出资情况真实性、合法性负责</p><p class="lntime">2018-03-15</p></div></div>
                                <div class="tableft-list">
                                    <div class="lnimg"><img src="./image/AB382091A2C04D038A137972AB036E33.png"></div>
                                    <div class="lntext"><h4><a href="http://91laojie.com/news/31.html">注册公司营业执照经营范围 怎么写才正确安全</a></h4>
                                        <p class="subtext">什么是营业执照？营业执照是工商行政部门发给企业单位准许从事经营活动的证书凭证。公司名称、证照代码、注册资本、经营范围都是通过各方验证国家统一格式确定的，营业执照经营范围中存在的误区您知道吗?不清楚的话今天就跟着小编一起来看看吧！</p><p class="lntime">2018-03-15</p></div></div>

                            </div>
                            <div class="tabright fr">
                                <div class="lntext"><h4><a href="http://91laojie.com/news/38.html">创业干货 分公司注册所需资料有哪些 </a></h4>
                                    <p class="subtext">据了解，分公司受总公司管理，但同时也是一个独立的公司体系，与公司一样，分公司也需要进行注册，才能合法经营。分公司是公司的一个下属机构，一个分支。那么，分公司注册所需资料有哪些？下面，就让小编来告诉你吧!</p><p class="lntime">2018-03-15</p></div>
                                <div class="lntext"><h4><a href="http://91laojie.com/news/37.html">创业干货 公司注册时经营范围这么写 </a></h4>
                                    <p class="subtext">据了解，现在工商登记的时候对经营范围的填写没有明确的规定，既没有字数要求，也没有类别等的限制，但是一般来说呢，经营范围还是要尽可能的规范、易懂，而且要注意，经营范围可不是单纯的你卖啥就填写啥那么简单，这里面有很多问题都是要格外注意的，千万要慎重。</p><p class="lntime">2018-03-15</p></div>
                                <div class="lntext"><h4><a href="http://91laojie.com/news/36.html">创业答疑 香港注册公司可以在北京经营吗 </a></h4>
                                    <p class="subtext">在香港注册公司可以在北京经营吗? 据了解，香港公司注册地是在香港，是受到香港公司条例约束，而不受大陆公司条例管制，如果香港公司在大陆挂牌经营，按照大陆的法律角度来说是属于非法经营的。所以，香港公司是不能直接在内地经营的，只能以授权或监制等方式在内地经营!</p><p class="lntime">2018-03-15</p></div>
                                <div class="lntext"><h4><a href="http://91laojie.com/news/35.html">创业干货 注册公司流程 </a></h4>
                                    <p class="subtext">据了解，普通的有限责任公司，最低注册资金3万元，需要2个(或以上)股东，从06年1月起新的公司法规定，允许1个股东注册有限责任公司，这种特殊的有限责任公司又称“一人有限公司”(但公司名称中不会有“一人”字样，执照上会注明“自然人独资”)，最低注册资金10万元。</p><p class="lntime">2018-03-15</p></div>

                            </div>
                        </div>
                        <div class="tab-box cl">
                            <div class="tableft fl">
                                <div class="tableft-list">
                                    <div class="lnimg"><img src="./image/6CF8A17229B54C10A57344B8FBFABA66.png"></div>
                                    <div class="lntext"><h4><a href="http://91laojie.com/news/41.html">如何享受税收优惠的政策？</a></h4>
                                        <p class="subtext">为推进大众创业、万众创新，国家税务总局发布了《“大众创业 万众创新”税收优惠政策指引》。截至2017年5月10日，我国针对创业就业主要环节和关键领域陆续推出了83项税收优惠措施，尤其是2013年以来，新出台了73项税收优惠，覆盖企业整个生命周期。</p><p class="lntime">2018-03-15</p></div></div>
                                <div class="tableft-list">
                                    <div class="lnimg"><img src="./image/A0F29E7FB1C64300998FD21D7E4C1CC1.png"></div>
                                    <div class="lntext"><h4><a href="http://91laojie.com/news/40.html">你是新办企业吗？这 7大办税误区需注意！</a></h4>
                                        <p class="subtext">“大众创业 万众创新”这一理念正在全国范围内兴起，新兴企业就如同新生儿般承载着期待与厚望，但是税务机关在服务管理的过程中发现，新办企业总会遇到一些办税误区。小编今天就会带领大家梳理一下这7大应引起重视的问题，希望新办企业能少走弯路，合法经营、茁壮成长。</p><p class="lntime">2018-03-15</p></div></div>
                                <div class="tableft-list">
                                    <div class="lnimg"><img src="./image/385058E0D8484E3782B43F16EC3D3570.png"></div>
                                    <div class="lntext"><h4><a href="http://91laojie.com/news/39.html">个体户需要代理记账吗？</a></h4>
                                        <p class="subtext">我公司不经营不开票，为什么要记账报税？我一个小小的个体户，难道还要报税？</p><p class="lntime">2018-03-15</p></div></div>

                            </div>
                            <div class="tabright fr">
                                <div class="lntext"><h4><a href="http://91laojie.com/news/45.html">你相信吗，做了这些公司真的就没被税务局稽查啦！ </a></h4>
                                    <p class="subtext">税务稽查如果来了，就问你怕不怕？讲真，没有哪个企业是不怕的。他们一代表国家征税，二为公务人员，要为企业服务，企业呢，怕会计账有纰漏，被税务盯上，被税务查到，被税务处罚。若自己有理也不敢太过争辩，想着以后还要在这块地界上经营，多少会顾虑自己会不会被穿小鞋。所以，我们...</p><p class="lntime">2018-03-15</p></div>
                                <div class="lntext"><h4><a href="http://91laojie.com/news/44.html">什么是“1+4+6”系列减税政策？赶紧学起！ </a></h4>
                                    <p class="subtext">4月19日，国务院常务会议决定再度推出六大减税举措。具体体现为由“1＋4＋6”构成的系列减税政策。这个你要问了，什么是“1＋4＋6”系列减税政策呢？我这里就要讲讲。“1＋4”为首次执行的政策，“6”是指6项执行到期后今年延续执行的税收政策。</p><p class="lntime">2018-03-15</p></div>
                                <div class="lntext"><h4><a href="http://91laojie.com/news/43.html">个体户：筹备期未经营 是否需要记账报税 </a></h4>
                                    <p class="subtext">很多个体户老板在听完自己也需要缴税的文章之后都来咨询，问：我们工商注册好了，但是还没开始经营呀，一切都在筹备中呢，这个也需要记账报税？</p><p class="lntime">2018-03-15</p></div>
                                <div class="lntext"><h4><a href="http://91laojie.com/news/42.html">如何享受税收优惠的政策？ </a></h4>
                                    <p class="subtext">关于公司如何节税？打从成为老板的那一天起就成为了一个睁眼起床就会想的事情。可不是吗！钱啊~是必须翻过去倒过来的琢磨和寻思的，怎样才能赚的更多，节税更多？小编告诉你吧。</p><p class="lntime">2018-03-15</p></div>

                            </div>
                        </div>
                        <div class="tab-box cl">
                            <div class="tableft fl">
                                <div class="tableft-list">
                                    <div class="lnimg"><img src="./image/ED69A88CD4E84E36A2F8652B309A4DC1.png"></div>
                                    <div class="lntext"><h4><a href="http://91laojie.com/news/48.html">注册商标的好处有哪些？企业注册商标的好处</a></h4>
                                        <p class="subtext">“国家平台成就国家品牌”---随着央视广告的热播，近几年从国家层面越来越重视和扶持民族品牌的崛起，“国货优先”也是这几天两会代表们...</p><p class="lntime">2018-03-15</p></div></div>
                                <div class="tableft-list">
                                    <div class="lnimg"><img src="./image/0429E47C779447A4A6192C315A35FA30.png"></div>
                                    <div class="lntext"><h4><a href="http://91laojie.com/news/47.html">2018申请续展注册商标指南</a></h4>
                                        <p class="subtext">以下“申请续展注册商标”内容于2018年2月修订，如果以后发生变动，或者在办理中与商标注册大厅接待人员的要求不一致的，应以工作人员...</p><p class="lntime">2018-03-15</p></div></div>
                                <div class="tableft-list">
                                    <div class="lnimg"><img src="./image/3A090808C21D4B7686D88C72E6E783E8.png"></div>
                                    <div class="lntext"><h4><a href="http://91laojie.com/news/46.html">2017年中国知识产权工作进展</a></h4>
                                        <p class="subtext">PCT国际专利申请受理量5.1万件，同比增长12.5%。实用新型和外观设计申请量分别为1…</p><p class="lntime">2018-03-15</p></div></div>

                            </div>
                            <div class="tabright fr">
                                <div class="lntext"><h4><a href="http://91laojie.com/news/52.html">申请著名商标的好处及2018年广州、深圳各区补贴明细 </a></h4>
                                    <p class="subtext">重视企业品牌战略、注重品牌保护的企业。一方面提升品牌价值，不但有助于产品宣传，还有助于无形资产提升和质押融资门槛;另一方面还能起到在商号方面的保护，弥补商标权和商号权保护不对称的不足，为企业实施商标品牌战略，奠定坚实的基础!</p><p class="lntime">2018-03-15</p></div>
                                <div class="lntext"><h4><a href="http://91laojie.com/news/51.html">商标注册需要准备哪些工作？ </a></h4>
                                    <p class="subtext">我们需要明确知道的是，不是所有申请的商标都会被核准注册的，所以办理商标注册一定要做好准备。比如前期的商标查询工作就十分重要，如果没有进行全面的商标查询工作，申请的商标图样早已存在相同的在先商标，那么前期投入的费用和相关准备将前功尽弃。</p><p class="lntime">2018-03-15</p></div>
                                <div class="lntext"><h4><a href="http://91laojie.com/news/50.html">如何申请商标保护?商标被抢注了怎么办? </a></h4>
                                    <p class="subtext">据媒体报道，这几年，各地企业纷纷抢注与“阳明”相关的商标，截至目前申请数量已经超过110多次，王阳明成为近年来商标界“最忙”的历史名人，商标界资深人士认为，尽管这两三年，绍兴也申请注册了一批与“阳明”相关的商标</p><p class="lntime">2018-03-15</p></div>
                                <div class="lntext"><h4><a href="http://91laojie.com/news/49.html">商标转让和商标许可，哪个是企业最优选择？ </a></h4>
                                    <p class="subtext">随着时代的发展，商标得到了企业越来越多的重视，近似商标、商标抢注现象的发生，让企业更加重视维护自身的商标权益。
                                        面对名目众多的法规条款和复杂的申请流程，企业更需要一个对各种条款更为熟悉的机构来代为申请</p><p class="lntime">2018-03-15</p></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="gszs-nr-7">
            <p class="nav-nr-bt">专业的团队赢得客户认可</p>
            <img src="./image/80.jpg">
        </div>
        <div class="partaner mt50 grap">
            <div class="w1200">
                <div class="titlebox">
                    <h3>合作伙伴</h3>
                </div>
                <div class="mt30">
                    <img src="./image/201803120925_03.jpg" alt="合作伙伴">
                </div>
            </div>
        </div>
    </div>

@stop