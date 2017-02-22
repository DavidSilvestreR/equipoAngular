<!DOCtype html>
<html lang="en">
<head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
      <link rel="stylesheet" href="css/dc.css">
      <style>
          svg{
            max-width: 100%;
          }
      </style>


</head>
<body>
<div class="contenedor">
<div class="row">
<div class="table1 col m5">
    <div class="bartilte col m12">
     <div class="col m6">Area</div>
     <div class="col m6">reset</div>     
     </div>
     <div id="piedesc-id"><h4>Assassination Type</h4></div>     
</div>

<div class="table1 col m3 ">
    <div class="bartilte col m12">
     <div class="col m6">Area</div>
     <div class="col m6">reset</div>     
     </div>
    <div id="type-id"><h4>Assassination Type</h4></div>

</div>
<div class="table1 col m3 ">
    <div class="bartilte col m12">
     <div class="col m6">Area</div>
     <div class="col m6">reset</div>     
     </div>
    <div id="parties-id"><h4>Parties Targeted</h4></div>

</div>
    
</div>
<div class="row">
    <div id="parties-id"><h4>Parties Targeted</h4></div>
</div>
<div class="row">
</div>

<div class="row">
    <div id='table-id'><h4>hosps</h4>
        <table  class='table table-hover' >
            <thead>
            <tr class='header'>
                <th>hosp</th>
                <th>status</th>
                <th>Type</th>
            </tr>
            </thead>
        </table>
    </div>
</div>
</div>    
    

    <script src="https://dc-js.github.io/dc.js/js/d3.js"></script>
    <script src="https://dc-js.github.io/dc.js/js/crossfilter.js"></script>
    <script src="https://dc-js.github.io/dc.js/js/dc.js"></script>
    <script src="js/data.js"></script>
    <script atype="text/javascript" src="js/table.js"></script>

</body>
