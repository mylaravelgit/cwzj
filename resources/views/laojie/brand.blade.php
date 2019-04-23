@extends('app')
@section('content')
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
                data: { companyName: companyName, tel: phone, registType: "2" },
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
    <div class="sbanner" style="background: url(./image/201803130950_02.jpg) no-repeat center center;">
        <div class="w1200">
            <div class="titleimg"><img src="./image/201803130942_04.png" alt="专业商标注册" style="width: 895px; height: 70px;"></div>
            <div class="inquirebox sbox">
                <div class="search">
                    <div class="searchbar">
							<span class="sr">
								<input type="text" id="companyName" name="" placeholder="请填写商标名字">
								<input type="text" id="tel" name="" placeholder="输入您的手机号码" maxlength="11">
							</span>
                        <span class="search-button" onclick="search()">立即查询能否注册</span>
                    </div>
                </div>
                <div class="result-show cl">
                    <div class="result-left fl">
                        <p class="restit look">目前已有 <em>19058060</em> 次查询,查询结果如下：</p>
                        <div class="resuscroll scoll looklist">
                            <ul style="top: -76px;">
                                <li>
                                    <span class="user"><em>158****8975</em>用户</span>
                                    <span class="lookinfo">查询**商标在第28类-健身器材的成功率为<em>80%</em></span>
                                </li>
                                <li>
                                    <span class="user"><em>136****2345</em>用户</span>
                                    <span class="lookinfo">查询商标*****在第18类-皮具的成功率为<em>78%</em></span>
                                </li>
                                <li>
                                    <span class="user"><em>139****5376</em>用户</span>
                                    <span class="lookinfo">查询商标***第44类-医疗美容注册成功率<em>91%</em></span>
                                </li>
                                <li>
                                    <span class="user"><em>137****1133</em>用户</span>
                                    <span class="lookinfo">查询商标***第25类-鞋子的成功率为<em>83%</em></span>
                                </li>
                                <li>
                                    <span class="user"><em>136****8168</em>用户</span>
                                    <span class="lookinfo">查询商标*****在第25类-服装的成功率为<em>82%</em></span>
                                </li>
                                <li>
                                    <span class="user"><em>1381**9654</em>用户</span>
                                    <span class="lookinfo">查询商标***在第20类-家具工艺的成功率为<em>76%</em></span>
                                </li>
                                <li>
                                    <span class="user"><em>159****2266</em>用户</span>
                                    <span class="lookinfo">查询商标***在第11类-家用电器的成功率为<em>87%</em></span>
                                </li>
                                <li>
                                    <span class="user"><em>158****3300</em>用户</span>
                                    <span class="lookinfo">查询商标***在第35类-广告商业的成功率为<em>88%</em></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="result-right lookright fr">
                        <b class="zsuccess">19527家</b>
                        <p class="zsuccesstext">累计成功注册</p>
                        <a class="known" href="javascript:ec_cs_fnDialogOK()">了解商标分类</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 内容 -->
    <div class="content">
        <div class="container prominent zclock">
            <div class="clock grand w1200">
                <div class="clock-list">
                    <p class="grandtext">累计成交<b>892042</b>家</p>
                </div>
                <div class="clock-list">
                    <p class="grandtext">上月成交<b>892042</b>家</p>
                </div>
                <div class="clock-list">
                    <p class="grandtext">昨日成交<b>892042</b>家</p>
                </div>
            </div>
        </div>
        <div class="section mt50">
            <div class="w1200">
                <div class="titlebox">
                    <h3>化繁为简 商标注册只需4步</h3>
                    <p class="subtitle">商标注册流程规范、简单、一银提交商标申请 </p>
                </div>
                <div class="mt50 sbstep cl">
                    <ul>
                        <li>
                            <span class="NO"><b>1</b></span>
                            <div class="sb-stepcontent">
                                <span class="thisstep">第一步</span>
                                <span class="sbicon sb1"></span>
                                <p class="stepname">商标查询</p>
                            </div>
                        </li>
                        <li>
                            <span class="NO"><b>2</b></span>
                            <div class="sb-stepcontent">
                                <span class="thisstep">第二步</span>
                                <span class="sbicon sb2"></span>
                                <p class="stepname">提交注册</p>
                            </div>
                        </li>
                        <li>
                            <span class="NO"><b>3</b></span>
                            <div class="sb-stepcontent">
                                <span class="thisstep">第三步</span>
                                <span class="sbicon sb3"></span>
                                <p class="stepname">受理通知书</p>
                            </div>
                        </li>
                        <li>
                            <span class="NO"><b>4</b></span>
                            <div class="sb-stepcontent">
                                <span class="thisstep">第四步</span>
                                <span class="sbicon sb4"></span>
                                <p class="stepname">商标注册证书</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="morebox mt50">
                    <a class="more" href="javascript:ec_cs_fnDialogOK()">立即咨询 了解服务细节</a>
                </div>
            </div>
        </div>
        <div class="section hot mt50 ">
            <div class="w1200">
                <div class="titlebox">
                    <h3>3款热门商标“随心申请注册”</h3>
                    <p class="subtitle">抢先注册，不花冤枉钱</p>
                </div>
                <div class="popular">
                    <ul>
                        <li>
                            <div class="popular-text">
                                <p class="popnum">01</p>
                                <h3>普通商标注册</h3>
                                <p class="subtext">三个工作日内上报国家商标局</p>
                            </div>
                            <span class="popularicon"><img src="./image/201803130942_01.png"></span>
                            <div class="popular-btn">
                                <a class="rightnow" href="javascript:ec_cs_fnDialogOK()">立即办理</a>
                                <a class="linechat" href="javascript:ec_cs_fnDialogOK()">在线咨询</a>
                            </div>
                        </li>
                        <li>
                            <div class="popular-text">
                                <p class="popnum">02</p>
                                <h3>加急商标注册</h3>
                                <p class="subtext">当天申请，当天上报，防止他人抢先注册</p>
                            </div>
                            <span class="popularicon"><img src="./image/201803130942_02.png"></span>
                            <div class="popular-btn">
                                <a class="rightnow" href="javascript:ec_cs_fnDialogOK()">立即办理</a>
                                <a class="linechat" href="javascript:ec_cs_fnDialogOK()">在线咨询</a>
                            </div>
                        </li>
                        <li>
                            <div class="popular-text">
                                <p class="popnum">03</p>
                                <h3>担保商标注册</h3>
                                <p class="subtext">注册不成功，退全款</p>
                            </div>
                            <span class="popularicon"><img src="./image/201803130942_03.png"></span>
                            <div class="popular-btn">
                                <a class="rightnow" href="javascript:ec_cs_fnDialogOK()">立即办理</a>
                                <a class="linechat" href="javascript:ec_cs_fnDialogOK()">在线咨询</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section mt50 grap">
            <div class="w1200">
                <div class="titlebox">
                    <h3>办理完成可拿到的资料</h3>
                    <p class="subtitle">证件资料  轻松到手  全程无忧 </p>
                </div>
                <div class="ziliao mt50">
                    <ul>
                        <li>
                            <span><img src="./image/201803130938_23.jpg" alt="" width="335" height="276"></span>
                            <p>商标注册号</p>
                        </li>
                        <li>
                            <span><img src="./image/201803130938_20.jpg" alt="" width="335" height="276"></span>
                            <p>商标注册号</p>
                        </li>
                        <li>
                            <span><img src="./image/201803130938_17.jpg" alt="" width="335" height="276"></span>
                            <p>商标注册号</p>
                        </li>
                    </ul>
                </div>
                <div class="morebox mt50">
                    <a class="more" href="javascript:ec_cs_fnDialogOK()">立即办理</a>
                </div>
            </div>
        </div>
        <div class="section hot apply">
            <div class="w1200">
                <div class="titlebox">
                    <h3>商标注册的作用</h3>
                    <p class="subtitle">“商标侵权”是每个互联网创业公司都需要注意的法律问题，商标注册证书能有效地保护自己创业成果<br>防止自己的文字、图形、字母、数字等显著特征标志被恶意侵权 </p>
                </div>
                <p class="below mt30">以下情形都需要用到商标申请相关文件</p>
                <div class="apply-list mt30">
                    <ul>
                        <li>
                            <span class="applyNO">01</span>
                            <span class="applytxt">申请微博、微信公众账号的官方认证</span>
                        </li>
                        <li>
                            <span class="applyNO">02</span>
                            <span class="applytxt">申请入驻京东、天猫等电子商务平台</span>
                        </li>
                        <li>
                            <span class="applyNO">03</span>
                            <span class="applytxt">申领质检、卫检的条码</span>
                        </li>
                        <li>
                            <span class="applyNO">04</span>
                            <span class="applytxt">搜索引擎推广品牌词保护</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mt50">
            <div class="w1200">
                <div class="titlebox">
                    <h3>选择我们，助您塑造品牌“快人一步”</h3>
                    <p class="subtitle">商标局正规备案机构， 一百多名专业服务顾问 </p>
                </div>
                <div class="us mt50">
                    <div class="uslist us1">
                        <span class="uslist-l">专业查询系统</span>
                        <span class="uslist-r">针对不同行业不同商标名字进行精准查询检索在先注册和近似风险将风险降到最低。</span>
                    </div>
                    <div class="uslist us2">
                        <span class="uslist-l">一对一顾问服务</span>
                        <span class="uslist-r">专业知府产权顾问进行一对一服务、申请办理、监测一条龙。</span>
                    </div>
                    <div class="uslist us3">
                        <span class="uslist-l">终身免费专业咨询</span>
                        <span class="uslist-r">所有知识产权相关信息咨询可对接服务顾问终身免费咨询，避免知产侵权</span>
                    </div>
                    <div class="uslist us4">
                        <span class="uslist-l">高效快速办理</span>
                        <span class="uslist-r">当天上报，一个工作日领回执，抢占市场先行一步。</span>
                    </div>
                    <div class="uslist us5">
                        <span class="uslist-l">全方位风险测评</span>
                        <span class="uslist-r">知识产权布局运营，为企业知识产权布局增加市场竞争力。</span>
                    </div>
                </div>
                <div class="morebox mt50">
                    <a class="more" href="javascript:ec_cs_fnDialogOK()">立即咨询办理</a>
                </div>
            </div>
        </div>
        <div class="section mt50 grap">
            <div class="w1200">
                <div class="titlebox">
                    <h3>财税务还可以为您提供以下服务</h3>
                    <p class="subtitle">涵盖300多项目工商服务，能满足企业的任务需求</p>
                </div>
                <div class="cswservice mt50">
                    <div class="cswservice-list">
                        <span class="sericon s1"></span>
                        <div class="mat-text">
                            <span class="line"></span>
                            <span class="txt">公司变更</span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="cswservice-list">
                        <span class="sericon s2"></span>
                        <div class="mat-text">
                            <span class="line"></span>
                            <span class="txt">许可证办理</span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="cswservice-list">
                        <span class="sericon s3"></span>
                        <div class="mat-text">
                            <span class="line"></span>
                            <span class="txt">银行开户</span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="cswservice-list">
                        <span class="sericon s4"></span>
                        <div class="mat-text">
                            <span class="line"></span>
                            <span class="txt">会计代理</span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop