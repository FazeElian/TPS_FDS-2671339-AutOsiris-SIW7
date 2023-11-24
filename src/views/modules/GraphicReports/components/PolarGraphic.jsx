import React, { useEffect, useRef } from 'react';
import Chart from 'chart.js/auto';

const PolarGraphic = () => {
  const polarChart = useRef(null);

  useEffect(() => {
    const ctx = polarChart.current.getContext('2d');
    const labels = ['Categoría 1', 'Categoría 2', 'Categoría 3', 'Categoría 4', 'Categoría 5'];
    const myChart = new Chart(ctx, {
      type: 'polarArea',
      data: {
        labels: labels,
        datasets: [{
          data: [20, 12, 18, 12, 16, 15, 14],  
          backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(75, 192, 192)',
            'rgb(255, 205, 86)',
            'rgb(201, 203, 207)',
            'rgb(54, 162, 235)'
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
    <canvas ref={polarChart} className="chart-35"></canvas>  
  );
};

export default PolarGraphic;
