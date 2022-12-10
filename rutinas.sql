DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `prc_ObtenerDatosDashboard`()
BEGIN
declare totalProductos int;
declare totalCompras float;
declare totalVentas float;
declare ganancias float;
declare productosPocoStock int;
declare ventasHoy float;

SET totalProductos = (SELECT count(*) FROM productos p);
SET totalCompras = (select sum(p.precio_compra_producto*p.stock_producto) from productos p);
set totalVentas = (select sum(vc.total_venta) from venta_cabecera vc where EXTRACT(MONTH FROM vc.fecha_venta) = EXTRACT(MONTH FROM curdate()) and EXTRACT(YEAR FROM vc.fecha_venta) = EXTRACT(YEAR FROM curdate()));
set ganancias = (select sum(vd.total_venta - (p.precio_compra_producto * vd.cantidad)) from venta_detalle vd inner join productos p on vd.codigo_producto = p.codigo_producto
                 where EXTRACT(MONTH FROM vd.fecha_venta) = EXTRACT(MONTH FROM curdate()) and EXTRACT(YEAR FROM vd.fecha_venta) = EXTRACT(YEAR FROM curdate()));
set productosPocoStock = (select count(1) from productos p where p.stock_producto <= p.minimo_stock_producto);
set ventasHoy = (select sum(vc.total_venta) from venta_cabecera vc where vc.fecha_venta = curdate());

SELECT IFNULL(totalProductos,0) AS totalProductos,
	   IFNULL(ROUND(totalCompras,2),0) AS totalCompras,
       IFNULL(ROUND(totalVentas,2),0) AS totalVentas,
       IFNULL(ROUND(ganancias,2),0) AS ganancias,
       IFNULL(productosPocoStock,0) AS productosPocoStock,
       IFNULL(ROUND(ventasHoy,2),0) AS ventasHoy;

END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `prc_ObtenerVentasMesActual`()
BEGIN

SELECT vc.fecha_venta, sum(round(vc.total_venta, 2)) as total_venta FROM venta_cabecera vc WHERE date(vc.fecha_venta) >= date(last_day(now() - INTERVAL 1 month) + INTERVAL 1 day) and date (vc.fecha_venta) <= last_day(date(CURRENT_DATE)) group by vc.fecha_venta;

END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `prc_ListarProductosMasVendidos`()
BEGIN

SELECT p.codigo_producto,

		p.descripcion_producto,
       sum(vd.cantidad) as cantidad,
       sum(round(vd.total_venta,2)) as total_venta
from venta_detalle vd inner join productos p on vd.codigo_producto = p.codigo_producto
GROUP by p.codigo_producto,
		p.descripcion_producto
            
order by sum(Round(vd.total_venta,2)) DESC
LIMIT 10;

END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `prc_ListarProductosPocoStock`()
BEGIN

SELECT p.codigo_producto, p.descripcion_producto, p.stock_producto, p.minimo_stock_producto from productos p WHERE p.stock_producto <= p.minimo_stock_producto ORDER BY p.stock_producto asc;

END$$
DELIMITER ;
