create table members ( /* members이름을 가진 테이블을 만들겠다 */
    num int not null auto_increment,	/* num 필드명 생성, int 데이터 형식 숫자, not null 빈값 허용 불가능, auto_increment 1행이 추가될 때 자동으로 생성 */
    id char(15) not null, /* id 필드 생성, char 문자형 15글자 이내 허용, 빈값 허용 불가능 */
    pass char(15) not null,
    name char(10) not null,
    email char(80),
    phone int(11),
    addr char(80),
	gender char(5),
    primary key(num)/* num 필드를 기본키로 정함 */
);

  
