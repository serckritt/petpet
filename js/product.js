var btn1 = document.getElementById("cBtn1");
var btn2 = document.getElementById("cBtn2");
var btn3 = document.getElementById("reviewWrite");
var menu1 = document.getElementById("menu1");
var menu2 = document.getElementById("menu2");
var menu3 = document.getElementById("menu3");
var bm = document.getElementById("payMa");
var bankBorder1 = document.getElementById("bankBorder1");
var bankBorder2 = document.getElementById("bankBorder2");
var bankBorder3 = document.getElementById("bankBorder3");
var bankBorder4 = document.getElementById("bankBorder4");
var bankBorder5 = document.getElementById("bankBorder5");
var payMath = document.getElementById("card");
var bank1 = document.getElementById("bank1");
var bank2 = document.getElementById("bank2");
var bank3 = document.getElementById("bank3");
var bank4 = document.getElementById("bank4");
var bank5 = document.getElementById("bank5");
var starNum = 10;
var starValue = 0.5;

function starCount(type) {
    const star = document.getElementById("starRate");
    const rating = document.getElementById("starValue");
  
    if (type == "plus") {
        starNum = starNum + 10;
        starValue = starValue + 0.5;
        if (starNum>100) {
            starNum = 100;
            starValue = 5;
        } else {
            star.style.width=starNum+"%";
            rating.value = starValue;
        }
    } else if (type == "minus") {
        starNum = starNum - 10;
        starValue = starValue - 0.5;
        if (starNum<10) {
            starNum = 10;
            starValue = 0.5;
        } else {
            star.style.width=starNum+"%";
            rating.value = starValue;
        }
    }
}

$(document).ready(function() {
    $("#cBtn1").click(function() {
        btn2.style.borderBottom="2px solid #000000";
        btn1.style.borderBottom="0";
        btn1.style.borderTop="2px solid #000000";
        btn1.style.borderLeft="2px solid #000000";
        btn2.style.borderRight="2px solid #c7c7c7";
        btn2.style.borderTop="2px solid #c7c7c7";
        menu1.style.width="100%";
        menu1.style.visibility="visible";
        menu2.style.visibility="hidden";
        menu3.style.visibility="hidden";
    })
});

$(document).ready(function() {
    $("#cBtn2").click(function() {
        btn1.style.borderBottom="2px solid #000000";
        btn2.style.borderBottom="0";
        btn1.style.borderTop="2px solid #c7c7c7";
        btn1.style.borderLeft="2px solid #c7c7c7";
        btn2.style.borderRight="2px solid #000000";
        btn2.style.borderTop="2px solid #000000";
        menu1.style.width="0";
        menu2.style.width="100%";
        menu2.style.visibility="visible";
        menu1.style.visibility="hidden";
        menu3.style.visibility="hidden";
    })
});

$(document).ready(function() {
    $("#reviewWrite").click(function() {
        btn1.style.borderBottom="2px solid #000000";
        btn2.style.borderBottom="0";
        btn1.style.borderTop="2px solid #c7c7c7";
        btn1.style.borderLeft="2px solid #c7c7c7";
        btn2.style.borderRight="2px solid #000000";
        btn2.style.borderTop="2px solid #000000";
        menu2.style.width="0";
        menu1.style.width="0";
        menu3.style.visibility="visible";
        menu2.style.visibility="hidden";
        menu1.style.visibility="hidden";
    })
});


$(document).ready(function() {
    let clickNum2 = 0;
    $("#payMath").click(function() {
        if(clickNum2==0) {
            $(bm).slideDown(200);
            clickNum2 = clickNum2 + 1;
        } else if(clickNum2==1) {
            $(bm).slideUp(200);
            clickNum2 = 0;
        }
    })
});

$(document).ready(function() {
    $("#bank1").click(function() {
        bank1.style.border="1px solid red";
    })
});

bank1.addEventListener('click', function(){
    payMath.value = 1;

    bankBorder1.style.borderColor="#87003a";
    bankBorder2.style.borderColor="";
    bankBorder3.style.borderColor="";
    bankBorder4.style.borderColor="";
    bankBorder5.style.borderColor="";
})
bank2.addEventListener('click', function(){
    payMath.value = 2;

    bankBorder1.style.borderColor="";
    bankBorder2.style.borderColor="#87003a";
    bankBorder3.style.borderColor="";
    bankBorder4.style.borderColor="";
    bankBorder5.style.borderColor="";
})
bank3.addEventListener('click', function(){
    payMath.value = 3;

    bankBorder1.style.borderColor="";
    bankBorder2.style.borderColor="";
    bankBorder3.style.borderColor="#87003a";
    bankBorder4.style.borderColor="";
    bankBorder5.style.borderColor="";
})
bank4.addEventListener('click', function(){
    payMath.value = 4;

    bankBorder1.style.borderColor="";
    bankBorder2.style.borderColor="";
    bankBorder3.style.borderColor="";
    bankBorder4.style.borderColor="#87003a";
    bankBorder5.style.borderColor="";
})
bank5.addEventListener('click', function(){
    payMath.value = 5;
    
    bankBorder1.style.borderColor="";
    bankBorder2.style.borderColor="";
    bankBorder3.style.borderColor="";
    bankBorder4.style.borderColor="";
    bankBorder5.style.borderColor="#87003a";
})

function sample6_execDaumPostcode() {
    new daum.Postcode({
        oncomplete: function(data) {
            // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

            // 각 주소의 노출 규칙에 따라 주소를 조합한다.
            // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
            var addr = ''; // 주소 변수
            var extraAddr = ''; // 참고항목 변수

            //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
            if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                addr = data.roadAddress;
            } else { // 사용자가 지번 주소를 선택했을 경우(J)
                addr = data.jibunAddress;
            }

            // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
            if(data.userSelectedType === 'R'){
                // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                    extraAddr += data.bname;
                }
                // 건물명이 있고, 공동주택일 경우 추가한다.
                if(data.buildingName !== '' && data.apartment === 'Y'){
                    extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                }
                // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                if(extraAddr !== ''){
                    extraAddr = ' (' + extraAddr + ')';
                }
                // 조합된 참고항목을 해당 필드에 넣는다.
                document.getElementById("sample6_extraAddress").value = extraAddr;
            
            } else {
                document.getElementById("sample6_extraAddress").value = '';
            }

            // 우편번호와 주소 정보를 해당 필드에 넣는다.
            document.getElementById('sample6_postcode').value = data.zonecode;
            document.getElementById("sample6_address").value = addr;
            // 커서를 상세주소 필드로 이동한다.
            document.getElementById("sample6_detailAddress").focus();
        }
    }).open();
}