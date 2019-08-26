<?php

/* criação de BD e tabela

CREATE DATABASE AuditesteNaoFuncionais;

CREATE TABLE cinemark(dt_registro timeStamp,elapsed int ,label varchar(255),responseMessage text,threadName varchar(255),success varchar(10),grpThreads int,allThreads int ,Latency int);

*/

include "conexao.php";


$sql='INSERT INTO cinemark VALUES 
(1564659550167,571,"tg Cadastro - 2 /Movie/Index ","OK","tg Cadastro 1-1","true",1,1,88),
(1564659550757,1875,"tg Cadastro - Acessa_Filme-/Movie/Details/6132/688/São Paulo/SP/2018/11/21","OK","tg Cadastro 1-1","true",1,1,1720),
(1564659552643,160,"tg Cadastro - Acessa_Filme-/images/prime.png ","OK","tg Cadastro 1-1","true",1,1,160),
(1564659552804,826,"tg Cadastro - Acessa_Filme-/images/expand.svg","OK","tg Cadastro 1-1","true",1,1,826),
(1564659553632,159,"tg Cadastro - Acessa_Filme-/images/d-box.png","OK","tg Cadastro 1-1","true",1,1,159),
(1564659553794,313,"tg Cadastro - Acessa_Filme-/css/views/movie-details.css","OK","tg Cadastro 1-1","true",1,1,313)
(1564659554109,159,"tg Cadastro - Acessa_Filme-/js/views/movie/details.js","OK","tg Cadastro 1-1","true",1,1,159),
(1564659554271,160,"tg Cadastro - Acessa_Filme-/images/xd.png","OK","tg Cadastro 1-1","true",1,1,160),
(1564659554432,159,"tg Cadastro - Acessa_Filme-/css/Components/stepper.css","OK","tg Cadastro 1-1","true",1,1,158),
(1564659554592,165,"tg Cadastro - Acessa_Filme-/images/play-button.svg","OK","tg Cadastro 1-1","true",1,1,165),
(1564659554758,810,"tg Cadastro - 152 /Movie/Details","OK","tg Cadastro 1-1","true",1,1,658),
(1564659555575,0,"tg Cadastro - 153 /Movie","Non HTTP response message: Illegal character in query at index 131: https://homolog-cart.cinemark.com.br/Movie?showtime=22142&auditorium=688&hour=13&minute=25&localizationType=Legendado&sessionType=${sessionType}&roomType=${roomType}","tg Cadastro 1-1","false",1,1,0),
(1564659556860,3888,"tg Cadastro - 2 /Movie/Index" ,"OK","tg Cadastro 1-2","true",1,1,78),
(1564659560796,1669,"tg Cadastro - Acessa_Filme-/Movie/Details/6132/688/São Paulo/SP/2018/11/21","OK","tg Cadastro 1-2","true",1,1,1475),
(1564659562477,163,"tg Cadastro - Acessa_Filme-/images/prime.png" ,"OK","tg Cadastro 1-2","true",1,1,162),
(1564659562641,157,"tg Cadastro - Acessa_Filme-/images/expand.svg","OK","tg Cadastro 1-2","true",1,1,157),
(1564659562800,871,"tg Cadastro - Acessa_Filme-/images/d-box.png","OK","tg Cadastro 1-2","true",2,2,871),
(1564659563554,186,"tg Cadastro - 2 /Movie/Index" ,"OK","tg Cadastro 1-3","true",2,2,90),
(1564659563672,333,"tg Cadastro - Acessa_Filme-/css/views/movie-details.css","OK","tg Cadastro 1-2","true",2,2,332),
(1564659564007,169,"tg Cadastro - Acessa_Filme-/js/views/movie/details.js","OK","tg Cadastro 1-2","true",2,2,169),
(1564659564178,166,"tg Cadastro - Acessa_Filme-/images/xd.png","OK","tg Cadastro 1-2","true",2,2,166),
(1564659564346,169,"tg Cadastro - Acessa_Filme-/css/Components/stepper.css","OK","tg Cadastro 1-2","true",2,2,169),
(1564659564518,166,"tg Cadastro - Acessa_Filme-/images/play-button.svg","OK","tg Cadastro 1-2","true",2,2,166),
(1564659563750,1650,"tg Cadastro - Acessa_Filme-/Movie/Details/6132/688/São Paulo/SP/2018/11/21","OK","tg Cadastro 1-3","true",2,2,1494),
(1564659565406,161,"tg Cadastro - Acessa_Filme-/images/prime.png","OK","tg Cadastro 1-3","true",2,2,161),
(1564659565568,162,"tg Cadastro - Acessa_Filme-/images/expand.svg","OK","tg Cadastro 1-3","true",2,2,162),
(1564659565731,162,"tg Cadastro - Acessa_Filme-/images/d-box.png","OK","tg Cadastro 1-3","true",2,2,162),
(1564659564686,1570,"tg Cadastro - 152 /Movie/Details","OK","tg Cadastro 1-2","true",2,2,1408),
(1564659566269,0,"tg Cadastro - 153 /Movie","Non HTTP response message: Illegal character in query at index 131: https://homolog-cart.cinemark.com.br/Movie?showtime=22142&auditorium=688&hour=13&minute=25&localizationType=Legendado&sessionType=${sessionType}&roomType=${roomType}","tg Cadastro 1-2","false",2,2,0),
(1564659565894,998,"tg Cadastro - Acessa_Filme-/css/views/movie-details.css","OK","tg Cadastro 1-3","true",1,1,998),
(1564659566893,162,"tg Cadastro - Acessa_Filme-/js/views/movie/details.js","OK","tg Cadastro 1-3","true",1,1,161),
(1564659567057,161,"tg Cadastro - Acessa_Filme-/images/xd.png","OK","tg Cadastro 1-3","true",1,1,161),
(1564659567222,160,"tg Cadastro - Acessa_Filme-/css/Components/stepper.css","OK","tg Cadastro 1-3","true",1,1,160),
(1564659567384,160,"tg Cadastro - Acessa_Filme-/images/play-button.svg","OK","tg Cadastro 1-3","true",1,1,160),
(1564659567545,673,"tg Cadastro - 152 /Movie/Details","Non HTTP response message: Socket Closed","tg Cadastro 1-3","false",1,1,662)';

$query = mysql_query($sql) or die("Erro ao executar a query");

echo $query;

?>