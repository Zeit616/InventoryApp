<?php

require_once "../controladores/dashboard.controlador.php";
require_once "../modelos/dashboard.modelo.php";

class AjaxDashboard
{

    public function getDatosDashboard()
    {

        $datos = DashboardControlador::ctrGetDatosDashboard();
        echo json_encode($datos);
    }

    public function getVentasMesActual()
    {
        $ventasMesActual = DashboardControlador::ctrGetVentasMesActual();
        echo json_encode($ventasMesActual);
    }

    public function getProductosMasVendidos()
    {
        $productosMasVendidos = DashboardControlador::ctrProductosMasVendidos();
        echo json_encode($productosMasVendidos);
    }

    public function getProductosPocoStock()
    {
        $productosPocoStock = DashboardControlador::ctrProductosPocoStock();
        echo json_encode($productosPocoStock);
    }
}

if (isset($_POST["accion"]) && $_POST["accion"] == 1) {
    $ventasMesActual = new AjaxDashboard();
    $ventasMesActual->getVentasMesActual();
} elseif (isset($_POST["accion"]) && $_POST["accion"] == 2) {
    $productosMasVendidos = new AjaxDashboard();
    $productosMasVendidos->getProductosMasVendidos();
} elseif (isset($_POST["accion"]) && $_POST["accion"] == 3) {
    $productosPocoStock = new AjaxDashboard();
    $productosPocoStock->getProductosPocoStock();
} else {
    $datos = new AjaxDashboard();
    $datos->getDatosDashboard();
}
