<?php // html의 <!-- 주석이 f12창에서 나오는 문제가 있음--> 
?>
<div class="nev1">
    <div class="nev2">
        <div class="subCategory">
            <div class="scMenu"><a href="ProductList.php">인기상품 보러가기</a></div>
            <div class="scMenu"><a href="ProductList.php?cate1=1">사료 및 간식 보러가기</a></div>
            <div class="scMenu"><a href="ProductList.php?cate1=2">의약품 보러가기</a></div>
            <div class="scMenu"><a href="ProductList.php?cate1=3">장난감/기타용품 보러가기</a></div>
        </div>
    </div>        

    <div class="category">
        <button id="cateBtn" type="button">
            <div class="ctbi"><img src="https://user-images.githubusercontent.com/126138315/234766244-5d475cab-3f3b-44e2-84e5-1e29193f5501.png"></div>
        </button>
        <div class="allTheWay">
            <div id="allCate">
                <div class="acMenu">
                    <div id="acBtn1">사료 및 간식</div>
                </div>
                <div class="acMenu">
                    <div id="acBtn2">의약품 및 의료기기</div>
                </div>
                <div class="acMenu">
                    <div id="acBtn3">장난감 및 기타용품</div>
                </div>
            </div>
            <div id="acSub">
                <div class="acSubBx">      
<?php
    try { //트라이문 시작
        require("db_connect.php"); //db연결  
        
        $cateimg = ["https://user-images.githubusercontent.com/126138315/243312151-9254c37a-c621-4ea4-aaeb-4111ce87edb1.png",
        "https://user-images.githubusercontent.com/126138315/243317002-a50a11df-9fd5-43b4-b4ef-5a7d72bcfa5c.png",
        "https://user-images.githubusercontent.com/126138315/243320419-a616ad7c-e968-4e93-830a-216c495f8159.png"];
        
        $query = $db->query("select cate1_num, cate1_name   -- 검색 대분류키
                            from category_1st               -- 대분류 db에서 
                            order by cate1_num              -- 정렬 대분류키 순서로 --는 sql 주석
                            ");

        $i=1; //반복당 아이디 번호 증가

        // 1차반복 ------------------   대분류키 검색 -----------------------------------------
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {  
            $cate1_num = $row["cate1_num"];                 // 대분류키 변수 저장
            $subMes = "subMes".$i;        // 예시 i가 1이면 변수가 subMes + 1 "subMes1"이 됨
?>

                    <div id=<?=$subMes?>>
<?php
            $query2 = $db->query("select cate2_num, cate2_name  -- 검색 2분류이름
                                from category_2nd               -- 2분류 db에서 
                                WHERE cate1_num = '$cate1_num'  -- 검색조건 대분류키랑 같은거만 
                                order by cate2_num              -- 정렬 대분류키 2분류키 순서로 --는 sql 주석
                                "); 

            // 2차반복 -------------------------------------
            while ($row2 = $query2->fetch(PDO::FETCH_ASSOC)) {    
                $cate2_num = $row2["cate2_num"];
                $cate2_name = $row2["cate2_name"];          // 2분류 이름
?>
                        <div class="subMesContent">
                            <ul>
                                <b><?=$cate2_name?></b><br><br>         

<?php

                $query3 = $db->query("select cate3_name, cate3_num      -- 검색3 소분류이름, 소분류키
                                        from category_3rd               -- 3분류 db에서
                                        WHERE cate2_num = '$cate2_num'  -- 검색조건 2분류키랑 같은거만
                                        order by cate3_num              -- 정렬 3분류키 순서대로 
                                        ");

                //3차반복 -------------------------------------------                        
                while ($row3 = $query3->fetch(PDO::FETCH_ASSOC)) {  
                    $cate3_url = "productList.php?cate3=".$row3["cate3_num"];
                    $cate3_name = $row3["cate3_name"];          // 3분류 이름
?>
                                    <li>
                                        <a href= <?=$cate3_url?>><?=$cate3_name?></a>
                                    </li>
<?php
                }//3차반복 끝 ------------------------------------------------------------------------------------------
?>
                            </ul>
                        </div>
                        

<?php
            } // 2차반복끝 ----------------------------------------------------------------------------------------------------               
?>                   
                        <div class="subMesContentImg">
                            <img src=<?=$cateimg[$cate1_num-1]?>>
                        </div>
                    </div>


<?php
        
        $i++;
        }//1차반복 끝
    } catch (PDOException $e) {
        exit($e->getMessage());
    } //트라이문 끝
?>          
                </div>
            </div>
        </div>
    </div>
</div>
