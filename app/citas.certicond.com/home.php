 <style>
     button#create_appointment {
    border-radius: 1000px;
    width: 30%;
    font-weight: bold;
    font-size: large;
    }
    a.btn.btn-sm.btn-success {
    border-radius: 1000px;
    width: 25%;
    padding: 0.5rem;
    font-size: 15px;
    font-weight: bold;
    }
    @media (max-width: 991px) {
        button#create_appointment {
            border-radius: 1000px;
            width: 80%;
            font-weight: bold;
            font-size: large;
        }
        a.btn.btn-sm.btn-success {
            border-radius: 1000px;
            width: 65%;
            padding: 0.5rem;
            font-size: 15px;
            font-weight: bold;
        }
    }
 </style>
 <!-- Header-->
 <header class="bg-dark py-5" id="main-header">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder"><?php echo $_settings->info('name') ?></h1>
            <p class="lead fw-normal text-white-50 mb-0 mt-5">
                <button class="btn btn-sm btn-primary" type="button" id="create_appointment">AGENDAR CITA AHORA</button>
            </p>
        </div>
        <div class="text-center text-white">
            <p class="lead fw-normal text-white-50 mb-0 mt-5">
                <a href="https://certicond.com/" class="btn btn-sm btn-success">← REGRESAR AL HOME</a>
            </p>
        </div>
    </div>
</header>
<!-- Section-->
<?php 
$sched_arr = array();
$max = 0;
?>
<section class="py-5 d-none">
    <div class="container px-4 px-lg-5 mt-5">
        
    <?php include('about.html') ?>
        
    </div>
</section>
<script>
    $(function(){
        $('#create_appointment').click(function(){
			uni_modal("Formulario de Citas","admin/appointments/manage_appointment.php",'mid-large')
		})
    })
</script>