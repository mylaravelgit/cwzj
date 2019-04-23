@extends('laojie.app')
@section('content')

    <div class="main">
            <div class="nav-banner-gszs">
                <div class="chaxun">
                    <span class="sr">
                        <input type="text" id="companyName" name="companyname" placeholder="请填写公司名字">
                        <input type="text" id="tel" name="younumber" placeholder="输入您的手机号码" maxlength="11">
                    </span>
                    <div class="chaxun-right" onclick="search()">
    立即查询
                    </div>
                </div>
                <div class="gundong">
                    <div class="gundong-tanmu">
                        <div class="scrolltext">
                            <div id="breakNews">
                                <ol id="breakNewsList" class="list6"><li><span class="gundong-span">查询：</span><span class="gundong-span1">（北京五***信息技术有限公司）</span><span class="gundong-span2 zc">正常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（广东居***设计工程有限公司）</span><span class="gundong-span2 zc">正常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（上海乐***房产交易有限公司）</span><span class="gundong-span2 yc">地址异常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（北京好***教育咨询有限公司）</span><span class="gundong-span2 yc">税务异常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（深圳健***信息科技有限公司）</span><span class="gundong-span2 yc">地址异常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（武汉东***投资发展有限公司）</span><span class="gundong-span2 zc">正常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（上海玉***投资咨询有限公司）</span><span class="gundong-span2 yc">工商异常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（北京世***清鸿科技有限公司）</span><span class="gundong-span2 yc">税务异常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（上海永***地产经纪有限公司）</span><span class="gundong-span2 zc">正常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（南京合***顺联科技有限公司）</span><span class="gundong-span2 yc">地址异常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（北京一***商贸有限责任公司）</span><span class="gundong-span2 zc">正常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（广州鑫***信息咨询有限公司）</span><span class="gundong-span2 yc">地址异常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（北京富***地产经纪有限公司）</span><span class="gundong-span2 yc">工商异常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（上海舜***投资管理有限公司）</span><span class="gundong-span2 yc">税务异常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（北京五***信息技术有限公司）</span><span class="gundong-span2 zc">正常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（广东居***设计工程有限公司）</span><span class="gundong-span2 zc">正常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（上海乐***房产交易有限公司）</span><span class="gundong-span2 yc">地址异常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（北京好***教育咨询有限公司）</span><span class="gundong-span2 yc">税务异常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（深圳健***信息科技有限公司）</span><span class="gundong-span2 yc">地址异常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（武汉东***投资发展有限公司）</span><span class="gundong-span2 zc">正常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（上海玉***投资咨询有限公司）</span><span class="gundong-span2 yc">工商异常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（北京世***清鸿科技有限公司）</span><span class="gundong-span2 yc">税务异常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（上海永***地产经纪有限公司）</span><span class="gundong-span2 zc">正常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（南京合***顺联科技有限公司）</span><span class="gundong-span2 yc">地址异常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（北京一***商贸有限责任公司）</span><span class="gundong-span2 zc">正常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（广州鑫***信息咨询有限公司）</span><span class="gundong-span2 yc">地址异常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（北京富***地产经纪有限公司）</span><span class="gundong-span2 yc">工商异常</span></li><li><span class="gundong-span">查询：</span><span class="gundong-span1">（上海舜***投资管理有限公司）</span><span class="gundong-span2 yc">税务异常</span></li></ol>
                            </div>
                        </div>
                    </div>
                    <div class="gundong-right">
                        <p>
                            <span>目前已有</span>
                            <span class="gundong-right-span">1321321</span>
                            <span>次查询</span>
                        </p>
                        <p>
                            <span>累计注销</span>
                            <span class="gundong-right-span">105468</span>
                            <span>家公司</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="gszs-nr">
                <p class="nav-nr-bt">注销公司详细介绍</p>
                <div class="gszs-nr-anniu">
                    <div class="gszs-nr-anniu1">
注销流程
                    </div>
                    <div>
注销条件
                    </div>
                    <div>
所需资料
                    </div>
                </div>
                <div class="gszs-nr-nr">
                    <div class="gszs-nr-nr1-all">
                        <ul class="gszs-nr-nr1">
                            <li>
                                <img src="./image/61.png">
                                <p>注销银行基本账户(如有)</p>
                            </li>
                            <li class="gszs-nr-nr-jt">

                            </li>
                            <li>
                                <img src="./image/62.png">
                                <p>注销税务</p>
                            </li>
                            <li class="gszs-nr-nr-jt">

                            </li>
                            <li>
                                <img src="./image/63.png">
                                <p>注销执照</p>
                            </li>
                            <li class="gszs-nr-nr-jt">

                            </li>
                            <li>
                                <img src="./image/64.png">
                                <p>注销代码及印章</p>
                            </li>
                        </ul>
                        <div class="gszs-nr-nr1-footer">
                            <p>2015.7月份以前注册的公司,如果没有开过发票,而且税务一切正常,可走全网流程注销</p>
                            <div class="nav-nr3-btt">
                                <a href="javascript:ec_cs_fnDialogOK()">立即咨询注销</a>
                            </div>
                        </div>
                    </div>
                    <div class="gszs-nr-nr2-all">
                        <div class="gszs-nr-nr2">
                            <ul>
                                <li>
                                    <p class="gszs-nr-nr2-p1">
                                        <span class="gszs-nr-nr2-span1">1</span>
                                        <span class="gszs-nr-nr2-span2">公司经营不下去或者公司不想继续经营</span>
                                    </p>
                                    <p class="gszs-nr-nr2-p2">
                                        <span class="gszs-nr-nr2-span1">2</span>
                                        <span class="gszs-nr-nr2-span2">公司被依法宣告破产</span>
                                    </p>
                                </li>
                                <li>
                                    <p class="gszs-nr-nr2-p1">
                                        <span class="gszs-nr-nr2-span1">3</span>
                                        <span class="gszs-nr-nr2-span2">公司章程规定的营业期限届满或者公司章程规定的其他解散事由出现时</span>
                                    </p>
                                    <p class="gszs-nr-nr2-p2">
                                        <span class="gszs-nr-nr2-span1">4</span>
                                        <span class="gszs-nr-nr2-span2">公司股东会议解散</span>
                                    </p>
                                </li>
                                <li>
                                    <p class="gszs-nr-nr2-p1">
                                        <span class="gszs-nr-nr2-span1">5</span>
                                        <span class="gszs-nr-nr2-span2">公司因合并分立解散</span>
                                    </p>
                                    <p class="gszs-nr-nr2-p2">
                                        <span class="gszs-nr-nr2-span1">6</span>
                                        <span class="gszs-nr-nr2-span2">公司被依法责令关闭</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="gszs-nr-nr1-footer">
                            <p>2015.7月份以前注册的公司,如果没有开过发票,而且税务一切正常,可走全网流程注销</p>
                            <div class="nav-nr3-btt">
                                <a href="javascript:ec_cs_fnDialogOK()">立即咨询注销</a>
                            </div>
                        </div>
                    </div>

                    <div class="gszs-nr-nr3-all">
                        <div class="gszs-nr-nr3">
                            <ul>
                                <li class="gszs-nr-nr3-li1">走传统流程注销公司所需资料：</li>
                                <li>
                                    <p class="gszs-nr-nr2-p2">
                                        <span class="gszs-nr-nr2-span1">1</span>
                                        <span class="gszs-nr-nr2-span2">银行基本户资料全套</span>
                                    </p>
                                </li>
                                <li>
                                    <p class="gszs-nr-nr2-p2">
                                        <span class="gszs-nr-nr2-span1">2</span>
                                        <span class="gszs-nr-nr2-span2">公司整套资料</span>
                                    </p>
                                </li>
                                <li>
                                    <p class="gszs-nr-nr2-p2">
                                        <span class="gszs-nr-nr2-span1">3</span>
                                        <span class="gszs-nr-nr2-span2">做账凭证及总账本,年度财务报表</span>
                                    </p>
                                </li>
                                <li>
                                    <p class="gszs-nr-nr2-p2">
                                        <span class="gszs-nr-nr2-span1">4</span>
                                        <span class="gszs-nr-nr2-span2">法人身份证复印件</span>
                                    </p>
                                </li>
                            </ul>
                            <ul>
                                <li class="gszs-nr-nr3-li1">走全网流程注销公司所需资料：</li>
                                <li>
                                    <p class="gszs-nr-nr2-p2">
                                        <span class="gszs-nr-nr2-span1">1</span>
                                        <span class="gszs-nr-nr2-span2">法人及全体股东的个人U盾</span>
                                    </p>
                                </li>
                                <li>
                                    <p class="gszs-nr-nr2-p2">
                                        <span class="gszs-nr-nr2-span1">2</span>
                                        <span class="gszs-nr-nr2-span2">法人及全体股东的身份证复印件</span>
                                    </p>
                                </li>
                                <li>
                                    <p class="gszs-nr-nr2-p2">
                                        <span class="gszs-nr-nr2-span1">3</span>
                                        <span class="gszs-nr-nr2-span2">企业数字证书</span>
                                    </p>
                                </li>
                                <li>
                                    <p class="gszs-nr-nr2-p2">
                                        <span class="gszs-nr-nr2-span1">4</span>
                                        <span class="gszs-nr-nr2-span2">公司整套资料</span>
                                    </p>
                                </li>
                                <li>
                                    <p class="gszs-nr-nr2-p2">
                                        <span class="gszs-nr-nr2-span1">5</span>
                                        <span class="gszs-nr-nr2-span2">企业数字证书</span>
                                    </p>
                                </li>
                                <li>
                                    <p class="gszs-nr-nr2-p2">
                                        <span class="gszs-nr-nr2-span1">6</span>
                                        <span class="gszs-nr-nr2-span2">公司整套资料</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="gszs-nr-nr1-footer">
                            <p>注销公司时,税务局会查账查税,必须要求注销企业财务和税务一切正常</p>
                            <div class="nav-nr3-btt">
                                <a href="javascript:ec_cs_fnDialogOK()">立即咨询注销</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="gszs-nr-2">
                <p class="nav-nr-bt">公司不经营也不注销的8个后果</p>
                <ul>
                    <li>
                        <span>公司法人不能贷款买房</span>
                    </li>
                    <li>
                        <span>公司法人不能领养老保险</span>
                    </li>
                    <li>
                        <span>公司法人不能办移民</span>
                    </li>
                    <li>
                        <span>每年被税务局罚款2000-1万元</span>
                    </li>
                    <li>
                        <span>公司法人不能购买社保</span>
                    </li>
                    <li>
                        <span>长期不申报税收,发票会被锁机</span>
                    </li>
                    <li>
                        <span>长期不申报税收,税务局会上门检查</span>
                    </li>

                    <li>
                        <span>若有欠税,企业法人会被禁止出境,搭不了飞机和高铁</span>
                    </li>
                </ul>
            </div>
            <div class="gszs-nr-3">
                <p class="nav-nr-bt">找我们注销公司更有优势</p>
                <div class="gszs-nr-3-all">
                    <ul class="gszs-nr-3-ul1">
                        <li class="gszs-nr-3-li1" style="padding-top: 21px;">
                            <div>
                                <p>注销公司</p>
                            </div>
                        </li>
                        <li style="padding-top: 22px;">
                            <div>
                                <p class="gszs-nr-3-li2-p1">时效快</p>
                                <p>办事时效快,资料及时办理,确定百分百注销成功</p>
                            </div>
                        </li>
                        <li style="padding-top: 6px;">
                            <div>
                                <p class="gszs-nr-3-li2-p1">效率高</p>
                                <p>熟悉各办事流程及规则,并与工商税务部门有着良好的关系,办事方便快捷,一天即出执照,体验飞一般的神速</p>
                            </div>
                        </li>
                        <li style="padding-top: 6px;">
                            <div>
                                <p class="gszs-nr-3-li2-p1">专业顾问一对一服务</p>
                                <p>为您配备专属专业顾问一对一服务,全程免费,岗位分工明细,每个办事流程都有相应的专业部门负责,办事效率高</p>
                            </div>
                        </li>
                        <li style="padding-top: 22px;">
                            <div>
                                <p class="gszs-nr-3-li2-p1">正规办理</p>
                                <p>签定合同,正规办理,官方统一价格明码标价,无隐形消费,拒绝中途加价</p>
                            </div>
                        </li>
                    </ul>
                    <ul class="gszs-nr-3-ul2">
                        <li class="gszs-nr-3-li1" style="padding-top: 21px;">
                            <div>
                                <p>其他公司注销</p>
                            </div>
                        </li>
                        <li style="padding-top: 22px;">
                            <div>
                                <p class="gszs-nr-3-li2-p1">速度慢</p>
                                <p>时效慢,多家资料堆积一起注销,一起办理,不能确定什么时候注销完</p>
                            </div>
                        </li>
                        <li style="padding-top: 22px;">
                            <div>
                                <p class="gszs-nr-3-li2-p1">注销流程不熟悉</p>
                                <p>注销的整个流程复杂不熟悉,办理每一步流程还需打电话问</p>
                            </div>
                        </li>
                        <li style="padding-top: 22px;">
                            <div>
                                <p class="gszs-nr-3-li2-p1">专业知识不到位</p>
                                <p>专业知识不到位,没有经过任何培训,无法及时解决问题</p>
                            </div>
                        </li>
                        <li style="padding-top: 22px;">
                            <div>
                                <p class="gszs-nr-3-li2-p1">私人办理</p>
                                <p>公司只有几个人,一人对接多个客户,问题不能及时得到处理</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="gszs-nr-4">
                <p class="nav-nr-bt">我们注销公司4大优势保障</p>
                <p class="nav-nr4-last-p">郑重承诺：不成功即退款</p>
                <ul>
                    <li>
                        <div class="gszs-nr-4-img">
                            <img src="./image/71.png">
                        </div>
                        <p class="gszs-nr-4-p1">一对一服务</p>
                        <p>50名专业顾问</p>
                        <p>一对一服务</p>
                    </li>
                    <li>
                        <div class="gszs-nr-4-img">
                            <img src="./image/72.png">
                        </div>
                        <p class="gszs-nr-4-p1">全程代办</p>
                        <p>全程专业代办</p>
                        <p>无需法人到场</p>
                    </li>
                    <li>
                        <div class="gszs-nr-4-img">
                            <img src="./image/73.png">
                        </div>
                        <p class="gszs-nr-4-p1">收费透明</p>
                        <p>官网统一收费</p>
                        <p>无隐形收费</p>
                    </li>
                    <li>
                        <div class="gszs-nr-4-img">
                            <img src="./image/74.png">
                        </div>
                        <p class="gszs-nr-4-p1">资料寄送</p>
                        <p>办理完成后</p>
                        <p>所有材料及时顺丰快递送达</p>
                    </li>
                </ul>


            </div>
            <div class="gszs-nr-5">
                <p class="nav-nr-bt">公司注销常见问题</p>
                <ul>
                    <li>
                        <div>
                            <img src="./image/76.png">
                            <p class="gszs-nr-5-p1">公司注销需要哪些费用？</p>
                        </div>
                        <div>
                            <img src="./image/77.png">
                            <p>该服务根据公司具体情况进行报价,收取一次性服务费,自身产生的费用除外(如:银行基本户欠费,交纳税金)</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="./image/76.png">
                            <p class="gszs-nr-5-p1">公司注销需要多长时间？</p>
                        </div>
                        <div>
                            <img src="./image/77.png">
                            <p>注销手续繁琐,3-6个月注销完成根据公司业务不同及各地政策差异,办理时间会不同</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="./image/76.png">
                            <p class="gszs-nr-5-p1">公司注销需要本人到现场配合吗？</p>
                        </div>
                        <div>
                            <img src="./image/77.png">
                            <p>不需要,我司全程代办</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="./image/76.png">
                            <p class="gszs-nr-5-p1">公司不想经营了,只能注销吗？还有没有其他办法</p>
                        </div>
                        <div>
                            <img src="./image/77.png">
                            <p>公司不想经营可以注销也可以转让给需要的人,我司也可以帮您转让</p>
                        </div>
                    </li>
                </ul>
                <div class="nav-nr3-btt">
                    <a href="javascript:ec_cs_fnDialogOK()">咨询更多公司注销问题</a>
                </div>
            </div>

            <div class="gszs-nr-7">
                <p class="nav-nr-bt">专业的团队赢得客户认可</p>
                <div class="gszs-nr-7-images">

                </div>
            </div>
        </div>
 @stop