import React, { useEffect, useRef } from 'react';
import Chart from 'chart.js/auto';

const LinearGraphic = () => {
  const linearChart = useRef(null);

  useEffect(() => {
    const ctx = linearChart.current.getContext('2d');
    const labels = ['Semana 1', 'Semana 2', 'Semana 3', 'Semana 4'];
    const myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: labels,
        datasets: [{
            data: [20, 12, 18, 12],  
            label: "Número de Ventas",
            backgroundColor: [
              'rgb(75, 192, 192)',
            ],
            borderColor: [
              'rgb(75, 192, 192)',
            ],
            borderWidth: 2,
            tension: 0.2,
            fill: false,
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
    <canvas ref={linearChart} className="chart-62"></canvas>  
  );
};

export default LinearGraphic;
