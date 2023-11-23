<input type="text" name="sample6_postcode" id="sample6_postcode" placeholder="우편번호" style="width:140px;height:40px;"/>
                <button type="button" class="kub" onclick="sample6_execDaumPostcode()">우편번호 찾기</button><br><br>
                <input type="text" placeholder="기본 주소" style="width:500px;height:40px;" name="sample6_address" id="sample6_address"/><br><br>
                <input type="text" placeholder="상세 주소" style="width:500px;height:40px;"
                name="detailAddress" id="detailAddress"/><br><br>
                <select name="deliveryRequest">
                    <option value="0">배송시 요청사항 선택</option>
                    <option value="1">직접 수령하겠습니다.</option>
                    <option value="2">문 앞에 놓아주세요.</option>
                    <option value="3">경비실에 맡겨주세요.</option>
                    <option value="4">대문 앞에 놓아주세요.</option>
                </select><br><br><hr>
                <br>주문상품<br><br><hr>
                <div class="cartItemSE" style="display:flex;">
                    <div style="width:860px; text-align:center;">상품상세정보</div>
                    <div style="width:170px; text-align:center;">가격</div>
                    <div style="width:170px; text-align:center;">배송비</div>
                </div>
<script>
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
</script>