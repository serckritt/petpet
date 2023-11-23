var ac = document.getElementById("allCate");
var bt1 = document.getElementById("acBtn1");
var bt2 = document.getElementById("acBtn2");
var bt3 = document.getElementById("acBtn3");
var as = document.getElementById("acSub");
var sm1 = document.getElementById("subMes1");
var sm2 = document.getElementById("subMes2");
var sm3 = document.getElementById("subMes3");

//전체 카테고리 버튼 클릭 시
$(document).ready(function() {
    let clickNum = 0;
    $("#cateBtn").click(function() {
        if(clickNum==0) {
            $(ac).slideDown(200);
            clickNum = clickNum + 1;
        } else if(clickNum==1) {
            $(ac).slideUp(200, function() {
                as.style.width="0px";
                as.style.height="0px";
                as.style.overflow="hidden";
                bt1.style.color="";
                bt2.style.color="";
                bt3.style.color="";
                bt1.style.backgroundColor="";
                bt2.style.backgroundColor="";
                bt3.style.backgroundColor="";
                bt1.style.border="";
                bt2.style.border="";
                bt3.style.border="";
            });
            as.style.width="0px";
            as.style.height="0px";
            as.style.overflow="hidden";
            bt1.style.color="";
            bt2.style.color="";
            bt3.style.color="";
            bt1.style.backgroundColor="";
            bt2.style.backgroundColor="";
            bt3.style.backgroundColor="";
            bt1.style.border="";
            bt2.style.border="";
            bt3.style.border="";
            clickNum = 0;
        }
    })
});

//카테고리 1번에 마우스를 올렸을 때
bt1.addEventListener('mouseover', function(){
    as.style.width="1000px";
    as.style.height="210px";
    as.style.overflow="visible";
    bt1.style.color="#5e0029";
    bt2.style.color="";
    bt3.style.color="";
    bt1.style.backgroundColor="#ffffff";
    bt1.style.border="";
    bt1.style.borderTop="4px solid #5e0029";
    bt1.style.borderLeft="4px solid #5e0029";
    bt1.style.borderBottom="4px solid #5e0029";
    bt1.style.boxSizing="border-box";
    bt2.style.backgroundColor="#99004c";
    bt2.style.border="";
    bt2.style.borderRight="4px solid #5e0029";
    bt3.style.backgroundColor="#99004c";
    bt3.style.border="";
    bt3.style.borderRight="4px solid #5e0029";
    sm1.style.width="1000px";
    sm1.style.height="210px";
    sm1.style.backgroundColor="#ffffff";
    sm1.style.border="4px solid #5e0029"
    sm1.style.borderLeft="0";
    sm1.style.boxSizing="border-box";
    sm1.style.overflow="visible";
    sm2.style.width="0";
    sm2.style.height="0";
    sm2.style.border="0";
    sm2.style.overflow="hidden";
    sm3.style.width="0";
    sm3.style.height="0";
    sm3.style.border="0";
    sm3.style.overflow="hidden";
})

//카테고리 2번에 마우스를 올렸을 때
bt2.addEventListener('mouseover', function(){
    as.style.width="1000px";
    as.style.height="210px";
    as.style.overflow="visible";
    bt1.style.color="";
    bt2.style.color="#5e0029";
    bt3.style.color="";
    bt1.style.backgroundColor="#99004c";
    bt1.style.border="";
    bt1.style.borderRight="4px solid #5e0029";
    bt2.style.backgroundColor="#ffffff";
    bt2.style.border="";
    bt2.style.borderTop="4px solid #5e0029";
    bt2.style.borderLeft="4px solid #5e0029";
    bt2.style.borderBottom="4px solid #5e0029";
    bt2.style.boxSizing="border-box";
    bt3.style.backgroundColor="#99004c";
    bt3.style.border="";
    bt3.style.borderRight="4px solid #5e0029";
    sm1.style.width="0";
    sm1.style.height="0";
    sm1.style.border="0";
    sm1.style.overflow="hidden";
    sm2.style.width="1000px";
    sm2.style.height="210px";
    sm2.style.backgroundColor="#ffffff";
    sm2.style.border="4px solid #5e0029"
    sm2.style.borderLeft="0";
    sm2.style.boxSizing="border-box";
    sm2.style.overflow="visible";
    sm3.style.width="0";
    sm3.style.height="0";
    sm3.style.border="0";
    sm3.style.overflow="hidden";
})

//카테고리 3번에 마우스를 올렸을 때
bt3.addEventListener('mouseover', function(){
    as.style.width="1000px";
    as.style.height="210px";
    as.style.overflow="visible";
    bt1.style.color="";
    bt2.style.color="";
    bt3.style.color="#5e0029";
    bt1.style.backgroundColor="#99004c";
    bt1.style.border="";
    bt1.style.borderRight="4px solid #5e0029";
    bt2.style.backgroundColor="#99004c";
    bt2.style.border="";
    bt2.style.borderRight="4px solid #5e0029";
    bt3.style.backgroundColor="#ffffff";
    bt3.style.border="";
    bt3.style.borderTop="4px solid #5e0029";
    bt3.style.borderBottom="4px solid #5e0029";
    bt3.style.borderLeft="4px solid #5e0029";
    bt3.style.boxSizing="border-box";
    sm1.style.width="0";
    sm1.style.height="0";
    sm1.style.border="0";
    sm1.style.overflow="hidden";
    sm2.style.width="0";
    sm2.style.height="0";
    sm2.style.border="0";
    sm2.style.overflow="hidden";
    sm3.style.width="1000px";
    sm3.style.height="210px";
    sm3.style.backgroundColor="#ffffff";
    sm3.style.border="4px solid #5e0029"
    sm3.style.borderLeft="0";
    sm3.style.boxSizing="border-box";
    sm3.style.overflow="visible";
})