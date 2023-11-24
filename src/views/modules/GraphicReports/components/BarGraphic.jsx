import React, { useEffect, useRef } from 'react';
import Chart from 'chart.js/auto';

const BarGraphic = () => {
  const barChart = useRef(null);

  useEffect(() => {
    const ctx = barChart.current.getContext('2d');
    const labels = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
    const myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          data: [20, 12, 18, 12, 16, 15, 14],  
          label: "Número de ventas",
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(14, 39, 90, 0.2)'
          ],
          borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(65, 93, 151)'
          ],
          borderWidth: 1
        }]
      },

      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      },
    });

    return () => {
      myChart.destroy();
    };
  }, []);

  return (
    <canvas ref={barChart} className="chart-62"></canvas>  
  );
};

export default BarGraphic;
