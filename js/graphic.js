
// Load the Visualization API and the piechart package.
google.charts.load('current', {'packages':['corechart']});
google.charts.load('current', {'packages':['table']});
      
// Set a callback to run when the Google Visualization API is loaded.
google.charts.setOnLoadCallback(drawChartHM);
google.charts.setOnLoadCallback(drawTableName);


  
function drawChartHM() {
  var jsonData = $.ajax({
      url: "php/getData.php",
      dataType: "json",
      async: false
      }).responseText;
      
  // Create our data table out of JSON data loaded from server.
  var data = new google.visualization.DataTable(jsonData);

  var options = {
    title: 'Ouro total na Olimpiada 2012',
    
  };

  // Instantiate and draw our chart, passing in some options.
  var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}

google.charts.setOnLoadCallback(drawChart);
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Country', 'Total Gold'],
    ['USA',     17.7],
    ['CHN',      13.6],
    ['GBR',  10.9],
    ['RUS', 8],
    ['KOR',   5],
    ['GER',    4.5],
    ['Others',    41.8]
  ]);

  var options = {
    title: 'Ouro total de Pais no ano 2012',
    pieHole: 0.4,
  };

  var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
  chart.draw(data, options);
}


      

      function drawTableName() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nome_Atleta');
        data.addColumn('number', 'ANO_CONQUISTA');
        data.addColumn('string', 'MEDALHA');
        data.addColumn('string', 'MODALIDADE');
        data.addRows([
          ['CAIXETA, Tandara',  {v: 2012, f: '2012'}, 'Gold', 'Volleyball'],
          ['CARVALHO, Jaqueline',   {v:2012,   f: '2012'},  'Gold', 'Volleyball'],
          ['CLAUDINO, Fabiana',   {v: 2012,  f: '2012'},  'Gold', 'Volleyball'],
          ['MENEZES, Sarah',   {v: 2012,  f: '2012'},  'Gold', '- 48 KG'],
          ['NABARRETE, Arthur',   {v: 2012,  f: '2012'},  'Gold', 'Rings']
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '20%'});
      }
