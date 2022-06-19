var filter = "win16|win32|win64|mac|macintel"; 
if (navigator.platform) 
    { 
        if ( filter.indexOf( navigator.platform.toLowerCase() ) < 0 ) 
            { //mobile alert

            } 
            else 
            {
                //pc alert
                alert('PC버전을 개발중입니다.\n당분간 모바일로 접속해주세요.');
                history.back();
            } 
        }