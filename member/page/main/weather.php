                <!-- weather widget start -->
                <div id="m-booked-prime-days-40579">
                    <div class="weather-customize widget-type-prime-days">
                        <div class="booked-prime-days-in">
                            <div class="booked-prime-days-data">
                                <div class="booked-pd-today">
                                    <div class="booked-pd-today-img wrz-18 "></div>
                                    <div class="booked-pd-today-temperature">
                                        <div class="booked-wzs-pd-val">
                                            <div class="booked-wzs-pd-number">
                                                <span class="plus">+</span>19</div>
                                            <div class="booked-wzs-pd-dergee">
                                                <div class="booked-wzs-pd-dergee-val">&deg;</div>
                                                <div class="booked-wzs-pd-dergee-name">C</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="booked-pd-today-extreme">
                                        <div class="booked-pd booked-pd-h">
                                            <span>최고
                                            </span>
                                            <span class="plus">+</span>20</div>
                                        <div class="booked-pd booked-pd-l">
                                            <span>최저
                                            </span>
                                            <span class="plus">+</span>12</div>
                                    </div>
                                </div>
                                <div class="booked-pd-ndays">
                                    <div class="booked-pd-nitem">
                                        <div class="booked-pd-nidi wrz-sml wrzs-18"></div>
                                        <div class="booked-pd-nidw">일</div>
                                    </div>
                                    <div class="booked-pd-nitem">
                                        <div class="booked-pd-nidi wrz-sml wrzs-18"></div>
                                        <div class="booked-pd-nidw">월</div>
                                    </div>
                                    <div class="booked-pd-nitem">
                                        <div class="booked-pd-nidi wrz-sml wrzs-18"></div>
                                        <div class="booked-pd-nidw">화</div>
                                    </div>
                                    <div class="booked-pd-nitem">
                                        <div class="booked-pd-nidi wrz-sml wrzs-18"></div>
                                        <div class="booked-pd-nidw">수</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    var css_file = document.createElement("link");
                    var widgetUrl = location.href;
                    css_file.setAttribute("rel", "stylesheet");
                    css_file.setAttribute("type", "text/css");
                    css_file.setAttribute(
                        "href",
                        'https://s.bookcdn.com/css/w/booked-wzs-widget-prime-days.css?v=0.0.1'
                    );
                    document
                        .getElementsByTagName("head")[0]
                        .appendChild(css_file);
                    function setWidgetData_40579(data) {
                        if (typeof(data) != 'undefined' && data.results.length > 0) {
                            for (var i = 0; i < data.results.length; ++i) {
                                var objMainBlock = document.getElementById('m-booked-prime-days-40579');
                                if (objMainBlock !== null) {
                                    var copyBlock = document.getElementById(
                                        'm-bookew-weather-copy-' + data.results[i].widget_type
                                    );
                                    objMainBlock.innerHTML = data
                                        .results[i]
                                        .html_code;
                                    if (copyBlock !== null) 
                                        objMainBlock.appendChild(copyBlock);
                                    }
                                }
                        } else {
                            alert('data=undefined||data.results is empty');
                        }
                    }
                    var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=4" +
                            "1337;type=6;scode=124;ltid=3458;domid=593;anc_id=34303;countday=undefined;cmet" +
                            "ric=1;wlangID=24;color=137AE9;wwidth=250;header_color=ffffff;text_color=333333" +
                            ";link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;" +
                            "transparent=0;v=0.0.1";
                    widgetSrc += ';ref=' + widgetUrl;
                    widgetSrc += ';rand_id=40579';
                    var weatherBookedScript = document.createElement("script");
                    weatherBookedScript.setAttribute("type", "text/javascript");
                    weatherBookedScript.src = widgetSrc;
                    document
                        .body
                        .appendChild(weatherBookedScript)
                </script>
                <!-- weather widget end -->