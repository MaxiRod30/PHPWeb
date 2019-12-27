SELECT p.productoID, p.productoNOM, p.productoDESCRIP, p.productoPRECIO, m.marcasNOM, c.categoriasNOM,pai.paisesNOM, p.productoACT
FROM producto AS p
INNER JOIN marcas AS m
INNER JOIN paises AS pai
INNER JOIN categorias AS c
ON (p.productoMARCA = m.marcasID) AND (p.productoCATEG = c.categoriasID) AND (p.productoPAIS = pai.paisesID)
 
  