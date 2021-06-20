INSERT INTO proizvodi(`barkod`,`naziv`,`cena`) VALUES
(789, "paradajz", 200),
(776, "crni luk", 50),
(761, "beli luk", 80)

INSERT INTO prodaja(`barkod`,`kolicina`,`cena`,`datum`) VALUES
(789,50,200,'2021-06-16')

INSERT INTO prodaja(`barkod`,`kolicina`,`cena`,`datum`) VALUES
(789,20,200,'2021-06-17')

INSERT INTO prodaja(`barkod`,`kolicina`,`cena`,`datum`) VALUES
(789,40,250,'2021-06-17')

INSERT INTO prodaja(`barkod`,`kolicina`,`cena`,`datum`) VALUES
(789,10,220,'2021-06-17')

INSERT INTO prodaja(`barkod`,`kolicina`,`cena`,`datum`) VALUES
(761,15,33,'2021-05-01'),
(761,7,30,'2021-06-17'),
(761,25,50,'2021-05-01')

DELETE FROM prodaja WHERE barkod=789 AND datum='2021-06-16'

UPDATE prodaja SET cena=cena*(1-10/100) WHERE datum='2021-06-17'


--  prikazuje barkodove svih proizvoda koji su imali prodaju 1.5.       Ne razumem bas sta je trebalo uraditi, ako se prodaja racuna kao broj ponavljanja barkoda
-- - prikazuje samo razlicite barkodove koji su imali prodaju 1.5
SELECT barkod,COUNT(*) as zbir FROM prodaja GROUP BY barkod HAVING zbir>=1.5

SELECT datum, SUM(kolicina) as kolicina FROM prodaja GROUP BY datum

SELECT barkod, SUM(kolicina) as kolicina FROM prodaja GROUP BY barkod

-- Ne znam poslednji upit

