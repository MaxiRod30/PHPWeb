# Mostrar todos los datos de TODAS las personas
SELECT * FROM personas;
# Mostrar nombre y dpto de todas las personas
SELECT nomPERS,dtoPERS FROM personas;
# Mostrar todas las personas de Montevideo
# considerando que la Base es CASE INSENSITIVE
SELECT * FROM personas WHERE dtoPERS='montevideo'
# Mostrar todas las personas de Montevideo
# considerando que la Base es CASE SENSITIVE
SELECT * FROM personas WHERE lower(dtoPERS)='montevideo';
SELECT * FROM personas WHERE upper(dtoPERS)='CANELONES';
# Mostrar todas las personas de montevideo y maldonado
SELECT * FROM personas WHERE dtoPERS='montevideo' or dtoPERS='maldonado';
# Mostrar todas las personas que su nombre inicie con P
SELECT * FROM personas WHERE nomPERS LIKE 'P%'
# Mostrar todas las personas cuyo teléfono termine en 85
SELECT * FROM personas WHERE telPERS LIKE '%85'
# Mostra todas las personas que vivan en el número de puerta con el 67
SELECT * FROM personas WHERE dirPERS LIKE '%67%'
# Mostrar todas las personas ordenadas por nombre
SELECT * FROM personas ORDER BY nomPERS


