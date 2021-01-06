@extends('layouts2.master')

@section('content2')

<section class="content2">

  <div class="row text-center mb-2">
    <div class="col-sm-12 col-md-4">
      <img src="/assets/img/note.png" width="150px" height="150px">
      <h3 class=" font-weight-bold mt-4"> SELAMAT DATANG </h3>
      <h3 class=" font-weight-bold"> DiagPerosif </h3>

    </div>
    <div class="col-sm-12 col-md-4">
      <img src="/assets/img/note2.png" width="150px" height="150px">
      <h3 class=" font-weight-bold mt-4"> INFORMASI </h3>
      <h5 class=" font-weight-bold mt-2"> SISTEM </h5>

    </div>
    <div class="col-sm-12 col-md-4">
      <img src="/assets/img/dokter2.png" width="150px" height="150px">
      <h3 class=" font-weight-bold mt-4"> DIAGNOSIS </h3>
    </div>
  </div>

  <div class="row" style="font-size: 0.96rem;">
    <div class="col-sm-12 col-md-4">
      <p class="text-justify"> <b>DiagPerosif</b> merupakan sistem pakar untuk diagnosis penyakit paru pada
        perokok pasif. <b>DiagPerosif</b> melakukan diagnosis dini suatu penyakit yang mungkin diderita berdasarkan
        gejala-gejala
        yang dialami, serta memberikan informasi terkait penyakit tersebut.</p>
      <!-- <br> -->
      <p class="text-justify"> Penyakit yang terdapat dalam sistem ini adalah : <br>
        Asma, Bronkitis, Kanker Paru-paru dan Penyakit Paru Obstruktif Kronis (PPOK). </p>
        <!-- <button type="button" class="btn btn-primary btn-sm read text-center"> Readmore</button> -->

    </div>
    <div class="col-sm-12 col-md-4" id="readmore2">
      <p class="text-justify">Sistem ini hanya <b>memprediksi (tidak memvonis)</b> dengan perhitungan matematis
        berdasarkan gejala yang diderita. </p>
      <h5 class=" font-weight-bold mt-2 text-center"> METODE </h5>
      <p class="text-justify">Metode yang digunakan untuk diagnosis penyakit dalam sistem ini
        adalah Metode <b>Certainty Factor</b>. </p>

    </div>
    <div class="col-sm-12 col-md-4 text-center">
      <p>Silahkan Mulai Diagnosis </p>
      <a href="/diagnosa" class="btn btn-primary btn-lg mt-4 text-center"> Diagnosis</a>
     

    </div>
  </div>

</section><!-- #intro -->

<script>

$("#home").addClass("active");

// $(document).ready(function () {
// $(".read").click(function(){
//   $(this).prev().toggle();
// });
// });

// $(document).ready(function () {
// $('#readmore2').expander({
//             slicePoint: 30,
//             expandText: ' >',
//             userCollapseText: ' <<'
//         });
// });
</script>


@endsection