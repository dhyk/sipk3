<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />    <meta name="author" content="INSPIRO" />    
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/images/favicon22.png">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>SIDIGO</title>
    <!-- Stylesheets & Fonts -->
    <link href="<?php echo base_url()?>assets/css/plugins.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/plugins.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="<?php echo base_url()?>assets/js_new/sweetalert/dist/sweetalert2.all.min.js"></script>
    <link href='<?php echo base_url()?>assets/plugins/datatables/datatables.min.css' rel='stylesheet' />

    
</head>

<script>

    $(document).ready( function () {

        const flashData = $('.flash-data').data('flashdata');

        if(flashData){

            Swal.fire(

                'Berhasil',

                flashData,

                'success'

                );

        }

    });

    $(document).ready( function () {

        $('.tombol-keluar').on('click', function (e) {

            //mengcancel a hrefnya dulu

            e.preventDefault();

            const href = $(this).attr('href');

            Swal.fire({

                icon: 'error',

                title: 'Apakah anda yakin ?',

                text: "",

                type: 'warning',

                showCancelButton: true,

                confirmButtonColor: '#3085d6',

                cancelButtonColor: '#d33',

                confirmButtonText: 'Keluar'

            }).then((result) => {

                if (result.value) {

                    document.location.href = href;

                }

            })

        });

    });

</script>