show databases;
use puzzle_db;
show tables;

#テーブル作成(ユーザー)--------------------
create table items
(
    id         INT primary key auto_increment,#ID
    name       VARCHAR(255) unique,#アイテム名#unique(重複を許さない)ウニ食えユニーク
    type       INT not null,#種類 not null　何らかの値を入れないといけない
    effect     INT,#効果値
    detail     VARCHAR(255),#パスワード not null　何らかの値を入れないといけない
    created_at datetime default current_timestamp,
    updated_at datetime default current_timestamp on update current_timestamp
);
SHOW tables;
#テーブル一覧を表示する

#テーブル内にデータ(レコード)を挿入する文
INSERT INTO items (name, type, effect, detail)
VALUES ('item01', 2, 2, '味方全員の攻撃力強化'),
       ('item02', 1, 3, '自身の防御力強化'),
       ('item03', 3, 1, '敵全体にレベルダウン'),
       ('item04', 0, 0, 'バトルから逃走！');
select *
from items;#レコード全部表示

describe items;#レコード内削除

SHOW tables;
#テーブル一覧を表示する

select *
from accounts;#レコード全部表示
select *
from cache;#レコード全部表示
select *
from cache_locks;#レコード全部表示
select *
from failed_jobs;#レコード全部表示
select *
from items;#レコード全部表示
select *
from job_dathoes;#レコード全部表示
select *
from jobs;#レコード全部表示
select *
from migrations;#レコード全部表示
select *
from password_reset_tokens;#レコード全部表示
select *
from sessions;#レコード全部表示
select *
from users;#レコード全部表示
