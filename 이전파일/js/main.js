//상품 수량 체크용
function proCount(type) {
  // 결과를 표시할 element
  const cResultElement = document.getElementById("cResult"); //카운트 가져오기
  const prResultElement = document.getElementById("prResult"); //가격 가져오기

  // 현재 화면에 표시된 값
  let count = parseInt(cResultElement.innerText);   //화살표로 변경할 숫자
  let prize = parseInt(prResultElement.innerText.replace(",",""));   //화면에 나오는 숫자에서 쉼표제거함
  let realPrize = prize/count;   // pr/c = 상품 원래가격
  // 수량 더하고 빼는거
  if (type === "plus") {
    count = count + 1;
    prize = count * realPrize;
  } else if (type === "minus") {
    if (parseInt(count) <= 1) {
      count = count;
      prize = count * realPrize;
    } else {
      count = count - 1;
      prize = count * realPrize;
    }
  }

  // 결과 출력
  cResultElement.innerText = count;           // 카운트 +- 결과
  prResultElement.innerText = prize.toLocaleString('ko-KR'); // 가격 결과에 쉼표붙임

  document.getElementById("hiddencnt").value=count;         // 카운트를 보이지 않는곳에 저장
}

function pbCount(type) {
  const resultElement = document.getElementById("pbNum");
  let number = resultElement.innerText;

  if (type === "plus") {
    number = parseInt(number) + 1;
  } else if (type === "minus") {
    if (parseInt(number) <= 1) {
      number = number;
    } else {
      number = parseInt(number) - 1;
    }
  }
  resultElement.innerText = number;
}

//광고 슬라이드
$('.ad').slick({
  dots: true,
  autoplay: true,
  autoplaySpeed: 2000,
  zIndex: 1
});

//그 아래 상품 슬라이드
$('.conMainImg').slick({
  autoplay: true,
  autoplaySpeed: 4000
});

$('.bxTwo').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  variableWidth: true
});