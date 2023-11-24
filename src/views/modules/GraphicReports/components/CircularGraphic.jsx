// Importación librería Chart.js
import React, { useEffect, useRef } from 'react';
import Chart from 'chart.js/auto';

const CircularGraphic = () => {
    const circularChart = useRef(null);

    useEffect(() => {
        // Configurar el gráfico
        const ctx = circularChart.current.getContext('2d');
        const labels = ['Producto 1', 'Producto 2', 'Producto 3', 'Producto 4', 'Producto 5', 'Producto 6'];
        const myChart = new Chart(ctx, {
        type: 'doughnut', // Puedes cambiar el tipo de gráfico según tus necesidades
        data: {
          labels: labels,
          datasets: [{
            data: [10, 12, 30, 20, 22, 18],
            backgroundColor: [
              'rgb(99, 255, 159)',
              'rgb(213, 255, 99)',
              'rgb(255, 99, 132)',
              'rgb(54, 162, 235)',
              'rgb(255, 205, 86)',
              'rgb(255, 86, 199)',
            ],

            hoverOffset: 4
          }]
        }

        // options: {
        //   scales: {
        //     y: {
        //       beginAtZero: true,
        //     },
        //   },
        // },
      });
  
      // Limpiar el gráfico al desmontar el componente
      return () => {
        myChart.destroy();
      };
    }, []);
  
    return (
        <canvas ref={circularChart} className="chart-35"></canvas>
    );
};
  
export default CircularGraphic;
  