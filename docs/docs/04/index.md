---
layout: default
---

# 수업 2019.09.18
수업 내용 정리

## git에서 자신의 리포지토리 (이름 예시:[PHP.123456]) 에 있는 settings에 들어가 인터넷 스크롤을 아래로 내리다보면 git hub page의 가장 첫번째 탭에 보면 없음에서 마스터 브랜치/docs 폴더 라는 탭으로 변경해준다.<br>

## 바로 변경이 안될때가 있는데 그럴땐 리포지토리에서 docs 폴더와 필요한 파일을 구해두고(혹은 만들고) index.md,html 을 만든다 그렇게 하면 기본적으로 git에게 할당받은 사이트에 접속하면 기본 페이지가 나타난다.<br>

## 기본적인 메인 페이지를 만들었다면 다른 웹 사이트 처럼 이동하며 알아볼수있도록 링크를 걸어둔다. html 이라면 <a href ="~~~~">""</a>로 링크를 걸어 이동할수있지만 md는 인라인 주소 삽입 방법과 참조 링크 삽입 방법 함축적 링크 사용 방법이 있다.<br>

## 우선 인라인 주소 삽입 방법은 [주소에 대한 설명](~~~~~~)이런식으로 표기하는 방법이고 참조 링크 삽입 방법은 링크 삽입 시 문법으로 \[""]\[참조 번호] 참조 번호 작성 문법은 \[참조 번호]:주소 이다.(나무위키에서 자주 쓰는 방식으로 알고있음.)<br>

## 마지막으로 함축적 링크 사용은 링크 삽입시 문법으로 [참조 이름] 참조이름 작성 문법은 [참조 이름]: 주소 이다. 사실상 참조링크,함축적 링크에서 참조 번호, 이름은 글 어디에든 적어두어도 된다. URL주소만 적을때는 <주소> 형태로 작성하면 됨. <br>

## 그림삽입은 html보다 더 간단하다. html로 그림을 삽입하려면 <img /절대 경로 값 > 이런식인대 md는 ![캡쳐](./경로) 만 해두면 된다. 사실상 익숙해지면 html보다 쉽고 더 빠르게 익히는것이 가능하다. <br>

## html 제목은 보통 hr태그를 쓴다. md 에서는 원하는 제목을 쓰고 =을 밑에 줄에 그어주면 된다. h2 태그를 md에서는 -을 긁어주면 된다.(예시)

hellow
=============
Hi!!
---------

## 이런식으로 가능하다. html에서 글자 크기를 나누려면 p태그나 h12345 태그 등 사용해야하지만 md는 #의 갯수로 크기가 결정된다.
![캡쳐 1](./img/캡처.png)