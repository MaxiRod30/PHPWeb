SELECT p.idPERS,p.nomPERS,p.dirPERS,p.telPERS,d.nomDTO
FROM personas AS p
JOIN departamentos AS d
ON p.dtoPERS=d.idDTO
ORDER BY idPERS asc