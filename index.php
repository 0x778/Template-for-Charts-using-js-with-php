<?php 

$Connect = mysqli_connect('localhost','root','','databasenae')
?>



<script>
    var MyData = [
        <?php 
            $select = mysqli_query($Connect,"Select");
            while ($row = mysqli_fetch_assoc($select)) {
                    echo $row["balance"].','.$row["fdf"];
            }
            
            
            
            ?>


    ]
</script>

<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="./index.js"></script>
<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: MyData,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>