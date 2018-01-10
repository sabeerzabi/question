<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$title ?></title>
    <link href="<?= base_url().'application/views/'?>modules/core/common/img/favicon.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">

    <!-- VENDORS -->
    <!-- v2.0.0 -->
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/jscrollpane/style/jquery.jscrollpane.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/ladda/dist/ladda-themeless.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/bootstrap-sweetalert/dist/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/summernote/dist/summernote.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/ionrangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/datatables/media/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/c3/c3.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/chartist/dist/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/nprogress/nprogress.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/jquery-steps/demo/css/jquery.steps.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/dropify/dist/css/dropify.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/font-linearicons/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/font-icomoon/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/cleanhtmlaudioplayer/src/player.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>vendors/cleanhtmlvideoplayer/src/player.css">
    <script src="<?= base_url().'application/views/'?>vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/tether/dist/js/tether.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/jquery-mousewheel/jquery.mousewheel.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/jscrollpane/script/jquery.jscrollpane.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/spin.js/spin.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/ladda/dist/ladda.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/html5-form-validation/dist/jquery.validation.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/jquery-typeahead/dist/jquery.typeahead.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/autosize/dist/autosize.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/bootstrap-show-password/bootstrap-show-password.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/moment/min/moment.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/bootstrap-sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/summernote/dist/summernote.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/ionrangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/nestable/jquery.nestable.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/datatables/media/js/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/datatables-fixedcolumns/js/dataTables.fixedColumns.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/datatables-responsive/js/dataTables.responsive.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/editable-table/mindmup-editabletable.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/d3/d3.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/c3/c3.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/chartist/dist/chartist.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/peity/jquery.peity.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/jquery-countTo/jquery.countTo.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/nprogress/nprogress.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/dropify/dist/js/dropify.min.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/cleanhtmlaudioplayer/src/jquery.cleanaudioplayer.js"></script>
    <script src="<?= base_url().'application/views/'?>vendors/cleanhtmlvideoplayer/src/jquery.cleanvideoplayer.js"></script>

    <!-- CLEAN UI ADMIN TEMPLATE MODULES-->
    <!-- v2.0.0 -->
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>modules/core/common/core.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>modules/vendors/common/vendors.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>modules/layouts/common/layouts-pack.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>modules/themes/common/themes.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>modules/menu-left/common/menu-left.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>modules/menu-right/common/menu-right.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>modules/top-bar/common/top-bar.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>modules/footer/common/footer.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>modules/pages/common/pages.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>modules/ecommerce/common/ecommerce.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'application/views/'?>modules/apps/common/apps.cleanui.css">
    <script src="<?= base_url().'application/views/'?>modules/menu-left/common/menu-left.cleanui.js"></script>
    <script src="<?= base_url().'application/views/'?>modules/menu-right/common/menu-right.cleanui.js"></script>
</head>
<body class="cat__config--vertical cat__menu-left--colorful cat__menu-left--visible">
<?php include_once 'menu-right.php'?>
<?php include_once 'menu-left.php'?>
<?php include_once 'top-bar.php'?>
